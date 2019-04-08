<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRStructureDefinition;

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
 * A definition of a FHIR structure. This resource is used to describe the underlying resources, data types defined in FHIR, and also for describing extensions, and constraints on resources and data types.
 */
class FHIRStructureDefinitionMapping extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An Internal id that is used to identify this mapping set when specific mappings are made.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public $identity = null;

    /**
     * An absolute URI that identifies the specification that this mapping is expressed to.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $uri = null;

    /**
     * A name for the specification that is being mapped to.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Comments about this mapping, including version notes, issues, scope limitations, and other important notes for usage.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $comments = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'StructureDefinition.Mapping';

    /**
     * An Internal id that is used to identify this mapping set when specific mappings are made.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public function getIdentity() {
        return $this->identity;
    }

    /**
     * An Internal id that is used to identify this mapping set when specific mappings are made.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $identity
     * @return $this
     */
    public function setIdentity($identity) {
        $this->identity = $identity;
        return $this;
    }

    /**
     * An absolute URI that identifies the specification that this mapping is expressed to.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getUri() {
        return $this->uri;
    }

    /**
     * An absolute URI that identifies the specification that this mapping is expressed to.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $uri
     * @return $this
     */
    public function setUri($uri) {
        $this->uri = $uri;
        return $this;
    }

    /**
     * A name for the specification that is being mapped to.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * A name for the specification that is being mapped to.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Comments about this mapping, including version notes, issues, scope limitations, and other important notes for usage.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * Comments about this mapping, including version notes, issues, scope limitations, and other important notes for usage.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $comments
     * @return $this
     */
    public function setComments($comments) {
        $this->comments = $comments;
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
            if (isset($data['identity'])) {
                $this->setIdentity($data['identity']);
            }
            if (isset($data['uri'])) {
                $this->setUri($data['uri']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['comments'])) {
                $this->setComments($data['comments']);
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
        if (isset($this->identity)) $json['identity'] = $this->identity;
        if (isset($this->uri)) $json['uri'] = $this->uri;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->comments)) $json['comments'] = $this->comments;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<StructureDefinitionMapping xmlns="http://hl7.org/fhir"></StructureDefinitionMapping>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identity)) $this->identity->xmlSerialize(true, $sxe->addChild('identity'));
        if (isset($this->uri)) $this->uri->xmlSerialize(true, $sxe->addChild('uri'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->comments)) $this->comments->xmlSerialize(true, $sxe->addChild('comments'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}