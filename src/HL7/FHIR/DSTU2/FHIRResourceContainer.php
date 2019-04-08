<?php namespace App\HL7\FHIR\DSTU2;

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

class FHIRResourceContainer implements \JsonSerializable
{
    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAccount
     */
    public $Account = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public $AllergyIntolerance = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAppointment
     */
    public $Appointment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAppointmentResponse
     */
    public $AppointmentResponse = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAuditEvent
     */
    public $AuditEvent = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRBasic
     */
    public $Basic = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRBinary
     */
    public $Binary = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRBodySite
     */
    public $BodySite = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRBundle
     */
    public $Bundle = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCarePlan
     */
    public $CarePlan = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClaim
     */
    public $Claim = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClaimResponse
     */
    public $ClaimResponse = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClinicalImpression
     */
    public $ClinicalImpression = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCommunication
     */
    public $Communication = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCommunicationRequest
     */
    public $CommunicationRequest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRComposition
     */
    public $Composition = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRConceptMap
     */
    public $ConceptMap = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCondition
     */
    public $Condition = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRConformance
     */
    public $Conformance = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRContract
     */
    public $Contract = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCoverage
     */
    public $Coverage = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDataElement
     */
    public $DataElement = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDetectedIssue
     */
    public $DetectedIssue = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDevice
     */
    public $Device = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceComponent
     */
    public $DeviceComponent = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceMetric
     */
    public $DeviceMetric = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public $DeviceUseRequest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public $DeviceUseStatement = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDiagnosticOrder
     */
    public $DiagnosticOrder = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDiagnosticReport
     */
    public $DiagnosticReport = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDocumentManifest
     */
    public $DocumentManifest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDocumentReference
     */
    public $DocumentReference = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREligibilityRequest
     */
    public $EligibilityRequest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREligibilityResponse
     */
    public $EligibilityResponse = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREncounter
     */
    public $Encounter = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREnrollmentRequest
     */
    public $EnrollmentRequest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREnrollmentResponse
     */
    public $EnrollmentResponse = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREpisodeOfCare
     */
    public $EpisodeOfCare = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public $ExplanationOfBenefit = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public $FamilyMemberHistory = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRFlag
     */
    public $Flag = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRGoal
     */
    public $Goal = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRGroup
     */
    public $Group = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRHealthcareService
     */
    public $HealthcareService = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImagingObjectSelection
     */
    public $ImagingObjectSelection = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImagingStudy
     */
    public $ImagingStudy = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImmunization
     */
    public $Immunization = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public $ImmunizationRecommendation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImplementationGuide
     */
    public $ImplementationGuide = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRList
     */
    public $List = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRLocation
     */
    public $Location = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedia
     */
    public $Media = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedication
     */
    public $Medication = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationAdministration
     */
    public $MedicationAdministration = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationDispense
     */
    public $MedicationDispense = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationOrder
     */
    public $MedicationOrder = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationStatement
     */
    public $MedicationStatement = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMessageHeader
     */
    public $MessageHeader = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRNamingSystem
     */
    public $NamingSystem = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRNutritionOrder
     */
    public $NutritionOrder = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRObservation
     */
    public $Observation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROperationDefinition
     */
    public $OperationDefinition = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROperationOutcome
     */
    public $OperationOutcome = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrder
     */
    public $Order = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrderResponse
     */
    public $OrderResponse = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrganization
     */
    public $Organization = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPatient
     */
    public $Patient = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPaymentNotice
     */
    public $PaymentNotice = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public $PaymentReconciliation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPerson
     */
    public $Person = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPractitioner
     */
    public $Practitioner = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcedure
     */
    public $Procedure = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcedureRequest
     */
    public $ProcedureRequest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcessRequest
     */
    public $ProcessRequest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcessResponse
     */
    public $ProcessResponse = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProvenance
     */
    public $Provenance = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRQuestionnaire
     */
    public $Questionnaire = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public $QuestionnaireResponse = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRReferralRequest
     */
    public $ReferralRequest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRRelatedPerson
     */
    public $RelatedPerson = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRRiskAssessment
     */
    public $RiskAssessment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSchedule
     */
    public $Schedule = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSearchParameter
     */
    public $SearchParameter = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSlot
     */
    public $Slot = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSpecimen
     */
    public $Specimen = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRStructureDefinition
     */
    public $StructureDefinition = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSubscription
     */
    public $Subscription = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSubstance
     */
    public $Substance = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSupplyDelivery
     */
    public $SupplyDelivery = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSupplyRequest
     */
    public $SupplyRequest = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRTestScript
     */
    public $TestScript = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRValueSet
     */
    public $ValueSet = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRVisionPrescription
     */
    public $VisionPrescription = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRParameters
     */
    public $Parameters = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ResourceContainer';

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAccount
     */
    public function getAccount() {
        return $this->Account;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAccount $Account
     * @return $this
     */
    public function setAccount($Account) {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance() {
        return $this->AllergyIntolerance;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAllergyIntolerance $AllergyIntolerance
     * @return $this
     */
    public function setAllergyIntolerance($AllergyIntolerance) {
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAppointment
     */
    public function getAppointment() {
        return $this->Appointment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAppointment $Appointment
     * @return $this
     */
    public function setAppointment($Appointment) {
        $this->Appointment = $Appointment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAppointmentResponse
     */
    public function getAppointmentResponse() {
        return $this->AppointmentResponse;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAppointmentResponse $AppointmentResponse
     * @return $this
     */
    public function setAppointmentResponse($AppointmentResponse) {
        $this->AppointmentResponse = $AppointmentResponse;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAuditEvent
     */
    public function getAuditEvent() {
        return $this->AuditEvent;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRAuditEvent $AuditEvent
     * @return $this
     */
    public function setAuditEvent($AuditEvent) {
        $this->AuditEvent = $AuditEvent;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRBasic
     */
    public function getBasic() {
        return $this->Basic;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRBasic $Basic
     * @return $this
     */
    public function setBasic($Basic) {
        $this->Basic = $Basic;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRBinary
     */
    public function getBinary() {
        return $this->Binary;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRBinary $Binary
     * @return $this
     */
    public function setBinary($Binary) {
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRBodySite
     */
    public function getBodySite() {
        return $this->BodySite;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRBodySite $BodySite
     * @return $this
     */
    public function setBodySite($BodySite) {
        $this->BodySite = $BodySite;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRBundle
     */
    public function getBundle() {
        return $this->Bundle;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRBundle $Bundle
     * @return $this
     */
    public function setBundle($Bundle) {
        $this->Bundle = $Bundle;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCarePlan
     */
    public function getCarePlan() {
        return $this->CarePlan;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCarePlan $CarePlan
     * @return $this
     */
    public function setCarePlan($CarePlan) {
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClaim
     */
    public function getClaim() {
        return $this->Claim;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClaim $Claim
     * @return $this
     */
    public function setClaim($Claim) {
        $this->Claim = $Claim;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClaimResponse
     */
    public function getClaimResponse() {
        return $this->ClaimResponse;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClaimResponse $ClaimResponse
     * @return $this
     */
    public function setClaimResponse($ClaimResponse) {
        $this->ClaimResponse = $ClaimResponse;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClinicalImpression
     */
    public function getClinicalImpression() {
        return $this->ClinicalImpression;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRClinicalImpression $ClinicalImpression
     * @return $this
     */
    public function setClinicalImpression($ClinicalImpression) {
        $this->ClinicalImpression = $ClinicalImpression;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCommunication
     */
    public function getCommunication() {
        return $this->Communication;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCommunication $Communication
     * @return $this
     */
    public function setCommunication($Communication) {
        $this->Communication = $Communication;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCommunicationRequest
     */
    public function getCommunicationRequest() {
        return $this->CommunicationRequest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCommunicationRequest $CommunicationRequest
     * @return $this
     */
    public function setCommunicationRequest($CommunicationRequest) {
        $this->CommunicationRequest = $CommunicationRequest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRComposition
     */
    public function getComposition() {
        return $this->Composition;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRComposition $Composition
     * @return $this
     */
    public function setComposition($Composition) {
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRConceptMap
     */
    public function getConceptMap() {
        return $this->ConceptMap;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRConceptMap $ConceptMap
     * @return $this
     */
    public function setConceptMap($ConceptMap) {
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCondition
     */
    public function getCondition() {
        return $this->Condition;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCondition $Condition
     * @return $this
     */
    public function setCondition($Condition) {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRConformance
     */
    public function getConformance() {
        return $this->Conformance;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRConformance $Conformance
     * @return $this
     */
    public function setConformance($Conformance) {
        $this->Conformance = $Conformance;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRContract
     */
    public function getContract() {
        return $this->Contract;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRContract $Contract
     * @return $this
     */
    public function setContract($Contract) {
        $this->Contract = $Contract;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCoverage
     */
    public function getCoverage() {
        return $this->Coverage;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRCoverage $Coverage
     * @return $this
     */
    public function setCoverage($Coverage) {
        $this->Coverage = $Coverage;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDataElement
     */
    public function getDataElement() {
        return $this->DataElement;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDataElement $DataElement
     * @return $this
     */
    public function setDataElement($DataElement) {
        $this->DataElement = $DataElement;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDetectedIssue
     */
    public function getDetectedIssue() {
        return $this->DetectedIssue;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDetectedIssue $DetectedIssue
     * @return $this
     */
    public function setDetectedIssue($DetectedIssue) {
        $this->DetectedIssue = $DetectedIssue;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDevice
     */
    public function getDevice() {
        return $this->Device;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDevice $Device
     * @return $this
     */
    public function setDevice($Device) {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceComponent
     */
    public function getDeviceComponent() {
        return $this->DeviceComponent;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceComponent $DeviceComponent
     * @return $this
     */
    public function setDeviceComponent($DeviceComponent) {
        $this->DeviceComponent = $DeviceComponent;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceMetric
     */
    public function getDeviceMetric() {
        return $this->DeviceMetric;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceMetric $DeviceMetric
     * @return $this
     */
    public function setDeviceMetric($DeviceMetric) {
        $this->DeviceMetric = $DeviceMetric;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function getDeviceUseRequest() {
        return $this->DeviceUseRequest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceUseRequest $DeviceUseRequest
     * @return $this
     */
    public function setDeviceUseRequest($DeviceUseRequest) {
        $this->DeviceUseRequest = $DeviceUseRequest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public function getDeviceUseStatement() {
        return $this->DeviceUseStatement;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDeviceUseStatement $DeviceUseStatement
     * @return $this
     */
    public function setDeviceUseStatement($DeviceUseStatement) {
        $this->DeviceUseStatement = $DeviceUseStatement;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDiagnosticOrder
     */
    public function getDiagnosticOrder() {
        return $this->DiagnosticOrder;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDiagnosticOrder $DiagnosticOrder
     * @return $this
     */
    public function setDiagnosticOrder($DiagnosticOrder) {
        $this->DiagnosticOrder = $DiagnosticOrder;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport() {
        return $this->DiagnosticReport;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDiagnosticReport $DiagnosticReport
     * @return $this
     */
    public function setDiagnosticReport($DiagnosticReport) {
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDocumentManifest
     */
    public function getDocumentManifest() {
        return $this->DocumentManifest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDocumentManifest $DocumentManifest
     * @return $this
     */
    public function setDocumentManifest($DocumentManifest) {
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDocumentReference
     */
    public function getDocumentReference() {
        return $this->DocumentReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRDocumentReference $DocumentReference
     * @return $this
     */
    public function setDocumentReference($DocumentReference) {
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREligibilityRequest
     */
    public function getEligibilityRequest() {
        return $this->EligibilityRequest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREligibilityRequest $EligibilityRequest
     * @return $this
     */
    public function setEligibilityRequest($EligibilityRequest) {
        $this->EligibilityRequest = $EligibilityRequest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREligibilityResponse
     */
    public function getEligibilityResponse() {
        return $this->EligibilityResponse;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREligibilityResponse $EligibilityResponse
     * @return $this
     */
    public function setEligibilityResponse($EligibilityResponse) {
        $this->EligibilityResponse = $EligibilityResponse;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREncounter
     */
    public function getEncounter() {
        return $this->Encounter;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREncounter $Encounter
     * @return $this
     */
    public function setEncounter($Encounter) {
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREnrollmentRequest
     */
    public function getEnrollmentRequest() {
        return $this->EnrollmentRequest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREnrollmentRequest $EnrollmentRequest
     * @return $this
     */
    public function setEnrollmentRequest($EnrollmentRequest) {
        $this->EnrollmentRequest = $EnrollmentRequest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREnrollmentResponse
     */
    public function getEnrollmentResponse() {
        return $this->EnrollmentResponse;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREnrollmentResponse $EnrollmentResponse
     * @return $this
     */
    public function setEnrollmentResponse($EnrollmentResponse) {
        $this->EnrollmentResponse = $EnrollmentResponse;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function getEpisodeOfCare() {
        return $this->EpisodeOfCare;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIREpisodeOfCare $EpisodeOfCare
     * @return $this
     */
    public function setEpisodeOfCare($EpisodeOfCare) {
        $this->EpisodeOfCare = $EpisodeOfCare;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public function getExplanationOfBenefit() {
        return $this->ExplanationOfBenefit;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRExplanationOfBenefit $ExplanationOfBenefit
     * @return $this
     */
    public function setExplanationOfBenefit($ExplanationOfBenefit) {
        $this->ExplanationOfBenefit = $ExplanationOfBenefit;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public function getFamilyMemberHistory() {
        return $this->FamilyMemberHistory;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRFamilyMemberHistory $FamilyMemberHistory
     * @return $this
     */
    public function setFamilyMemberHistory($FamilyMemberHistory) {
        $this->FamilyMemberHistory = $FamilyMemberHistory;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRFlag
     */
    public function getFlag() {
        return $this->Flag;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRFlag $Flag
     * @return $this
     */
    public function setFlag($Flag) {
        $this->Flag = $Flag;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRGoal
     */
    public function getGoal() {
        return $this->Goal;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRGoal $Goal
     * @return $this
     */
    public function setGoal($Goal) {
        $this->Goal = $Goal;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRGroup
     */
    public function getGroup() {
        return $this->Group;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRGroup $Group
     * @return $this
     */
    public function setGroup($Group) {
        $this->Group = $Group;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRHealthcareService
     */
    public function getHealthcareService() {
        return $this->HealthcareService;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRHealthcareService $HealthcareService
     * @return $this
     */
    public function setHealthcareService($HealthcareService) {
        $this->HealthcareService = $HealthcareService;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImagingObjectSelection
     */
    public function getImagingObjectSelection() {
        return $this->ImagingObjectSelection;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImagingObjectSelection $ImagingObjectSelection
     * @return $this
     */
    public function setImagingObjectSelection($ImagingObjectSelection) {
        $this->ImagingObjectSelection = $ImagingObjectSelection;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImagingStudy
     */
    public function getImagingStudy() {
        return $this->ImagingStudy;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImagingStudy $ImagingStudy
     * @return $this
     */
    public function setImagingStudy($ImagingStudy) {
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImmunization
     */
    public function getImmunization() {
        return $this->Immunization;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImmunization $Immunization
     * @return $this
     */
    public function setImmunization($Immunization) {
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation() {
        return $this->ImmunizationRecommendation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImmunizationRecommendation $ImmunizationRecommendation
     * @return $this
     */
    public function setImmunizationRecommendation($ImmunizationRecommendation) {
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImplementationGuide
     */
    public function getImplementationGuide() {
        return $this->ImplementationGuide;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRImplementationGuide $ImplementationGuide
     * @return $this
     */
    public function setImplementationGuide($ImplementationGuide) {
        $this->ImplementationGuide = $ImplementationGuide;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRList
     */
    public function getList() {
        return $this->List;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRList $List
     * @return $this
     */
    public function setList($List) {
        $this->List = $List;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRLocation
     */
    public function getLocation() {
        return $this->Location;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRLocation $Location
     * @return $this
     */
    public function setLocation($Location) {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedia
     */
    public function getMedia() {
        return $this->Media;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedia $Media
     * @return $this
     */
    public function setMedia($Media) {
        $this->Media = $Media;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedication
     */
    public function getMedication() {
        return $this->Medication;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedication $Medication
     * @return $this
     */
    public function setMedication($Medication) {
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration() {
        return $this->MedicationAdministration;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationAdministration $MedicationAdministration
     * @return $this
     */
    public function setMedicationAdministration($MedicationAdministration) {
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationDispense
     */
    public function getMedicationDispense() {
        return $this->MedicationDispense;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationDispense $MedicationDispense
     * @return $this
     */
    public function setMedicationDispense($MedicationDispense) {
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationOrder
     */
    public function getMedicationOrder() {
        return $this->MedicationOrder;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationOrder $MedicationOrder
     * @return $this
     */
    public function setMedicationOrder($MedicationOrder) {
        $this->MedicationOrder = $MedicationOrder;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationStatement
     */
    public function getMedicationStatement() {
        return $this->MedicationStatement;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMedicationStatement $MedicationStatement
     * @return $this
     */
    public function setMedicationStatement($MedicationStatement) {
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMessageHeader
     */
    public function getMessageHeader() {
        return $this->MessageHeader;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRMessageHeader $MessageHeader
     * @return $this
     */
    public function setMessageHeader($MessageHeader) {
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRNamingSystem
     */
    public function getNamingSystem() {
        return $this->NamingSystem;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRNamingSystem $NamingSystem
     * @return $this
     */
    public function setNamingSystem($NamingSystem) {
        $this->NamingSystem = $NamingSystem;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRNutritionOrder
     */
    public function getNutritionOrder() {
        return $this->NutritionOrder;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRNutritionOrder $NutritionOrder
     * @return $this
     */
    public function setNutritionOrder($NutritionOrder) {
        $this->NutritionOrder = $NutritionOrder;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRObservation
     */
    public function getObservation() {
        return $this->Observation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRObservation $Observation
     * @return $this
     */
    public function setObservation($Observation) {
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROperationDefinition
     */
    public function getOperationDefinition() {
        return $this->OperationDefinition;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROperationDefinition $OperationDefinition
     * @return $this
     */
    public function setOperationDefinition($OperationDefinition) {
        $this->OperationDefinition = $OperationDefinition;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROperationOutcome
     */
    public function getOperationOutcome() {
        return $this->OperationOutcome;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROperationOutcome $OperationOutcome
     * @return $this
     */
    public function setOperationOutcome($OperationOutcome) {
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrder
     */
    public function getOrder() {
        return $this->Order;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrder $Order
     * @return $this
     */
    public function setOrder($Order) {
        $this->Order = $Order;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrderResponse
     */
    public function getOrderResponse() {
        return $this->OrderResponse;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrderResponse $OrderResponse
     * @return $this
     */
    public function setOrderResponse($OrderResponse) {
        $this->OrderResponse = $OrderResponse;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrganization
     */
    public function getOrganization() {
        return $this->Organization;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIROrganization $Organization
     * @return $this
     */
    public function setOrganization($Organization) {
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPatient
     */
    public function getPatient() {
        return $this->Patient;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPatient $Patient
     * @return $this
     */
    public function setPatient($Patient) {
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPaymentNotice
     */
    public function getPaymentNotice() {
        return $this->PaymentNotice;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPaymentNotice $PaymentNotice
     * @return $this
     */
    public function setPaymentNotice($PaymentNotice) {
        $this->PaymentNotice = $PaymentNotice;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public function getPaymentReconciliation() {
        return $this->PaymentReconciliation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPaymentReconciliation $PaymentReconciliation
     * @return $this
     */
    public function setPaymentReconciliation($PaymentReconciliation) {
        $this->PaymentReconciliation = $PaymentReconciliation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPerson
     */
    public function getPerson() {
        return $this->Person;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPerson $Person
     * @return $this
     */
    public function setPerson($Person) {
        $this->Person = $Person;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPractitioner
     */
    public function getPractitioner() {
        return $this->Practitioner;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPractitioner $Practitioner
     * @return $this
     */
    public function setPractitioner($Practitioner) {
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcedure
     */
    public function getProcedure() {
        return $this->Procedure;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcedure $Procedure
     * @return $this
     */
    public function setProcedure($Procedure) {
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcedureRequest
     */
    public function getProcedureRequest() {
        return $this->ProcedureRequest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcedureRequest $ProcedureRequest
     * @return $this
     */
    public function setProcedureRequest($ProcedureRequest) {
        $this->ProcedureRequest = $ProcedureRequest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcessRequest
     */
    public function getProcessRequest() {
        return $this->ProcessRequest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcessRequest $ProcessRequest
     * @return $this
     */
    public function setProcessRequest($ProcessRequest) {
        $this->ProcessRequest = $ProcessRequest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcessResponse
     */
    public function getProcessResponse() {
        return $this->ProcessResponse;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProcessResponse $ProcessResponse
     * @return $this
     */
    public function setProcessResponse($ProcessResponse) {
        $this->ProcessResponse = $ProcessResponse;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProvenance
     */
    public function getProvenance() {
        return $this->Provenance;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRProvenance $Provenance
     * @return $this
     */
    public function setProvenance($Provenance) {
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRQuestionnaire
     */
    public function getQuestionnaire() {
        return $this->Questionnaire;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRQuestionnaire $Questionnaire
     * @return $this
     */
    public function setQuestionnaire($Questionnaire) {
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public function getQuestionnaireResponse() {
        return $this->QuestionnaireResponse;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRQuestionnaireResponse $QuestionnaireResponse
     * @return $this
     */
    public function setQuestionnaireResponse($QuestionnaireResponse) {
        $this->QuestionnaireResponse = $QuestionnaireResponse;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRReferralRequest
     */
    public function getReferralRequest() {
        return $this->ReferralRequest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRReferralRequest $ReferralRequest
     * @return $this
     */
    public function setReferralRequest($ReferralRequest) {
        $this->ReferralRequest = $ReferralRequest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRRelatedPerson
     */
    public function getRelatedPerson() {
        return $this->RelatedPerson;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRRelatedPerson $RelatedPerson
     * @return $this
     */
    public function setRelatedPerson($RelatedPerson) {
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRRiskAssessment
     */
    public function getRiskAssessment() {
        return $this->RiskAssessment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRRiskAssessment $RiskAssessment
     * @return $this
     */
    public function setRiskAssessment($RiskAssessment) {
        $this->RiskAssessment = $RiskAssessment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSchedule
     */
    public function getSchedule() {
        return $this->Schedule;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSchedule $Schedule
     * @return $this
     */
    public function setSchedule($Schedule) {
        $this->Schedule = $Schedule;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSearchParameter
     */
    public function getSearchParameter() {
        return $this->SearchParameter;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSearchParameter $SearchParameter
     * @return $this
     */
    public function setSearchParameter($SearchParameter) {
        $this->SearchParameter = $SearchParameter;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSlot
     */
    public function getSlot() {
        return $this->Slot;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSlot $Slot
     * @return $this
     */
    public function setSlot($Slot) {
        $this->Slot = $Slot;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSpecimen
     */
    public function getSpecimen() {
        return $this->Specimen;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSpecimen $Specimen
     * @return $this
     */
    public function setSpecimen($Specimen) {
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRStructureDefinition
     */
    public function getStructureDefinition() {
        return $this->StructureDefinition;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRStructureDefinition $StructureDefinition
     * @return $this
     */
    public function setStructureDefinition($StructureDefinition) {
        $this->StructureDefinition = $StructureDefinition;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSubscription
     */
    public function getSubscription() {
        return $this->Subscription;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSubscription $Subscription
     * @return $this
     */
    public function setSubscription($Subscription) {
        $this->Subscription = $Subscription;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSubstance
     */
    public function getSubstance() {
        return $this->Substance;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSubstance $Substance
     * @return $this
     */
    public function setSubstance($Substance) {
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSupplyDelivery
     */
    public function getSupplyDelivery() {
        return $this->SupplyDelivery;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSupplyDelivery $SupplyDelivery
     * @return $this
     */
    public function setSupplyDelivery($SupplyDelivery) {
        $this->SupplyDelivery = $SupplyDelivery;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSupplyRequest
     */
    public function getSupplyRequest() {
        return $this->SupplyRequest;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRSupplyRequest $SupplyRequest
     * @return $this
     */
    public function setSupplyRequest($SupplyRequest) {
        $this->SupplyRequest = $SupplyRequest;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRTestScript
     */
    public function getTestScript() {
        return $this->TestScript;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRTestScript $TestScript
     * @return $this
     */
    public function setTestScript($TestScript) {
        $this->TestScript = $TestScript;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRValueSet
     */
    public function getValueSet() {
        return $this->ValueSet;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRValueSet $ValueSet
     * @return $this
     */
    public function setValueSet($ValueSet) {
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRVisionPrescription
     */
    public function getVisionPrescription() {
        return $this->VisionPrescription;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRVisionPrescription $VisionPrescription
     * @return $this
     */
    public function setVisionPrescription($VisionPrescription) {
        $this->VisionPrescription = $VisionPrescription;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRParameters
     */
    public function getParameters() {
        return $this->Parameters;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRParameters $Parameters
     * @return $this
     */
    public function setParameters($Parameters) {
        $this->Parameters = $Parameters;
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
        if (is_object($data)) {
            $this->{sprintf('set%s', substr(strrchr(get_class($data), 'FHIR'), 4))}($data);
        } else if (is_array($data)) {
            if (1 === ($cnt = count($data))) {
                $this->{sprintf('set%s', key($data))}(reset($data));
            } else if (1 < $cnt) {
                throw new \InvalidArgumentException(sprintf('ResourceContainers may only contain 1 object, "%d" values provided', $cnt));
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be object or array, saw '.gettype($data));
        }
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return mixed
     */
    public function jsonSerialize() {
        if (isset($this->Account)) return $this->Account;
        if (isset($this->AllergyIntolerance)) return $this->AllergyIntolerance;
        if (isset($this->Appointment)) return $this->Appointment;
        if (isset($this->AppointmentResponse)) return $this->AppointmentResponse;
        if (isset($this->AuditEvent)) return $this->AuditEvent;
        if (isset($this->Basic)) return $this->Basic;
        if (isset($this->Binary)) return $this->Binary;
        if (isset($this->BodySite)) return $this->BodySite;
        if (isset($this->Bundle)) return $this->Bundle;
        if (isset($this->CarePlan)) return $this->CarePlan;
        if (isset($this->Claim)) return $this->Claim;
        if (isset($this->ClaimResponse)) return $this->ClaimResponse;
        if (isset($this->ClinicalImpression)) return $this->ClinicalImpression;
        if (isset($this->Communication)) return $this->Communication;
        if (isset($this->CommunicationRequest)) return $this->CommunicationRequest;
        if (isset($this->Composition)) return $this->Composition;
        if (isset($this->ConceptMap)) return $this->ConceptMap;
        if (isset($this->Condition)) return $this->Condition;
        if (isset($this->Conformance)) return $this->Conformance;
        if (isset($this->Contract)) return $this->Contract;
        if (isset($this->Coverage)) return $this->Coverage;
        if (isset($this->DataElement)) return $this->DataElement;
        if (isset($this->DetectedIssue)) return $this->DetectedIssue;
        if (isset($this->Device)) return $this->Device;
        if (isset($this->DeviceComponent)) return $this->DeviceComponent;
        if (isset($this->DeviceMetric)) return $this->DeviceMetric;
        if (isset($this->DeviceUseRequest)) return $this->DeviceUseRequest;
        if (isset($this->DeviceUseStatement)) return $this->DeviceUseStatement;
        if (isset($this->DiagnosticOrder)) return $this->DiagnosticOrder;
        if (isset($this->DiagnosticReport)) return $this->DiagnosticReport;
        if (isset($this->DocumentManifest)) return $this->DocumentManifest;
        if (isset($this->DocumentReference)) return $this->DocumentReference;
        if (isset($this->EligibilityRequest)) return $this->EligibilityRequest;
        if (isset($this->EligibilityResponse)) return $this->EligibilityResponse;
        if (isset($this->Encounter)) return $this->Encounter;
        if (isset($this->EnrollmentRequest)) return $this->EnrollmentRequest;
        if (isset($this->EnrollmentResponse)) return $this->EnrollmentResponse;
        if (isset($this->EpisodeOfCare)) return $this->EpisodeOfCare;
        if (isset($this->ExplanationOfBenefit)) return $this->ExplanationOfBenefit;
        if (isset($this->FamilyMemberHistory)) return $this->FamilyMemberHistory;
        if (isset($this->Flag)) return $this->Flag;
        if (isset($this->Goal)) return $this->Goal;
        if (isset($this->Group)) return $this->Group;
        if (isset($this->HealthcareService)) return $this->HealthcareService;
        if (isset($this->ImagingObjectSelection)) return $this->ImagingObjectSelection;
        if (isset($this->ImagingStudy)) return $this->ImagingStudy;
        if (isset($this->Immunization)) return $this->Immunization;
        if (isset($this->ImmunizationRecommendation)) return $this->ImmunizationRecommendation;
        if (isset($this->ImplementationGuide)) return $this->ImplementationGuide;
        if (isset($this->List)) return $this->List;
        if (isset($this->Location)) return $this->Location;
        if (isset($this->Media)) return $this->Media;
        if (isset($this->Medication)) return $this->Medication;
        if (isset($this->MedicationAdministration)) return $this->MedicationAdministration;
        if (isset($this->MedicationDispense)) return $this->MedicationDispense;
        if (isset($this->MedicationOrder)) return $this->MedicationOrder;
        if (isset($this->MedicationStatement)) return $this->MedicationStatement;
        if (isset($this->MessageHeader)) return $this->MessageHeader;
        if (isset($this->NamingSystem)) return $this->NamingSystem;
        if (isset($this->NutritionOrder)) return $this->NutritionOrder;
        if (isset($this->Observation)) return $this->Observation;
        if (isset($this->OperationDefinition)) return $this->OperationDefinition;
        if (isset($this->OperationOutcome)) return $this->OperationOutcome;
        if (isset($this->Order)) return $this->Order;
        if (isset($this->OrderResponse)) return $this->OrderResponse;
        if (isset($this->Organization)) return $this->Organization;
        if (isset($this->Patient)) return $this->Patient;
        if (isset($this->PaymentNotice)) return $this->PaymentNotice;
        if (isset($this->PaymentReconciliation)) return $this->PaymentReconciliation;
        if (isset($this->Person)) return $this->Person;
        if (isset($this->Practitioner)) return $this->Practitioner;
        if (isset($this->Procedure)) return $this->Procedure;
        if (isset($this->ProcedureRequest)) return $this->ProcedureRequest;
        if (isset($this->ProcessRequest)) return $this->ProcessRequest;
        if (isset($this->ProcessResponse)) return $this->ProcessResponse;
        if (isset($this->Provenance)) return $this->Provenance;
        if (isset($this->Questionnaire)) return $this->Questionnaire;
        if (isset($this->QuestionnaireResponse)) return $this->QuestionnaireResponse;
        if (isset($this->ReferralRequest)) return $this->ReferralRequest;
        if (isset($this->RelatedPerson)) return $this->RelatedPerson;
        if (isset($this->RiskAssessment)) return $this->RiskAssessment;
        if (isset($this->Schedule)) return $this->Schedule;
        if (isset($this->SearchParameter)) return $this->SearchParameter;
        if (isset($this->Slot)) return $this->Slot;
        if (isset($this->Specimen)) return $this->Specimen;
        if (isset($this->StructureDefinition)) return $this->StructureDefinition;
        if (isset($this->Subscription)) return $this->Subscription;
        if (isset($this->Substance)) return $this->Substance;
        if (isset($this->SupplyDelivery)) return $this->SupplyDelivery;
        if (isset($this->SupplyRequest)) return $this->SupplyRequest;
        if (isset($this->TestScript)) return $this->TestScript;
        if (isset($this->ValueSet)) return $this->ValueSet;
        if (isset($this->VisionPrescription)) return $this->VisionPrescription;
        if (isset($this->Parameters)) return $this->Parameters;
        return null;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResourceContainer xmlns="http://hl7.org/fhir"></ResourceContainer>');
        if (isset($this->Account)) $this->Account->xmlSerialize(true, $sxe->addChild('Account'));
        else if (isset($this->AllergyIntolerance)) $this->AllergyIntolerance->xmlSerialize(true, $sxe->addChild('AllergyIntolerance'));
        else if (isset($this->Appointment)) $this->Appointment->xmlSerialize(true, $sxe->addChild('Appointment'));
        else if (isset($this->AppointmentResponse)) $this->AppointmentResponse->xmlSerialize(true, $sxe->addChild('AppointmentResponse'));
        else if (isset($this->AuditEvent)) $this->AuditEvent->xmlSerialize(true, $sxe->addChild('AuditEvent'));
        else if (isset($this->Basic)) $this->Basic->xmlSerialize(true, $sxe->addChild('Basic'));
        else if (isset($this->Binary)) $this->Binary->xmlSerialize(true, $sxe->addChild('Binary'));
        else if (isset($this->BodySite)) $this->BodySite->xmlSerialize(true, $sxe->addChild('BodySite'));
        else if (isset($this->Bundle)) $this->Bundle->xmlSerialize(true, $sxe->addChild('Bundle'));
        else if (isset($this->CarePlan)) $this->CarePlan->xmlSerialize(true, $sxe->addChild('CarePlan'));
        else if (isset($this->Claim)) $this->Claim->xmlSerialize(true, $sxe->addChild('Claim'));
        else if (isset($this->ClaimResponse)) $this->ClaimResponse->xmlSerialize(true, $sxe->addChild('ClaimResponse'));
        else if (isset($this->ClinicalImpression)) $this->ClinicalImpression->xmlSerialize(true, $sxe->addChild('ClinicalImpression'));
        else if (isset($this->Communication)) $this->Communication->xmlSerialize(true, $sxe->addChild('Communication'));
        else if (isset($this->CommunicationRequest)) $this->CommunicationRequest->xmlSerialize(true, $sxe->addChild('CommunicationRequest'));
        else if (isset($this->Composition)) $this->Composition->xmlSerialize(true, $sxe->addChild('Composition'));
        else if (isset($this->ConceptMap)) $this->ConceptMap->xmlSerialize(true, $sxe->addChild('ConceptMap'));
        else if (isset($this->Condition)) $this->Condition->xmlSerialize(true, $sxe->addChild('Condition'));
        else if (isset($this->Conformance)) $this->Conformance->xmlSerialize(true, $sxe->addChild('Conformance'));
        else if (isset($this->Contract)) $this->Contract->xmlSerialize(true, $sxe->addChild('Contract'));
        else if (isset($this->Coverage)) $this->Coverage->xmlSerialize(true, $sxe->addChild('Coverage'));
        else if (isset($this->DataElement)) $this->DataElement->xmlSerialize(true, $sxe->addChild('DataElement'));
        else if (isset($this->DetectedIssue)) $this->DetectedIssue->xmlSerialize(true, $sxe->addChild('DetectedIssue'));
        else if (isset($this->Device)) $this->Device->xmlSerialize(true, $sxe->addChild('Device'));
        else if (isset($this->DeviceComponent)) $this->DeviceComponent->xmlSerialize(true, $sxe->addChild('DeviceComponent'));
        else if (isset($this->DeviceMetric)) $this->DeviceMetric->xmlSerialize(true, $sxe->addChild('DeviceMetric'));
        else if (isset($this->DeviceUseRequest)) $this->DeviceUseRequest->xmlSerialize(true, $sxe->addChild('DeviceUseRequest'));
        else if (isset($this->DeviceUseStatement)) $this->DeviceUseStatement->xmlSerialize(true, $sxe->addChild('DeviceUseStatement'));
        else if (isset($this->DiagnosticOrder)) $this->DiagnosticOrder->xmlSerialize(true, $sxe->addChild('DiagnosticOrder'));
        else if (isset($this->DiagnosticReport)) $this->DiagnosticReport->xmlSerialize(true, $sxe->addChild('DiagnosticReport'));
        else if (isset($this->DocumentManifest)) $this->DocumentManifest->xmlSerialize(true, $sxe->addChild('DocumentManifest'));
        else if (isset($this->DocumentReference)) $this->DocumentReference->xmlSerialize(true, $sxe->addChild('DocumentReference'));
        else if (isset($this->EligibilityRequest)) $this->EligibilityRequest->xmlSerialize(true, $sxe->addChild('EligibilityRequest'));
        else if (isset($this->EligibilityResponse)) $this->EligibilityResponse->xmlSerialize(true, $sxe->addChild('EligibilityResponse'));
        else if (isset($this->Encounter)) $this->Encounter->xmlSerialize(true, $sxe->addChild('Encounter'));
        else if (isset($this->EnrollmentRequest)) $this->EnrollmentRequest->xmlSerialize(true, $sxe->addChild('EnrollmentRequest'));
        else if (isset($this->EnrollmentResponse)) $this->EnrollmentResponse->xmlSerialize(true, $sxe->addChild('EnrollmentResponse'));
        else if (isset($this->EpisodeOfCare)) $this->EpisodeOfCare->xmlSerialize(true, $sxe->addChild('EpisodeOfCare'));
        else if (isset($this->ExplanationOfBenefit)) $this->ExplanationOfBenefit->xmlSerialize(true, $sxe->addChild('ExplanationOfBenefit'));
        else if (isset($this->FamilyMemberHistory)) $this->FamilyMemberHistory->xmlSerialize(true, $sxe->addChild('FamilyMemberHistory'));
        else if (isset($this->Flag)) $this->Flag->xmlSerialize(true, $sxe->addChild('Flag'));
        else if (isset($this->Goal)) $this->Goal->xmlSerialize(true, $sxe->addChild('Goal'));
        else if (isset($this->Group)) $this->Group->xmlSerialize(true, $sxe->addChild('Group'));
        else if (isset($this->HealthcareService)) $this->HealthcareService->xmlSerialize(true, $sxe->addChild('HealthcareService'));
        else if (isset($this->ImagingObjectSelection)) $this->ImagingObjectSelection->xmlSerialize(true, $sxe->addChild('ImagingObjectSelection'));
        else if (isset($this->ImagingStudy)) $this->ImagingStudy->xmlSerialize(true, $sxe->addChild('ImagingStudy'));
        else if (isset($this->Immunization)) $this->Immunization->xmlSerialize(true, $sxe->addChild('Immunization'));
        else if (isset($this->ImmunizationRecommendation)) $this->ImmunizationRecommendation->xmlSerialize(true, $sxe->addChild('ImmunizationRecommendation'));
        else if (isset($this->ImplementationGuide)) $this->ImplementationGuide->xmlSerialize(true, $sxe->addChild('ImplementationGuide'));
        else if (isset($this->List)) $this->List->xmlSerialize(true, $sxe->addChild('List'));
        else if (isset($this->Location)) $this->Location->xmlSerialize(true, $sxe->addChild('Location'));
        else if (isset($this->Media)) $this->Media->xmlSerialize(true, $sxe->addChild('Media'));
        else if (isset($this->Medication)) $this->Medication->xmlSerialize(true, $sxe->addChild('Medication'));
        else if (isset($this->MedicationAdministration)) $this->MedicationAdministration->xmlSerialize(true, $sxe->addChild('MedicationAdministration'));
        else if (isset($this->MedicationDispense)) $this->MedicationDispense->xmlSerialize(true, $sxe->addChild('MedicationDispense'));
        else if (isset($this->MedicationOrder)) $this->MedicationOrder->xmlSerialize(true, $sxe->addChild('MedicationOrder'));
        else if (isset($this->MedicationStatement)) $this->MedicationStatement->xmlSerialize(true, $sxe->addChild('MedicationStatement'));
        else if (isset($this->MessageHeader)) $this->MessageHeader->xmlSerialize(true, $sxe->addChild('MessageHeader'));
        else if (isset($this->NamingSystem)) $this->NamingSystem->xmlSerialize(true, $sxe->addChild('NamingSystem'));
        else if (isset($this->NutritionOrder)) $this->NutritionOrder->xmlSerialize(true, $sxe->addChild('NutritionOrder'));
        else if (isset($this->Observation)) $this->Observation->xmlSerialize(true, $sxe->addChild('Observation'));
        else if (isset($this->OperationDefinition)) $this->OperationDefinition->xmlSerialize(true, $sxe->addChild('OperationDefinition'));
        else if (isset($this->OperationOutcome)) $this->OperationOutcome->xmlSerialize(true, $sxe->addChild('OperationOutcome'));
        else if (isset($this->Order)) $this->Order->xmlSerialize(true, $sxe->addChild('Order'));
        else if (isset($this->OrderResponse)) $this->OrderResponse->xmlSerialize(true, $sxe->addChild('OrderResponse'));
        else if (isset($this->Organization)) $this->Organization->xmlSerialize(true, $sxe->addChild('Organization'));
        else if (isset($this->Patient)) $this->Patient->xmlSerialize(true, $sxe->addChild('Patient'));
        else if (isset($this->PaymentNotice)) $this->PaymentNotice->xmlSerialize(true, $sxe->addChild('PaymentNotice'));
        else if (isset($this->PaymentReconciliation)) $this->PaymentReconciliation->xmlSerialize(true, $sxe->addChild('PaymentReconciliation'));
        else if (isset($this->Person)) $this->Person->xmlSerialize(true, $sxe->addChild('Person'));
        else if (isset($this->Practitioner)) $this->Practitioner->xmlSerialize(true, $sxe->addChild('Practitioner'));
        else if (isset($this->Procedure)) $this->Procedure->xmlSerialize(true, $sxe->addChild('Procedure'));
        else if (isset($this->ProcedureRequest)) $this->ProcedureRequest->xmlSerialize(true, $sxe->addChild('ProcedureRequest'));
        else if (isset($this->ProcessRequest)) $this->ProcessRequest->xmlSerialize(true, $sxe->addChild('ProcessRequest'));
        else if (isset($this->ProcessResponse)) $this->ProcessResponse->xmlSerialize(true, $sxe->addChild('ProcessResponse'));
        else if (isset($this->Provenance)) $this->Provenance->xmlSerialize(true, $sxe->addChild('Provenance'));
        else if (isset($this->Questionnaire)) $this->Questionnaire->xmlSerialize(true, $sxe->addChild('Questionnaire'));
        else if (isset($this->QuestionnaireResponse)) $this->QuestionnaireResponse->xmlSerialize(true, $sxe->addChild('QuestionnaireResponse'));
        else if (isset($this->ReferralRequest)) $this->ReferralRequest->xmlSerialize(true, $sxe->addChild('ReferralRequest'));
        else if (isset($this->RelatedPerson)) $this->RelatedPerson->xmlSerialize(true, $sxe->addChild('RelatedPerson'));
        else if (isset($this->RiskAssessment)) $this->RiskAssessment->xmlSerialize(true, $sxe->addChild('RiskAssessment'));
        else if (isset($this->Schedule)) $this->Schedule->xmlSerialize(true, $sxe->addChild('Schedule'));
        else if (isset($this->SearchParameter)) $this->SearchParameter->xmlSerialize(true, $sxe->addChild('SearchParameter'));
        else if (isset($this->Slot)) $this->Slot->xmlSerialize(true, $sxe->addChild('Slot'));
        else if (isset($this->Specimen)) $this->Specimen->xmlSerialize(true, $sxe->addChild('Specimen'));
        else if (isset($this->StructureDefinition)) $this->StructureDefinition->xmlSerialize(true, $sxe->addChild('StructureDefinition'));
        else if (isset($this->Subscription)) $this->Subscription->xmlSerialize(true, $sxe->addChild('Subscription'));
        else if (isset($this->Substance)) $this->Substance->xmlSerialize(true, $sxe->addChild('Substance'));
        else if (isset($this->SupplyDelivery)) $this->SupplyDelivery->xmlSerialize(true, $sxe->addChild('SupplyDelivery'));
        else if (isset($this->SupplyRequest)) $this->SupplyRequest->xmlSerialize(true, $sxe->addChild('SupplyRequest'));
        else if (isset($this->TestScript)) $this->TestScript->xmlSerialize(true, $sxe->addChild('TestScript'));
        else if (isset($this->ValueSet)) $this->ValueSet->xmlSerialize(true, $sxe->addChild('ValueSet'));
        else if (isset($this->VisionPrescription)) $this->VisionPrescription->xmlSerialize(true, $sxe->addChild('VisionPrescription'));
        else if (isset($this->Parameters)) $this->Parameters->xmlSerialize(true, $sxe->addChild('Parameters'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }

    /**
     * @return mixed
     */
    public function getResource() {
        return $this->jsonSerialize();
    }


}