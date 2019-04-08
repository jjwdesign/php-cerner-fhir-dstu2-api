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
 * This resource identifies an instance of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.  Medical devices includes durable (reusable) medical equipment, implantable devices, as well as disposable equipment used for diagnostic, treatment, and research for healthcare and public health.  Non-medical devices may include items such as a machine, cellphone, computer, application, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDevice extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique instance identifiers assigned to a device by organizations like manufacturers or owners. If the identifier identifies the type of device, Device.type should be used.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Code or identifier to identify a kind of device.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Status of the Device availability.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceStatus
     */
    public $status = null;

    /**
     * A name of the manufacturer.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $manufacturer = null;

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $model = null;

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * The date and time when the device was manufactured.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $manufactureDate = null;

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $expiry = null;

    /**
     * United States Food and Drug Administration mandated Unique Device Identifier (UDI). Use the human readable information (the content that the user sees, which is sometimes different to the exact syntax represented in the barcode)  - see http://www.fda.gov/MedicalDevices/DeviceRegulationandGuidance/UniqueDeviceIdentification/default.htm.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $udi = null;

    /**
     * Lot number assigned by the manufacturer.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $lotNumber = null;

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * The place where the device can be found.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Patient information, if the resource is affixed to a person.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint[]
     */
    public $contact = [];

    /**
     * A network address on which the device may be contacted directly.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Device';

    /**
     * Unique instance identifiers assigned to a device by organizations like manufacturers or owners. If the identifier identifies the type of device, Device.type should be used.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique instance identifiers assigned to a device by organizations like manufacturers or owners. If the identifier identifies the type of device, Device.type should be used.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Code or identifier to identify a kind of device.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Code or identifier to identify a kind of device.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Status of the Device availability.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Status of the Device availability.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDeviceStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A name of the manufacturer.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getManufacturer() {
        return $this->manufacturer;
    }

    /**
     * A name of the manufacturer.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $model
     * @return $this
     */
    public function setModel($model) {
        $this->model = $model;
        return $this;
    }

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    /**
     * The date and time when the device was manufactured.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getManufactureDate() {
        return $this->manufactureDate;
    }

    /**
     * The date and time when the device was manufactured.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $manufactureDate
     * @return $this
     */
    public function setManufactureDate($manufactureDate) {
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getExpiry() {
        return $this->expiry;
    }

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $expiry
     * @return $this
     */
    public function setExpiry($expiry) {
        $this->expiry = $expiry;
        return $this;
    }

    /**
     * United States Food and Drug Administration mandated Unique Device Identifier (UDI). Use the human readable information (the content that the user sees, which is sometimes different to the exact syntax represented in the barcode)  - see http://www.fda.gov/MedicalDevices/DeviceRegulationandGuidance/UniqueDeviceIdentification/default.htm.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getUdi() {
        return $this->udi;
    }

    /**
     * United States Food and Drug Administration mandated Unique Device Identifier (UDI). Use the human readable information (the content that the user sees, which is sometimes different to the exact syntax represented in the barcode)  - see http://www.fda.gov/MedicalDevices/DeviceRegulationandGuidance/UniqueDeviceIdentification/default.htm.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $udi
     * @return $this
     */
    public function setUdi($udi) {
        $this->udi = $udi;
        return $this;
    }

    /**
     * Lot number assigned by the manufacturer.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getLotNumber() {
        return $this->lotNumber;
    }

    /**
     * Lot number assigned by the manufacturer.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $lotNumber
     * @return $this
     */
    public function setLotNumber($lotNumber) {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getOwner() {
        return $this->owner;
    }

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $owner
     * @return $this
     */
    public function setOwner($owner) {
        $this->owner = $owner;
        return $this;
    }

    /**
     * The place where the device can be found.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * The place where the device can be found.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Patient information, if the resource is affixed to a person.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * Patient information, if the resource is affixed to a person.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint[]
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint $contact
     * @return $this
     */
    public function addContact($contact) {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A network address on which the device may be contacted directly.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * A network address on which the device may be contacted directly.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url) {
        $this->url = $url;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addnote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.'); 
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['model'])) {
                $this->setModel($data['model']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
            if (isset($data['manufactureDate'])) {
                $this->setManufactureDate($data['manufactureDate']);
            }
            if (isset($data['expiry'])) {
                $this->setExpiry($data['expiry']);
            }
            if (isset($data['udi'])) {
                $this->setUdi($data['udi']);
            }
            if (isset($data['lotNumber'])) {
                $this->setLotNumber($data['lotNumber']);
            }
            if (isset($data['owner'])) {
                $this->setOwner($data['owner']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['contact'])) {
                if (is_array($data['contact'])) {
                    foreach($data['contact'] as $d) {
                        $this->addcontact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contact" must be array of objects or null, '.gettype($data['contact']).' seen.'); 
                }
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->manufacturer)) $json['manufacturer'] = $this->manufacturer;
        if (isset($this->model)) $json['model'] = $this->model;
        if (isset($this->version)) $json['version'] = $this->version;
        if (isset($this->manufactureDate)) $json['manufactureDate'] = $this->manufactureDate;
        if (isset($this->expiry)) $json['expiry'] = $this->expiry;
        if (isset($this->udi)) $json['udi'] = $this->udi;
        if (isset($this->lotNumber)) $json['lotNumber'] = $this->lotNumber;
        if (isset($this->owner)) $json['owner'] = $this->owner;
        if (isset($this->location)) $json['location'] = $this->location;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                if (null !== $contact) $json['contact'][] = $contact;
            }
        }
        if (isset($this->url)) $json['url'] = $this->url;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Device xmlns="http://hl7.org/fhir"></Device>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->manufacturer)) $this->manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
        if (isset($this->model)) $this->model->xmlSerialize(true, $sxe->addChild('model'));
        if (isset($this->version)) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (isset($this->manufactureDate)) $this->manufactureDate->xmlSerialize(true, $sxe->addChild('manufactureDate'));
        if (isset($this->expiry)) $this->expiry->xmlSerialize(true, $sxe->addChild('expiry'));
        if (isset($this->udi)) $this->udi->xmlSerialize(true, $sxe->addChild('udi'));
        if (isset($this->lotNumber)) $this->lotNumber->xmlSerialize(true, $sxe->addChild('lotNumber'));
        if (isset($this->owner)) $this->owner->xmlSerialize(true, $sxe->addChild('owner'));
        if (isset($this->location)) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (isset($this->url)) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}