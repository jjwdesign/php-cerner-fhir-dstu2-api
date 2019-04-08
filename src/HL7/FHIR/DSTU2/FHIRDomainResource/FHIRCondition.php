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
 * Use to record detailed information about conditions, problems or diagnoses recognized by a clinician. There are many uses including: recording a diagnosis during an encounter; populating a problem list or a summary statement, such as a discharge summary.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCondition extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Indicates the patient who the condition record is associated with.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Encounter during which the condition was first asserted.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Individual who is making the condition statement.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $asserter = null;

    /**
     * A date, when  the Condition statement was documented.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $dateRecorded = null;

    /**
     * Identification of the condition, problem or diagnosis.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A category assigned to the condition.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The clinical status of the condition.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $clinicalStatus = null;

    /**
     * The verification status to support the clinical status of the condition.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionVerificationStatus
     */
    public $verificationStatus = null;

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $severity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $onsetDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $onsetQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $abatementDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $abatementQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $abatementBoolean = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $abatementPeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $abatementRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $abatementString = null;

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRCondition\FHIRConditionStage
     */
    public $stage = null;

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRCondition\FHIRConditionEvidence[]
     */
    public $evidence = [];

    /**
     * The anatomical location where this condition manifests itself.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = [];

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $notes = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Condition';

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates the patient who the condition record is associated with.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * Indicates the patient who the condition record is associated with.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Encounter during which the condition was first asserted.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter() {
        return $this->encounter;
    }

    /**
     * Encounter during which the condition was first asserted.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter) {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Individual who is making the condition statement.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getAsserter() {
        return $this->asserter;
    }

    /**
     * Individual who is making the condition statement.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $asserter
     * @return $this
     */
    public function setAsserter($asserter) {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * A date, when  the Condition statement was documented.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getDateRecorded() {
        return $this->dateRecorded;
    }

    /**
     * A date, when  the Condition statement was documented.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $dateRecorded
     * @return $this
     */
    public function setDateRecorded($dateRecorded) {
        $this->dateRecorded = $dateRecorded;
        return $this;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * A category assigned to the condition.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * A category assigned to the condition.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * The clinical status of the condition.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getClinicalStatus() {
        return $this->clinicalStatus;
    }

    /**
     * The clinical status of the condition.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $clinicalStatus
     * @return $this
     */
    public function setClinicalStatus($clinicalStatus) {
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionVerificationStatus
     */
    public function getVerificationStatus() {
        return $this->verificationStatus;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionVerificationStatus $verificationStatus
     * @return $this
     */
    public function setVerificationStatus($verificationStatus) {
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity() {
        return $this->severity;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $severity
     * @return $this
     */
    public function setSeverity($severity) {
        $this->severity = $severity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime() {
        return $this->onsetDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $onsetDateTime
     * @return $this
     */
    public function setOnsetDateTime($onsetDateTime) {
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetQuantity() {
        return $this->onsetQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge $onsetQuantity
     * @return $this
     */
    public function setOnsetQuantity($onsetQuantity) {
        $this->onsetQuantity = $onsetQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod() {
        return $this->onsetPeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $onsetPeriod
     * @return $this
     */
    public function setOnsetPeriod($onsetPeriod) {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getOnsetRange() {
        return $this->onsetRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $onsetRange
     * @return $this
     */
    public function setOnsetRange($onsetRange) {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getOnsetString() {
        return $this->onsetString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $onsetString
     * @return $this
     */
    public function setOnsetString($onsetString) {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getAbatementDateTime() {
        return $this->abatementDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $abatementDateTime
     * @return $this
     */
    public function setAbatementDateTime($abatementDateTime) {
        $this->abatementDateTime = $abatementDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementQuantity() {
        return $this->abatementQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRAge $abatementQuantity
     * @return $this
     */
    public function setAbatementQuantity($abatementQuantity) {
        $this->abatementQuantity = $abatementQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getAbatementBoolean() {
        return $this->abatementBoolean;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $abatementBoolean
     * @return $this
     */
    public function setAbatementBoolean($abatementBoolean) {
        $this->abatementBoolean = $abatementBoolean;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getAbatementPeriod() {
        return $this->abatementPeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $abatementPeriod
     * @return $this
     */
    public function setAbatementPeriod($abatementPeriod) {
        $this->abatementPeriod = $abatementPeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getAbatementRange() {
        return $this->abatementRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $abatementRange
     * @return $this
     */
    public function setAbatementRange($abatementRange) {
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getAbatementString() {
        return $this->abatementString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $abatementString
     * @return $this
     */
    public function setAbatementString($abatementString) {
        $this->abatementString = $abatementString;
        return $this;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRCondition\FHIRConditionStage
     */
    public function getStage() {
        return $this->stage;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRCondition\FHIRConditionStage $stage
     * @return $this
     */
    public function setStage($stage) {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence() {
        return $this->evidence;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRCondition\FHIRConditionEvidence $evidence
     * @return $this
     */
    public function addEvidence($evidence) {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function addBodySite($bodySite) {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getNotes() {
        return $this->notes;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $notes
     * @return $this
     */
    public function setNotes($notes) {
        $this->notes = $notes;
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
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['asserter'])) {
                $this->setAsserter($data['asserter']);
            }
            if (isset($data['dateRecorded'])) {
                $this->setDateRecorded($data['dateRecorded']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['clinicalStatus'])) {
                $this->setClinicalStatus($data['clinicalStatus']);
            }
            if (isset($data['verificationStatus'])) {
                $this->setVerificationStatus($data['verificationStatus']);
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['onsetDateTime'])) {
                $this->setOnsetDateTime($data['onsetDateTime']);
            }
            if (isset($data['onsetQuantity'])) {
                $this->setOnsetQuantity($data['onsetQuantity']);
            }
            if (isset($data['onsetPeriod'])) {
                $this->setOnsetPeriod($data['onsetPeriod']);
            }
            if (isset($data['onsetRange'])) {
                $this->setOnsetRange($data['onsetRange']);
            }
            if (isset($data['onsetString'])) {
                $this->setOnsetString($data['onsetString']);
            }
            if (isset($data['abatementDateTime'])) {
                $this->setAbatementDateTime($data['abatementDateTime']);
            }
            if (isset($data['abatementQuantity'])) {
                $this->setAbatementQuantity($data['abatementQuantity']);
            }
            if (isset($data['abatementBoolean'])) {
                $this->setAbatementBoolean($data['abatementBoolean']);
            }
            if (isset($data['abatementPeriod'])) {
                $this->setAbatementPeriod($data['abatementPeriod']);
            }
            if (isset($data['abatementRange'])) {
                $this->setAbatementRange($data['abatementRange']);
            }
            if (isset($data['abatementString'])) {
                $this->setAbatementString($data['abatementString']);
            }
            if (isset($data['stage'])) {
                $this->setStage($data['stage']);
            }
            if (isset($data['evidence'])) {
                if (is_array($data['evidence'])) {
                    foreach($data['evidence'] as $d) {
                        $this->addevidence($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"evidence" must be array of objects or null, '.gettype($data['evidence']).' seen.'); 
                }
            }
            if (isset($data['bodySite'])) {
                if (is_array($data['bodySite'])) {
                    foreach($data['bodySite'] as $d) {
                        $this->addbodySite($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"bodySite" must be array of objects or null, '.gettype($data['bodySite']).' seen.'); 
                }
            }
            if (isset($data['notes'])) {
                $this->setNotes($data['notes']);
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
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->encounter)) $json['encounter'] = $this->encounter;
        if (isset($this->asserter)) $json['asserter'] = $this->asserter;
        if (isset($this->dateRecorded)) $json['dateRecorded'] = $this->dateRecorded;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->clinicalStatus)) $json['clinicalStatus'] = $this->clinicalStatus;
        if (isset($this->verificationStatus)) $json['verificationStatus'] = $this->verificationStatus;
        if (isset($this->severity)) $json['severity'] = $this->severity;
        if (isset($this->onsetDateTime)) $json['onsetDateTime'] = $this->onsetDateTime;
        if (isset($this->onsetQuantity)) $json['onsetQuantity'] = $this->onsetQuantity;
        if (isset($this->onsetPeriod)) $json['onsetPeriod'] = $this->onsetPeriod;
        if (isset($this->onsetRange)) $json['onsetRange'] = $this->onsetRange;
        if (isset($this->onsetString)) $json['onsetString'] = $this->onsetString;
        if (isset($this->abatementDateTime)) $json['abatementDateTime'] = $this->abatementDateTime;
        if (isset($this->abatementQuantity)) $json['abatementQuantity'] = $this->abatementQuantity;
        if (isset($this->abatementBoolean)) $json['abatementBoolean'] = $this->abatementBoolean;
        if (isset($this->abatementPeriod)) $json['abatementPeriod'] = $this->abatementPeriod;
        if (isset($this->abatementRange)) $json['abatementRange'] = $this->abatementRange;
        if (isset($this->abatementString)) $json['abatementString'] = $this->abatementString;
        if (isset($this->stage)) $json['stage'] = $this->stage;
        if (0 < count($this->evidence)) {
            $json['evidence'] = [];
            foreach($this->evidence as $evidence) {
                if (null !== $evidence) $json['evidence'][] = $evidence;
            }
        }
        if (0 < count($this->bodySite)) {
            $json['bodySite'] = [];
            foreach($this->bodySite as $bodySite) {
                if (null !== $bodySite) $json['bodySite'][] = $bodySite;
            }
        }
        if (isset($this->notes)) $json['notes'] = $this->notes;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Condition xmlns="http://hl7.org/fhir"></Condition>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->encounter)) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (isset($this->asserter)) $this->asserter->xmlSerialize(true, $sxe->addChild('asserter'));
        if (isset($this->dateRecorded)) $this->dateRecorded->xmlSerialize(true, $sxe->addChild('dateRecorded'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->clinicalStatus)) $this->clinicalStatus->xmlSerialize(true, $sxe->addChild('clinicalStatus'));
        if (isset($this->verificationStatus)) $this->verificationStatus->xmlSerialize(true, $sxe->addChild('verificationStatus'));
        if (isset($this->severity)) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (isset($this->onsetDateTime)) $this->onsetDateTime->xmlSerialize(true, $sxe->addChild('onsetDateTime'));
        if (isset($this->onsetQuantity)) $this->onsetQuantity->xmlSerialize(true, $sxe->addChild('onsetQuantity'));
        if (isset($this->onsetPeriod)) $this->onsetPeriod->xmlSerialize(true, $sxe->addChild('onsetPeriod'));
        if (isset($this->onsetRange)) $this->onsetRange->xmlSerialize(true, $sxe->addChild('onsetRange'));
        if (isset($this->onsetString)) $this->onsetString->xmlSerialize(true, $sxe->addChild('onsetString'));
        if (isset($this->abatementDateTime)) $this->abatementDateTime->xmlSerialize(true, $sxe->addChild('abatementDateTime'));
        if (isset($this->abatementQuantity)) $this->abatementQuantity->xmlSerialize(true, $sxe->addChild('abatementQuantity'));
        if (isset($this->abatementBoolean)) $this->abatementBoolean->xmlSerialize(true, $sxe->addChild('abatementBoolean'));
        if (isset($this->abatementPeriod)) $this->abatementPeriod->xmlSerialize(true, $sxe->addChild('abatementPeriod'));
        if (isset($this->abatementRange)) $this->abatementRange->xmlSerialize(true, $sxe->addChild('abatementRange'));
        if (isset($this->abatementString)) $this->abatementString->xmlSerialize(true, $sxe->addChild('abatementString'));
        if (isset($this->stage)) $this->stage->xmlSerialize(true, $sxe->addChild('stage'));
        if (0 < count($this->evidence)) {
            foreach($this->evidence as $evidence) {
                $evidence->xmlSerialize(true, $sxe->addChild('evidence'));
            }
        }
        if (0 < count($this->bodySite)) {
            foreach($this->bodySite as $bodySite) {
                $bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
            }
        }
        if (isset($this->notes)) $this->notes->xmlSerialize(true, $sxe->addChild('notes'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}