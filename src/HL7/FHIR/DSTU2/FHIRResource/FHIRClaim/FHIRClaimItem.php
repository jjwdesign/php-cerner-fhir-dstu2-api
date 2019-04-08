<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim;

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

use App\HL7\FHIR\DSTU2\FHIRElement\FHIRBackboneElement;

/**
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 */
class FHIRClaimItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A service line number.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The type of product or service.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * Diagnosis applicable for this service or product line.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    public $diagnosisLinkId = [];

    /**
     * If a grouping item then 'GROUP' otherwise it is a node therefore a code to indicate the Professional Service or Product supplied.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $service = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $serviceDate = null;

    /**
     * The number of repetitions of a service or product.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the good or service delivered. The concept of Points allows for assignment of point values for services and/or goods, such that a monetary amount can be assigned to each point.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $points = null;

    /**
     * The quantity times the unit price for an additional  service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $net = null;

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $udi = null;

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $bodySite = null;

    /**
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $subSite = [];

    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or an appliance was lost or stolen.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $modifier = [];

    /**
     * Second tier of goods and services.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimDetail[]
     */
    public $detail = [];

    /**
     * The materials and placement date of prior fixed prosthesis.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimProsthesis
     */
    public $prosthesis = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Claim.Item';

    /**
     * A service line number.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSequence() {
        return $this->sequence;
    }

    /**
     * A service line number.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * The type of product or service.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of product or service.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getProvider() {
        return $this->provider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider) {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Diagnosis applicable for this service or product line.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    public function getDiagnosisLinkId() {
        return $this->diagnosisLinkId;
    }

    /**
     * Diagnosis applicable for this service or product line.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $diagnosisLinkId
     * @return $this
     */
    public function addDiagnosisLinkId($diagnosisLinkId) {
        $this->diagnosisLinkId[] = $diagnosisLinkId;
        return $this;
    }

    /**
     * If a grouping item then 'GROUP' otherwise it is a node therefore a code to indicate the Professional Service or Product supplied.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getService() {
        return $this->service;
    }

    /**
     * If a grouping item then 'GROUP' otherwise it is a node therefore a code to indicate the Professional Service or Product supplied.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $service
     * @return $this
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getServiceDate() {
        return $this->serviceDate;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $serviceDate
     * @return $this
     */
    public function setServiceDate($serviceDate) {
        $this->serviceDate = $serviceDate;
        return $this;
    }

    /**
     * The number of repetitions of a service or product.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * The number of repetitions of a service or product.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnitPrice() {
        return $this->unitPrice;
    }

    /**
     * If the item is a node then this is the fee for the product or service, otherwise this is the total of the fees for the children of the group.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $unitPrice
     * @return $this
     */
    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getFactor() {
        return $this->factor;
    }

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $factor
     * @return $this
     */
    public function setFactor($factor) {
        $this->factor = $factor;
        return $this;
    }

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the good or service delivered. The concept of Points allows for assignment of point values for services and/or goods, such that a monetary amount can be assigned to each point.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPoints() {
        return $this->points;
    }

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the good or service delivered. The concept of Points allows for assignment of point values for services and/or goods, such that a monetary amount can be assigned to each point.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $points
     * @return $this
     */
    public function setPoints($points) {
        $this->points = $points;
        return $this;
    }

    /**
     * The quantity times the unit price for an additional  service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getNet() {
        return $this->net;
    }

    /**
     * The quantity times the unit price for an additional  service or product or charge. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number  * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $net
     * @return $this
     */
    public function setNet($net) {
        $this->net = $net;
        return $this;
    }

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getUdi() {
        return $this->udi;
    }

    /**
     * List of Unique Device Identifiers associated with this line item.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $udi
     * @return $this
     */
    public function setUdi($udi) {
        $this->udi = $udi;
        return $this;
    }

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $bodySite
     * @return $this
     */
    public function setBodySite($bodySite) {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getSubSite() {
        return $this->subSite;
    }

    /**
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $subSite
     * @return $this
     */
    public function addSubSite($subSite) {
        $this->subSite[] = $subSite;
        return $this;
    }

    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or an appliance was lost or stolen.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getModifier() {
        return $this->modifier;
    }

    /**
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is cosmetic or associated with TMJ, or an appliance was lost or stolen.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $modifier
     * @return $this
     */
    public function addModifier($modifier) {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * Second tier of goods and services.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimDetail[]
     */
    public function getDetail() {
        return $this->detail;
    }

    /**
     * Second tier of goods and services.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimDetail $detail
     * @return $this
     */
    public function addDetail($detail) {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * The materials and placement date of prior fixed prosthesis.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimProsthesis
     */
    public function getProsthesis() {
        return $this->prosthesis;
    }

    /**
     * The materials and placement date of prior fixed prosthesis.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaim\FHIRClaimProsthesis $prosthesis
     * @return $this
     */
    public function setProsthesis($prosthesis) {
        $this->prosthesis = $prosthesis;
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
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['diagnosisLinkId'])) {
                if (is_array($data['diagnosisLinkId'])) {
                    foreach($data['diagnosisLinkId'] as $d) {
                        $this->adddiagnosisLinkId($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"diagnosisLinkId" must be array of objects or null, '.gettype($data['diagnosisLinkId']).' seen.'); 
                }
            }
            if (isset($data['service'])) {
                $this->setService($data['service']);
            }
            if (isset($data['serviceDate'])) {
                $this->setServiceDate($data['serviceDate']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['unitPrice'])) {
                $this->setUnitPrice($data['unitPrice']);
            }
            if (isset($data['factor'])) {
                $this->setFactor($data['factor']);
            }
            if (isset($data['points'])) {
                $this->setPoints($data['points']);
            }
            if (isset($data['net'])) {
                $this->setNet($data['net']);
            }
            if (isset($data['udi'])) {
                $this->setUdi($data['udi']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['subSite'])) {
                if (is_array($data['subSite'])) {
                    foreach($data['subSite'] as $d) {
                        $this->addsubSite($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"subSite" must be array of objects or null, '.gettype($data['subSite']).' seen.'); 
                }
            }
            if (isset($data['modifier'])) {
                if (is_array($data['modifier'])) {
                    foreach($data['modifier'] as $d) {
                        $this->addmodifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"modifier" must be array of objects or null, '.gettype($data['modifier']).' seen.'); 
                }
            }
            if (isset($data['detail'])) {
                if (is_array($data['detail'])) {
                    foreach($data['detail'] as $d) {
                        $this->adddetail($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"detail" must be array of objects or null, '.gettype($data['detail']).' seen.'); 
                }
            }
            if (isset($data['prosthesis'])) {
                $this->setProsthesis($data['prosthesis']);
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
        if (isset($this->sequence)) $json['sequence'] = $this->sequence;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->provider)) $json['provider'] = $this->provider;
        if (0 < count($this->diagnosisLinkId)) {
            $json['diagnosisLinkId'] = [];
            foreach($this->diagnosisLinkId as $diagnosisLinkId) {
                if (null !== $diagnosisLinkId) $json['diagnosisLinkId'][] = $diagnosisLinkId;
            }
        }
        if (isset($this->service)) $json['service'] = $this->service;
        if (isset($this->serviceDate)) $json['serviceDate'] = $this->serviceDate;
        if (isset($this->quantity)) $json['quantity'] = $this->quantity;
        if (isset($this->unitPrice)) $json['unitPrice'] = $this->unitPrice;
        if (isset($this->factor)) $json['factor'] = $this->factor;
        if (isset($this->points)) $json['points'] = $this->points;
        if (isset($this->net)) $json['net'] = $this->net;
        if (isset($this->udi)) $json['udi'] = $this->udi;
        if (isset($this->bodySite)) $json['bodySite'] = $this->bodySite;
        if (0 < count($this->subSite)) {
            $json['subSite'] = [];
            foreach($this->subSite as $subSite) {
                if (null !== $subSite) $json['subSite'][] = $subSite;
            }
        }
        if (0 < count($this->modifier)) {
            $json['modifier'] = [];
            foreach($this->modifier as $modifier) {
                if (null !== $modifier) $json['modifier'][] = $modifier;
            }
        }
        if (0 < count($this->detail)) {
            $json['detail'] = [];
            foreach($this->detail as $detail) {
                if (null !== $detail) $json['detail'][] = $detail;
            }
        }
        if (isset($this->prosthesis)) $json['prosthesis'] = $this->prosthesis;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimItem xmlns="http://hl7.org/fhir"></ClaimItem>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->sequence)) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->provider)) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (0 < count($this->diagnosisLinkId)) {
            foreach($this->diagnosisLinkId as $diagnosisLinkId) {
                $diagnosisLinkId->xmlSerialize(true, $sxe->addChild('diagnosisLinkId'));
            }
        }
        if (isset($this->service)) $this->service->xmlSerialize(true, $sxe->addChild('service'));
        if (isset($this->serviceDate)) $this->serviceDate->xmlSerialize(true, $sxe->addChild('serviceDate'));
        if (isset($this->quantity)) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (isset($this->unitPrice)) $this->unitPrice->xmlSerialize(true, $sxe->addChild('unitPrice'));
        if (isset($this->factor)) $this->factor->xmlSerialize(true, $sxe->addChild('factor'));
        if (isset($this->points)) $this->points->xmlSerialize(true, $sxe->addChild('points'));
        if (isset($this->net)) $this->net->xmlSerialize(true, $sxe->addChild('net'));
        if (isset($this->udi)) $this->udi->xmlSerialize(true, $sxe->addChild('udi'));
        if (isset($this->bodySite)) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (0 < count($this->subSite)) {
            foreach($this->subSite as $subSite) {
                $subSite->xmlSerialize(true, $sxe->addChild('subSite'));
            }
        }
        if (0 < count($this->modifier)) {
            foreach($this->modifier as $modifier) {
                $modifier->xmlSerialize(true, $sxe->addChild('modifier'));
            }
        }
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if (isset($this->prosthesis)) $this->prosthesis->xmlSerialize(true, $sxe->addChild('prosthesis'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}