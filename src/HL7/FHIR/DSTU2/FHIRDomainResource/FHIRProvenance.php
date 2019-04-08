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
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProvenance extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The Reference(s) that were generated or updated by  the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $target = [];

    /**
     * The period during which the activity occurred.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The instant of time at which the activity was recorded.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $recorded = null;

    /**
     * The reason that the activity was taking place.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = [];

    /**
     * An activity is something that occurs over a period of time and acts upon or with entities; it may include consuming, processing, transforming, modifying, relocating, using, or generating entities.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $activity = null;

    /**
     * Where the activity occurred, if relevant.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri[]
     */
    public $policy = [];

    /**
     * An agent takes a role in an activity such that the agent can be assigned some degree of responsibility for the activity taking place. An agent can be a person, an organization, software, or other entities that may be ascribed responsibility.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public $agent = [];

    /**
     * An entity used in this activity.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProvenance\FHIRProvenanceEntity[]
     */
    public $entity = [];

    /**
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature[]
     */
    public $signature = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Provenance';

    /**
     * The Reference(s) that were generated or updated by  the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * The Reference(s) that were generated or updated by  the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $target
     * @return $this
     */
    public function addTarget($target) {
        $this->target[] = $target;
        return $this;
    }

    /**
     * The period during which the activity occurred.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * The period during which the activity occurred.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * The instant of time at which the activity was recorded.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getRecorded() {
        return $this->recorded;
    }

    /**
     * The instant of time at which the activity was recorded.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $recorded
     * @return $this
     */
    public function setRecorded($recorded) {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * The reason that the activity was taking place.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * The reason that the activity was taking place.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function addReason($reason) {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * An activity is something that occurs over a period of time and acts upon or with entities; it may include consuming, processing, transforming, modifying, relocating, using, or generating entities.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getActivity() {
        return $this->activity;
    }

    /**
     * An activity is something that occurs over a period of time and acts upon or with entities; it may include consuming, processing, transforming, modifying, relocating, using, or generating entities.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $activity
     * @return $this
     */
    public function setActivity($activity) {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Where the activity occurred, if relevant.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * Where the activity occurred, if relevant.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri[]
     */
    public function getPolicy() {
        return $this->policy;
    }

    /**
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $policy
     * @return $this
     */
    public function addPolicy($policy) {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * An agent takes a role in an activity such that the agent can be assigned some degree of responsibility for the activity taking place. An agent can be a person, an organization, software, or other entities that may be ascribed responsibility.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * An agent takes a role in an activity such that the agent can be assigned some degree of responsibility for the activity taking place. An agent can be a person, an organization, software, or other entities that may be ascribed responsibility.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return $this
     */
    public function addAgent($agent) {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * An entity used in this activity.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProvenance\FHIRProvenanceEntity[]
     */
    public function getEntity() {
        return $this->entity;
    }

    /**
     * An entity used in this activity.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRProvenance\FHIRProvenanceEntity $entity
     * @return $this
     */
    public function addEntity($entity) {
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature[]
     */
    public function getSignature() {
        return $this->signature;
    }

    /**
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature $signature
     * @return $this
     */
    public function addSignature($signature) {
        $this->signature[] = $signature;
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
            if (isset($data['target'])) {
                if (is_array($data['target'])) {
                    foreach($data['target'] as $d) {
                        $this->addtarget($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"target" must be array of objects or null, '.gettype($data['target']).' seen.'); 
                }
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['recorded'])) {
                $this->setRecorded($data['recorded']);
            }
            if (isset($data['reason'])) {
                if (is_array($data['reason'])) {
                    foreach($data['reason'] as $d) {
                        $this->addreason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reason" must be array of objects or null, '.gettype($data['reason']).' seen.'); 
                }
            }
            if (isset($data['activity'])) {
                $this->setActivity($data['activity']);
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
            if (isset($data['agent'])) {
                if (is_array($data['agent'])) {
                    foreach($data['agent'] as $d) {
                        $this->addagent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"agent" must be array of objects or null, '.gettype($data['agent']).' seen.'); 
                }
            }
            if (isset($data['entity'])) {
                if (is_array($data['entity'])) {
                    foreach($data['entity'] as $d) {
                        $this->addentity($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"entity" must be array of objects or null, '.gettype($data['entity']).' seen.'); 
                }
            }
            if (isset($data['signature'])) {
                if (is_array($data['signature'])) {
                    foreach($data['signature'] as $d) {
                        $this->addsignature($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"signature" must be array of objects or null, '.gettype($data['signature']).' seen.'); 
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
        if (0 < count($this->target)) {
            $json['target'] = [];
            foreach($this->target as $target) {
                if (null !== $target) $json['target'][] = $target;
            }
        }
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->recorded)) $json['recorded'] = $this->recorded;
        if (0 < count($this->reason)) {
            $json['reason'] = [];
            foreach($this->reason as $reason) {
                if (null !== $reason) $json['reason'][] = $reason;
            }
        }
        if (isset($this->activity)) $json['activity'] = $this->activity;
        if (isset($this->location)) $json['location'] = $this->location;
        if (0 < count($this->policy)) {
            $json['policy'] = [];
            foreach($this->policy as $policy) {
                if (null !== $policy) $json['policy'][] = $policy;
            }
        }
        if (0 < count($this->agent)) {
            $json['agent'] = [];
            foreach($this->agent as $agent) {
                if (null !== $agent) $json['agent'][] = $agent;
            }
        }
        if (0 < count($this->entity)) {
            $json['entity'] = [];
            foreach($this->entity as $entity) {
                if (null !== $entity) $json['entity'][] = $entity;
            }
        }
        if (0 < count($this->signature)) {
            $json['signature'] = [];
            foreach($this->signature as $signature) {
                if (null !== $signature) $json['signature'][] = $signature;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Provenance xmlns="http://hl7.org/fhir"></Provenance>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->target)) {
            foreach($this->target as $target) {
                $target->xmlSerialize(true, $sxe->addChild('target'));
            }
        }
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->recorded)) $this->recorded->xmlSerialize(true, $sxe->addChild('recorded'));
        if (0 < count($this->reason)) {
            foreach($this->reason as $reason) {
                $reason->xmlSerialize(true, $sxe->addChild('reason'));
            }
        }
        if (isset($this->activity)) $this->activity->xmlSerialize(true, $sxe->addChild('activity'));
        if (isset($this->location)) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (0 < count($this->policy)) {
            foreach($this->policy as $policy) {
                $policy->xmlSerialize(true, $sxe->addChild('policy'));
            }
        }
        if (0 < count($this->agent)) {
            foreach($this->agent as $agent) {
                $agent->xmlSerialize(true, $sxe->addChild('agent'));
            }
        }
        if (0 < count($this->entity)) {
            foreach($this->entity as $entity) {
                $entity->xmlSerialize(true, $sxe->addChild('entity'));
            }
        }
        if (0 < count($this->signature)) {
            foreach($this->signature as $signature) {
                $signature->xmlSerialize(true, $sxe->addChild('signature'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}