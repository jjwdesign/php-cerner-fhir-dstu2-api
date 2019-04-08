<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRImmunization;

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
 * Describes the event of a patient being administered a vaccination or a record of a vaccination as reported by a patient, a clinician or another party and may include vaccine reaction information and what vaccination protocol was followed.
 */
class FHIRImmunizationVaccinationProtocol extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Nominal position in a series.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $doseSequence = null;

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Indicates the authority who published the protocol.  E.g. ACIP.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $series = null;

    /**
     * The recommended number of doses to achieve immunity.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $seriesDoses = null;

    /**
     * The targeted disease.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $targetDisease = [];

    /**
     * Indicates if the immunization event should "count" against  the protocol.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $doseStatus = null;

    /**
     * Provides an explanation as to why an immunization event should or should not count against the protocol.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $doseStatusReason = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Immunization.VaccinationProtocol';

    /**
     * Nominal position in a series.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getDoseSequence() {
        return $this->doseSequence;
    }

    /**
     * Nominal position in a series.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $doseSequence
     * @return $this
     */
    public function setDoseSequence($doseSequence) {
        $this->doseSequence = $doseSequence;
        return $this;
    }

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Indicates the authority who published the protocol.  E.g. ACIP.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getAuthority() {
        return $this->authority;
    }

    /**
     * Indicates the authority who published the protocol.  E.g. ACIP.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $authority
     * @return $this
     */
    public function setAuthority($authority) {
        $this->authority = $authority;
        return $this;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getSeries() {
        return $this->series;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $series
     * @return $this
     */
    public function setSeries($series) {
        $this->series = $series;
        return $this;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDoses() {
        return $this->seriesDoses;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $seriesDoses
     * @return $this
     */
    public function setSeriesDoses($seriesDoses) {
        $this->seriesDoses = $seriesDoses;
        return $this;
    }

    /**
     * The targeted disease.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetDisease() {
        return $this->targetDisease;
    }

    /**
     * The targeted disease.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return $this
     */
    public function addTargetDisease($targetDisease) {
        $this->targetDisease[] = $targetDisease;
        return $this;
    }

    /**
     * Indicates if the immunization event should "count" against  the protocol.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus() {
        return $this->doseStatus;
    }

    /**
     * Indicates if the immunization event should "count" against  the protocol.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $doseStatus
     * @return $this
     */
    public function setDoseStatus($doseStatus) {
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * Provides an explanation as to why an immunization event should or should not count against the protocol.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatusReason() {
        return $this->doseStatusReason;
    }

    /**
     * Provides an explanation as to why an immunization event should or should not count against the protocol.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @return $this
     */
    public function setDoseStatusReason($doseStatusReason) {
        $this->doseStatusReason = $doseStatusReason;
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
            if (isset($data['doseSequence'])) {
                $this->setDoseSequence($data['doseSequence']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['authority'])) {
                $this->setAuthority($data['authority']);
            }
            if (isset($data['series'])) {
                $this->setSeries($data['series']);
            }
            if (isset($data['seriesDoses'])) {
                $this->setSeriesDoses($data['seriesDoses']);
            }
            if (isset($data['targetDisease'])) {
                if (is_array($data['targetDisease'])) {
                    foreach($data['targetDisease'] as $d) {
                        $this->addtargetDisease($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"targetDisease" must be array of objects or null, '.gettype($data['targetDisease']).' seen.'); 
                }
            }
            if (isset($data['doseStatus'])) {
                $this->setDoseStatus($data['doseStatus']);
            }
            if (isset($data['doseStatusReason'])) {
                $this->setDoseStatusReason($data['doseStatusReason']);
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
        if (isset($this->doseSequence)) $json['doseSequence'] = $this->doseSequence;
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->authority)) $json['authority'] = $this->authority;
        if (isset($this->series)) $json['series'] = $this->series;
        if (isset($this->seriesDoses)) $json['seriesDoses'] = $this->seriesDoses;
        if (0 < count($this->targetDisease)) {
            $json['targetDisease'] = [];
            foreach($this->targetDisease as $targetDisease) {
                if (null !== $targetDisease) $json['targetDisease'][] = $targetDisease;
            }
        }
        if (isset($this->doseStatus)) $json['doseStatus'] = $this->doseStatus;
        if (isset($this->doseStatusReason)) $json['doseStatusReason'] = $this->doseStatusReason;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImmunizationVaccinationProtocol xmlns="http://hl7.org/fhir"></ImmunizationVaccinationProtocol>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->doseSequence)) $this->doseSequence->xmlSerialize(true, $sxe->addChild('doseSequence'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->authority)) $this->authority->xmlSerialize(true, $sxe->addChild('authority'));
        if (isset($this->series)) $this->series->xmlSerialize(true, $sxe->addChild('series'));
        if (isset($this->seriesDoses)) $this->seriesDoses->xmlSerialize(true, $sxe->addChild('seriesDoses'));
        if (0 < count($this->targetDisease)) {
            foreach($this->targetDisease as $targetDisease) {
                $targetDisease->xmlSerialize(true, $sxe->addChild('targetDisease'));
            }
        }
        if (isset($this->doseStatus)) $this->doseStatus->xmlSerialize(true, $sxe->addChild('doseStatus'));
        if (isset($this->doseStatusReason)) $this->doseStatusReason->xmlSerialize(true, $sxe->addChild('doseStatusReason'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}