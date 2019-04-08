<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRTiming;

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

use App\HL7\FHIR\DSTU2\FHIRElement;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to record when things are expected or requested to occur. The most common usage is in dosage instructions for medications. They are also used when planning care of various kinds.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRTimingRepeat extends FHIRElement implements \JsonSerializable
{
    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $boundsQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $boundsRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $boundsPeriod = null;

    /**
     * A total count of the desired number of repetitions.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $count = null;

    /**
     * How long this thing happens for when it happens.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $duration = null;

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $durationMax = null;

    /**
     * The units of time for the duration, in UCUM units.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    public $durationUnits = null;

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $frequency = null;

    /**
     * If present, indicates that the frequency is a range - so repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $frequencyMax = null;

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $period = null;

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $periodMax = null;

    /**
     * The units of time for the period in UCUM units.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    public $periodUnits = null;

    /**
     * A real world event that the occurrence of the event should be tied to.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIREventTiming
     */
    public $when = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Timing.Repeat';

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsQuantity() {
        return $this->boundsQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration $boundsQuantity
     * @return $this
     */
    public function setBoundsQuantity($boundsQuantity) {
        $this->boundsQuantity = $boundsQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getBoundsRange() {
        return $this->boundsRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $boundsRange
     * @return $this
     */
    public function setBoundsRange($boundsRange) {
        $this->boundsRange = $boundsRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getBoundsPeriod() {
        return $this->boundsPeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $boundsPeriod
     * @return $this
     */
    public function setBoundsPeriod($boundsPeriod) {
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * A total count of the desired number of repetitions.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * A total count of the desired number of repetitions.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $count
     * @return $this
     */
    public function setCount($count) {
        $this->count = $count;
        return $this;
    }

    /**
     * How long this thing happens for when it happens.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * How long this thing happens for when it happens.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $duration
     * @return $this
     */
    public function setDuration($duration) {
        $this->duration = $duration;
        return $this;
    }

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getDurationMax() {
        return $this->durationMax;
    }

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $durationMax
     * @return $this
     */
    public function setDurationMax($durationMax) {
        $this->durationMax = $durationMax;
        return $this;
    }

    /**
     * The units of time for the duration, in UCUM units.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnits() {
        return $this->durationUnits;
    }

    /**
     * The units of time for the duration, in UCUM units.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime $durationUnits
     * @return $this
     */
    public function setDurationUnits($durationUnits) {
        $this->durationUnits = $durationUnits;
        return $this;
    }

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getFrequency() {
        return $this->frequency;
    }

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $frequency
     * @return $this
     */
    public function setFrequency($frequency) {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * If present, indicates that the frequency is a range - so repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getFrequencyMax() {
        return $this->frequencyMax;
    }

    /**
     * If present, indicates that the frequency is a range - so repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $frequencyMax
     * @return $this
     */
    public function setFrequencyMax($frequencyMax) {
        $this->frequencyMax = $frequencyMax;
        return $this;
    }

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax() {
        return $this->periodMax;
    }

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $periodMax
     * @return $this
     */
    public function setPeriodMax($periodMax) {
        $this->periodMax = $periodMax;
        return $this;
    }

    /**
     * The units of time for the period in UCUM units.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnits() {
        return $this->periodUnits;
    }

    /**
     * The units of time for the period in UCUM units.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnitsOfTime $periodUnits
     * @return $this
     */
    public function setPeriodUnits($periodUnits) {
        $this->periodUnits = $periodUnits;
        return $this;
    }

    /**
     * A real world event that the occurrence of the event should be tied to.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIREventTiming
     */
    public function getWhen() {
        return $this->when;
    }

    /**
     * A real world event that the occurrence of the event should be tied to.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIREventTiming $when
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
            if (isset($data['boundsQuantity'])) {
                $this->setBoundsQuantity($data['boundsQuantity']);
            }
            if (isset($data['boundsRange'])) {
                $this->setBoundsRange($data['boundsRange']);
            }
            if (isset($data['boundsPeriod'])) {
                $this->setBoundsPeriod($data['boundsPeriod']);
            }
            if (isset($data['count'])) {
                $this->setCount($data['count']);
            }
            if (isset($data['duration'])) {
                $this->setDuration($data['duration']);
            }
            if (isset($data['durationMax'])) {
                $this->setDurationMax($data['durationMax']);
            }
            if (isset($data['durationUnits'])) {
                $this->setDurationUnits($data['durationUnits']);
            }
            if (isset($data['frequency'])) {
                $this->setFrequency($data['frequency']);
            }
            if (isset($data['frequencyMax'])) {
                $this->setFrequencyMax($data['frequencyMax']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['periodMax'])) {
                $this->setPeriodMax($data['periodMax']);
            }
            if (isset($data['periodUnits'])) {
                $this->setPeriodUnits($data['periodUnits']);
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
        if (isset($this->boundsQuantity)) $json['boundsQuantity'] = $this->boundsQuantity;
        if (isset($this->boundsRange)) $json['boundsRange'] = $this->boundsRange;
        if (isset($this->boundsPeriod)) $json['boundsPeriod'] = $this->boundsPeriod;
        if (isset($this->count)) $json['count'] = $this->count;
        if (isset($this->duration)) $json['duration'] = $this->duration;
        if (isset($this->durationMax)) $json['durationMax'] = $this->durationMax;
        if (isset($this->durationUnits)) $json['durationUnits'] = $this->durationUnits;
        if (isset($this->frequency)) $json['frequency'] = $this->frequency;
        if (isset($this->frequencyMax)) $json['frequencyMax'] = $this->frequencyMax;
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->periodMax)) $json['periodMax'] = $this->periodMax;
        if (isset($this->periodUnits)) $json['periodUnits'] = $this->periodUnits;
        if (isset($this->when)) $json['when'] = $this->when;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TimingRepeat xmlns="http://hl7.org/fhir"></TimingRepeat>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->boundsQuantity)) $this->boundsQuantity->xmlSerialize(true, $sxe->addChild('boundsQuantity'));
        if (isset($this->boundsRange)) $this->boundsRange->xmlSerialize(true, $sxe->addChild('boundsRange'));
        if (isset($this->boundsPeriod)) $this->boundsPeriod->xmlSerialize(true, $sxe->addChild('boundsPeriod'));
        if (isset($this->count)) $this->count->xmlSerialize(true, $sxe->addChild('count'));
        if (isset($this->duration)) $this->duration->xmlSerialize(true, $sxe->addChild('duration'));
        if (isset($this->durationMax)) $this->durationMax->xmlSerialize(true, $sxe->addChild('durationMax'));
        if (isset($this->durationUnits)) $this->durationUnits->xmlSerialize(true, $sxe->addChild('durationUnits'));
        if (isset($this->frequency)) $this->frequency->xmlSerialize(true, $sxe->addChild('frequency'));
        if (isset($this->frequencyMax)) $this->frequencyMax->xmlSerialize(true, $sxe->addChild('frequencyMax'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->periodMax)) $this->periodMax->xmlSerialize(true, $sxe->addChild('periodMax'));
        if (isset($this->periodUnits)) $this->periodUnits->xmlSerialize(true, $sxe->addChild('periodUnits'));
        if (isset($this->when)) $this->when->xmlSerialize(true, $sxe->addChild('when'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}