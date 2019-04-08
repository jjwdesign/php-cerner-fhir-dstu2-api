<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRImagingStudy;

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
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context.  A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 */
class FHIRImagingStudySeries extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The Numeric identifier of this series in the study.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public $number = null;

    /**
     * The modality of this series sequence.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $modality = null;

    /**
     * Formal identifier for this series.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * A description of the series.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Number of SOP Instances in Series.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfInstances = null;

    /**
     * Availability of series (online, offline or nearline).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstanceAvailability
     */
    public $availability = null;

    /**
     * URI/URL specifying the location of the referenced series using WADO-RS.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $bodySite = null;

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $laterality = null;

    /**
     * The date and time the series was started.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $started = null;

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public $instance = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingStudy.Series';

    /**
     * The Numeric identifier of this series in the study.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * The Numeric identifier of this series in the study.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt $number
     * @return $this
     */
    public function setNumber($number) {
        $this->number = $number;
        return $this;
    }

    /**
     * The modality of this series sequence.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getModality() {
        return $this->modality;
    }

    /**
     * The modality of this series sequence.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $modality
     * @return $this
     */
    public function setModality($modality) {
        $this->modality = $modality;
        return $this;
    }

    /**
     * Formal identifier for this series.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * Formal identifier for this series.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid) {
        $this->uid = $uid;
        return $this;
    }

    /**
     * A description of the series.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A description of the series.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Number of SOP Instances in Series.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances() {
        return $this->numberOfInstances;
    }

    /**
     * Number of SOP Instances in Series.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt $numberOfInstances
     * @return $this
     */
    public function setNumberOfInstances($numberOfInstances) {
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Availability of series (online, offline or nearline).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability() {
        return $this->availability;
    }

    /**
     * Availability of series (online, offline or nearline).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstanceAvailability $availability
     * @return $this
     */
    public function setAvailability($availability) {
        $this->availability = $availability;
        return $this;
    }

    /**
     * URI/URL specifying the location of the referenced series using WADO-RS.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * URI/URL specifying the location of the referenced series using WADO-RS.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $bodySite
     * @return $this
     */
    public function setBodySite($bodySite) {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getLaterality() {
        return $this->laterality;
    }

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $laterality
     * @return $this
     */
    public function setLaterality($laterality) {
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * The date and time the series was started.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getStarted() {
        return $this->started;
    }

    /**
     * The date and time the series was started.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $started
     * @return $this
     */
    public function setStarted($started) {
        $this->started = $started;
        return $this;
    }

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public function getInstance() {
        return $this->instance;
    }

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance $instance
     * @return $this
     */
    public function addInstance($instance) {
        $this->instance[] = $instance;
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
            if (isset($data['number'])) {
                $this->setNumber($data['number']);
            }
            if (isset($data['modality'])) {
                $this->setModality($data['modality']);
            }
            if (isset($data['uid'])) {
                $this->setUid($data['uid']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['numberOfInstances'])) {
                $this->setNumberOfInstances($data['numberOfInstances']);
            }
            if (isset($data['availability'])) {
                $this->setAvailability($data['availability']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['laterality'])) {
                $this->setLaterality($data['laterality']);
            }
            if (isset($data['started'])) {
                $this->setStarted($data['started']);
            }
            if (isset($data['instance'])) {
                if (is_array($data['instance'])) {
                    foreach($data['instance'] as $d) {
                        $this->addinstance($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"instance" must be array of objects or null, '.gettype($data['instance']).' seen.'); 
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
        if (isset($this->number)) $json['number'] = $this->number;
        if (isset($this->modality)) $json['modality'] = $this->modality;
        if (isset($this->uid)) $json['uid'] = $this->uid;
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->numberOfInstances)) $json['numberOfInstances'] = $this->numberOfInstances;
        if (isset($this->availability)) $json['availability'] = $this->availability;
        if (isset($this->url)) $json['url'] = $this->url;
        if (isset($this->bodySite)) $json['bodySite'] = $this->bodySite;
        if (isset($this->laterality)) $json['laterality'] = $this->laterality;
        if (isset($this->started)) $json['started'] = $this->started;
        if (0 < count($this->instance)) {
            $json['instance'] = [];
            foreach($this->instance as $instance) {
                if (null !== $instance) $json['instance'][] = $instance;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingStudySeries xmlns="http://hl7.org/fhir"></ImagingStudySeries>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->number)) $this->number->xmlSerialize(true, $sxe->addChild('number'));
        if (isset($this->modality)) $this->modality->xmlSerialize(true, $sxe->addChild('modality'));
        if (isset($this->uid)) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->numberOfInstances)) $this->numberOfInstances->xmlSerialize(true, $sxe->addChild('numberOfInstances'));
        if (isset($this->availability)) $this->availability->xmlSerialize(true, $sxe->addChild('availability'));
        if (isset($this->url)) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (isset($this->bodySite)) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (isset($this->laterality)) $this->laterality->xmlSerialize(true, $sxe->addChild('laterality'));
        if (isset($this->started)) $this->started->xmlSerialize(true, $sxe->addChild('started'));
        if (0 < count($this->instance)) {
            foreach($this->instance as $instance) {
                $instance->xmlSerialize(true, $sxe->addChild('instance'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}