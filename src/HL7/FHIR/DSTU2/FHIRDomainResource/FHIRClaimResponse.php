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
 * This resource provides the adjudication details from the processing of a Claim resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClaimResponse extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The Response business identifier.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Original request resource referrence.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $ruleset = null;

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $originalRuleset = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The Insurer who produced this adjudicated response.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $requestProvider = null;

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $requestOrganization = null;

    /**
     * Transaction status: error, complete.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $outcome = null;

    /**
     * A description of the status of the adjudication.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $payeeType = null;

    /**
     * The first tier service adjudications for submitted services.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public $item = [];

    /**
     * The first tier service adjudications for payor added services.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public $addItem = [];

    /**
     * Mutually exclusive with Services Provided (Item).
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public $error = [];

    /**
     * The total cost of the services reported.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $totalCost = null;

    /**
     * The amount of deductible applied which was not allocated to any particular service line.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $unallocDeductable = null;

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductible).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $totalBenefit = null;

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $paymentAdjustment = null;

    /**
     * Reason for the payment adjustment.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $paymentAdjustmentReason = null;

    /**
     * Estimated payment data.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $paymentDate = null;

    /**
     * Payable less any payment adjustment.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $paymentAmount = null;

    /**
     * Payment identifier.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $paymentRef = null;

    /**
     * Status of funds reservation (For provider, for Patient, None).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $reserved = null;

    /**
     * The form to be used for printing the content.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $form = null;

    /**
     * Note text.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseNote[]
     */
    public $note = [];

    /**
     * Financial instrument by which payment information for health care.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseCoverage[]
     */
    public $coverage = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ClaimResponse';

    /**
     * The Response business identifier.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The Response business identifier.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Original request resource referrence.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Original request resource referrence.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getRuleset() {
        return $this->ruleset;
    }

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $ruleset
     * @return $this
     */
    public function setRuleset($ruleset) {
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset() {
        return $this->originalRuleset;
    }

    /**
     * The style (standard) and version of the original material which was converted into this resource.
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
     * The Insurer who produced this adjudicated response.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * The Insurer who produced this adjudicated response.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequestProvider() {
        return $this->requestProvider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $requestProvider
     * @return $this
     */
    public function setRequestProvider($requestProvider) {
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequestOrganization() {
        return $this->requestOrganization;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $requestOrganization
     * @return $this
     */
    public function setRequestOrganization($requestOrganization) {
        $this->requestOrganization = $requestOrganization;
        return $this;
    }

    /**
     * Transaction status: error, complete.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getOutcome() {
        return $this->outcome;
    }

    /**
     * Transaction status: error, complete.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $outcome
     * @return $this
     */
    public function setOutcome($outcome) {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A description of the status of the adjudication.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDisposition() {
        return $this->disposition;
    }

    /**
     * A description of the status of the adjudication.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $disposition
     * @return $this
     */
    public function setDisposition($disposition) {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getPayeeType() {
        return $this->payeeType;
    }

    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $payeeType
     * @return $this
     */
    public function setPayeeType($payeeType) {
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * The first tier service adjudications for submitted services.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public function getItem() {
        return $this->item;
    }

    /**
     * The first tier service adjudications for submitted services.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem $item
     * @return $this
     */
    public function addItem($item) {
        $this->item[] = $item;
        return $this;
    }

    /**
     * The first tier service adjudications for payor added services.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public function getAddItem() {
        return $this->addItem;
    }

    /**
     * The first tier service adjudications for payor added services.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem $addItem
     * @return $this
     */
    public function addAddItem($addItem) {
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * Mutually exclusive with Services Provided (Item).
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public function getError() {
        return $this->error;
    }

    /**
     * Mutually exclusive with Services Provided (Item).
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError $error
     * @return $this
     */
    public function addError($error) {
        $this->error[] = $error;
        return $this;
    }

    /**
     * The total cost of the services reported.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalCost() {
        return $this->totalCost;
    }

    /**
     * The total cost of the services reported.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $totalCost
     * @return $this
     */
    public function setTotalCost($totalCost) {
        $this->totalCost = $totalCost;
        return $this;
    }

    /**
     * The amount of deductible applied which was not allocated to any particular service line.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnallocDeductable() {
        return $this->unallocDeductable;
    }

    /**
     * The amount of deductible applied which was not allocated to any particular service line.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $unallocDeductable
     * @return $this
     */
    public function setUnallocDeductable($unallocDeductable) {
        $this->unallocDeductable = $unallocDeductable;
        return $this;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductible).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalBenefit() {
        return $this->totalBenefit;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductible).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $totalBenefit
     * @return $this
     */
    public function setTotalBenefit($totalBenefit) {
        $this->totalBenefit = $totalBenefit;
        return $this;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPaymentAdjustment() {
        return $this->paymentAdjustment;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $paymentAdjustment
     * @return $this
     */
    public function setPaymentAdjustment($paymentAdjustment) {
        $this->paymentAdjustment = $paymentAdjustment;
        return $this;
    }

    /**
     * Reason for the payment adjustment.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getPaymentAdjustmentReason() {
        return $this->paymentAdjustmentReason;
    }

    /**
     * Reason for the payment adjustment.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $paymentAdjustmentReason
     * @return $this
     */
    public function setPaymentAdjustmentReason($paymentAdjustmentReason) {
        $this->paymentAdjustmentReason = $paymentAdjustmentReason;
        return $this;
    }

    /**
     * Estimated payment data.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getPaymentDate() {
        return $this->paymentDate;
    }

    /**
     * Estimated payment data.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $paymentDate
     * @return $this
     */
    public function setPaymentDate($paymentDate) {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Payable less any payment adjustment.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPaymentAmount() {
        return $this->paymentAmount;
    }

    /**
     * Payable less any payment adjustment.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $paymentAmount
     * @return $this
     */
    public function setPaymentAmount($paymentAmount) {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * Payment identifier.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getPaymentRef() {
        return $this->paymentRef;
    }

    /**
     * Payment identifier.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $paymentRef
     * @return $this
     */
    public function setPaymentRef($paymentRef) {
        $this->paymentRef = $paymentRef;
        return $this;
    }

    /**
     * Status of funds reservation (For provider, for Patient, None).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getReserved() {
        return $this->reserved;
    }

    /**
     * Status of funds reservation (For provider, for Patient, None).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $reserved
     * @return $this
     */
    public function setReserved($reserved) {
        $this->reserved = $reserved;
        return $this;
    }

    /**
     * The form to be used for printing the content.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getForm() {
        return $this->form;
    }

    /**
     * The form to be used for printing the content.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $form
     * @return $this
     */
    public function setForm($form) {
        $this->form = $form;
        return $this;
    }

    /**
     * Note text.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseNote[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Note text.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseNote $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseCoverage[]
     */
    public function getCoverage() {
        return $this->coverage;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseCoverage $coverage
     * @return $this
     */
    public function addCoverage($coverage) {
        $this->coverage[] = $coverage;
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
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
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
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['requestProvider'])) {
                $this->setRequestProvider($data['requestProvider']);
            }
            if (isset($data['requestOrganization'])) {
                $this->setRequestOrganization($data['requestOrganization']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['disposition'])) {
                $this->setDisposition($data['disposition']);
            }
            if (isset($data['payeeType'])) {
                $this->setPayeeType($data['payeeType']);
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
            if (isset($data['addItem'])) {
                if (is_array($data['addItem'])) {
                    foreach($data['addItem'] as $d) {
                        $this->addaddItem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"addItem" must be array of objects or null, '.gettype($data['addItem']).' seen.'); 
                }
            }
            if (isset($data['error'])) {
                if (is_array($data['error'])) {
                    foreach($data['error'] as $d) {
                        $this->adderror($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"error" must be array of objects or null, '.gettype($data['error']).' seen.'); 
                }
            }
            if (isset($data['totalCost'])) {
                $this->setTotalCost($data['totalCost']);
            }
            if (isset($data['unallocDeductable'])) {
                $this->setUnallocDeductable($data['unallocDeductable']);
            }
            if (isset($data['totalBenefit'])) {
                $this->setTotalBenefit($data['totalBenefit']);
            }
            if (isset($data['paymentAdjustment'])) {
                $this->setPaymentAdjustment($data['paymentAdjustment']);
            }
            if (isset($data['paymentAdjustmentReason'])) {
                $this->setPaymentAdjustmentReason($data['paymentAdjustmentReason']);
            }
            if (isset($data['paymentDate'])) {
                $this->setPaymentDate($data['paymentDate']);
            }
            if (isset($data['paymentAmount'])) {
                $this->setPaymentAmount($data['paymentAmount']);
            }
            if (isset($data['paymentRef'])) {
                $this->setPaymentRef($data['paymentRef']);
            }
            if (isset($data['reserved'])) {
                $this->setReserved($data['reserved']);
            }
            if (isset($data['form'])) {
                $this->setForm($data['form']);
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addnote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.'); 
                }
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
        if (isset($this->request)) $json['request'] = $this->request;
        if (isset($this->ruleset)) $json['ruleset'] = $this->ruleset;
        if (isset($this->originalRuleset)) $json['originalRuleset'] = $this->originalRuleset;
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->requestProvider)) $json['requestProvider'] = $this->requestProvider;
        if (isset($this->requestOrganization)) $json['requestOrganization'] = $this->requestOrganization;
        if (isset($this->outcome)) $json['outcome'] = $this->outcome;
        if (isset($this->disposition)) $json['disposition'] = $this->disposition;
        if (isset($this->payeeType)) $json['payeeType'] = $this->payeeType;
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                if (null !== $item) $json['item'][] = $item;
            }
        }
        if (0 < count($this->addItem)) {
            $json['addItem'] = [];
            foreach($this->addItem as $addItem) {
                if (null !== $addItem) $json['addItem'][] = $addItem;
            }
        }
        if (0 < count($this->error)) {
            $json['error'] = [];
            foreach($this->error as $error) {
                if (null !== $error) $json['error'][] = $error;
            }
        }
        if (isset($this->totalCost)) $json['totalCost'] = $this->totalCost;
        if (isset($this->unallocDeductable)) $json['unallocDeductable'] = $this->unallocDeductable;
        if (isset($this->totalBenefit)) $json['totalBenefit'] = $this->totalBenefit;
        if (isset($this->paymentAdjustment)) $json['paymentAdjustment'] = $this->paymentAdjustment;
        if (isset($this->paymentAdjustmentReason)) $json['paymentAdjustmentReason'] = $this->paymentAdjustmentReason;
        if (isset($this->paymentDate)) $json['paymentDate'] = $this->paymentDate;
        if (isset($this->paymentAmount)) $json['paymentAmount'] = $this->paymentAmount;
        if (isset($this->paymentRef)) $json['paymentRef'] = $this->paymentRef;
        if (isset($this->reserved)) $json['reserved'] = $this->reserved;
        if (isset($this->form)) $json['form'] = $this->form;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (0 < count($this->coverage)) {
            $json['coverage'] = [];
            foreach($this->coverage as $coverage) {
                if (null !== $coverage) $json['coverage'][] = $coverage;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimResponse xmlns="http://hl7.org/fhir"></ClaimResponse>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (isset($this->ruleset)) $this->ruleset->xmlSerialize(true, $sxe->addChild('ruleset'));
        if (isset($this->originalRuleset)) $this->originalRuleset->xmlSerialize(true, $sxe->addChild('originalRuleset'));
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->requestProvider)) $this->requestProvider->xmlSerialize(true, $sxe->addChild('requestProvider'));
        if (isset($this->requestOrganization)) $this->requestOrganization->xmlSerialize(true, $sxe->addChild('requestOrganization'));
        if (isset($this->outcome)) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (isset($this->disposition)) $this->disposition->xmlSerialize(true, $sxe->addChild('disposition'));
        if (isset($this->payeeType)) $this->payeeType->xmlSerialize(true, $sxe->addChild('payeeType'));
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if (0 < count($this->addItem)) {
            foreach($this->addItem as $addItem) {
                $addItem->xmlSerialize(true, $sxe->addChild('addItem'));
            }
        }
        if (0 < count($this->error)) {
            foreach($this->error as $error) {
                $error->xmlSerialize(true, $sxe->addChild('error'));
            }
        }
        if (isset($this->totalCost)) $this->totalCost->xmlSerialize(true, $sxe->addChild('totalCost'));
        if (isset($this->unallocDeductable)) $this->unallocDeductable->xmlSerialize(true, $sxe->addChild('unallocDeductable'));
        if (isset($this->totalBenefit)) $this->totalBenefit->xmlSerialize(true, $sxe->addChild('totalBenefit'));
        if (isset($this->paymentAdjustment)) $this->paymentAdjustment->xmlSerialize(true, $sxe->addChild('paymentAdjustment'));
        if (isset($this->paymentAdjustmentReason)) $this->paymentAdjustmentReason->xmlSerialize(true, $sxe->addChild('paymentAdjustmentReason'));
        if (isset($this->paymentDate)) $this->paymentDate->xmlSerialize(true, $sxe->addChild('paymentDate'));
        if (isset($this->paymentAmount)) $this->paymentAmount->xmlSerialize(true, $sxe->addChild('paymentAmount'));
        if (isset($this->paymentRef)) $this->paymentRef->xmlSerialize(true, $sxe->addChild('paymentRef'));
        if (isset($this->reserved)) $this->reserved->xmlSerialize(true, $sxe->addChild('reserved'));
        if (isset($this->form)) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->coverage)) {
            foreach($this->coverage as $coverage) {
                $coverage->xmlSerialize(true, $sxe->addChild('coverage'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}