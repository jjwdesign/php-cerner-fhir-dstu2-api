<?php namespace App\HL7\FHIR\DSTU2\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 8th, 2019
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use App\HL7\FHIR\DSTU2\FHIRResource\FHIRDomainResource;

/**
 * The subscription resource is used to define a push based subscription from a server to another system. Once a subscription is registered with the server, the server checks every resource that is created or updated, and if the resource matches the given criteria, it sends a message on the defined "channel" so that another system is able to take an appropriate action.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSubscription extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The rules that the server should use to determine when to generate notifications for this subscription.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $criteria = null;

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint[]
     */
    public $contact = [];

    /**
     * A description of why this subscription is defined.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $reason = null;

    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSubscriptionStatus
     */
    public $status = null;

    /**
     * A record of the last error that occurred when the server processed a notification.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $error = null;

    /**
     * Details where to send notifications when resources are received that meet the criteria.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSubscription\FHIRSubscriptionChannel
     */
    public $channel = null;

    /**
     * The time for the server to turn the subscription off.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * A tag to add to any resource that matches the criteria, after the subscription is processed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $tag = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Subscription';

    /**
     * The rules that the server should use to determine when to generate notifications for this subscription.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getCriteria() {
        return $this->criteria;
    }

    /**
     * The rules that the server should use to determine when to generate notifications for this subscription.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $criteria
     * @return $this
     */
    public function setCriteria($criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint[]
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint $contact
     * @return $this
     */
    public function addContact($contact) {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A description of why this subscription is defined.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * A description of why this subscription is defined.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $reason
     * @return $this
     */
    public function setReason($reason) {
        $this->reason = $reason;
        return $this;
    }

    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSubscriptionStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSubscriptionStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A record of the last error that occurred when the server processed a notification.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getError() {
        return $this->error;
    }

    /**
     * A record of the last error that occurred when the server processed a notification.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $error
     * @return $this
     */
    public function setError($error) {
        $this->error = $error;
        return $this;
    }

    /**
     * Details where to send notifications when resources are received that meet the criteria.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSubscription\FHIRSubscriptionChannel
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * Details where to send notifications when resources are received that meet the criteria.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSubscription\FHIRSubscriptionChannel $channel
     * @return $this
     */
    public function setChannel($channel) {
        $this->channel = $channel;
        return $this;
    }

    /**
     * The time for the server to turn the subscription off.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getEnd() {
        return $this->end;
    }

    /**
     * The time for the server to turn the subscription off.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $end
     * @return $this
     */
    public function setEnd($end) {
        $this->end = $end;
        return $this;
    }

    /**
     * A tag to add to any resource that matches the criteria, after the subscription is processed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getTag() {
        return $this->tag;
    }

    /**
     * A tag to add to any resource that matches the criteria, after the subscription is processed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $tag
     * @return $this
     */
    public function addTag($tag) {
        $this->tag[] = $tag;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['criteria'])) {
                $this->setCriteria($data['criteria']);
            }
            if (isset($data['contact'])) {
                if (is_array($data['contact'])) {
                    foreach($data['contact'] as $d) {
                        $this->addcontact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contact" must be array of objects or null, '.gettype($data['contact']).' seen.'); 
                }
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['error'])) {
                $this->setError($data['error']);
            }
            if (isset($data['channel'])) {
                $this->setChannel($data['channel']);
            }
            if (isset($data['end'])) {
                $this->setEnd($data['end']);
            }
            if (isset($data['tag'])) {
                if (is_array($data['tag'])) {
                    foreach($data['tag'] as $d) {
                        $this->addtag($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"tag" must be array of objects or null, '.gettype($data['tag']).' seen.'); 
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->criteria)) $json['criteria'] = $this->criteria;
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                if (null !== $contact) $json['contact'][] = $contact;
            }
        }
        if (isset($this->reason)) $json['reason'] = $this->reason;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->error)) $json['error'] = $this->error;
        if (isset($this->channel)) $json['channel'] = $this->channel;
        if (isset($this->end)) $json['end'] = $this->end;
        if (0 < count($this->tag)) {
            $json['tag'] = [];
            foreach($this->tag as $tag) {
                if (null !== $tag) $json['tag'][] = $tag;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Subscription xmlns="http://hl7.org/fhir"></Subscription>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->criteria)) $this->criteria->xmlSerialize(true, $sxe->addChild('criteria'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (isset($this->reason)) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->error)) $this->error->xmlSerialize(true, $sxe->addChild('error'));
        if (isset($this->channel)) $this->channel->xmlSerialize(true, $sxe->addChild('channel'));
        if (isset($this->end)) $this->end->xmlSerialize(true, $sxe->addChild('end'));
        if (0 < count($this->tag)) {
            foreach($this->tag as $tag) {
                $tag->xmlSerialize(true, $sxe->addChild('tag'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}