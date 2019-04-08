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
 * Financial instrument which may be used to pay for or reimburse health care products and services.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCoverage extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The program or plan underwriter or payor.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $issuer = null;

    /**
     * Business Identification Number (BIN number) used to identify the routing  of eclaims if the insurer themselves don't have a BIN number for all of their business.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $bin = null;

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * The id issued to the subscriber.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $subscriberId = null;

    /**
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Subscriber Id, Certificate number or Personal Health Number or Case ID.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage or employer group. May also be referred to as a Policy or Group ID.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $group = null;

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage or employer group. May also be referred to as a Policy or Group ID.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $plan = null;

    /**
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter, for example may be used to identify a specific employer group within a class of employers. May be referred to as a Section or Division ID.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $subPlan = null;

    /**
     * A unique identifier for a dependent under the coverage.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $dependent = null;

    /**
     * An optional counter for a particular instance of the identified coverage which increments upon each renewal.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The party who 'owns' the insurance contractual relationship to the policy or to whom the benefit of the policy is due.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $subscriber = null;

    /**
     * The identifier for a community of providers.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $network = null;

    /**
     * The policy(s) which constitute this insurance coverage.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $contract = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Coverage';

    /**
     * The program or plan underwriter or payor.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getIssuer() {
        return $this->issuer;
    }

    /**
     * The program or plan underwriter or payor.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $issuer
     * @return $this
     */
    public function setIssuer($issuer) {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Business Identification Number (BIN number) used to identify the routing  of eclaims if the insurer themselves don't have a BIN number for all of their business.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getBin() {
        return $this->bin;
    }

    /**
     * Business Identification Number (BIN number) used to identify the routing  of eclaims if the insurer themselves don't have a BIN number for all of their business.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $bin
     * @return $this
     */
    public function setBin($bin) {
        $this->bin = $bin;
        return $this;
    }

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The id issued to the subscriber.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getSubscriberId() {
        return $this->subscriberId;
    }

    /**
     * The id issued to the subscriber.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $subscriberId
     * @return $this
     */
    public function setSubscriberId($subscriberId) {
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Subscriber Id, Certificate number or Personal Health Number or Case ID.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Subscriber Id, Certificate number or Personal Health Number or Case ID.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage or employer group. May also be referred to as a Policy or Group ID.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getGroup() {
        return $this->group;
    }

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage or employer group. May also be referred to as a Policy or Group ID.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $group
     * @return $this
     */
    public function setGroup($group) {
        $this->group = $group;
        return $this;
    }

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage or employer group. May also be referred to as a Policy or Group ID.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getPlan() {
        return $this->plan;
    }

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage or employer group. May also be referred to as a Policy or Group ID.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $plan
     * @return $this
     */
    public function setPlan($plan) {
        $this->plan = $plan;
        return $this;
    }

    /**
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter, for example may be used to identify a specific employer group within a class of employers. May be referred to as a Section or Division ID.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getSubPlan() {
        return $this->subPlan;
    }

    /**
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter, for example may be used to identify a specific employer group within a class of employers. May be referred to as a Section or Division ID.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $subPlan
     * @return $this
     */
    public function setSubPlan($subPlan) {
        $this->subPlan = $subPlan;
        return $this;
    }

    /**
     * A unique identifier for a dependent under the coverage.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getDependent() {
        return $this->dependent;
    }

    /**
     * A unique identifier for a dependent under the coverage.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $dependent
     * @return $this
     */
    public function setDependent($dependent) {
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * An optional counter for a particular instance of the identified coverage which increments upon each renewal.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSequence() {
        return $this->sequence;
    }

    /**
     * An optional counter for a particular instance of the identified coverage which increments upon each renewal.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * The party who 'owns' the insurance contractual relationship to the policy or to whom the benefit of the policy is due.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubscriber() {
        return $this->subscriber;
    }

    /**
     * The party who 'owns' the insurance contractual relationship to the policy or to whom the benefit of the policy is due.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $subscriber
     * @return $this
     */
    public function setSubscriber($subscriber) {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * The identifier for a community of providers.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getNetwork() {
        return $this->network;
    }

    /**
     * The identifier for a community of providers.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $network
     * @return $this
     */
    public function setNetwork($network) {
        $this->network = $network;
        return $this;
    }

    /**
     * The policy(s) which constitute this insurance coverage.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getContract() {
        return $this->contract;
    }

    /**
     * The policy(s) which constitute this insurance coverage.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $contract
     * @return $this
     */
    public function addContract($contract) {
        $this->contract[] = $contract;
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
            if (isset($data['issuer'])) {
                $this->setIssuer($data['issuer']);
            }
            if (isset($data['bin'])) {
                $this->setBin($data['bin']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['subscriberId'])) {
                $this->setSubscriberId($data['subscriberId']);
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
            if (isset($data['group'])) {
                $this->setGroup($data['group']);
            }
            if (isset($data['plan'])) {
                $this->setPlan($data['plan']);
            }
            if (isset($data['subPlan'])) {
                $this->setSubPlan($data['subPlan']);
            }
            if (isset($data['dependent'])) {
                $this->setDependent($data['dependent']);
            }
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['subscriber'])) {
                $this->setSubscriber($data['subscriber']);
            }
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['contract'])) {
                if (is_array($data['contract'])) {
                    foreach($data['contract'] as $d) {
                        $this->addcontract($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contract" must be array of objects or null, '.gettype($data['contract']).' seen.'); 
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
        if (isset($this->issuer)) $json['issuer'] = $this->issuer;
        if (isset($this->bin)) $json['bin'] = $this->bin;
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->subscriberId)) $json['subscriberId'] = $this->subscriberId;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->group)) $json['group'] = $this->group;
        if (isset($this->plan)) $json['plan'] = $this->plan;
        if (isset($this->subPlan)) $json['subPlan'] = $this->subPlan;
        if (isset($this->dependent)) $json['dependent'] = $this->dependent;
        if (isset($this->sequence)) $json['sequence'] = $this->sequence;
        if (isset($this->subscriber)) $json['subscriber'] = $this->subscriber;
        if (isset($this->network)) $json['network'] = $this->network;
        if (0 < count($this->contract)) {
            $json['contract'] = [];
            foreach($this->contract as $contract) {
                if (null !== $contract) $json['contract'][] = $contract;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Coverage xmlns="http://hl7.org/fhir"></Coverage>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->issuer)) $this->issuer->xmlSerialize(true, $sxe->addChild('issuer'));
        if (isset($this->bin)) $this->bin->xmlSerialize(true, $sxe->addChild('bin'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->subscriberId)) $this->subscriberId->xmlSerialize(true, $sxe->addChild('subscriberId'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->group)) $this->group->xmlSerialize(true, $sxe->addChild('group'));
        if (isset($this->plan)) $this->plan->xmlSerialize(true, $sxe->addChild('plan'));
        if (isset($this->subPlan)) $this->subPlan->xmlSerialize(true, $sxe->addChild('subPlan'));
        if (isset($this->dependent)) $this->dependent->xmlSerialize(true, $sxe->addChild('dependent'));
        if (isset($this->sequence)) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (isset($this->subscriber)) $this->subscriber->xmlSerialize(true, $sxe->addChild('subscriber'));
        if (isset($this->network)) $this->network->xmlSerialize(true, $sxe->addChild('network'));
        if (0 < count($this->contract)) {
            foreach($this->contract as $contract) {
                $contract->xmlSerialize(true, $sxe->addChild('contract'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}