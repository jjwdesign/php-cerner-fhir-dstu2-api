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
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter,  but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClinicalImpression extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The patient being assessed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The clinician performing the assessment.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $assessor = null;

    /**
     * Identifies the workflow status of the assessment.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRClinicalImpressionStatus
     */
    public $status = null;

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $previous = null;

    /**
     * This a list of the general problems/conditions for a patient.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $problem = [];

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $triggerCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $triggerReference = null;

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    public $investigations = [];

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $protocol = null;

    /**
     * A text summary of the investigations and the diagnosis.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $summary = null;

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public $finding = [];

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $resolved = [];

    /**
     * Diagnosis considered not possible.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    public $ruledOut = [];

    /**
     * Estimate of likely outcome.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $prognosis = null;

    /**
     * Plan of action after assessment.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $plan = [];

    /**
     * Actions taken during assessment.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $action = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ClinicalImpression';

    /**
     * The patient being assessed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * The patient being assessed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The clinician performing the assessment.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getAssessor() {
        return $this->assessor;
    }

    /**
     * The clinician performing the assessment.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $assessor
     * @return $this
     */
    public function setAssessor($assessor) {
        $this->assessor = $assessor;
        return $this;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRClinicalImpressionStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRClinicalImpressionStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPrevious() {
        return $this->previous;
    }

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $previous
     * @return $this
     */
    public function setPrevious($previous) {
        $this->previous = $previous;
        return $this;
    }

    /**
     * This a list of the general problems/conditions for a patient.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getProblem() {
        return $this->problem;
    }

    /**
     * This a list of the general problems/conditions for a patient.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $problem
     * @return $this
     */
    public function addProblem($problem) {
        $this->problem[] = $problem;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getTriggerCodeableConcept() {
        return $this->triggerCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $triggerCodeableConcept
     * @return $this
     */
    public function setTriggerCodeableConcept($triggerCodeableConcept) {
        $this->triggerCodeableConcept = $triggerCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getTriggerReference() {
        return $this->triggerReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $triggerReference
     * @return $this
     */
    public function setTriggerReference($triggerReference) {
        $this->triggerReference = $triggerReference;
        return $this;
    }

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    public function getInvestigations() {
        return $this->investigations;
    }

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations $investigations
     * @return $this
     */
    public function addInvestigations($investigations) {
        $this->investigations[] = $investigations;
        return $this;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $protocol
     * @return $this
     */
    public function setProtocol($protocol) {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getSummary() {
        return $this->summary;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $summary
     * @return $this
     */
    public function setSummary($summary) {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public function getFinding() {
        return $this->finding;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding $finding
     * @return $this
     */
    public function addFinding($finding) {
        $this->finding[] = $finding;
        return $this;
    }

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getResolved() {
        return $this->resolved;
    }

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $resolved
     * @return $this
     */
    public function addResolved($resolved) {
        $this->resolved[] = $resolved;
        return $this;
    }

    /**
     * Diagnosis considered not possible.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    public function getRuledOut() {
        return $this->ruledOut;
    }

    /**
     * Diagnosis considered not possible.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut $ruledOut
     * @return $this
     */
    public function addRuledOut($ruledOut) {
        $this->ruledOut[] = $ruledOut;
        return $this;
    }

    /**
     * Estimate of likely outcome.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getPrognosis() {
        return $this->prognosis;
    }

    /**
     * Estimate of likely outcome.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $prognosis
     * @return $this
     */
    public function setPrognosis($prognosis) {
        $this->prognosis = $prognosis;
        return $this;
    }

    /**
     * Plan of action after assessment.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getPlan() {
        return $this->plan;
    }

    /**
     * Plan of action after assessment.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $plan
     * @return $this
     */
    public function addPlan($plan) {
        $this->plan[] = $plan;
        return $this;
    }

    /**
     * Actions taken during assessment.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Actions taken during assessment.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $action
     * @return $this
     */
    public function addAction($action) {
        $this->action[] = $action;
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
            if (isset($data['assessor'])) {
                $this->setAssessor($data['assessor']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['previous'])) {
                $this->setPrevious($data['previous']);
            }
            if (isset($data['problem'])) {
                if (is_array($data['problem'])) {
                    foreach($data['problem'] as $d) {
                        $this->addproblem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"problem" must be array of objects or null, '.gettype($data['problem']).' seen.'); 
                }
            }
            if (isset($data['triggerCodeableConcept'])) {
                $this->setTriggerCodeableConcept($data['triggerCodeableConcept']);
            }
            if (isset($data['triggerReference'])) {
                $this->setTriggerReference($data['triggerReference']);
            }
            if (isset($data['investigations'])) {
                if (is_array($data['investigations'])) {
                    foreach($data['investigations'] as $d) {
                        $this->addinvestigations($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"investigations" must be array of objects or null, '.gettype($data['investigations']).' seen.'); 
                }
            }
            if (isset($data['protocol'])) {
                $this->setProtocol($data['protocol']);
            }
            if (isset($data['summary'])) {
                $this->setSummary($data['summary']);
            }
            if (isset($data['finding'])) {
                if (is_array($data['finding'])) {
                    foreach($data['finding'] as $d) {
                        $this->addfinding($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"finding" must be array of objects or null, '.gettype($data['finding']).' seen.'); 
                }
            }
            if (isset($data['resolved'])) {
                if (is_array($data['resolved'])) {
                    foreach($data['resolved'] as $d) {
                        $this->addresolved($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"resolved" must be array of objects or null, '.gettype($data['resolved']).' seen.'); 
                }
            }
            if (isset($data['ruledOut'])) {
                if (is_array($data['ruledOut'])) {
                    foreach($data['ruledOut'] as $d) {
                        $this->addruledOut($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"ruledOut" must be array of objects or null, '.gettype($data['ruledOut']).' seen.'); 
                }
            }
            if (isset($data['prognosis'])) {
                $this->setPrognosis($data['prognosis']);
            }
            if (isset($data['plan'])) {
                if (is_array($data['plan'])) {
                    foreach($data['plan'] as $d) {
                        $this->addplan($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"plan" must be array of objects or null, '.gettype($data['plan']).' seen.'); 
                }
            }
            if (isset($data['action'])) {
                if (is_array($data['action'])) {
                    foreach($data['action'] as $d) {
                        $this->addaction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"action" must be array of objects or null, '.gettype($data['action']).' seen.'); 
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
        if (isset($this->assessor)) $json['assessor'] = $this->assessor;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->previous)) $json['previous'] = $this->previous;
        if (0 < count($this->problem)) {
            $json['problem'] = [];
            foreach($this->problem as $problem) {
                if (null !== $problem) $json['problem'][] = $problem;
            }
        }
        if (isset($this->triggerCodeableConcept)) $json['triggerCodeableConcept'] = $this->triggerCodeableConcept;
        if (isset($this->triggerReference)) $json['triggerReference'] = $this->triggerReference;
        if (0 < count($this->investigations)) {
            $json['investigations'] = [];
            foreach($this->investigations as $investigations) {
                if (null !== $investigations) $json['investigations'][] = $investigations;
            }
        }
        if (isset($this->protocol)) $json['protocol'] = $this->protocol;
        if (isset($this->summary)) $json['summary'] = $this->summary;
        if (0 < count($this->finding)) {
            $json['finding'] = [];
            foreach($this->finding as $finding) {
                if (null !== $finding) $json['finding'][] = $finding;
            }
        }
        if (0 < count($this->resolved)) {
            $json['resolved'] = [];
            foreach($this->resolved as $resolved) {
                if (null !== $resolved) $json['resolved'][] = $resolved;
            }
        }
        if (0 < count($this->ruledOut)) {
            $json['ruledOut'] = [];
            foreach($this->ruledOut as $ruledOut) {
                if (null !== $ruledOut) $json['ruledOut'][] = $ruledOut;
            }
        }
        if (isset($this->prognosis)) $json['prognosis'] = $this->prognosis;
        if (0 < count($this->plan)) {
            $json['plan'] = [];
            foreach($this->plan as $plan) {
                if (null !== $plan) $json['plan'][] = $plan;
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                if (null !== $action) $json['action'][] = $action;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClinicalImpression xmlns="http://hl7.org/fhir"></ClinicalImpression>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->assessor)) $this->assessor->xmlSerialize(true, $sxe->addChild('assessor'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->previous)) $this->previous->xmlSerialize(true, $sxe->addChild('previous'));
        if (0 < count($this->problem)) {
            foreach($this->problem as $problem) {
                $problem->xmlSerialize(true, $sxe->addChild('problem'));
            }
        }
        if (isset($this->triggerCodeableConcept)) $this->triggerCodeableConcept->xmlSerialize(true, $sxe->addChild('triggerCodeableConcept'));
        if (isset($this->triggerReference)) $this->triggerReference->xmlSerialize(true, $sxe->addChild('triggerReference'));
        if (0 < count($this->investigations)) {
            foreach($this->investigations as $investigations) {
                $investigations->xmlSerialize(true, $sxe->addChild('investigations'));
            }
        }
        if (isset($this->protocol)) $this->protocol->xmlSerialize(true, $sxe->addChild('protocol'));
        if (isset($this->summary)) $this->summary->xmlSerialize(true, $sxe->addChild('summary'));
        if (0 < count($this->finding)) {
            foreach($this->finding as $finding) {
                $finding->xmlSerialize(true, $sxe->addChild('finding'));
            }
        }
        if (0 < count($this->resolved)) {
            foreach($this->resolved as $resolved) {
                $resolved->xmlSerialize(true, $sxe->addChild('resolved'));
            }
        }
        if (0 < count($this->ruledOut)) {
            foreach($this->ruledOut as $ruledOut) {
                $ruledOut->xmlSerialize(true, $sxe->addChild('ruledOut'));
            }
        }
        if (isset($this->prognosis)) $this->prognosis->xmlSerialize(true, $sxe->addChild('prognosis'));
        if (0 < count($this->plan)) {
            foreach($this->plan as $plan) {
                $plan->xmlSerialize(true, $sxe->addChild('plan'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}