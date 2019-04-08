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
 * A financial tool for tracking value accrued for a particular purpose.  In the healthcare field, used to track charges for a patient, cost centres, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAccount extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Categorizes the account for reporting and searching purposes.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Indicates whether the account is presently used/useable or not.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAccountStatus
     */
    public $status = null;

    /**
     * Indicates the period of time over which the account is allowed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $activePeriod = null;

    /**
     * Identifies the currency to which transactions must be converted when crediting or debiting the account.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $currency = null;

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $balance = null;

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $coveragePeriod = null;

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Account';

    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Indicates whether the account is presently used/useable or not.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAccountStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Indicates whether the account is presently used/useable or not.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAccountStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the period of time over which the account is allowed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getActivePeriod() {
        return $this->activePeriod;
    }

    /**
     * Indicates the period of time over which the account is allowed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $activePeriod
     * @return $this
     */
    public function setActivePeriod($activePeriod) {
        $this->activePeriod = $activePeriod;
        return $this;
    }

    /**
     * Identifies the currency to which transactions must be converted when crediting or debiting the account.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * Identifies the currency to which transactions must be converted when crediting or debiting the account.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $currency
     * @return $this
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $balance
     * @return $this
     */
    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getCoveragePeriod() {
        return $this->coveragePeriod;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $coveragePeriod
     * @return $this
     */
    public function setCoveragePeriod($coveragePeriod) {
        $this->coveragePeriod = $coveragePeriod;
        return $this;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getOwner() {
        return $this->owner;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $owner
     * @return $this
     */
    public function setOwner($owner) {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
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
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['activePeriod'])) {
                $this->setActivePeriod($data['activePeriod']);
            }
            if (isset($data['currency'])) {
                $this->setCurrency($data['currency']);
            }
            if (isset($data['balance'])) {
                $this->setBalance($data['balance']);
            }
            if (isset($data['coveragePeriod'])) {
                $this->setCoveragePeriod($data['coveragePeriod']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['owner'])) {
                $this->setOwner($data['owner']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
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
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->activePeriod)) $json['activePeriod'] = $this->activePeriod;
        if (isset($this->currency)) $json['currency'] = $this->currency;
        if (isset($this->balance)) $json['balance'] = $this->balance;
        if (isset($this->coveragePeriod)) $json['coveragePeriod'] = $this->coveragePeriod;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->owner)) $json['owner'] = $this->owner;
        if (isset($this->description)) $json['description'] = $this->description;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Account xmlns="http://hl7.org/fhir"></Account>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->activePeriod)) $this->activePeriod->xmlSerialize(true, $sxe->addChild('activePeriod'));
        if (isset($this->currency)) $this->currency->xmlSerialize(true, $sxe->addChild('currency'));
        if (isset($this->balance)) $this->balance->xmlSerialize(true, $sxe->addChild('balance'));
        if (isset($this->coveragePeriod)) $this->coveragePeriod->xmlSerialize(true, $sxe->addChild('coveragePeriod'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->owner)) $this->owner->xmlSerialize(true, $sxe->addChild('owner'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}