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
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREncounter extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier(s) by which this encounter is known.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * planned | arrived | in-progress | onleave | finished | cancelled.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIREncounterState
     */
    public $status = null;

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterStatusHistory[]
     */
    public $statusHistory = [];

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIREncounterClass
     */
    public $class = null;

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = [];

    /**
     * Indicates the urgency of the encounter.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * The patient present at the encounter.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $episodeOfCare = [];

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $incomingReferral = [];

    /**
     * The list of people responsible for providing the service.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterParticipant[]
     */
    public $participant = [];

    /**
     * The appointment that scheduled this encounter.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $appointment = null;

    /**
     * The start and end time of the encounter.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $length = null;

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = [];

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $indication = [];

    /**
     * Details about the admission to a healthcare service.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterHospitalization
     */
    public $hospitalization = null;

    /**
     * List of locations where  the patient has been during this encounter.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterLocation[]
     */
    public $location = [];

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $serviceProvider = null;

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Encounter';

    /**
     * Identifier(s) by which this encounter is known.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifier(s) by which this encounter is known.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * planned | arrived | in-progress | onleave | finished | cancelled.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIREncounterState
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * planned | arrived | in-progress | onleave | finished | cancelled.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIREncounterState $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterStatusHistory[]
     */
    public function getStatusHistory() {
        return $this->statusHistory;
    }

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterStatusHistory $statusHistory
     * @return $this
     */
    public function addStatusHistory($statusHistory) {
        $this->statusHistory[] = $statusHistory;
        return $this;
    }

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIREncounterClass
     */
    public function getClass() {
        return $this->class;
    }

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIREncounterClass $class
     * @return $this
     */
    public function setClass($class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function addType($type) {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Indicates the urgency of the encounter.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * Indicates the urgency of the encounter.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $priority
     * @return $this
     */
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * The patient present at the encounter.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * The patient present at the encounter.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getEpisodeOfCare() {
        return $this->episodeOfCare;
    }

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $episodeOfCare
     * @return $this
     */
    public function addEpisodeOfCare($episodeOfCare) {
        $this->episodeOfCare[] = $episodeOfCare;
        return $this;
    }

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getIncomingReferral() {
        return $this->incomingReferral;
    }

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $incomingReferral
     * @return $this
     */
    public function addIncomingReferral($incomingReferral) {
        $this->incomingReferral[] = $incomingReferral;
        return $this;
    }

    /**
     * The list of people responsible for providing the service.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterParticipant[]
     */
    public function getParticipant() {
        return $this->participant;
    }

    /**
     * The list of people responsible for providing the service.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterParticipant $participant
     * @return $this
     */
    public function addParticipant($participant) {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * The appointment that scheduled this encounter.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getAppointment() {
        return $this->appointment;
    }

    /**
     * The appointment that scheduled this encounter.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $appointment
     * @return $this
     */
    public function setAppointment($appointment) {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * The start and end time of the encounter.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * The start and end time of the encounter.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getLength() {
        return $this->length;
    }

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration $length
     * @return $this
     */
    public function setLength($length) {
        $this->length = $length;
        return $this;
    }

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function addReason($reason) {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getIndication() {
        return $this->indication;
    }

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $indication
     * @return $this
     */
    public function addIndication($indication) {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * Details about the admission to a healthcare service.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterHospitalization
     */
    public function getHospitalization() {
        return $this->hospitalization;
    }

    /**
     * Details about the admission to a healthcare service.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterHospitalization $hospitalization
     * @return $this
     */
    public function setHospitalization($hospitalization) {
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * List of locations where  the patient has been during this encounter.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterLocation[]
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * List of locations where  the patient has been during this encounter.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIREncounter\FHIREncounterLocation $location
     * @return $this
     */
    public function addLocation($location) {
        $this->location[] = $location;
        return $this;
    }

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getServiceProvider() {
        return $this->serviceProvider;
    }

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $serviceProvider
     * @return $this
     */
    public function setServiceProvider($serviceProvider) {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function setPartOf($partOf) {
        $this->partOf = $partOf;
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
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusHistory'])) {
                if (is_array($data['statusHistory'])) {
                    foreach($data['statusHistory'] as $d) {
                        $this->addstatusHistory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"statusHistory" must be array of objects or null, '.gettype($data['statusHistory']).' seen.'); 
                }
            }
            if (isset($data['class'])) {
                $this->setClass($data['class']);
            }
            if (isset($data['type'])) {
                if (is_array($data['type'])) {
                    foreach($data['type'] as $d) {
                        $this->addtype($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"type" must be array of objects or null, '.gettype($data['type']).' seen.'); 
                }
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['episodeOfCare'])) {
                if (is_array($data['episodeOfCare'])) {
                    foreach($data['episodeOfCare'] as $d) {
                        $this->addepisodeOfCare($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"episodeOfCare" must be array of objects or null, '.gettype($data['episodeOfCare']).' seen.'); 
                }
            }
            if (isset($data['incomingReferral'])) {
                if (is_array($data['incomingReferral'])) {
                    foreach($data['incomingReferral'] as $d) {
                        $this->addincomingReferral($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"incomingReferral" must be array of objects or null, '.gettype($data['incomingReferral']).' seen.'); 
                }
            }
            if (isset($data['participant'])) {
                if (is_array($data['participant'])) {
                    foreach($data['participant'] as $d) {
                        $this->addparticipant($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"participant" must be array of objects or null, '.gettype($data['participant']).' seen.'); 
                }
            }
            if (isset($data['appointment'])) {
                $this->setAppointment($data['appointment']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['length'])) {
                $this->setLength($data['length']);
            }
            if (isset($data['reason'])) {
                if (is_array($data['reason'])) {
                    foreach($data['reason'] as $d) {
                        $this->addreason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reason" must be array of objects or null, '.gettype($data['reason']).' seen.'); 
                }
            }
            if (isset($data['indication'])) {
                if (is_array($data['indication'])) {
                    foreach($data['indication'] as $d) {
                        $this->addindication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"indication" must be array of objects or null, '.gettype($data['indication']).' seen.'); 
                }
            }
            if (isset($data['hospitalization'])) {
                $this->setHospitalization($data['hospitalization']);
            }
            if (isset($data['location'])) {
                if (is_array($data['location'])) {
                    foreach($data['location'] as $d) {
                        $this->addlocation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"location" must be array of objects or null, '.gettype($data['location']).' seen.'); 
                }
            }
            if (isset($data['serviceProvider'])) {
                $this->setServiceProvider($data['serviceProvider']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
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
        if (isset($this->status)) $json['status'] = $this->status;
        if (0 < count($this->statusHistory)) {
            $json['statusHistory'] = [];
            foreach($this->statusHistory as $statusHistory) {
                if (null !== $statusHistory) $json['statusHistory'][] = $statusHistory;
            }
        }
        if (isset($this->class)) $json['class'] = $this->class;
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                if (null !== $type) $json['type'][] = $type;
            }
        }
        if (isset($this->priority)) $json['priority'] = $this->priority;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (0 < count($this->episodeOfCare)) {
            $json['episodeOfCare'] = [];
            foreach($this->episodeOfCare as $episodeOfCare) {
                if (null !== $episodeOfCare) $json['episodeOfCare'][] = $episodeOfCare;
            }
        }
        if (0 < count($this->incomingReferral)) {
            $json['incomingReferral'] = [];
            foreach($this->incomingReferral as $incomingReferral) {
                if (null !== $incomingReferral) $json['incomingReferral'][] = $incomingReferral;
            }
        }
        if (0 < count($this->participant)) {
            $json['participant'] = [];
            foreach($this->participant as $participant) {
                if (null !== $participant) $json['participant'][] = $participant;
            }
        }
        if (isset($this->appointment)) $json['appointment'] = $this->appointment;
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->length)) $json['length'] = $this->length;
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                if (null !== $reason) $json['reason'][] = $reason;
            }
        }
        if (0 < count($this->indication)) {
            $json['indication'] = [];
            foreach($this->indication as $indication) {
                if (null !== $indication) $json['indication'][] = $indication;
            }
        }
        if (isset($this->hospitalization)) $json['hospitalization'] = $this->hospitalization;
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                if (null !== $location) $json['location'][] = $location;
            }
        }
        if (isset($this->serviceProvider)) $json['serviceProvider'] = $this->serviceProvider;
        if (isset($this->partOf)) $json['partOf'] = $this->partOf;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Encounter xmlns="http://hl7.org/fhir"></Encounter>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->statusHistory)) {
            foreach($this->statusHistory as $statusHistory) {
                $statusHistory->xmlSerialize(true, $sxe->addChild('statusHistory'));
            }
        }
        if (isset($this->class)) $this->class->xmlSerialize(true, $sxe->addChild('class'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (isset($this->priority)) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (0 < count($this->episodeOfCare)) {
            foreach($this->episodeOfCare as $episodeOfCare) {
                $episodeOfCare->xmlSerialize(true, $sxe->addChild('episodeOfCare'));
            }
        }
        if (0 < count($this->incomingReferral)) {
            foreach($this->incomingReferral as $incomingReferral) {
                $incomingReferral->xmlSerialize(true, $sxe->addChild('incomingReferral'));
            }
        }
        if (0 < count($this->participant)) {
            foreach($this->participant as $participant) {
                $participant->xmlSerialize(true, $sxe->addChild('participant'));
            }
        }
        if (isset($this->appointment)) $this->appointment->xmlSerialize(true, $sxe->addChild('appointment'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->length)) $this->length->xmlSerialize(true, $sxe->addChild('length'));
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (0 < count($this->indication)) {
            foreach($this->indication as $indication) {
                $indication->xmlSerialize(true, $sxe->addChild('indication'));
            }
        }
        if (isset($this->hospitalization)) $this->hospitalization->xmlSerialize(true, $sxe->addChild('hospitalization'));
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
        if (isset($this->serviceProvider)) $this->serviceProvider->xmlSerialize(true, $sxe->addChild('serviceProvider'));
        if (isset($this->partOf)) $this->partOf->xmlSerialize(true, $sxe->addChild('partOf'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}