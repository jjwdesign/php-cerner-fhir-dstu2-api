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
 * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, Ineffective treatment frequency, Procedure-condition conflict, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDetectedIssue extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Indicates the patient whose record the detected issue is associated with.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Identifies the general type of issue identified.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDetectedIssueSeverity
     */
    public $severity = null;

    /**
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $implicated = [];

    /**
     * A textual explanation of the detected issue.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $detail = null;

    /**
     * The date or date-time when the detected issue was initially identified.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * Business identifier associated with the detected issue record.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $reference = null;

    /**
     * Indicates an action that has been taken or is committed to to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    public $mitigation = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'DetectedIssue';

    /**
     * Indicates the patient whose record the detected issue is associated with.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * Indicates the patient whose record the detected issue is associated with.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Identifies the general type of issue identified.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Identifies the general type of issue identified.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDetectedIssueSeverity
     */
    public function getSeverity() {
        return $this->severity;
    }

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDetectedIssueSeverity $severity
     * @return $this
     */
    public function setSeverity($severity) {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getImplicated() {
        return $this->implicated;
    }

    /**
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $implicated
     * @return $this
     */
    public function addImplicated($implicated) {
        $this->implicated[] = $implicated;
        return $this;
    }

    /**
     * A textual explanation of the detected issue.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDetail() {
        return $this->detail;
    }

    /**
     * A textual explanation of the detected issue.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $detail
     * @return $this
     */
    public function setDetail($detail) {
        $this->detail = $detail;
        return $this;
    }

    /**
     * The date or date-time when the detected issue was initially identified.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date or date-time when the detected issue was initially identified.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    /**
     * Business identifier associated with the detected issue record.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Business identifier associated with the detected issue record.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $reference
     * @return $this
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Indicates an action that has been taken or is committed to to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    public function getMitigation() {
        return $this->mitigation;
    }

    /**
     * Indicates an action that has been taken or is committed to to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDetectedIssue\FHIRDetectedIssueMitigation $mitigation
     * @return $this
     */
    public function addMitigation($mitigation) {
        $this->mitigation[] = $mitigation;
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
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['implicated'])) {
                if (is_array($data['implicated'])) {
                    foreach($data['implicated'] as $d) {
                        $this->addimplicated($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"implicated" must be array of objects or null, '.gettype($data['implicated']).' seen.'); 
                }
            }
            if (isset($data['detail'])) {
                $this->setDetail($data['detail']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
            if (isset($data['mitigation'])) {
                if (is_array($data['mitigation'])) {
                    foreach($data['mitigation'] as $d) {
                        $this->addmitigation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"mitigation" must be array of objects or null, '.gettype($data['mitigation']).' seen.'); 
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
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->severity)) $json['severity'] = $this->severity;
        if (0 < count($this->implicated)) {
            $json['implicated'] = [];
            foreach($this->implicated as $implicated) {
                if (null !== $implicated) $json['implicated'][] = $implicated;
            }
        }
        if (isset($this->detail)) $json['detail'] = $this->detail;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->author)) $json['author'] = $this->author;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->reference)) $json['reference'] = $this->reference;
        if (0 < count($this->mitigation)) {
            $json['mitigation'] = [];
            foreach($this->mitigation as $mitigation) {
                if (null !== $mitigation) $json['mitigation'][] = $mitigation;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DetectedIssue xmlns="http://hl7.org/fhir"></DetectedIssue>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->severity)) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (0 < count($this->implicated)) {
            foreach($this->implicated as $implicated) {
                $implicated->xmlSerialize(true, $sxe->addChild('implicated'));
            }
        }
        if (isset($this->detail)) $this->detail->xmlSerialize(true, $sxe->addChild('detail'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->author)) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->reference)) $this->reference->xmlSerialize(true, $sxe->addChild('reference'));
        if (0 < count($this->mitigation)) {
            foreach($this->mitigation as $mitigation) {
                $mitigation->xmlSerialize(true, $sxe->addChild('mitigation'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}