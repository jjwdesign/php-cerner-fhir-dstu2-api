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
 * A value set specifies a set of codes drawn from one or more code systems.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRValueSet extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URL that is used to identify this value set when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this value set is (or will be) published.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name describing the value set.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of the value set.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the value set.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetContact[]
     */
    public $contact = [];

    /**
     * The date that the value set status was last changed. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes (e.g. the 'content logical definition').
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version of all referenced code system(s) and value set instances as of the locked date.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $lockedDate = null;

    /**
     * A free text natural language description of the use of the value set - reason for definition, "the semantic space" to be included in the value set, conditions of use, etc. The description may include a list of expected usages for the value set and can also describe the approach taken to build the value set.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of value set definitions.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $useContext = [];

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $immutable = null;

    /**
     * Explains why this value set is needed and why it has been constrained as it has.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $copyright = null;

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $extensible = null;

    /**
     * A definition of a code system, inlined into the value set (as a packaging convenience). Note that the inline code system may be used from other value sets by referring to its (codeSystem.system) directly.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetCodeSystem
     */
    public $codeSystem = null;

    /**
     * A set of criteria that provide the content logical definition of the value set by including or excluding codes from outside this value set.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetCompose
     */
    public $compose = null;

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetExpansion
     */
    public $expansion = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet';

    /**
     * An absolute URL that is used to identify this value set when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this value set is (or will be) published.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this value set when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this value set is (or will be) published.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Formal identifier that is used to identify this value set when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name describing the value set.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * A free text natural language name describing the value set.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of the value set.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the value set.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getExperimental() {
        return $this->experimental;
    }

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental) {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the value set.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getPublisher() {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the value set.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher) {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetContact[]
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetContact $contact
     * @return $this
     */
    public function addContact($contact) {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date that the value set status was last changed. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes (e.g. the 'content logical definition').
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date that the value set status was last changed. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes (e.g. the 'content logical definition').
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version of all referenced code system(s) and value set instances as of the locked date.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getLockedDate() {
        return $this->lockedDate;
    }

    /**
     * If a locked date is defined, then the Content Logical Definition must be evaluated using the current version of all referenced code system(s) and value set instances as of the locked date.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $lockedDate
     * @return $this
     */
    public function setLockedDate($lockedDate) {
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * A free text natural language description of the use of the value set - reason for definition, "the semantic space" to be included in the value set, conditions of use, etc. The description may include a list of expected usages for the value set and can also describe the approach taken to build the value set.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A free text natural language description of the use of the value set - reason for definition, "the semantic space" to be included in the value set, conditions of use, etc. The description may include a list of expected usages for the value set and can also describe the approach taken to build the value set.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of value set definitions.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext() {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of value set definitions.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $useContext
     * @return $this
     */
    public function addUseContext($useContext) {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getImmutable() {
        return $this->immutable;
    }

    /**
     * If this is set to 'true', then no new versions of the content logical definition can be created.  Note: Other metadata might still change.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $immutable
     * @return $this
     */
    public function setImmutable($immutable) {
        $this->immutable = $immutable;
        return $this;
    }

    /**
     * Explains why this value set is needed and why it has been constrained as it has.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getRequirements() {
        return $this->requirements;
    }

    /**
     * Explains why this value set is needed and why it has been constrained as it has.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements) {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getCopyright() {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the value set and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the value set.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $copyright
     * @return $this
     */
    public function setCopyright($copyright) {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getExtensible() {
        return $this->extensible;
    }

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $extensible
     * @return $this
     */
    public function setExtensible($extensible) {
        $this->extensible = $extensible;
        return $this;
    }

    /**
     * A definition of a code system, inlined into the value set (as a packaging convenience). Note that the inline code system may be used from other value sets by referring to its (codeSystem.system) directly.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetCodeSystem
     */
    public function getCodeSystem() {
        return $this->codeSystem;
    }

    /**
     * A definition of a code system, inlined into the value set (as a packaging convenience). Note that the inline code system may be used from other value sets by referring to its (codeSystem.system) directly.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetCodeSystem $codeSystem
     * @return $this
     */
    public function setCodeSystem($codeSystem) {
        $this->codeSystem = $codeSystem;
        return $this;
    }

    /**
     * A set of criteria that provide the content logical definition of the value set by including or excluding codes from outside this value set.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetCompose
     */
    public function getCompose() {
        return $this->compose;
    }

    /**
     * A set of criteria that provide the content logical definition of the value set by including or excluding codes from outside this value set.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetCompose $compose
     * @return $this
     */
    public function setCompose($compose) {
        $this->compose = $compose;
        return $this;
    }

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetExpansion
     */
    public function getExpansion() {
        return $this->expansion;
    }

    /**
     * A value set can also be "expanded", where the value set is turned into a simple collection of enumerated codes. This element holds the expansion, if it has been performed.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRValueSet\FHIRValueSetExpansion $expansion
     * @return $this
     */
    public function setExpansion($expansion) {
        $this->expansion = $expansion;
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
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
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
            if (isset($data['lockedDate'])) {
                $this->setLockedDate($data['lockedDate']);
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
            if (isset($data['immutable'])) {
                $this->setImmutable($data['immutable']);
            }
            if (isset($data['requirements'])) {
                $this->setRequirements($data['requirements']);
            }
            if (isset($data['copyright'])) {
                $this->setCopyright($data['copyright']);
            }
            if (isset($data['extensible'])) {
                $this->setExtensible($data['extensible']);
            }
            if (isset($data['codeSystem'])) {
                $this->setCodeSystem($data['codeSystem']);
            }
            if (isset($data['compose'])) {
                $this->setCompose($data['compose']);
            }
            if (isset($data['expansion'])) {
                $this->setExpansion($data['expansion']);
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
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
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
        if (isset($this->lockedDate)) $json['lockedDate'] = $this->lockedDate;
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach($this->useContext as $useContext) {
                if (null !== $useContext) $json['useContext'][] = $useContext;
            }
        }
        if (isset($this->immutable)) $json['immutable'] = $this->immutable;
        if (isset($this->requirements)) $json['requirements'] = $this->requirements;
        if (isset($this->copyright)) $json['copyright'] = $this->copyright;
        if (isset($this->extensible)) $json['extensible'] = $this->extensible;
        if (isset($this->codeSystem)) $json['codeSystem'] = $this->codeSystem;
        if (isset($this->compose)) $json['compose'] = $this->compose;
        if (isset($this->expansion)) $json['expansion'] = $this->expansion;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSet xmlns="http://hl7.org/fhir"></ValueSet>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->url)) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
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
        if (isset($this->lockedDate)) $this->lockedDate->xmlSerialize(true, $sxe->addChild('lockedDate'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->useContext)) {
            foreach($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (isset($this->immutable)) $this->immutable->xmlSerialize(true, $sxe->addChild('immutable'));
        if (isset($this->requirements)) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (isset($this->copyright)) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (isset($this->extensible)) $this->extensible->xmlSerialize(true, $sxe->addChild('extensible'));
        if (isset($this->codeSystem)) $this->codeSystem->xmlSerialize(true, $sxe->addChild('codeSystem'));
        if (isset($this->compose)) $this->compose->xmlSerialize(true, $sxe->addChild('compose'));
        if (isset($this->expansion)) $this->expansion->xmlSerialize(true, $sxe->addChild('expansion'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}