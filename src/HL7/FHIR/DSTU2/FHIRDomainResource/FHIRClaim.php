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
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClaim extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The category of claim this is.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRClaimType
     */
    public $type = null;

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The version of the specification on which this instance relies.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $ruleset = null;

    /**
     * The version of the specification from which the original instance was created.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $originalRuleset = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Insurer Identifier, typical BIN number (6 digit).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * The provider which is responsible for the bill, claim pre-determination, pre-authorization.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The organization which is responsible for the bill, claim pre-determination, pre-authorization.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory (Pre-determination).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUse
     */
    public $use = null;

    /**
     * Immediate (stat), best effort (normal), deferred (deferred).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $priority = null;

    /**
     * In the case of a Pre-Determination/Pre-Authorization the provider may request that funds in the amount of the expected Benefit be reserved ('Patient' or 'Provider') to pay for the Benefits determined on the subsequent claim(s). 'None' explicitly indicates no funds reserving is requested.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $fundsReserve = null;

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * Facility where the services were provided.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $facility = null;

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $prescription = null;

    /**
     * Original prescription to support the dispensing of pharmacy services, medications or products.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $originalPrescription = null;

    /**
     * The party to be reimbursed for the services.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimPayee
     */
    public $payee = null;

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $referral = null;

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public $diagnosis = [];

    /**
     * List of patient conditions for which care is sought.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $condition = [];

    /**
     * Patient Resource.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Financial instrument by which payment information for health care.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimCoverage[]
     */
    public $coverage = [];

    /**
     * Factors which may influence the applicability of coverage.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $exception = [];

    /**
     * Name of school for over-aged dependents.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $school = null;

    /**
     * Date of an accident which these services are addressing.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $accident = null;

    /**
     * Type of accident: work, auto, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $accidentType = null;

    /**
     * A list of intervention and exception codes which may influence the adjudication of the claim.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $interventionException = [];

    /**
     * First tier of goods and services.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimItem[]
     */
    public $item = [];

    /**
     * Code to indicate that Xrays, images, emails, documents, models or attachments are being sent in support of this submission.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $additionalMaterials = [];

    /**
     * A list of teeth which would be expected but are not found due to having been previously  extracted or for other reasons.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimMissingTeeth[]
     */
    public $missingTeeth = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Claim';

    /**
     * The category of claim this is.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRClaimType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The category of claim this is.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRClaimType $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The version of the specification on which this instance relies.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getRuleset() {
        return $this->ruleset;
    }

    /**
     * The version of the specification on which this instance relies.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $ruleset
     * @return $this
     */
    public function setRuleset($ruleset) {
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * The version of the specification from which the original instance was created.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset() {
        return $this->originalRuleset;
    }

    /**
     * The version of the specification from which the original instance was created.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $originalRuleset
     * @return $this
     */
    public function setOriginalRuleset($originalRuleset) {
        $this->originalRuleset = $originalRuleset;
        return $this;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Insurer Identifier, typical BIN number (6 digit).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * Insurer Identifier, typical BIN number (6 digit).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $target
     * @return $this
     */
    public function setTarget($target) {
        $this->target = $target;
        return $this;
    }

    /**
     * The provider which is responsible for the bill, claim pre-determination, pre-authorization.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getProvider() {
        return $this->provider;
    }

    /**
     * The provider which is responsible for the bill, claim pre-determination, pre-authorization.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider) {
        $this->provider = $provider;
        return $this;
    }

    /**
     * The organization which is responsible for the bill, claim pre-determination, pre-authorization.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * The organization which is responsible for the bill, claim pre-determination, pre-authorization.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory (Pre-determination).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUse
     */
    public function getUse() {
        return $this->use;
    }

    /**
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory (Pre-determination).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUse $use
     * @return $this
     */
    public function setUse($use) {
        $this->use = $use;
        return $this;
    }

    /**
     * Immediate (stat), best effort (normal), deferred (deferred).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * Immediate (stat), best effort (normal), deferred (deferred).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $priority
     * @return $this
     */
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * In the case of a Pre-Determination/Pre-Authorization the provider may request that funds in the amount of the expected Benefit be reserved ('Patient' or 'Provider') to pay for the Benefits determined on the subsequent claim(s). 'None' explicitly indicates no funds reserving is requested.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getFundsReserve() {
        return $this->fundsReserve;
    }

    /**
     * In the case of a Pre-Determination/Pre-Authorization the provider may request that funds in the amount of the expected Benefit be reserved ('Patient' or 'Provider') to pay for the Benefits determined on the subsequent claim(s). 'None' explicitly indicates no funds reserving is requested.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $fundsReserve
     * @return $this
     */
    public function setFundsReserve($fundsReserve) {
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getEnterer() {
        return $this->enterer;
    }

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $enterer
     * @return $this
     */
    public function setEnterer($enterer) {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Facility where the services were provided.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getFacility() {
        return $this->facility;
    }

    /**
     * Facility where the services were provided.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $facility
     * @return $this
     */
    public function setFacility($facility) {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPrescription() {
        return $this->prescription;
    }

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $prescription
     * @return $this
     */
    public function setPrescription($prescription) {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Original prescription to support the dispensing of pharmacy services, medications or products.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getOriginalPrescription() {
        return $this->originalPrescription;
    }

    /**
     * Original prescription to support the dispensing of pharmacy services, medications or products.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $originalPrescription
     * @return $this
     */
    public function setOriginalPrescription($originalPrescription) {
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * The party to be reimbursed for the services.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimPayee
     */
    public function getPayee() {
        return $this->payee;
    }

    /**
     * The party to be reimbursed for the services.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimPayee $payee
     * @return $this
     */
    public function setPayee($payee) {
        $this->payee = $payee;
        return $this;
    }

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getReferral() {
        return $this->referral;
    }

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $referral
     * @return $this
     */
    public function setReferral($referral) {
        $this->referral = $referral;
        return $this;
    }

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public function getDiagnosis() {
        return $this->diagnosis;
    }

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimDiagnosis $diagnosis
     * @return $this
     */
    public function addDiagnosis($diagnosis) {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * List of patient conditions for which care is sought.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getCondition() {
        return $this->condition;
    }

    /**
     * List of patient conditions for which care is sought.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $condition
     * @return $this
     */
    public function addCondition($condition) {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Patient Resource.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * Patient Resource.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimCoverage[]
     */
    public function getCoverage() {
        return $this->coverage;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimCoverage $coverage
     * @return $this
     */
    public function addCoverage($coverage) {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * Factors which may influence the applicability of coverage.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getException() {
        return $this->exception;
    }

    /**
     * Factors which may influence the applicability of coverage.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $exception
     * @return $this
     */
    public function addException($exception) {
        $this->exception[] = $exception;
        return $this;
    }

    /**
     * Name of school for over-aged dependents.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getSchool() {
        return $this->school;
    }

    /**
     * Name of school for over-aged dependents.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $school
     * @return $this
     */
    public function setSchool($school) {
        $this->school = $school;
        return $this;
    }

    /**
     * Date of an accident which these services are addressing.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getAccident() {
        return $this->accident;
    }

    /**
     * Date of an accident which these services are addressing.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $accident
     * @return $this
     */
    public function setAccident($accident) {
        $this->accident = $accident;
        return $this;
    }

    /**
     * Type of accident: work, auto, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getAccidentType() {
        return $this->accidentType;
    }

    /**
     * Type of accident: work, auto, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $accidentType
     * @return $this
     */
    public function setAccidentType($accidentType) {
        $this->accidentType = $accidentType;
        return $this;
    }

    /**
     * A list of intervention and exception codes which may influence the adjudication of the claim.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getInterventionException() {
        return $this->interventionException;
    }

    /**
     * A list of intervention and exception codes which may influence the adjudication of the claim.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $interventionException
     * @return $this
     */
    public function addInterventionException($interventionException) {
        $this->interventionException[] = $interventionException;
        return $this;
    }

    /**
     * First tier of goods and services.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimItem[]
     */
    public function getItem() {
        return $this->item;
    }

    /**
     * First tier of goods and services.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimItem $item
     * @return $this
     */
    public function addItem($item) {
        $this->item[] = $item;
        return $this;
    }

    /**
     * Code to indicate that Xrays, images, emails, documents, models or attachments are being sent in support of this submission.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getAdditionalMaterials() {
        return $this->additionalMaterials;
    }

    /**
     * Code to indicate that Xrays, images, emails, documents, models or attachments are being sent in support of this submission.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $additionalMaterials
     * @return $this
     */
    public function addAdditionalMaterials($additionalMaterials) {
        $this->additionalMaterials[] = $additionalMaterials;
        return $this;
    }

    /**
     * A list of teeth which would be expected but are not found due to having been previously  extracted or for other reasons.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimMissingTeeth[]
     */
    public function getMissingTeeth() {
        return $this->missingTeeth;
    }

    /**
     * A list of teeth which would be expected but are not found due to having been previously  extracted or for other reasons.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimMissingTeeth $missingTeeth
     * @return $this
     */
    public function addMissingTeeth($missingTeeth) {
        $this->missingTeeth[] = $missingTeeth;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addidentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.'); 
                }
            }
            if (isset($data['ruleset'])) {
                $this->setRuleset($data['ruleset']);
            }
            if (isset($data['originalRuleset'])) {
                $this->setOriginalRuleset($data['originalRuleset']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['fundsReserve'])) {
                $this->setFundsReserve($data['fundsReserve']);
            }
            if (isset($data['enterer'])) {
                $this->setEnterer($data['enterer']);
            }
            if (isset($data['facility'])) {
                $this->setFacility($data['facility']);
            }
            if (isset($data['prescription'])) {
                $this->setPrescription($data['prescription']);
            }
            if (isset($data['originalPrescription'])) {
                $this->setOriginalPrescription($data['originalPrescription']);
            }
            if (isset($data['payee'])) {
                $this->setPayee($data['payee']);
            }
            if (isset($data['referral'])) {
                $this->setReferral($data['referral']);
            }
            if (isset($data['diagnosis'])) {
                if (is_array($data['diagnosis'])) {
                    foreach($data['diagnosis'] as $d) {
                        $this->adddiagnosis($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"diagnosis" must be array of objects or null, '.gettype($data['diagnosis']).' seen.'); 
                }
            }
            if (isset($data['condition'])) {
                if (is_array($data['condition'])) {
                    foreach($data['condition'] as $d) {
                        $this->addcondition($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"condition" must be array of objects or null, '.gettype($data['condition']).' seen.'); 
                }
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['coverage'])) {
                if (is_array($data['coverage'])) {
                    foreach($data['coverage'] as $d) {
                        $this->addcoverage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"coverage" must be array of objects or null, '.gettype($data['coverage']).' seen.'); 
                }
            }
            if (isset($data['exception'])) {
                if (is_array($data['exception'])) {
                    foreach($data['exception'] as $d) {
                        $this->addexception($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"exception" must be array of objects or null, '.gettype($data['exception']).' seen.'); 
                }
            }
            if (isset($data['school'])) {
                $this->setSchool($data['school']);
            }
            if (isset($data['accident'])) {
                $this->setAccident($data['accident']);
            }
            if (isset($data['accidentType'])) {
                $this->setAccidentType($data['accidentType']);
            }
            if (isset($data['interventionException'])) {
                if (is_array($data['interventionException'])) {
                    foreach($data['interventionException'] as $d) {
                        $this->addinterventionException($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"interventionException" must be array of objects or null, '.gettype($data['interventionException']).' seen.'); 
                }
            }
            if (isset($data['item'])) {
                if (is_array($data['item'])) {
                    foreach($data['item'] as $d) {
                        $this->additem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"item" must be array of objects or null, '.gettype($data['item']).' seen.'); 
                }
            }
            if (isset($data['additionalMaterials'])) {
                if (is_array($data['additionalMaterials'])) {
                    foreach($data['additionalMaterials'] as $d) {
                        $this->addadditionalMaterials($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"additionalMaterials" must be array of objects or null, '.gettype($data['additionalMaterials']).' seen.'); 
                }
            }
            if (isset($data['missingTeeth'])) {
                if (is_array($data['missingTeeth'])) {
                    foreach($data['missingTeeth'] as $d) {
                        $this->addmissingTeeth($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"missingTeeth" must be array of objects or null, '.gettype($data['missingTeeth']).' seen.'); 
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->ruleset)) $json['ruleset'] = $this->ruleset;
        if (isset($this->originalRuleset)) $json['originalRuleset'] = $this->originalRuleset;
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->target)) $json['target'] = $this->target;
        if (isset($this->provider)) $json['provider'] = $this->provider;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->use)) $json['use'] = $this->use;
        if (isset($this->priority)) $json['priority'] = $this->priority;
        if (isset($this->fundsReserve)) $json['fundsReserve'] = $this->fundsReserve;
        if (isset($this->enterer)) $json['enterer'] = $this->enterer;
        if (isset($this->facility)) $json['facility'] = $this->facility;
        if (isset($this->prescription)) $json['prescription'] = $this->prescription;
        if (isset($this->originalPrescription)) $json['originalPrescription'] = $this->originalPrescription;
        if (isset($this->payee)) $json['payee'] = $this->payee;
        if (isset($this->referral)) $json['referral'] = $this->referral;
        if (0 < count($this->diagnosis)) {
            $json['diagnosis'] = [];
            foreach($this->diagnosis as $diagnosis) {
                if (null !== $diagnosis) $json['diagnosis'][] = $diagnosis;
            }
        }
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                if (null !== $condition) $json['condition'][] = $condition;
            }
        }
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (0 < count($this->coverage)) {
            $json['coverage'] = [];
            foreach($this->coverage as $coverage) {
                if (null !== $coverage) $json['coverage'][] = $coverage;
            }
        }
        if (0 < count($this->exception)) {
            $json['exception'] = [];
            foreach($this->exception as $exception) {
                if (null !== $exception) $json['exception'][] = $exception;
            }
        }
        if (isset($this->school)) $json['school'] = $this->school;
        if (isset($this->accident)) $json['accident'] = $this->accident;
        if (isset($this->accidentType)) $json['accidentType'] = $this->accidentType;
        if (0 < count($this->interventionException)) {
            $json['interventionException'] = [];
            foreach($this->interventionException as $interventionException) {
                if (null !== $interventionException) $json['interventionException'][] = $interventionException;
            }
        }
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                if (null !== $item) $json['item'][] = $item;
            }
        }
        if (0 < count($this->additionalMaterials)) {
            $json['additionalMaterials'] = [];
            foreach($this->additionalMaterials as $additionalMaterials) {
                if (null !== $additionalMaterials) $json['additionalMaterials'][] = $additionalMaterials;
            }
        }
        if (0 < count($this->missingTeeth)) {
            $json['missingTeeth'] = [];
            foreach($this->missingTeeth as $missingTeeth) {
                if (null !== $missingTeeth) $json['missingTeeth'][] = $missingTeeth;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Claim xmlns="http://hl7.org/fhir"></Claim>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->ruleset)) $this->ruleset->xmlSerialize(true, $sxe->addChild('ruleset'));
        if (isset($this->originalRuleset)) $this->originalRuleset->xmlSerialize(true, $sxe->addChild('originalRuleset'));
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->target)) $this->target->xmlSerialize(true, $sxe->addChild('target'));
        if (isset($this->provider)) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->use)) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (isset($this->priority)) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (isset($this->fundsReserve)) $this->fundsReserve->xmlSerialize(true, $sxe->addChild('fundsReserve'));
        if (isset($this->enterer)) $this->enterer->xmlSerialize(true, $sxe->addChild('enterer'));
        if (isset($this->facility)) $this->facility->xmlSerialize(true, $sxe->addChild('facility'));
        if (isset($this->prescription)) $this->prescription->xmlSerialize(true, $sxe->addChild('prescription'));
        if (isset($this->originalPrescription)) $this->originalPrescription->xmlSerialize(true, $sxe->addChild('originalPrescription'));
        if (isset($this->payee)) $this->payee->xmlSerialize(true, $sxe->addChild('payee'));
        if (isset($this->referral)) $this->referral->xmlSerialize(true, $sxe->addChild('referral'));
        if (0 < count($this->diagnosis)) {
            foreach($this->diagnosis as $diagnosis) {
                $diagnosis->xmlSerialize(true, $sxe->addChild('diagnosis'));
            }
        }
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (0 < count($this->coverage)) {
            foreach($this->coverage as $coverage) {
                $coverage->xmlSerialize(true, $sxe->addChild('coverage'));
            }
        }
        if (0 < count($this->exception)) {
            foreach($this->exception as $exception) {
                $exception->xmlSerialize(true, $sxe->addChild('exception'));
            }
        }
        if (isset($this->school)) $this->school->xmlSerialize(true, $sxe->addChild('school'));
        if (isset($this->accident)) $this->accident->xmlSerialize(true, $sxe->addChild('accident'));
        if (isset($this->accidentType)) $this->accidentType->xmlSerialize(true, $sxe->addChild('accidentType'));
        if (0 < count($this->interventionException)) {
            foreach($this->interventionException as $interventionException) {
                $interventionException->xmlSerialize(true, $sxe->addChild('interventionException'));
            }
        }
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if (0 < count($this->additionalMaterials)) {
            foreach($this->additionalMaterials as $additionalMaterials) {
                $additionalMaterials->xmlSerialize(true, $sxe->addChild('additionalMaterials'));
            }
        }
        if (0 < count($this->missingTeeth)) {
            foreach($this->missingTeeth as $missingTeeth) {
                $missingTeeth->xmlSerialize(true, $sxe->addChild('missingTeeth'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}