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
 * A set of rules or how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole, and to publish a computable definition of all the parts.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImplementationGuide extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URL that is used to identify this implementation guide when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this implementation guide is (or will be) published.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The identifier that is used to identify this version of the Implementation Guide when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the Implementation Guide author manually.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name identifying the Implementation Guide.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of the Implementation Guide.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * This Implementation Guide was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the implementation guide.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideContact[]
     */
    public $contact = [];

    /**
     * The date this version of the implementation guide was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the Implementation Guide and its use.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of implementation guides. The most common use of this element is to represent the country / jurisdiction for which this implementation guide was defined.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $useContext = [];

    /**
     * A copyright statement relating to the implementation guide and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $copyright = null;

    /**
     * The version of the FHIR specification on which this ImplementationGuide is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 1.0.2 for this version.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public $fhirVersion = null;

    /**
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideDependency[]
     */
    public $dependency = [];

    /**
     * A logical group of resources. Logical groups can be used when building pages.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePackage[]
     */
    public $package = [];

    /**
     * A set of profiles that all resources covered by this implementation guide must conform to.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideGlobal[]
     */
    public $global = [];

    /**
     * A binary file that is included in the  implementation guide when it is published.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri[]
     */
    public $binary = [];

    /**
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public $page = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ImplementationGuide';

    /**
     * An absolute URL that is used to identify this implementation guide when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this implementation guide is (or will be) published.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this implementation guide when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this implementation guide is (or will be) published.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the Implementation Guide when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the Implementation Guide author manually.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the Implementation Guide when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the Implementation Guide author manually.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name identifying the Implementation Guide.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the Implementation Guide.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of the Implementation Guide.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the Implementation Guide.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * This Implementation Guide was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getExperimental() {
        return $this->experimental;
    }

    /**
     * This Implementation Guide was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental) {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the implementation guide.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getPublisher() {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the implementation guide.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher) {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideContact[]
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideContact $contact
     * @return $this
     */
    public function addContact($contact) {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date this version of the implementation guide was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date this version of the implementation guide was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * A free text natural language description of the Implementation Guide and its use.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A free text natural language description of the Implementation Guide and its use.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of implementation guides. The most common use of this element is to represent the country / jurisdiction for which this implementation guide was defined.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext() {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of implementation guides. The most common use of this element is to represent the country / jurisdiction for which this implementation guide was defined.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $useContext
     * @return $this
     */
    public function addUseContext($useContext) {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A copyright statement relating to the implementation guide and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getCopyright() {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the implementation guide and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the constraints and mappings.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $copyright
     * @return $this
     */
    public function setCopyright($copyright) {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * The version of the FHIR specification on which this ImplementationGuide is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 1.0.2 for this version.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public function getFhirVersion() {
        return $this->fhirVersion;
    }

    /**
     * The version of the FHIR specification on which this ImplementationGuide is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 1.0.2 for this version.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $fhirVersion
     * @return $this
     */
    public function setFhirVersion($fhirVersion) {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideDependency[]
     */
    public function getDependency() {
        return $this->dependency;
    }

    /**
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideDependency $dependency
     * @return $this
     */
    public function addDependency($dependency) {
        $this->dependency[] = $dependency;
        return $this;
    }

    /**
     * A logical group of resources. Logical groups can be used when building pages.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePackage[]
     */
    public function getPackage() {
        return $this->package;
    }

    /**
     * A logical group of resources. Logical groups can be used when building pages.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePackage $package
     * @return $this
     */
    public function addPackage($package) {
        $this->package[] = $package;
        return $this;
    }

    /**
     * A set of profiles that all resources covered by this implementation guide must conform to.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideGlobal[]
     */
    public function getGlobal() {
        return $this->global;
    }

    /**
     * A set of profiles that all resources covered by this implementation guide must conform to.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuideGlobal $global
     * @return $this
     */
    public function addGlobal($global) {
        $this->global[] = $global;
        return $this;
    }

    /**
     * A binary file that is included in the  implementation guide when it is published.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri[]
     */
    public function getBinary() {
        return $this->binary;
    }

    /**
     * A binary file that is included in the  implementation guide when it is published.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $binary
     * @return $this
     */
    public function addBinary($binary) {
        $this->binary[] = $binary;
        return $this;
    }

    /**
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage $page
     * @return $this
     */
    public function setPage($page) {
        $this->page = $page;
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
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
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
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['useContext'])) {
                if (is_array($data['useContext'])) {
                    foreach($data['useContext'] as $d) {
                        $this->adduseContext($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"useContext" must be array of objects or null, '.gettype($data['useContext']).' seen.'); 
                }
            }
            if (isset($data['copyright'])) {
                $this->setCopyright($data['copyright']);
            }
            if (isset($data['fhirVersion'])) {
                $this->setFhirVersion($data['fhirVersion']);
            }
            if (isset($data['dependency'])) {
                if (is_array($data['dependency'])) {
                    foreach($data['dependency'] as $d) {
                        $this->adddependency($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"dependency" must be array of objects or null, '.gettype($data['dependency']).' seen.'); 
                }
            }
            if (isset($data['package'])) {
                if (is_array($data['package'])) {
                    foreach($data['package'] as $d) {
                        $this->addpackage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"package" must be array of objects or null, '.gettype($data['package']).' seen.'); 
                }
            }
            if (isset($data['global'])) {
                if (is_array($data['global'])) {
                    foreach($data['global'] as $d) {
                        $this->addglobal($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"global" must be array of objects or null, '.gettype($data['global']).' seen.'); 
                }
            }
            if (isset($data['binary'])) {
                if (is_array($data['binary'])) {
                    foreach($data['binary'] as $d) {
                        $this->addbinary($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"binary" must be array of objects or null, '.gettype($data['binary']).' seen.'); 
                }
            }
            if (isset($data['page'])) {
                $this->setPage($data['page']);
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
        if (isset($this->url)) $json['url'] = $this->url;
        if (isset($this->version)) $json['version'] = $this->version;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->experimental)) $json['experimental'] = $this->experimental;
        if (isset($this->publisher)) $json['publisher'] = $this->publisher;
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                if (null !== $contact) $json['contact'][] = $contact;
            }
        }
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach($this->useContext as $useContext) {
                if (null !== $useContext) $json['useContext'][] = $useContext;
            }
        }
        if (isset($this->copyright)) $json['copyright'] = $this->copyright;
        if (isset($this->fhirVersion)) $json['fhirVersion'] = $this->fhirVersion;
        if (0 < count($this->dependency)) {
            $json['dependency'] = [];
            foreach($this->dependency as $dependency) {
                if (null !== $dependency) $json['dependency'][] = $dependency;
            }
        }
        if (0 < count($this->package)) {
            $json['package'] = [];
            foreach($this->package as $package) {
                if (null !== $package) $json['package'][] = $package;
            }
        }
        if (0 < count($this->global)) {
            $json['global'] = [];
            foreach($this->global as $global) {
                if (null !== $global) $json['global'][] = $global;
            }
        }
        if (0 < count($this->binary)) {
            $json['binary'] = [];
            foreach($this->binary as $binary) {
                if (null !== $binary) $json['binary'][] = $binary;
            }
        }
        if (isset($this->page)) $json['page'] = $this->page;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImplementationGuide xmlns="http://hl7.org/fhir"></ImplementationGuide>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->url)) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (isset($this->version)) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->experimental)) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (isset($this->publisher)) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->useContext)) {
            foreach($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (isset($this->copyright)) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (isset($this->fhirVersion)) $this->fhirVersion->xmlSerialize(true, $sxe->addChild('fhirVersion'));
        if (0 < count($this->dependency)) {
            foreach($this->dependency as $dependency) {
                $dependency->xmlSerialize(true, $sxe->addChild('dependency'));
            }
        }
        if (0 < count($this->package)) {
            foreach($this->package as $package) {
                $package->xmlSerialize(true, $sxe->addChild('package'));
            }
        }
        if (0 < count($this->global)) {
            foreach($this->global as $global) {
                $global->xmlSerialize(true, $sxe->addChild('global'));
            }
        }
        if (0 < count($this->binary)) {
            foreach($this->binary as $binary) {
                $binary->xmlSerialize(true, $sxe->addChild('binary'));
            }
        }
        if (isset($this->page)) $this->page->xmlSerialize(true, $sxe->addChild('page'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}