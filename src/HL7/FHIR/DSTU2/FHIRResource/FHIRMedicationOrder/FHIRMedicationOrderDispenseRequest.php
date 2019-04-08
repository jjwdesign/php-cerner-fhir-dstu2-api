<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRMedicationOrder;

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
 * An order for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationOrder" rather than "MedicationPrescription" to generalize the use across inpatient and outpatient settings as well as for care plans, etc.
 */
class FHIRMedicationOrderDispenseRequest extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * This indicates the validity period of a prescription (stale dating the Prescription).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $validityPeriod = null;

    /**
     * An integer indicating the number of additional times (aka refills or repeats) the patient can receive the prescribed medication.   Usage Notes: This integer does NOT include the original order dispense.   This means that if an order indicates dispense 30 tablets plus  "3 repeats", then the order can be dispensed a total of 4 times and the patient can receive a total of 120 tablets.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $numberOfRepeatsAllowed = null;

    /**
     * The amount that is to be dispensed for one fill.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $expectedSupplyDuration = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationOrder.DispenseRequest';

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept() {
        return $this->medicationCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept($medicationCodeableConcept) {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getMedicationReference() {
        return $this->medicationReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $medicationReference
     * @return $this
     */
    public function setMedicationReference($medicationReference) {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * This indicates the validity period of a prescription (stale dating the Prescription).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod() {
        return $this->validityPeriod;
    }

    /**
     * This indicates the validity period of a prescription (stale dating the Prescription).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $validityPeriod
     * @return $this
     */
    public function setValidityPeriod($validityPeriod) {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * An integer indicating the number of additional times (aka refills or repeats) the patient can receive the prescribed medication.   Usage Notes: This integer does NOT include the original order dispense.   This means that if an order indicates dispense 30 tablets plus  "3 repeats", then the order can be dispensed a total of 4 times and the patient can receive a total of 120 tablets.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getNumberOfRepeatsAllowed() {
        return $this->numberOfRepeatsAllowed;
    }

    /**
     * An integer indicating the number of additional times (aka refills or repeats) the patient can receive the prescribed medication.   Usage Notes: This integer does NOT include the original order dispense.   This means that if an order indicates dispense 30 tablets plus  "3 repeats", then the order can be dispensed a total of 4 times and the patient can receive a total of 120 tablets.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $numberOfRepeatsAllowed
     * @return $this
     */
    public function setNumberOfRepeatsAllowed($numberOfRepeatsAllowed) {
        $this->numberOfRepeatsAllowed = $numberOfRepeatsAllowed;
        return $this;
    }

    /**
     * The amount that is to be dispensed for one fill.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * The amount that is to be dispensed for one fill.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getExpectedSupplyDuration() {
        return $this->expectedSupplyDuration;
    }

    /**
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration $expectedSupplyDuration
     * @return $this
     */
    public function setExpectedSupplyDuration($expectedSupplyDuration) {
        $this->expectedSupplyDuration = $expectedSupplyDuration;
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
            if (isset($data['medicationCodeableConcept'])) {
                $this->setMedicationCodeableConcept($data['medicationCodeableConcept']);
            }
            if (isset($data['medicationReference'])) {
                $this->setMedicationReference($data['medicationReference']);
            }
            if (isset($data['validityPeriod'])) {
                $this->setValidityPeriod($data['validityPeriod']);
            }
            if (isset($data['numberOfRepeatsAllowed'])) {
                $this->setNumberOfRepeatsAllowed($data['numberOfRepeatsAllowed']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['expectedSupplyDuration'])) {
                $this->setExpectedSupplyDuration($data['expectedSupplyDuration']);
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
        if (isset($this->medicationCodeableConcept)) $json['medicationCodeableConcept'] = $this->medicationCodeableConcept;
        if (isset($this->medicationReference)) $json['medicationReference'] = $this->medicationReference;
        if (isset($this->validityPeriod)) $json['validityPeriod'] = $this->validityPeriod;
        if (isset($this->numberOfRepeatsAllowed)) $json['numberOfRepeatsAllowed'] = $this->numberOfRepeatsAllowed;
        if (isset($this->quantity)) $json['quantity'] = $this->quantity;
        if (isset($this->expectedSupplyDuration)) $json['expectedSupplyDuration'] = $this->expectedSupplyDuration;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationOrderDispenseRequest xmlns="http://hl7.org/fhir"></MedicationOrderDispenseRequest>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->medicationCodeableConcept)) $this->medicationCodeableConcept->xmlSerialize(true, $sxe->addChild('medicationCodeableConcept'));
        if (isset($this->medicationReference)) $this->medicationReference->xmlSerialize(true, $sxe->addChild('medicationReference'));
        if (isset($this->validityPeriod)) $this->validityPeriod->xmlSerialize(true, $sxe->addChild('validityPeriod'));
        if (isset($this->numberOfRepeatsAllowed)) $this->numberOfRepeatsAllowed->xmlSerialize(true, $sxe->addChild('numberOfRepeatsAllowed'));
        if (isset($this->quantity)) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (isset($this->expectedSupplyDuration)) $this->expectedSupplyDuration->xmlSerialize(true, $sxe->addChild('expectedSupplyDuration'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}