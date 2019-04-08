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
 * A sample to be used for analysis.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSpecimen extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Id for specimen.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The availability of the specimen.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSpecimenStatus
     */
    public $status = null;

    /**
     * The kind of material that forms the specimen.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $parent = [];

    /**
     * Where the specimen came from. This may be from the patient(s) or from the environment or a device.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $accessionIdentifier = null;

    /**
     * Time when specimen was received for processing or testing.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $receivedTime = null;

    /**
     * Details concerning the specimen collection.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection
     */
    public $collection = null;

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment[]
     */
    public $treatment = [];

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    public $container = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Specimen';

    /**
     * Id for specimen.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Id for specimen.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The availability of the specimen.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSpecimenStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The availability of the specimen.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSpecimenStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The kind of material that forms the specimen.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The kind of material that forms the specimen.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $parent
     * @return $this
     */
    public function addParent($parent) {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * Where the specimen came from. This may be from the patient(s) or from the environment or a device.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Where the specimen came from. This may be from the patient(s) or from the environment or a device.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getAccessionIdentifier() {
        return $this->accessionIdentifier;
    }

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $accessionIdentifier
     * @return $this
     */
    public function setAccessionIdentifier($accessionIdentifier) {
        $this->accessionIdentifier = $accessionIdentifier;
        return $this;
    }

    /**
     * Time when specimen was received for processing or testing.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getReceivedTime() {
        return $this->receivedTime;
    }

    /**
     * Time when specimen was received for processing or testing.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $receivedTime
     * @return $this
     */
    public function setReceivedTime($receivedTime) {
        $this->receivedTime = $receivedTime;
        return $this;
    }

    /**
     * Details concerning the specimen collection.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function getCollection() {
        return $this->collection;
    }

    /**
     * Details concerning the specimen collection.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection $collection
     * @return $this
     */
    public function setCollection($collection) {
        $this->collection = $collection;
        return $this;
    }

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment[]
     */
    public function getTreatment() {
        return $this->treatment;
    }

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment $treatment
     * @return $this
     */
    public function addTreatment($treatment) {
        $this->treatment[] = $treatment;
        return $this;
    }

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    public function getContainer() {
        return $this->container;
    }

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer $container
     * @return $this
     */
    public function addContainer($container) {
        $this->container[] = $container;
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
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addidentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.'); 
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['parent'])) {
                if (is_array($data['parent'])) {
                    foreach($data['parent'] as $d) {
                        $this->addparent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"parent" must be array of objects or null, '.gettype($data['parent']).' seen.'); 
                }
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['accessionIdentifier'])) {
                $this->setAccessionIdentifier($data['accessionIdentifier']);
            }
            if (isset($data['receivedTime'])) {
                $this->setReceivedTime($data['receivedTime']);
            }
            if (isset($data['collection'])) {
                $this->setCollection($data['collection']);
            }
            if (isset($data['treatment'])) {
                if (is_array($data['treatment'])) {
                    foreach($data['treatment'] as $d) {
                        $this->addtreatment($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"treatment" must be array of objects or null, '.gettype($data['treatment']).' seen.'); 
                }
            }
            if (isset($data['container'])) {
                if (is_array($data['container'])) {
                    foreach($data['container'] as $d) {
                        $this->addcontainer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"container" must be array of objects or null, '.gettype($data['container']).' seen.'); 
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->parent)) {
            $json['parent'] = [];
            foreach($this->parent as $parent) {
                if (null !== $parent) $json['parent'][] = $parent;
            }
        }
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->accessionIdentifier)) $json['accessionIdentifier'] = $this->accessionIdentifier;
        if (isset($this->receivedTime)) $json['receivedTime'] = $this->receivedTime;
        if (isset($this->collection)) $json['collection'] = $this->collection;
        if (0 < count($this->treatment)) {
            $json['treatment'] = [];
            foreach($this->treatment as $treatment) {
                if (null !== $treatment) $json['treatment'][] = $treatment;
            }
        }
        if (0 < count($this->container)) {
            $json['container'] = [];
            foreach($this->container as $container) {
                if (null !== $container) $json['container'][] = $container;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Specimen xmlns="http://hl7.org/fhir"></Specimen>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->parent)) {
            foreach($this->parent as $parent) {
                $parent->xmlSerialize(true, $sxe->addChild('parent'));
            }
        }
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->accessionIdentifier)) $this->accessionIdentifier->xmlSerialize(true, $sxe->addChild('accessionIdentifier'));
        if (isset($this->receivedTime)) $this->receivedTime->xmlSerialize(true, $sxe->addChild('receivedTime'));
        if (isset($this->collection)) $this->collection->xmlSerialize(true, $sxe->addChild('collection'));
        if (0 < count($this->treatment)) {
            foreach($this->treatment as $treatment) {
                $treatment->xmlSerialize(true, $sxe->addChild('treatment'));
            }
        }
        if (0 < count($this->container)) {
            foreach($this->container as $container) {
                $container->xmlSerialize(true, $sxe->addChild('container'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}