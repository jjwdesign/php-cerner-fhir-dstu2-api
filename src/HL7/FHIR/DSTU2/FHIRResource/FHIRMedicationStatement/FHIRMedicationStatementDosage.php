<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRMedicationStatement;

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
 * A record of a medication that is being consumed by a patient.   A MedicationStatement may indicate that the patient may be taking the medication now, or has taken the medication in the past or will be taking the medication in the future.  The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician.  A common scenario where this information is captured is during the history taking process during a patient visit or stay.   The medication information may come from e.g. the patient's memory, from a prescription bottle,  or from a list of medications the patient, clinician or other party maintains 

The primary difference between a medication statement and a medication administration is that the medication administration has complete administration information and is based on actual administration information from the person who administered the medication.  A medication statement is often, if not always, less specific.  There is no required date/time when the medication was administered, in fact we only know that a source has reported the patient is taking this medication, where details such as time, quantity, or rate or even medication product may be incomplete or missing or less precise.  As stated earlier, the medication statement information may come from the patient's memory, from a prescription bottle or from a list of medications the patient, clinician or other party maintains.  Medication administration is more formal and is not missing detailed information.
 */
class FHIRMedicationStatementDosage extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public $timing = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $asNeededBoolean = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $asNeededCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $siteCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $siteReference = null;

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $route = null;

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $quantityQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $quantityRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $rateRatio = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $rateRange = null;

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $maxDosePerPeriod = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationStatement.Dosage';

    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public function getTiming() {
        return $this->timing;
    }

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $timing
     * @return $this
     */
    public function setTiming($timing) {
        $this->timing = $timing;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean() {
        return $this->asNeededBoolean;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return $this
     */
    public function setAsNeededBoolean($asNeededBoolean) {
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept() {
        return $this->asNeededCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return $this
     */
    public function setAsNeededCodeableConcept($asNeededCodeableConcept) {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSiteCodeableConcept() {
        return $this->siteCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $siteCodeableConcept
     * @return $this
     */
    public function setSiteCodeableConcept($siteCodeableConcept) {
        $this->siteCodeableConcept = $siteCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSiteReference() {
        return $this->siteReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $siteReference
     * @return $this
     */
    public function setSiteReference($siteReference) {
        $this->siteReference = $siteReference;
        return $this;
    }

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute() {
        return $this->route;
    }

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $route
     * @return $this
     */
    public function setRoute($route) {
        $this->route = $route;
        return $this;
    }

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method) {
        $this->method = $method;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantityQuantity() {
        return $this->quantityQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantityQuantity
     * @return $this
     */
    public function setQuantityQuantity($quantityQuantity) {
        $this->quantityQuantity = $quantityQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getQuantityRange() {
        return $this->quantityRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $quantityRange
     * @return $this
     */
    public function setQuantityRange($quantityRange) {
        $this->quantityRange = $quantityRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getRateRatio() {
        return $this->rateRatio;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $rateRatio
     * @return $this
     */
    public function setRateRatio($rateRatio) {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getRateRange() {
        return $this->rateRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $rateRange
     * @return $this
     */
    public function setRateRange($rateRange) {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod() {
        return $this->maxDosePerPeriod;
    }

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @return $this
     */
    public function setMaxDosePerPeriod($maxDosePerPeriod) {
        $this->maxDosePerPeriod = $maxDosePerPeriod;
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
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['timing'])) {
                $this->setTiming($data['timing']);
            }
            if (isset($data['asNeededBoolean'])) {
                $this->setAsNeededBoolean($data['asNeededBoolean']);
            }
            if (isset($data['asNeededCodeableConcept'])) {
                $this->setAsNeededCodeableConcept($data['asNeededCodeableConcept']);
            }
            if (isset($data['siteCodeableConcept'])) {
                $this->setSiteCodeableConcept($data['siteCodeableConcept']);
            }
            if (isset($data['siteReference'])) {
                $this->setSiteReference($data['siteReference']);
            }
            if (isset($data['route'])) {
                $this->setRoute($data['route']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
            }
            if (isset($data['quantityQuantity'])) {
                $this->setQuantityQuantity($data['quantityQuantity']);
            }
            if (isset($data['quantityRange'])) {
                $this->setQuantityRange($data['quantityRange']);
            }
            if (isset($data['rateRatio'])) {
                $this->setRateRatio($data['rateRatio']);
            }
            if (isset($data['rateRange'])) {
                $this->setRateRange($data['rateRange']);
            }
            if (isset($data['maxDosePerPeriod'])) {
                $this->setMaxDosePerPeriod($data['maxDosePerPeriod']);
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
        if (isset($this->text)) $json['text'] = $this->text;
        if (isset($this->timing)) $json['timing'] = $this->timing;
        if (isset($this->asNeededBoolean)) $json['asNeededBoolean'] = $this->asNeededBoolean;
        if (isset($this->asNeededCodeableConcept)) $json['asNeededCodeableConcept'] = $this->asNeededCodeableConcept;
        if (isset($this->siteCodeableConcept)) $json['siteCodeableConcept'] = $this->siteCodeableConcept;
        if (isset($this->siteReference)) $json['siteReference'] = $this->siteReference;
        if (isset($this->route)) $json['route'] = $this->route;
        if (isset($this->method)) $json['method'] = $this->method;
        if (isset($this->quantityQuantity)) $json['quantityQuantity'] = $this->quantityQuantity;
        if (isset($this->quantityRange)) $json['quantityRange'] = $this->quantityRange;
        if (isset($this->rateRatio)) $json['rateRatio'] = $this->rateRatio;
        if (isset($this->rateRange)) $json['rateRange'] = $this->rateRange;
        if (isset($this->maxDosePerPeriod)) $json['maxDosePerPeriod'] = $this->maxDosePerPeriod;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationStatementDosage xmlns="http://hl7.org/fhir"></MedicationStatementDosage>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->text)) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (isset($this->timing)) $this->timing->xmlSerialize(true, $sxe->addChild('timing'));
        if (isset($this->asNeededBoolean)) $this->asNeededBoolean->xmlSerialize(true, $sxe->addChild('asNeededBoolean'));
        if (isset($this->asNeededCodeableConcept)) $this->asNeededCodeableConcept->xmlSerialize(true, $sxe->addChild('asNeededCodeableConcept'));
        if (isset($this->siteCodeableConcept)) $this->siteCodeableConcept->xmlSerialize(true, $sxe->addChild('siteCodeableConcept'));
        if (isset($this->siteReference)) $this->siteReference->xmlSerialize(true, $sxe->addChild('siteReference'));
        if (isset($this->route)) $this->route->xmlSerialize(true, $sxe->addChild('route'));
        if (isset($this->method)) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (isset($this->quantityQuantity)) $this->quantityQuantity->xmlSerialize(true, $sxe->addChild('quantityQuantity'));
        if (isset($this->quantityRange)) $this->quantityRange->xmlSerialize(true, $sxe->addChild('quantityRange'));
        if (isset($this->rateRatio)) $this->rateRatio->xmlSerialize(true, $sxe->addChild('rateRatio'));
        if (isset($this->rateRange)) $this->rateRange->xmlSerialize(true, $sxe->addChild('rateRange'));
        if (isset($this->maxDosePerPeriod)) $this->maxDosePerPeriod->xmlSerialize(true, $sxe->addChild('maxDosePerPeriod'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}