<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRObservation;

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
 * Measurements and simple assertions made about a patient, device or other subject.
 */
class FHIRObservationComponent extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $dataAbsentReason = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public $referenceRange = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Observation.Component';

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity() {
        return $this->valueQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity) {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept() {
        return $this->valueCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept) {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getValueString() {
        return $this->valueString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString) {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getValueRange() {
        return $this->valueRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange) {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getValueRatio() {
        return $this->valueRatio;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio) {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData() {
        return $this->valueSampledData;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData) {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment() {
        return $this->valueAttachment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment) {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getValueTime() {
        return $this->valueTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime) {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime() {
        return $this->valueDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime) {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod() {
        return $this->valuePeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod) {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason() {
        return $this->dataAbsentReason;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     * @return $this
     */
    public function setDataAbsentReason($dataAbsentReason) {
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange() {
        return $this->referenceRange;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRObservation\FHIRObservationReferenceRange $referenceRange
     * @return $this
     */
    public function addReferenceRange($referenceRange) {
        $this->referenceRange[] = $referenceRange;
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
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['valueQuantity'])) {
                $this->setValueQuantity($data['valueQuantity']);
            }
            if (isset($data['valueCodeableConcept'])) {
                $this->setValueCodeableConcept($data['valueCodeableConcept']);
            }
            if (isset($data['valueString'])) {
                $this->setValueString($data['valueString']);
            }
            if (isset($data['valueRange'])) {
                $this->setValueRange($data['valueRange']);
            }
            if (isset($data['valueRatio'])) {
                $this->setValueRatio($data['valueRatio']);
            }
            if (isset($data['valueSampledData'])) {
                $this->setValueSampledData($data['valueSampledData']);
            }
            if (isset($data['valueAttachment'])) {
                $this->setValueAttachment($data['valueAttachment']);
            }
            if (isset($data['valueTime'])) {
                $this->setValueTime($data['valueTime']);
            }
            if (isset($data['valueDateTime'])) {
                $this->setValueDateTime($data['valueDateTime']);
            }
            if (isset($data['valuePeriod'])) {
                $this->setValuePeriod($data['valuePeriod']);
            }
            if (isset($data['dataAbsentReason'])) {
                $this->setDataAbsentReason($data['dataAbsentReason']);
            }
            if (isset($data['referenceRange'])) {
                if (is_array($data['referenceRange'])) {
                    foreach($data['referenceRange'] as $d) {
                        $this->addreferenceRange($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"referenceRange" must be array of objects or null, '.gettype($data['referenceRange']).' seen.'); 
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
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->valueQuantity)) $json['valueQuantity'] = $this->valueQuantity;
        if (isset($this->valueCodeableConcept)) $json['valueCodeableConcept'] = $this->valueCodeableConcept;
        if (isset($this->valueString)) $json['valueString'] = $this->valueString;
        if (isset($this->valueRange)) $json['valueRange'] = $this->valueRange;
        if (isset($this->valueRatio)) $json['valueRatio'] = $this->valueRatio;
        if (isset($this->valueSampledData)) $json['valueSampledData'] = $this->valueSampledData;
        if (isset($this->valueAttachment)) $json['valueAttachment'] = $this->valueAttachment;
        if (isset($this->valueTime)) $json['valueTime'] = $this->valueTime;
        if (isset($this->valueDateTime)) $json['valueDateTime'] = $this->valueDateTime;
        if (isset($this->valuePeriod)) $json['valuePeriod'] = $this->valuePeriod;
        if (isset($this->dataAbsentReason)) $json['dataAbsentReason'] = $this->dataAbsentReason;
        if (0 < count($this->referenceRange)) {
            $json['referenceRange'] = [];
            foreach($this->referenceRange as $referenceRange) {
                if (null !== $referenceRange) $json['referenceRange'][] = $referenceRange;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ObservationComponent xmlns="http://hl7.org/fhir"></ObservationComponent>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->valueQuantity)) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (isset($this->valueCodeableConcept)) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (isset($this->valueString)) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (isset($this->valueRange)) $this->valueRange->xmlSerialize(true, $sxe->addChild('valueRange'));
        if (isset($this->valueRatio)) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (isset($this->valueSampledData)) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (isset($this->valueAttachment)) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (isset($this->valueTime)) $this->valueTime->xmlSerialize(true, $sxe->addChild('valueTime'));
        if (isset($this->valueDateTime)) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (isset($this->valuePeriod)) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (isset($this->dataAbsentReason)) $this->dataAbsentReason->xmlSerialize(true, $sxe->addChild('dataAbsentReason'));
        if (0 < count($this->referenceRange)) {
            foreach($this->referenceRange as $referenceRange) {
                $referenceRange->xmlSerialize(true, $sxe->addChild('referenceRange'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}