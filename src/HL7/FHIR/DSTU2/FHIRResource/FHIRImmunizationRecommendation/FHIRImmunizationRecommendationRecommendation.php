<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRImmunizationRecommendation;

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
 * A patient's point-in-time immunization and recommendation (i.e. forecasting a patient's immunization eligibility according to a published schedule) with optional supporting justification.
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The date the immunization recommendation was created.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Vaccine that pertains to the recommendation.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $vaccineCode = null;

    /**
     * This indicates the next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $doseNumber = null;

    /**
     * Vaccine administration status.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $forecastStatus = null;

    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public $dateCriterion = [];

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    public $protocol = null;

    /**
     * Immunization event history that supports the status and recommendation.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $supportingImmunization = [];

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $supportingPatientInformation = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ImmunizationRecommendation.Recommendation';

    /**
     * The date the immunization recommendation was created.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date the immunization recommendation was created.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Vaccine that pertains to the recommendation.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode() {
        return $this->vaccineCode;
    }

    /**
     * Vaccine that pertains to the recommendation.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return $this
     */
    public function setVaccineCode($vaccineCode) {
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * This indicates the next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumber() {
        return $this->doseNumber;
    }

    /**
     * This indicates the next recommended dose number (e.g. dose 2 is the next recommended dose).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $doseNumber
     * @return $this
     */
    public function setDoseNumber($doseNumber) {
        $this->doseNumber = $doseNumber;
        return $this;
    }

    /**
     * Vaccine administration status.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getForecastStatus() {
        return $this->forecastStatus;
    }

    /**
     * Vaccine administration status.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @return $this
     */
    public function setForecastStatus($forecastStatus) {
        $this->forecastStatus = $forecastStatus;
        return $this;
    }

    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public function getDateCriterion() {
        return $this->dateCriterion;
    }

    /**
     * Vaccine date recommendations.  For example, earliest date to administer, latest date to administer, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
     * @return $this
     */
    public function addDateCriterion($dateCriterion) {
        $this->dateCriterion[] = $dateCriterion;
        return $this;
    }

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * Contains information about the protocol under which the vaccine was administered.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $protocol
     * @return $this
     */
    public function setProtocol($protocol) {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Immunization event history that supports the status and recommendation.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getSupportingImmunization() {
        return $this->supportingImmunization;
    }

    /**
     * Immunization event history that supports the status and recommendation.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $supportingImmunization
     * @return $this
     */
    public function addSupportingImmunization($supportingImmunization) {
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getSupportingPatientInformation() {
        return $this->supportingPatientInformation;
    }

    /**
     * Patient Information that supports the status and recommendation.  This includes patient observations, adverse reactions and allergy/intolerance information.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $supportingPatientInformation
     * @return $this
     */
    public function addSupportingPatientInformation($supportingPatientInformation) {
        $this->supportingPatientInformation[] = $supportingPatientInformation;
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
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['vaccineCode'])) {
                $this->setVaccineCode($data['vaccineCode']);
            }
            if (isset($data['doseNumber'])) {
                $this->setDoseNumber($data['doseNumber']);
            }
            if (isset($data['forecastStatus'])) {
                $this->setForecastStatus($data['forecastStatus']);
            }
            if (isset($data['dateCriterion'])) {
                if (is_array($data['dateCriterion'])) {
                    foreach($data['dateCriterion'] as $d) {
                        $this->adddateCriterion($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"dateCriterion" must be array of objects or null, '.gettype($data['dateCriterion']).' seen.'); 
                }
            }
            if (isset($data['protocol'])) {
                $this->setProtocol($data['protocol']);
            }
            if (isset($data['supportingImmunization'])) {
                if (is_array($data['supportingImmunization'])) {
                    foreach($data['supportingImmunization'] as $d) {
                        $this->addsupportingImmunization($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supportingImmunization" must be array of objects or null, '.gettype($data['supportingImmunization']).' seen.'); 
                }
            }
            if (isset($data['supportingPatientInformation'])) {
                if (is_array($data['supportingPatientInformation'])) {
                    foreach($data['supportingPatientInformation'] as $d) {
                        $this->addsupportingPatientInformation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supportingPatientInformation" must be array of objects or null, '.gettype($data['supportingPatientInformation']).' seen.'); 
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
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->vaccineCode)) $json['vaccineCode'] = $this->vaccineCode;
        if (isset($this->doseNumber)) $json['doseNumber'] = $this->doseNumber;
        if (isset($this->forecastStatus)) $json['forecastStatus'] = $this->forecastStatus;
        if (0 < count($this->dateCriterion)) {
            $json['dateCriterion'] = [];
            foreach($this->dateCriterion as $dateCriterion) {
                if (null !== $dateCriterion) $json['dateCriterion'][] = $dateCriterion;
            }
        }
        if (isset($this->protocol)) $json['protocol'] = $this->protocol;
        if (0 < count($this->supportingImmunization)) {
            $json['supportingImmunization'] = [];
            foreach($this->supportingImmunization as $supportingImmunization) {
                if (null !== $supportingImmunization) $json['supportingImmunization'][] = $supportingImmunization;
            }
        }
        if (0 < count($this->supportingPatientInformation)) {
            $json['supportingPatientInformation'] = [];
            foreach($this->supportingPatientInformation as $supportingPatientInformation) {
                if (null !== $supportingPatientInformation) $json['supportingPatientInformation'][] = $supportingPatientInformation;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImmunizationRecommendationRecommendation xmlns="http://hl7.org/fhir"></ImmunizationRecommendationRecommendation>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->vaccineCode)) $this->vaccineCode->xmlSerialize(true, $sxe->addChild('vaccineCode'));
        if (isset($this->doseNumber)) $this->doseNumber->xmlSerialize(true, $sxe->addChild('doseNumber'));
        if (isset($this->forecastStatus)) $this->forecastStatus->xmlSerialize(true, $sxe->addChild('forecastStatus'));
        if (0 < count($this->dateCriterion)) {
            foreach($this->dateCriterion as $dateCriterion) {
                $dateCriterion->xmlSerialize(true, $sxe->addChild('dateCriterion'));
            }
        }
        if (isset($this->protocol)) $this->protocol->xmlSerialize(true, $sxe->addChild('protocol'));
        if (0 < count($this->supportingImmunization)) {
            foreach($this->supportingImmunization as $supportingImmunization) {
                $supportingImmunization->xmlSerialize(true, $sxe->addChild('supportingImmunization'));
            }
        }
        if (0 < count($this->supportingPatientInformation)) {
            foreach($this->supportingPatientInformation as $supportingPatientInformation) {
                $supportingPatientInformation->xmlSerialize(true, $sxe->addChild('supportingPatientInformation'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}