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
 * Describes the characteristics, operational status and capabilities of a medical-related component of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceComponent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Describes the specific component type as defined in the object-oriented or metric nomenclature partition.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Describes the local assigned unique identification by the software. For example: handle ID.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Describes the timestamp for the most recent system change which includes device configuration or setting change.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $lastSystemChange = null;

    /**
     * Describes the link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * Describes the link to the parent resource. For example: Channel is linked to its VMD parent.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * Indicates current operational status of the device. For example: On, Off, Standby, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $operationalStatus = [];

    /**
     * Describes the parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $parameterGroup = null;

    /**
     * Describes the physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeasmnt_Principle
     */
    public $measurementPrinciple = null;

    /**
     * Describes the production specification such as component revision, serial number, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public $productionSpecification = [];

    /**
     * Describes the language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $languageCode = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceComponent';

    /**
     * Describes the specific component type as defined in the object-oriented or metric nomenclature partition.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Describes the specific component type as defined in the object-oriented or metric nomenclature partition.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Describes the local assigned unique identification by the software. For example: handle ID.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Describes the local assigned unique identification by the software. For example: handle ID.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Describes the timestamp for the most recent system change which includes device configuration or setting change.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getLastSystemChange() {
        return $this->lastSystemChange;
    }

    /**
     * Describes the timestamp for the most recent system change which includes device configuration or setting change.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $lastSystemChange
     * @return $this
     */
    public function setLastSystemChange($lastSystemChange) {
        $this->lastSystemChange = $lastSystemChange;
        return $this;
    }

    /**
     * Describes the link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * Describes the link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * Describes the link to the parent resource. For example: Channel is linked to its VMD parent.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Describes the link to the parent resource. For example: Channel is linked to its VMD parent.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $parent
     * @return $this
     */
    public function setParent($parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Indicates current operational status of the device. For example: On, Off, Standby, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOperationalStatus() {
        return $this->operationalStatus;
    }

    /**
     * Indicates current operational status of the device. For example: On, Off, Standby, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $operationalStatus
     * @return $this
     */
    public function addOperationalStatus($operationalStatus) {
        $this->operationalStatus[] = $operationalStatus;
        return $this;
    }

    /**
     * Describes the parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getParameterGroup() {
        return $this->parameterGroup;
    }

    /**
     * Describes the parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $parameterGroup
     * @return $this
     */
    public function setParameterGroup($parameterGroup) {
        $this->parameterGroup = $parameterGroup;
        return $this;
    }

    /**
     * Describes the physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeasmnt_Principle
     */
    public function getMeasurementPrinciple() {
        return $this->measurementPrinciple;
    }

    /**
     * Describes the physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeasmnt_Principle $measurementPrinciple
     * @return $this
     */
    public function setMeasurementPrinciple($measurementPrinciple) {
        $this->measurementPrinciple = $measurementPrinciple;
        return $this;
    }

    /**
     * Describes the production specification such as component revision, serial number, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public function getProductionSpecification() {
        return $this->productionSpecification;
    }

    /**
     * Describes the production specification such as component revision, serial number, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification $productionSpecification
     * @return $this
     */
    public function addProductionSpecification($productionSpecification) {
        $this->productionSpecification[] = $productionSpecification;
        return $this;
    }

    /**
     * Describes the language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getLanguageCode() {
        return $this->languageCode;
    }

    /**
     * Describes the language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $languageCode
     * @return $this
     */
    public function setLanguageCode($languageCode) {
        $this->languageCode = $languageCode;
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
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['lastSystemChange'])) {
                $this->setLastSystemChange($data['lastSystemChange']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['parent'])) {
                $this->setParent($data['parent']);
            }
            if (isset($data['operationalStatus'])) {
                if (is_array($data['operationalStatus'])) {
                    foreach($data['operationalStatus'] as $d) {
                        $this->addoperationalStatus($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"operationalStatus" must be array of objects or null, '.gettype($data['operationalStatus']).' seen.'); 
                }
            }
            if (isset($data['parameterGroup'])) {
                $this->setParameterGroup($data['parameterGroup']);
            }
            if (isset($data['measurementPrinciple'])) {
                $this->setMeasurementPrinciple($data['measurementPrinciple']);
            }
            if (isset($data['productionSpecification'])) {
                if (is_array($data['productionSpecification'])) {
                    foreach($data['productionSpecification'] as $d) {
                        $this->addproductionSpecification($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"productionSpecification" must be array of objects or null, '.gettype($data['productionSpecification']).' seen.'); 
                }
            }
            if (isset($data['languageCode'])) {
                $this->setLanguageCode($data['languageCode']);
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
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->lastSystemChange)) $json['lastSystemChange'] = $this->lastSystemChange;
        if (isset($this->source)) $json['source'] = $this->source;
        if (isset($this->parent)) $json['parent'] = $this->parent;
        if (0 < count($this->operationalStatus)) {
            $json['operationalStatus'] = [];
            foreach($this->operationalStatus as $operationalStatus) {
                if (null !== $operationalStatus) $json['operationalStatus'][] = $operationalStatus;
            }
        }
        if (isset($this->parameterGroup)) $json['parameterGroup'] = $this->parameterGroup;
        if (isset($this->measurementPrinciple)) $json['measurementPrinciple'] = $this->measurementPrinciple;
        if (0 < count($this->productionSpecification)) {
            $json['productionSpecification'] = [];
            foreach($this->productionSpecification as $productionSpecification) {
                if (null !== $productionSpecification) $json['productionSpecification'][] = $productionSpecification;
            }
        }
        if (isset($this->languageCode)) $json['languageCode'] = $this->languageCode;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceComponent xmlns="http://hl7.org/fhir"></DeviceComponent>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->lastSystemChange)) $this->lastSystemChange->xmlSerialize(true, $sxe->addChild('lastSystemChange'));
        if (isset($this->source)) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (isset($this->parent)) $this->parent->xmlSerialize(true, $sxe->addChild('parent'));
        if (0 < count($this->operationalStatus)) {
            foreach($this->operationalStatus as $operationalStatus) {
                $operationalStatus->xmlSerialize(true, $sxe->addChild('operationalStatus'));
            }
        }
        if (isset($this->parameterGroup)) $this->parameterGroup->xmlSerialize(true, $sxe->addChild('parameterGroup'));
        if (isset($this->measurementPrinciple)) $this->measurementPrinciple->xmlSerialize(true, $sxe->addChild('measurementPrinciple'));
        if (0 < count($this->productionSpecification)) {
            foreach($this->productionSpecification as $productionSpecification) {
                $productionSpecification->xmlSerialize(true, $sxe->addChild('productionSpecification'));
            }
        }
        if (isset($this->languageCode)) $this->languageCode->xmlSerialize(true, $sxe->addChild('languageCode'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}