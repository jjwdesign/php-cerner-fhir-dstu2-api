<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIROperationDefinition;

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
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 */
class FHIROperationDefinitionParameter extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The name of used to identify the parameter.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $name = null;

    /**
     * Whether this is an input or an output parameter.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIROperationParameterUse
     */
    public $use = null;

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Describes the meaning or use of this parameter.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * The type for this parameter.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $profile = null;

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public $binding = null;

    /**
     * The parts of a Tuple Parameter.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public $part = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'OperationDefinition.Parameter';

    /**
     * The name of used to identify the parameter.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getName() {
        return $this->name;
    }

    /**
     * The name of used to identify the parameter.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Whether this is an input or an output parameter.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIROperationParameterUse
     */
    public function getUse() {
        return $this->use;
    }

    /**
     * Whether this is an input or an output parameter.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIROperationParameterUse $use
     * @return $this
     */
    public function setUse($use) {
        $this->use = $use;
        return $this;
    }

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $min
     * @return $this
     */
    public function setMin($min) {
        $this->min = $min;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max) {
        $this->max = $max;
        return $this;
    }

    /**
     * Describes the meaning or use of this parameter.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDocumentation() {
        return $this->documentation;
    }

    /**
     * Describes the meaning or use of this parameter.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $documentation
     * @return $this
     */
    public function setDocumentation($documentation) {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * The type for this parameter.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type for this parameter.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getProfile() {
        return $this->profile;
    }

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $profile
     * @return $this
     */
    public function setProfile($profile) {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public function getBinding() {
        return $this->binding;
    }

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     * @return $this
     */
    public function setBinding($binding) {
        $this->binding = $binding;
        return $this;
    }

    /**
     * The parts of a Tuple Parameter.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getPart() {
        return $this->part;
    }

    /**
     * The parts of a Tuple Parameter.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter $part
     * @return $this
     */
    public function addPart($part) {
        $this->part[] = $part;
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
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['profile'])) {
                $this->setProfile($data['profile']);
            }
            if (isset($data['binding'])) {
                $this->setBinding($data['binding']);
            }
            if (isset($data['part'])) {
                if (is_array($data['part'])) {
                    foreach($data['part'] as $d) {
                        $this->addpart($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"part" must be array of objects or null, '.gettype($data['part']).' seen.'); 
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
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->use)) $json['use'] = $this->use;
        if (isset($this->min)) $json['min'] = $this->min;
        if (isset($this->max)) $json['max'] = $this->max;
        if (isset($this->documentation)) $json['documentation'] = $this->documentation;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->profile)) $json['profile'] = $this->profile;
        if (isset($this->binding)) $json['binding'] = $this->binding;
        if (0 < count($this->part)) {
            $json['part'] = [];
            foreach($this->part as $part) {
                if (null !== $part) $json['part'][] = $part;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OperationDefinitionParameter xmlns="http://hl7.org/fhir"></OperationDefinitionParameter>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->use)) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (isset($this->min)) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (isset($this->max)) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (isset($this->documentation)) $this->documentation->xmlSerialize(true, $sxe->addChild('documentation'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->profile)) $this->profile->xmlSerialize(true, $sxe->addChild('profile'));
        if (isset($this->binding)) $this->binding->xmlSerialize(true, $sxe->addChild('binding'));
        if (0 < count($this->part)) {
            foreach($this->part as $part) {
                $part->xmlSerialize(true, $sxe->addChild('part'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}