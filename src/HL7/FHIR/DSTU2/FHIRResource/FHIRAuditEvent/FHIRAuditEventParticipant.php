<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRAuditEvent;

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
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 */
class FHIRAuditEventParticipant extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Specification of the role(s) the user plays when performing the event. Usually the codes used in this element are local codes defined by the role-based access control security system used in the local context.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $role = [];

    /**
     * Direct reference to a resource that identifies the participant.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $reference = null;

    /**
     * Unique identifier for the user actively participating in the event.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $userId = null;

    /**
     * Alternative Participant Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $altId = null;

    /**
     * Human-meaningful name for the user.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $requestor = null;

    /**
     * Where the event occurred.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri[]
     */
    public $policy = [];

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $media = null;

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRAuditEvent\FHIRAuditEventNetwork
     */
    public $network = null;

    /**
     * The reason (purpose of use), specific to this participant, that was used during the event being recorded.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $purposeOfUse = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'AuditEvent.Participant';

    /**
     * Specification of the role(s) the user plays when performing the event. Usually the codes used in this element are local codes defined by the role-based access control security system used in the local context.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Specification of the role(s) the user plays when performing the event. Usually the codes used in this element are local codes defined by the role-based access control security system used in the local context.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $role
     * @return $this
     */
    public function addRole($role) {
        $this->role[] = $role;
        return $this;
    }

    /**
     * Direct reference to a resource that identifies the participant.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * Direct reference to a resource that identifies the participant.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $reference
     * @return $this
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Unique identifier for the user actively participating in the event.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Unique identifier for the user actively participating in the event.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $userId
     * @return $this
     */
    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Alternative Participant Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getAltId() {
        return $this->altId;
    }

    /**
     * Alternative Participant Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $altId
     * @return $this
     */
    public function setAltId($altId) {
        $this->altId = $altId;
        return $this;
    }

    /**
     * Human-meaningful name for the user.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Human-meaningful name for the user.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getRequestor() {
        return $this->requestor;
    }

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $requestor
     * @return $this
     */
    public function setRequestor($requestor) {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Where the event occurred.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * Where the event occurred.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri[]
     */
    public function getPolicy() {
        return $this->policy;
    }

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $policy
     * @return $this
     */
    public function addPolicy($policy) {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getMedia() {
        return $this->media;
    }

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $media
     * @return $this
     */
    public function setMedia($media) {
        $this->media = $media;
        return $this;
    }

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRAuditEvent\FHIRAuditEventNetwork
     */
    public function getNetwork() {
        return $this->network;
    }

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRAuditEvent\FHIRAuditEventNetwork $network
     * @return $this
     */
    public function setNetwork($network) {
        $this->network = $network;
        return $this;
    }

    /**
     * The reason (purpose of use), specific to this participant, that was used during the event being recorded.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getPurposeOfUse() {
        return $this->purposeOfUse;
    }

    /**
     * The reason (purpose of use), specific to this participant, that was used during the event being recorded.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $purposeOfUse
     * @return $this
     */
    public function addPurposeOfUse($purposeOfUse) {
        $this->purposeOfUse[] = $purposeOfUse;
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
            if (isset($data['role'])) {
                if (is_array($data['role'])) {
                    foreach($data['role'] as $d) {
                        $this->addrole($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"role" must be array of objects or null, '.gettype($data['role']).' seen.'); 
                }
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
            if (isset($data['userId'])) {
                $this->setUserId($data['userId']);
            }
            if (isset($data['altId'])) {
                $this->setAltId($data['altId']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['requestor'])) {
                $this->setRequestor($data['requestor']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['policy'])) {
                if (is_array($data['policy'])) {
                    foreach($data['policy'] as $d) {
                        $this->addpolicy($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"policy" must be array of objects or null, '.gettype($data['policy']).' seen.'); 
                }
            }
            if (isset($data['media'])) {
                $this->setMedia($data['media']);
            }
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['purposeOfUse'])) {
                if (is_array($data['purposeOfUse'])) {
                    foreach($data['purposeOfUse'] as $d) {
                        $this->addpurposeOfUse($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"purposeOfUse" must be array of objects or null, '.gettype($data['purposeOfUse']).' seen.'); 
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
        if (0 < count($this->role)) {
            $json['role'] = [];
            foreach($this->role as $role) {
                if (null !== $role) $json['role'][] = $role;
            }
        }
        if (isset($this->reference)) $json['reference'] = $this->reference;
        if (isset($this->userId)) $json['userId'] = $this->userId;
        if (isset($this->altId)) $json['altId'] = $this->altId;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->requestor)) $json['requestor'] = $this->requestor;
        if (isset($this->location)) $json['location'] = $this->location;
        if (0 < count($this->policy)) {
            $json['policy'] = [];
            foreach($this->policy as $policy) {
                if (null !== $policy) $json['policy'][] = $policy;
            }
        }
        if (isset($this->media)) $json['media'] = $this->media;
        if (isset($this->network)) $json['network'] = $this->network;
        if (0 < count($this->purposeOfUse)) {
            $json['purposeOfUse'] = [];
            foreach($this->purposeOfUse as $purposeOfUse) {
                if (null !== $purposeOfUse) $json['purposeOfUse'][] = $purposeOfUse;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AuditEventParticipant xmlns="http://hl7.org/fhir"></AuditEventParticipant>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->role)) {
            foreach($this->role as $role) {
                $role->xmlSerialize(true, $sxe->addChild('role'));
            }
        }
        if (isset($this->reference)) $this->reference->xmlSerialize(true, $sxe->addChild('reference'));
        if (isset($this->userId)) $this->userId->xmlSerialize(true, $sxe->addChild('userId'));
        if (isset($this->altId)) $this->altId->xmlSerialize(true, $sxe->addChild('altId'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->requestor)) $this->requestor->xmlSerialize(true, $sxe->addChild('requestor'));
        if (isset($this->location)) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (0 < count($this->policy)) {
            foreach($this->policy as $policy) {
                $policy->xmlSerialize(true, $sxe->addChild('policy'));
            }
        }
        if (isset($this->media)) $this->media->xmlSerialize(true, $sxe->addChild('media'));
        if (isset($this->network)) $this->network->xmlSerialize(true, $sxe->addChild('network'));
        if (0 < count($this->purposeOfUse)) {
            foreach($this->purposeOfUse as $purposeOfUse) {
                $purposeOfUse->xmlSerialize(true, $sxe->addChild('purposeOfUse'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}