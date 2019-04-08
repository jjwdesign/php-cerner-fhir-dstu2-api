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
 * A record of a device being used by a patient where the record is the result of a report from the patient or another clinician.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceUseStatement extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $bodySiteCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $bodySiteReference = null;

    /**
     * The time period over which the device was used.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $whenUsed = null;

    /**
     * The details of the device used.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * An external identifier for this statement such as an IRI.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Reason or justification for the use of the device.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $indication = [];

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public $notes = [];

    /**
     * The time at which the statement was made/recorded.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $recordedOn = null;

    /**
     * The patient who used the device.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceUseStatement';

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySiteCodeableConcept() {
        return $this->bodySiteCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $bodySiteCodeableConcept
     * @return $this
     */
    public function setBodySiteCodeableConcept($bodySiteCodeableConcept) {
        $this->bodySiteCodeableConcept = $bodySiteCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getBodySiteReference() {
        return $this->bodySiteReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $bodySiteReference
     * @return $this
     */
    public function setBodySiteReference($bodySiteReference) {
        $this->bodySiteReference = $bodySiteReference;
        return $this;
    }

    /**
     * The time period over which the device was used.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getWhenUsed() {
        return $this->whenUsed;
    }

    /**
     * The time period over which the device was used.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $whenUsed
     * @return $this
     */
    public function setWhenUsed($whenUsed) {
        $this->whenUsed = $whenUsed;
        return $this;
    }

    /**
     * The details of the device used.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getDevice() {
        return $this->device;
    }

    /**
     * The details of the device used.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device) {
        $this->device = $device;
        return $this;
    }

    /**
     * An external identifier for this statement such as an IRI.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * An external identifier for this statement such as an IRI.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Reason or justification for the use of the device.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIndication() {
        return $this->indication;
    }

    /**
     * Reason or justification for the use of the device.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $indication
     * @return $this
     */
    public function addIndication($indication) {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public function getNotes() {
        return $this->notes;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $notes
     * @return $this
     */
    public function addNotes($notes) {
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * The time at which the statement was made/recorded.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getRecordedOn() {
        return $this->recordedOn;
    }

    /**
     * The time at which the statement was made/recorded.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $recordedOn
     * @return $this
     */
    public function setRecordedOn($recordedOn) {
        $this->recordedOn = $recordedOn;
        return $this;
    }

    /**
     * The patient who used the device.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The patient who used the device.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public function getTimingTiming() {
        return $this->timingTiming;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $timingTiming
     * @return $this
     */
    public function setTimingTiming($timingTiming) {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod() {
        return $this->timingPeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod) {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime() {
        return $this->timingDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $timingDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime) {
        $this->timingDateTime = $timingDateTime;
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
            if (isset($data['bodySiteCodeableConcept'])) {
                $this->setBodySiteCodeableConcept($data['bodySiteCodeableConcept']);
            }
            if (isset($data['bodySiteReference'])) {
                $this->setBodySiteReference($data['bodySiteReference']);
            }
            if (isset($data['whenUsed'])) {
                $this->setWhenUsed($data['whenUsed']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addidentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.'); 
                }
            }
            if (isset($data['indication'])) {
                if (is_array($data['indication'])) {
                    foreach($data['indication'] as $d) {
                        $this->addindication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"indication" must be array of objects or null, '.gettype($data['indication']).' seen.'); 
                }
            }
            if (isset($data['notes'])) {
                if (is_array($data['notes'])) {
                    foreach($data['notes'] as $d) {
                        $this->addnotes($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"notes" must be array of objects or null, '.gettype($data['notes']).' seen.'); 
                }
            }
            if (isset($data['recordedOn'])) {
                $this->setRecordedOn($data['recordedOn']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['timingTiming'])) {
                $this->setTimingTiming($data['timingTiming']);
            }
            if (isset($data['timingPeriod'])) {
                $this->setTimingPeriod($data['timingPeriod']);
            }
            if (isset($data['timingDateTime'])) {
                $this->setTimingDateTime($data['timingDateTime']);
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
        if (isset($this->bodySiteCodeableConcept)) $json['bodySiteCodeableConcept'] = $this->bodySiteCodeableConcept;
        if (isset($this->bodySiteReference)) $json['bodySiteReference'] = $this->bodySiteReference;
        if (isset($this->whenUsed)) $json['whenUsed'] = $this->whenUsed;
        if (isset($this->device)) $json['device'] = $this->device;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->indication)) {
            $json['indication'] = [];
            foreach($this->indication as $indication) {
                if (null !== $indication) $json['indication'][] = $indication;
            }
        }
        if (0 < count($this->notes)) {
            $json['notes'] = [];
            foreach($this->notes as $notes) {
                if (null !== $notes) $json['notes'][] = $notes;
            }
        }
        if (isset($this->recordedOn)) $json['recordedOn'] = $this->recordedOn;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->timingTiming)) $json['timingTiming'] = $this->timingTiming;
        if (isset($this->timingPeriod)) $json['timingPeriod'] = $this->timingPeriod;
        if (isset($this->timingDateTime)) $json['timingDateTime'] = $this->timingDateTime;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceUseStatement xmlns="http://hl7.org/fhir"></DeviceUseStatement>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->bodySiteCodeableConcept)) $this->bodySiteCodeableConcept->xmlSerialize(true, $sxe->addChild('bodySiteCodeableConcept'));
        if (isset($this->bodySiteReference)) $this->bodySiteReference->xmlSerialize(true, $sxe->addChild('bodySiteReference'));
        if (isset($this->whenUsed)) $this->whenUsed->xmlSerialize(true, $sxe->addChild('whenUsed'));
        if (isset($this->device)) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->indication)) {
            foreach($this->indication as $indication) {
                $indication->xmlSerialize(true, $sxe->addChild('indication'));
            }
        }
        if (0 < count($this->notes)) {
            foreach($this->notes as $notes) {
                $notes->xmlSerialize(true, $sxe->addChild('notes'));
            }
        }
        if (isset($this->recordedOn)) $this->recordedOn->xmlSerialize(true, $sxe->addChild('recordedOn'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->timingTiming)) $this->timingTiming->xmlSerialize(true, $sxe->addChild('timingTiming'));
        if (isset($this->timingPeriod)) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (isset($this->timingDateTime)) $this->timingDateTime->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}