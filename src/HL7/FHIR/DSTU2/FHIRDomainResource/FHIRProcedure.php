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
 * An action that is or was performed on a patient. This can be a physical intervention like an operation, or less invasive like counseling or hypnotherapy.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcedure extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this procedure that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The person, animal or group on which the procedure was performed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRProcedureStatus
     */
    public $status = null;

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $notPerformed = null;

    /**
     * A code indicating why the procedure was not performed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonNotPerformed = [];

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = [];

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Limited to 'real' people rather than equipment.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public $performer = [];

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $performedDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $performedPeriod = null;

    /**
     * The encounter during which the procedure was performed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * This could be a histology result, pathology report, surgical report, etc..
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $report = [];

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $complication = [];

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $followUp = [];

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    public $notes = [];

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    public $focalDevice = [];

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $used = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Procedure';

    /**
     * This records identifiers associated with this procedure that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this procedure that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The person, animal or group on which the procedure was performed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The person, animal or group on which the procedure was performed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRProcedureStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRProcedureStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getNotPerformed() {
        return $this->notPerformed;
    }

    /**
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $notPerformed
     * @return $this
     */
    public function setNotPerformed($notPerformed) {
        $this->notPerformed = $notPerformed;
        return $this;
    }

    /**
     * A code indicating why the procedure was not performed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotPerformed() {
        return $this->reasonNotPerformed;
    }

    /**
     * A code indicating why the procedure was not performed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $reasonNotPerformed
     * @return $this
     */
    public function addReasonNotPerformed($reasonNotPerformed) {
        $this->reasonNotPerformed[] = $reasonNotPerformed;
        return $this;
    }

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function addBodySite($bodySite) {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept() {
        return $this->reasonCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return $this
     */
    public function setReasonCodeableConcept($reasonCodeableConcept) {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function setReasonReference($reasonReference) {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Limited to 'real' people rather than equipment.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * Limited to 'real' people rather than equipment.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProcedure\FHIRProcedurePerformer $performer
     * @return $this
     */
    public function addPerformer($performer) {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getPerformedDateTime() {
        return $this->performedDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $performedDateTime
     * @return $this
     */
    public function setPerformedDateTime($performedDateTime) {
        $this->performedDateTime = $performedDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPerformedPeriod() {
        return $this->performedPeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $performedPeriod
     * @return $this
     */
    public function setPerformedPeriod($performedPeriod) {
        $this->performedPeriod = $performedPeriod;
        return $this;
    }

    /**
     * The encounter during which the procedure was performed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter() {
        return $this->encounter;
    }

    /**
     * The encounter during which the procedure was performed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter) {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome() {
        return $this->outcome;
    }

    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome) {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * This could be a histology result, pathology report, surgical report, etc..
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getReport() {
        return $this->report;
    }

    /**
     * This could be a histology result, pathology report, surgical report, etc..
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $report
     * @return $this
     */
    public function addReport($report) {
        $this->report[] = $report;
        return $this;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComplication() {
        return $this->complication;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $complication
     * @return $this
     */
    public function addComplication($complication) {
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFollowUp() {
        return $this->followUp;
    }

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $followUp
     * @return $this
     */
    public function addFollowUp($followUp) {
        $this->followUp[] = $followUp;
        return $this;
    }

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    public function getNotes() {
        return $this->notes;
    }

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $notes
     * @return $this
     */
    public function addNotes($notes) {
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    public function getFocalDevice() {
        return $this->focalDevice;
    }

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProcedure\FHIRProcedureFocalDevice $focalDevice
     * @return $this
     */
    public function addFocalDevice($focalDevice) {
        $this->focalDevice[] = $focalDevice;
        return $this;
    }

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getUsed() {
        return $this->used;
    }

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $used
     * @return $this
     */
    public function addUsed($used) {
        $this->used[] = $used;
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
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['notPerformed'])) {
                $this->setNotPerformed($data['notPerformed']);
            }
            if (isset($data['reasonNotPerformed'])) {
                if (is_array($data['reasonNotPerformed'])) {
                    foreach($data['reasonNotPerformed'] as $d) {
                        $this->addreasonNotPerformed($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonNotPerformed" must be array of objects or null, '.gettype($data['reasonNotPerformed']).' seen.'); 
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
            if (isset($data['reasonCodeableConcept'])) {
                $this->setReasonCodeableConcept($data['reasonCodeableConcept']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['performer'])) {
                if (is_array($data['performer'])) {
                    foreach($data['performer'] as $d) {
                        $this->addperformer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"performer" must be array of objects or null, '.gettype($data['performer']).' seen.'); 
                }
            }
            if (isset($data['performedDateTime'])) {
                $this->setPerformedDateTime($data['performedDateTime']);
            }
            if (isset($data['performedPeriod'])) {
                $this->setPerformedPeriod($data['performedPeriod']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['report'])) {
                if (is_array($data['report'])) {
                    foreach($data['report'] as $d) {
                        $this->addreport($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"report" must be array of objects or null, '.gettype($data['report']).' seen.'); 
                }
            }
            if (isset($data['complication'])) {
                if (is_array($data['complication'])) {
                    foreach($data['complication'] as $d) {
                        $this->addcomplication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"complication" must be array of objects or null, '.gettype($data['complication']).' seen.'); 
                }
            }
            if (isset($data['followUp'])) {
                if (is_array($data['followUp'])) {
                    foreach($data['followUp'] as $d) {
                        $this->addfollowUp($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"followUp" must be array of objects or null, '.gettype($data['followUp']).' seen.'); 
                }
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['notes'])) {
                if (is_array($data['notes'])) {
                    foreach($data['notes'] as $d) {
                        $this->addnotes($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"notes" must be array of objects or null, '.gettype($data['notes']).' seen.'); 
                }
            }
            if (isset($data['focalDevice'])) {
                if (is_array($data['focalDevice'])) {
                    foreach($data['focalDevice'] as $d) {
                        $this->addfocalDevice($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"focalDevice" must be array of objects or null, '.gettype($data['focalDevice']).' seen.'); 
                }
            }
            if (isset($data['used'])) {
                if (is_array($data['used'])) {
                    foreach($data['used'] as $d) {
                        $this->addused($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"used" must be array of objects or null, '.gettype($data['used']).' seen.'); 
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
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->notPerformed)) $json['notPerformed'] = $this->notPerformed;
        if (0 < count($this->reasonNotPerformed)) {
            $json['reasonNotPerformed'] = [];
            foreach($this->reasonNotPerformed as $reasonNotPerformed) {
                if (null !== $reasonNotPerformed) $json['reasonNotPerformed'][] = $reasonNotPerformed;
            }
        }
        if (0 < count($this->bodySite)) {
            $json['bodySite'] = [];
            foreach($this->bodySite as $bodySite) {
                if (null !== $bodySite) $json['bodySite'][] = $bodySite;
            }
        }
        if (isset($this->reasonCodeableConcept)) $json['reasonCodeableConcept'] = $this->reasonCodeableConcept;
        if (isset($this->reasonReference)) $json['reasonReference'] = $this->reasonReference;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                if (null !== $performer) $json['performer'][] = $performer;
            }
        }
        if (isset($this->performedDateTime)) $json['performedDateTime'] = $this->performedDateTime;
        if (isset($this->performedPeriod)) $json['performedPeriod'] = $this->performedPeriod;
        if (isset($this->encounter)) $json['encounter'] = $this->encounter;
        if (isset($this->location)) $json['location'] = $this->location;
        if (isset($this->outcome)) $json['outcome'] = $this->outcome;
        if (0 < count($this->report)) {
            $json['report'] = [];
            foreach($this->report as $report) {
                if (null !== $report) $json['report'][] = $report;
            }
        }
        if (0 < count($this->complication)) {
            $json['complication'] = [];
            foreach($this->complication as $complication) {
                if (null !== $complication) $json['complication'][] = $complication;
            }
        }
        if (0 < count($this->followUp)) {
            $json['followUp'] = [];
            foreach($this->followUp as $followUp) {
                if (null !== $followUp) $json['followUp'][] = $followUp;
            }
        }
        if (isset($this->request)) $json['request'] = $this->request;
        if (0 < count($this->notes)) {
            $json['notes'] = [];
            foreach($this->notes as $notes) {
                if (null !== $notes) $json['notes'][] = $notes;
            }
        }
        if (0 < count($this->focalDevice)) {
            $json['focalDevice'] = [];
            foreach($this->focalDevice as $focalDevice) {
                if (null !== $focalDevice) $json['focalDevice'][] = $focalDevice;
            }
        }
        if (0 < count($this->used)) {
            $json['used'] = [];
            foreach($this->used as $used) {
                if (null !== $used) $json['used'][] = $used;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Procedure xmlns="http://hl7.org/fhir"></Procedure>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->notPerformed)) $this->notPerformed->xmlSerialize(true, $sxe->addChild('notPerformed'));
        if (0 < count($this->reasonNotPerformed)) {
            foreach($this->reasonNotPerformed as $reasonNotPerformed) {
                $reasonNotPerformed->xmlSerialize(true, $sxe->addChild('reasonNotPerformed'));
            }
        }
        if (0 < count($this->bodySite)) {
            foreach($this->bodySite as $bodySite) {
                $bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
            }
        }
        if (isset($this->reasonCodeableConcept)) $this->reasonCodeableConcept->xmlSerialize(true, $sxe->addChild('reasonCodeableConcept'));
        if (isset($this->reasonReference)) $this->reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (isset($this->performedDateTime)) $this->performedDateTime->xmlSerialize(true, $sxe->addChild('performedDateTime'));
        if (isset($this->performedPeriod)) $this->performedPeriod->xmlSerialize(true, $sxe->addChild('performedPeriod'));
        if (isset($this->encounter)) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (isset($this->location)) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (isset($this->outcome)) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (0 < count($this->report)) {
            foreach($this->report as $report) {
                $report->xmlSerialize(true, $sxe->addChild('report'));
            }
        }
        if (0 < count($this->complication)) {
            foreach($this->complication as $complication) {
                $complication->xmlSerialize(true, $sxe->addChild('complication'));
            }
        }
        if (0 < count($this->followUp)) {
            foreach($this->followUp as $followUp) {
                $followUp->xmlSerialize(true, $sxe->addChild('followUp'));
            }
        }
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (0 < count($this->notes)) {
            foreach($this->notes as $notes) {
                $notes->xmlSerialize(true, $sxe->addChild('notes'));
            }
        }
        if (0 < count($this->focalDevice)) {
            foreach($this->focalDevice as $focalDevice) {
                $focalDevice->xmlSerialize(true, $sxe->addChild('focalDevice'));
            }
        }
        if (0 < count($this->used)) {
            foreach($this->used as $used) {
                $used->xmlSerialize(true, $sxe->addChild('used'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}