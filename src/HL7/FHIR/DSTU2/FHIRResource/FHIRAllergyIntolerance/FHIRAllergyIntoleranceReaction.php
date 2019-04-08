<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRAllergyIntolerance;

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
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 */
class FHIRAllergyIntoleranceReaction extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identification of the specific substance considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different to the substance identified as the cause of the risk, but must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite substance that includes the identified substance. It must be clinically safe to only process the AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $substance = null;

    /**
     * Statement about the degree of clinical certainty that the specific substance was the cause of the manifestation in this reaction event.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty
     */
    public $certainty = null;

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $manifestation = [];

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $onset = null;

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    public $severity = null;

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $exposureRoute = null;

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'AllergyIntolerance.Reaction';

    /**
     * Identification of the specific substance considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different to the substance identified as the cause of the risk, but must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite substance that includes the identified substance. It must be clinically safe to only process the AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance() {
        return $this->substance;
    }

    /**
     * Identification of the specific substance considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different to the substance identified as the cause of the risk, but must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite substance that includes the identified substance. It must be clinically safe to only process the AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $substance
     * @return $this
     */
    public function setSubstance($substance) {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Statement about the degree of clinical certainty that the specific substance was the cause of the manifestation in this reaction event.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty
     */
    public function getCertainty() {
        return $this->certainty;
    }

    /**
     * Statement about the degree of clinical certainty that the specific substance was the cause of the manifestation in this reaction event.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty $certainty
     * @return $this
     */
    public function setCertainty($certainty) {
        $this->certainty = $certainty;
        return $this;
    }

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getManifestation() {
        return $this->manifestation;
    }

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $manifestation
     * @return $this
     */
    public function addManifestation($manifestation) {
        $this->manifestation[] = $manifestation;
        return $this;
    }

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getOnset() {
        return $this->onset;
    }

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $onset
     * @return $this
     */
    public function setOnset($onset) {
        $this->onset = $onset;
        return $this;
    }

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    public function getSeverity() {
        return $this->severity;
    }

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity $severity
     * @return $this
     */
    public function setSeverity($severity) {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getExposureRoute() {
        return $this->exposureRoute;
    }

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $exposureRoute
     * @return $this
     */
    public function setExposureRoute($exposureRoute) {
        $this->exposureRoute = $exposureRoute;
        return $this;
    }

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function setNote($note) {
        $this->note = $note;
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
            if (isset($data['substance'])) {
                $this->setSubstance($data['substance']);
            }
            if (isset($data['certainty'])) {
                $this->setCertainty($data['certainty']);
            }
            if (isset($data['manifestation'])) {
                if (is_array($data['manifestation'])) {
                    foreach($data['manifestation'] as $d) {
                        $this->addmanifestation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"manifestation" must be array of objects or null, '.gettype($data['manifestation']).' seen.'); 
                }
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['onset'])) {
                $this->setOnset($data['onset']);
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['exposureRoute'])) {
                $this->setExposureRoute($data['exposureRoute']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
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
        if (isset($this->substance)) $json['substance'] = $this->substance;
        if (isset($this->certainty)) $json['certainty'] = $this->certainty;
        if (0 < count($this->manifestation)) {
            $json['manifestation'] = [];
            foreach($this->manifestation as $manifestation) {
                if (null !== $manifestation) $json['manifestation'][] = $manifestation;
            }
        }
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->onset)) $json['onset'] = $this->onset;
        if (isset($this->severity)) $json['severity'] = $this->severity;
        if (isset($this->exposureRoute)) $json['exposureRoute'] = $this->exposureRoute;
        if (isset($this->note)) $json['note'] = $this->note;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AllergyIntoleranceReaction xmlns="http://hl7.org/fhir"></AllergyIntoleranceReaction>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->substance)) $this->substance->xmlSerialize(true, $sxe->addChild('substance'));
        if (isset($this->certainty)) $this->certainty->xmlSerialize(true, $sxe->addChild('certainty'));
        if (0 < count($this->manifestation)) {
            foreach($this->manifestation as $manifestation) {
                $manifestation->xmlSerialize(true, $sxe->addChild('manifestation'));
            }
        }
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->onset)) $this->onset->xmlSerialize(true, $sxe->addChild('onset'));
        if (isset($this->severity)) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (isset($this->exposureRoute)) $this->exposureRoute->xmlSerialize(true, $sxe->addChild('exposureRoute'));
        if (isset($this->note)) $this->note->xmlSerialize(true, $sxe->addChild('note'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}