<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Nategood\Httpful;

/**
 * Cerner FHIR API HTTP Service Class
 * @author Jeffrey J Walters <jjjwdesign@gmail.com>
 * 
 */
class CernerFhir
{
    /**
     * ParameterBagInterface object
     * @var object 
     */
    private $params;
    private $domain = null;
    private $tenantId;
    private $authRequired;
    private $key;
    private $secret;
    private $serviceRootURL;
    private $authorizationURL;
    private $scope = null;

    /**
     * Configuration array. See services.yaml
     * @var array
     */
    private $options;

    private $token;
    private $token_type;
    private $token_expires_in = 600; // Expires in 10 minutes
    private $token_cache_key;
    private $refresh_token;
    private $cache_prefix = 'cerner_fhir';

    /**
     * LoggerInterface object
     * @var object 
     */
    private $logger;

    public $result = null;
    public $log_requests = false;
    public $log_requests_to_db = false;
    public $response = null;
    public $error = null;
    public $error_description = null;

    /**
     * Constructor
     * 
     * @param LoggerInterface $logger
     * @param ParameterBagInterface $params
     */
    public function __construct(LoggerInterface $logger, ParameterBagInterface $params)
    {
        $this->logger = $logger;
        $this->params = $params;
        $this->options = $this->params->get('app.cerner_fhir');
        
        foreach (['domain', 'tenantId', 'authRequired', 'key', 'secret', 'serviceRootURL', 'authorizationURL', 'scope', 'token'] as $key) {
            $this->{$key} = (isset($this->options[$key])) ? $this->options[$key] : null;
        }
        // Setup cache object for token caching
        $this->cache = new FilesystemCache();
        // Define API Token Key
        $this->token_cache_key = preg_replace('/[^a-z0-9\-_]+/i', '', 
            $this->cache_prefix . '_' . $this->domain . '_' . $this->key . $this->tenantId . '_token'
        );

        $this->init();
    }

    private function init()
    {
        $token = (!empty($this->token)) ? $this->token : $this->cache->get($this->token_cache_key);

        if (!empty($token)) {
            $this->token = $token;
        } else {
            // Authenticate, get new token and save it to cache
            if ($this->authRequired) {
                $this->authenticate();
                $this->cache->set(
                    $this->token_cache_key,
                    $this->token,
                    (int)floor($this->token_expires_in * 0.9)
                );
            }
        }
    }

    private function authenticate($attempt = 1)
    {
        $this->response = null;
        $this->token = null;
        $this->token_type = null;
        $this->token_expires_in = null;
        $this->refresh_token = null;

        $this->result = \Httpful\Request::post($this->authorizationURL)
            ->addHeaders(array('Content-type' => 'application/x-www-form-urlencoded'))
            ->body(http_build_query(array(
                'grant_type' => 'client_credentials',
                'scope' => $this->scope
            )))
            ->authenticateWith($this->key, $this->secret)
            ->send();
        //dump($this->result);
        $this->logResponseError($this->result);

        $this->response = $this->result->body;

        if (isset($this->result->body->access_token)) {
            $this->token = $this->result->body->access_token; // ex: abcdefghijklmnopqrstuvwxyz0123456789
            $this->token_type = $this->result->body->token_type; // 'bearer'
            $this->token_expires_in = $this->result->body->expires_in; // See token cache above
            $this->refresh_token = $this->result->body->access_token; // Not used; 3-legged OAuth
        } elseif (!isset($this->result->body->access_token) && $attempt <= 3) {
            sleep(3);
            $token = $this->cache->get($this->token_cache_key);
            if (!empty($token)) {
                $this->token = $token;
            } else {
                $attempt++;
                $this->authenticate($attempt);
            }
        }
        if (empty($this->token)) {
            $this->logger->error(__METHOD__ . ' - ' . __LINE__ .
                ': Token not set: ' . print_r($this->result->body, true));
            die('Error: Cerner API Athentication Failure. Token not set. Response: ' .
                print_r($this->result->body, true));
        }
    }

    /**
     * Perform an HTTP GET request and return response object.
     *
     * @param string $url the path (URI) of the resource
     * @param array $parameters the request parameters
     * @param array $headers the request headers
     */
    public function get($url, $parameters = [], $headers = [])
    {
        # Join up a URL and add the parameters
        $new_url = $this->urlJoin($this->serviceRootURL, $url);
        if (!empty($parameters)) {
            if ($url == 'Binary/' && count($parameters) == 1) {
                $new_url .= '/'.urlencode($parameters['_id']);
            } else {
                $query_string = http_build_query($parameters);
                $new_url .= '?' . $query_string;
            }
        }
        
        try {
            $this->result = \Httpful\Request::get($new_url)
                ->expectsJson()
                ->addHeaders($headers)
                ->addHeaders(['Authorization' => 'Bearer ' . $this->token])
                ->sendsJson()
                ->send();
        } catch (\Exception $e) {
            // Try to catch non-JSON formed server issues and errors
            $this->result = \Httpful\Request::get($new_url)
                ->expectsJson()
                ->addHeaders($headers)
                ->addHeaders(['Authorization' => 'Bearer ' . $this->token])
                ->autoParse(false)
                ->send();
            $msg = $e->getMessage();
            $this->logger->error(__METHOD__ . ' - ' . __LINE__ . ': Httpful request error: ' .
                print_r($msg, true));
        }
        $this->logRequest('get', $url, $parameters, $headers);
        $this->logResponseError($this->result);
        $this->response = $this->result->body;

        return $this->result->body;
    }

    /**
     * Perform an HTTP POST request and return response object.
     *
     * @param string $url the path (URI) of the resource
     * @param array $parameters the request parameters
     * @param array $headers the request headers
     */
    public function post($url, $parameters = [], $headers = [])
    {
        # Join up a URL
        $new_url = $this->urlJoin($this->serviceRootURL, $url);

        $this->result = \Httpful\Request::post($new_url)
            ->addHeaders($headers)
            ->addHeaders(['Authorization' => 'Bearer ' . $this->token])
            ->sendsType(\Httpful\Mime::FORM)
            ->body(http_build_query($parameters))
            ->send();
        $this->logRequest('post', $url, $parameters, $headers);
        $this->logResponseError($this->result);
        $this->response = $this->result->body;

        return $this->result->body;
    }

    /**
     * Perform an HTTP PUT request and return response object.
     *
     * @param string $url the path (URI) of the resource
     * @param array $parameters the request parameters
     * @param array $headers the request headers
     */
    public function put($url, $parameters = [], $headers = [])
    {
        # Join up a URL
        $new_url = $this->urlJoin($this->serviceRootURL, $url);

        $this->result = \Httpful\Request::put($new_url)
            ->addHeaders($headers)
            ->addHeaders(array('Authorization' => 'Bearer ' . $this->token))
            ->sendsType(\Httpful\Mime::FORM)
            ->body(http_build_query($parameters))
            ->send();
        $this->logRequest('put', $url, $parameters, $headers);
        $this->logResponseError($this->result);
        $this->response = $this->result->body;

        return $this->result->body;
    }

    /**
     * Perform an HTTP PATCH request and return response object.
     *
     * @param string $url the path (URI) of the resource
     * @param array $parameters the request parameters
     * @param array $headers the request headers
     */
    public function patch($url, $parameters = [], $headers = [])
    {
        # Join up a URL
        $new_url = $this->urlJoin($this->serviceRootURL, $url);

        $this->result = \Httpful\Request::patch($new_url)
            ->addHeaders($headers)
            ->addHeaders(array('Authorization' => 'Bearer ' . $this->token))
            ->sendsType(\Httpful\Mime::FORM)
            ->body(http_build_query($parameters))
            ->send();
        $this->logRequest('patch', $url, $parameters, $headers);
        $this->logResponseError($this->result);
        $this->response = $this->result->body;

        return $this->result->body;
    }

    /**
     * Perform an HTTP DELETE request and return response object.
     *
     * @param string $url the path (URI) of the resource
     * @param array $parameters the request parameters
     * @param array $headers the request headers
     */
    public function delete($url, $parameters = [], $headers = [])
    {
        # Join up a URL and add the parameters
        $new_url = $this->urlJoin($this->serviceRootURL, $url);
        if (!empty($parameters)) {
            $new_url .= '?' . http_build_query($parameters);
        }

        $this->result = \Httpful\Request::delete($new_url)
            ->expectsJson()
            ->addHeaders($headers)
            ->addHeaders(['Authorization' => 'Bearer ' . $this->token])
            ->send();
        $this->logRequest('delete', $url, $parameters, $headers);
        $this->logResponseError($this->result);
        $this->response = $this->result->body;

        return $this->result->body;
    }

    /**
     * Log Request
     *
     * @param string $url the path (URI) of the resource
     * @param array $parameters the request parameters
     * @param array $headers the request headers
     */
    private function logRequest($type, $url, $parameters = [], $headers = [])
    {
        if ($this->log_requests) {
            $this->logger->error(__METHOD__ . ' - ' . __LINE__ . ': ' . $type . ': ' . $url);
            if (!empty($parameters)) {
                $this->logger->error(__METHOD__ . ' - ' . __LINE__ .
                    ': $parameters: ' . print_r($parameters, true));
            }
            if (!empty($headers)) {
                $this->logger->error(__METHOD__ . ' - ' . __LINE__ .
                    ': $headers: ' . print_r($headers, true));
            }
        }
        
        if ($this->log_requests_to_db) {
            // TODO: Create Model for Logging via DB PDO
        }
    }

    /**
     * Return the error and error description
     * 
     * @return object
     */
    public function getError()
    {
        return (object)[
            'error' => $this->error,
            'error_description' => $this->error_description
        ];
    }
    
    /**
     * Determine if there is a response error and log message details
     * 
     */
    private function logResponseError()
    {
        $this->error = null;
        $this->error_description = null;
        //dump($this->result->code);
        
        if (isset($this->result->code) && in_array($this->result->code, [400, 401, 403, 404, 406, 409, 422, 500])) {
            
            if ($this->result->code == 400) {
                
                $this->error = 'Bad Request';
                $this->error_description = 'No supported search parameters provided';
                
            } else if ($this->result->code == 401) {
                
                $this->error = 'Unauthorized';
                $this->error_description = 'No supported search parameters provided';
                if ($this->result->headers['www-authenticate']) {
                    // Example: "www-authenticate" => "Bearer realm="fhir-ehr.sandboxcerner.com", 
                    // error="insufficient_access", error_description="Unauthorized or insufficient access to resource""
                    $auth_parts = explode(',', $this->result->headers['www-authenticate']);
                    foreach ($auth_parts as $auth_part) {
                        $auth_part = trim($auth_part);
                        if (preg_match('/error="([^"]+)"/', $auth_part, $details)) {
                            $this->error = $details[1];
                        } elseif (preg_match('/error_description="([^"]+)"/', $auth_part, $details)) {
                            $this->error_description = $details[1];
                        }
                    }
                }
                
            } else if ($this->result->code == 403) {
                
                $this->error = 'Forbidden';
                $this->error_description = 'Tenant not valid or accessible';
                
            } else if ($this->result->code == 404) {
                
                $this->error = 'Not Found';
                $this->error_description = 'Not Found';
                
            } else if ($this->result->code == 406) {
                
                $this->error = 'Not Acceptable';
                $this->error_description = 'Not Acceptable';
                
            } else if ($this->result->code == 409) {
                
                $this->error = 'Conflict Error';
                $this->error_description = 'Conflict Error';
                
            } else if ($this->result->code == 422) {
                
                $this->error = 'Unprocessable Entity';
                $this->error_description = 'Unprocessable Entity';
                
            } else if ($this->result->code == 500) {
                
                // Missing fields required by the HL7 FHIR® specification or any missing status field 
                // will result in a 500 Internal Server Error and an OperationOutcome.
                $this->error = 'Response is missing a required field';
                $this->error_description = $this->result->body;
                
            }
            
            // Append the body error message if not empty
            if (!empty($this->result->body)) {
                $this->error_description .= ' - '.$this->result->body;
            }
            
            // Log the response result errors
            if (isset($this->error)) {
                $this->logger->error(__METHOD__ . ' - ' . __LINE__ . ': Response error: ' .
                    print_r($this->error, true));
            }
            if (isset($this->error_description)) {
                $this->logger->error(__METHOD__ . ' - ' . __LINE__ . ': Response error description: ' .
                    print_r($this->error_description, true));
            }
            
        }
        //dump($this->result);
    }

    /**
     * This method joins together parts of a URL to make a valid one.
     * Trims existing slashes from arguments and re-joins them with slashes.
     * @param string $arg,... any number of strings to join
     */
    private function urlJoin()
    {
        return join('/', array_map(function ($p) {
                return trim($p, '/');
        }, func_get_args()));
    }

    /**
     * Returns the current API option name.
     */
    public function getOptionName()
    {
        return $this->option_name;
    }

    /**
     * Returns the current API key.
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Returns the current API access_token.
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Returns the current API version.
     */
    public function getVersion()
    {
        return $this->version;
    }
}