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
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAllergyIntolerance extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $onset = null;

    /**
     * Date when the sensitivity was recorded.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $recordedDate = null;

    /**
     * Individual who recorded the record and takes responsibility for its conten.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * The patient who has the allergy or intolerance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The source of the information about the allergy that is recorded.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $reporter = null;

    /**
     * Identification of a substance, or a class of substances, that is considered to be responsible for the adverse reaction risk.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $substance = null;

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified Substance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus
     */
    public $status = null;

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified Substance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public $criticality = null;

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceType
     */
    public $type = null;

    /**
     * Category of the identified Substance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory
     */
    public $category = null;

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $lastOccurence = null;

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Details about each adverse reaction event linked to exposure to the identified Substance.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public $reaction = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'AllergyIntolerance';

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getOnset() {
        return $this->onset;
    }

    /**
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $onset
     * @return $this
     */
    public function setOnset($onset) {
        $this->onset = $onset;
        return $this;
    }

    /**
     * Date when the sensitivity was recorded.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate() {
        return $this->recordedDate;
    }

    /**
     * Date when the sensitivity was recorded.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $recordedDate
     * @return $this
     */
    public function setRecordedDate($recordedDate) {
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * Individual who recorded the record and takes responsibility for its conten.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getRecorder() {
        return $this->recorder;
    }

    /**
     * Individual who recorded the record and takes responsibility for its conten.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $recorder
     * @return $this
     */
    public function setRecorder($recorder) {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getReporter() {
        return $this->reporter;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $reporter
     * @return $this
     */
    public function setReporter($reporter) {
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * Identification of a substance, or a class of substances, that is considered to be responsible for the adverse reaction risk.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance() {
        return $this->substance;
    }

    /**
     * Identification of a substance, or a class of substances, that is considered to be responsible for the adverse reaction risk.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $substance
     * @return $this
     */
    public function setSubstance($substance) {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified Substance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified Substance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified Substance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality() {
        return $this->criticality;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified Substance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     * @return $this
     */
    public function setCriticality($criticality) {
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceType $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Category of the identified Substance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Category of the identified Substance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getLastOccurence() {
        return $this->lastOccurence;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $lastOccurence
     * @return $this
     */
    public function setLastOccurence($lastOccurence) {
        $this->lastOccurence = $lastOccurence;
        return $this;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function setNote($note) {
        $this->note = $note;
        return $this;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified Substance.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction() {
        return $this->reaction;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified Substance.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $reaction
     * @return $this
     */
    public function addReaction($reaction) {
        $this->reaction[] = $reaction;
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
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addidentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.'); 
                }
            }
            if (isset($data['onset'])) {
                $this->setOnset($data['onset']);
            }
            if (isset($data['recordedDate'])) {
                $this->setRecordedDate($data['recordedDate']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['reporter'])) {
                $this->setReporter($data['reporter']);
            }
            if (isset($data['substance'])) {
                $this->setSubstance($data['substance']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['criticality'])) {
                $this->setCriticality($data['criticality']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['lastOccurence'])) {
                $this->setLastOccurence($data['lastOccurence']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['reaction'])) {
                if (is_array($data['reaction'])) {
                    foreach($data['reaction'] as $d) {
                        $this->addreaction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reaction" must be array of objects or null, '.gettype($data['reaction']).' seen.'); 
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->onset)) $json['onset'] = $this->onset;
        if (isset($this->recordedDate)) $json['recordedDate'] = $this->recordedDate;
        if (isset($this->recorder)) $json['recorder'] = $this->recorder;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->reporter)) $json['reporter'] = $this->reporter;
        if (isset($this->substance)) $json['substance'] = $this->substance;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->criticality)) $json['criticality'] = $this->criticality;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->lastOccurence)) $json['lastOccurence'] = $this->lastOccurence;
        if (isset($this->note)) $json['note'] = $this->note;
        if (0 < count($this->reaction)) {
            $json['reaction'] = [];
            foreach($this->reaction as $reaction) {
                if (null !== $reaction) $json['reaction'][] = $reaction;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AllergyIntolerance xmlns="http://hl7.org/fhir"></AllergyIntolerance>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->onset)) $this->onset->xmlSerialize(true, $sxe->addChild('onset'));
        if (isset($this->recordedDate)) $this->recordedDate->xmlSerialize(true, $sxe->addChild('recordedDate'));
        if (isset($this->recorder)) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->reporter)) $this->reporter->xmlSerialize(true, $sxe->addChild('reporter'));
        if (isset($this->substance)) $this->substance->xmlSerialize(true, $sxe->addChild('substance'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->criticality)) $this->criticality->xmlSerialize(true, $sxe->addChild('criticality'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->lastOccurence)) $this->lastOccurence->xmlSerialize(true, $sxe->addChild('lastOccurence'));
        if (isset($this->note)) $this->note->xmlSerialize(true, $sxe->addChild('note'));
        if (0 < count($this->reaction)) {
            foreach($this->reaction as $reaction) {
                $reaction->xmlSerialize(true, $sxe->addChild('reaction'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}