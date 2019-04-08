<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRNutritionOrder;

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
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 */
class FHIRNutritionOrderSupplement extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $productName = null;

    /**
     * The time period and frequency at which the supplement(s) should be given.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming[]
     */
    public $schedule = [];

    /**
     * The amount of the nutritional supplement to be given.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * Free text or additional instructions or information pertaining to the oral supplement.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $instruction = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'NutritionOrder.Supplement';

    /**
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getProductName() {
        return $this->productName;
    }

    /**
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $productName
     * @return $this
     */
    public function setProductName($productName) {
        $this->productName = $productName;
        return $this;
    }

    /**
     * The time period and frequency at which the supplement(s) should be given.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming[]
     */
    public function getSchedule() {
        return $this->schedule;
    }

    /**
     * The time period and frequency at which the supplement(s) should be given.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $schedule
     * @return $this
     */
    public function addSchedule($schedule) {
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * The amount of the nutritional supplement to be given.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * The amount of the nutritional supplement to be given.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Free text or additional instructions or information pertaining to the oral supplement.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getInstruction() {
        return $this->instruction;
    }

    /**
     * Free text or additional instructions or information pertaining to the oral supplement.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $instruction
     * @return $this
     */
    public function setInstruction($instruction) {
        $this->instruction = $instruction;
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
            if (isset($data['productName'])) {
                $this->setProductName($data['productName']);
            }
            if (isset($data['schedule'])) {
                if (is_array($data['schedule'])) {
                    foreach($data['schedule'] as $d) {
                        $this->addschedule($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"schedule" must be array of objects or null, '.gettype($data['schedule']).' seen.'); 
                }
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['instruction'])) {
                $this->setInstruction($data['instruction']);
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->productName)) $json['productName'] = $this->productName;
        if (0 < count($this->schedule)) {
            $json['schedule'] = [];
            foreach($this->schedule as $schedule) {
                if (null !== $schedule) $json['schedule'][] = $schedule;
            }
        }
        if (isset($this->quantity)) $json['quantity'] = $this->quantity;
        if (isset($this->instruction)) $json['instruction'] = $this->instruction;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<NutritionOrderSupplement xmlns="http://hl7.org/fhir"></NutritionOrderSupplement>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->productName)) $this->productName->xmlSerialize(true, $sxe->addChild('productName'));
        if (0 < count($this->schedule)) {
            foreach($this->schedule as $schedule) {
                $schedule->xmlSerialize(true, $sxe->addChild('schedule'));
            }
        }
        if (isset($this->quantity)) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (isset($this->instruction)) $this->instruction->xmlSerialize(true, $sxe->addChild('instruction'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}