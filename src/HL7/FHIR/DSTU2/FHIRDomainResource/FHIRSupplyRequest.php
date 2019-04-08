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
 * A record of a request for a medication, substance or device used in the healthcare setting.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSupplyRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The Practitioner , Organization or Patient who initiated this order for the supply.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * When the request was made.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Unique identifier for this supply request.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Status of the supply request.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSupplyRequestStatus
     */
    public $status = null;

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $kind = null;

    /**
     * The item that is requested to be supplied.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $orderedItem = null;

    /**
     * Who is intended to fulfill the request.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $supplier = [];

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * When the request should be fulfilled.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSupplyRequest\FHIRSupplyRequestWhen
     */
    public $when = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SupplyRequest';

    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The Practitioner , Organization or Patient who initiated this order for the supply.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * The Practitioner , Organization or Patient who initiated this order for the supply.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * When the request was made.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * When the request was made.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Unique identifier for this supply request.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique identifier for this supply request.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Status of the supply request.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSupplyRequestStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Status of the supply request.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSupplyRequestStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getKind() {
        return $this->kind;
    }

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $kind
     * @return $this
     */
    public function setKind($kind) {
        $this->kind = $kind;
        return $this;
    }

    /**
     * The item that is requested to be supplied.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getOrderedItem() {
        return $this->orderedItem;
    }

    /**
     * The item that is requested to be supplied.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $orderedItem
     * @return $this
     */
    public function setOrderedItem($orderedItem) {
        $this->orderedItem = $orderedItem;
        return $this;
    }

    /**
     * Who is intended to fulfill the request.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getSupplier() {
        return $this->supplier;
    }

    /**
     * Who is intended to fulfill the request.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $supplier
     * @return $this
     */
    public function addSupplier($supplier) {
        $this->supplier[] = $supplier;
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
     * When the request should be fulfilled.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSupplyRequest\FHIRSupplyRequestWhen
     */
    public function getWhen() {
        return $this->when;
    }

    /**
     * When the request should be fulfilled.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSupplyRequest\FHIRSupplyRequestWhen $when
     * @return $this
     */
    public function setWhen($when) {
        $this->when = $when;
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
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['kind'])) {
                $this->setKind($data['kind']);
            }
            if (isset($data['orderedItem'])) {
                $this->setOrderedItem($data['orderedItem']);
            }
            if (isset($data['supplier'])) {
                if (is_array($data['supplier'])) {
                    foreach($data['supplier'] as $d) {
                        $this->addsupplier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supplier" must be array of objects or null, '.gettype($data['supplier']).' seen.'); 
                }
            }
            if (isset($data['reasonCodeableConcept'])) {
                $this->setReasonCodeableConcept($data['reasonCodeableConcept']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['when'])) {
                $this->setWhen($data['when']);
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
        if (isset($this->source)) $json['source'] = $this->source;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->kind)) $json['kind'] = $this->kind;
        if (isset($this->orderedItem)) $json['orderedItem'] = $this->orderedItem;
        if (0 < count($this->supplier)) {
            $json['supplier'] = [];
            foreach($this->supplier as $supplier) {
                if (null !== $supplier) $json['supplier'][] = $supplier;
            }
        }
        if (isset($this->reasonCodeableConcept)) $json['reasonCodeableConcept'] = $this->reasonCodeableConcept;
        if (isset($this->reasonReference)) $json['reasonReference'] = $this->reasonReference;
        if (isset($this->when)) $json['when'] = $this->when;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SupplyRequest xmlns="http://hl7.org/fhir"></SupplyRequest>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->source)) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->kind)) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (isset($this->orderedItem)) $this->orderedItem->xmlSerialize(true, $sxe->addChild('orderedItem'));
        if (0 < count($this->supplier)) {
            foreach($this->supplier as $supplier) {
                $supplier->xmlSerialize(true, $sxe->addChild('supplier'));
            }
        }
        if (isset($this->reasonCodeableConcept)) $this->reasonCodeableConcept->xmlSerialize(true, $sxe->addChild('reasonCodeableConcept'));
        if (isset($this->reasonReference)) $this->reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
        if (isset($this->when)) $this->when->xmlSerialize(true, $sxe->addChild('when'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}