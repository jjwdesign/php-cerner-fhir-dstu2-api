<?php namespace App\HL7\FHIR\DSTU2\FHIRElement;

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
 * A human's name with the ability to identify parts and usage.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRHumanName extends FHIRElement implements \JsonSerializable
{
    /**
     * Identifies the purpose for this name.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRNameUse
     */
    public $use = null;

    /**
     * A full text representation of the name.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public $family = [];

    /**
     * Given name.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public $given = [];

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public $prefix = [];

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public $suffix = [];

    /**
     * Indicates the period of time when this name was valid for the named person.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'HumanName';

    /**
     * Identifies the purpose for this name.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRNameUse
     */
    public function getUse() {
        return $this->use;
    }

    /**
     * Identifies the purpose for this name.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRNameUse $use
     * @return $this
     */
    public function setUse($use) {
        $this->use = $use;
        return $this;
    }

    /**
     * A full text representation of the name.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getText() {
        return $this->text;
    }

    /**
     * A full text representation of the name.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public function getFamily() {
        return $this->family;
    }

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $family
     * @return $this
     */
    public function addFamily($family) {
        $this->family[] = $family;
        return $this;
    }

    /**
     * Given name.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public function getGiven() {
        return $this->given;
    }

    /**
     * Given name.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $given
     * @return $this
     */
    public function addGiven($given) {
        $this->given[] = $given;
        return $this;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public function getPrefix() {
        return $this->prefix;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $prefix
     * @return $this
     */
    public function addPrefix($prefix) {
        $this->prefix[] = $prefix;
        return $this;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public function getSuffix() {
        return $this->suffix;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $suffix
     * @return $this
     */
    public function addSuffix($suffix) {
        $this->suffix[] = $suffix;
        return $this;
    }

    /**
     * Indicates the period of time when this name was valid for the named person.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Indicates the period of time when this name was valid for the named person.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
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
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['family'])) {
                if (is_array($data['family'])) {
                    foreach($data['family'] as $d) {
                        $this->addfamily($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"family" must be array of objects or null, '.gettype($data['family']).' seen.'); 
                }
            }
            if (isset($data['given'])) {
                if (is_array($data['given'])) {
                    foreach($data['given'] as $d) {
                        $this->addgiven($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"given" must be array of objects or null, '.gettype($data['given']).' seen.'); 
                }
            }
            if (isset($data['prefix'])) {
                if (is_array($data['prefix'])) {
                    foreach($data['prefix'] as $d) {
                        $this->addprefix($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"prefix" must be array of objects or null, '.gettype($data['prefix']).' seen.'); 
                }
            }
            if (isset($data['suffix'])) {
                if (is_array($data['suffix'])) {
                    foreach($data['suffix'] as $d) {
                        $this->addsuffix($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"suffix" must be array of objects or null, '.gettype($data['suffix']).' seen.'); 
                }
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
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
        if (isset($this->use)) $json['use'] = $this->use;
        if (isset($this->text)) $json['text'] = $this->text;
        if (0 < count($this->family)) {
            $json['family'] = [];
            foreach($this->family as $family) {
                if (null !== $family) $json['family'][] = $family;
            }
        }
        if (0 < count($this->given)) {
            $json['given'] = [];
            foreach($this->given as $given) {
                if (null !== $given) $json['given'][] = $given;
            }
        }
        if (0 < count($this->prefix)) {
            $json['prefix'] = [];
            foreach($this->prefix as $prefix) {
                if (null !== $prefix) $json['prefix'][] = $prefix;
            }
        }
        if (0 < count($this->suffix)) {
            $json['suffix'] = [];
            foreach($this->suffix as $suffix) {
                if (null !== $suffix) $json['suffix'][] = $suffix;
            }
        }
        if (isset($this->period)) $json['period'] = $this->period;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<HumanName xmlns="http://hl7.org/fhir"></HumanName>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->use)) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (isset($this->text)) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (0 < count($this->family)) {
            foreach($this->family as $family) {
                $family->xmlSerialize(true, $sxe->addChild('family'));
            }
        }
        if (0 < count($this->given)) {
            foreach($this->given as $given) {
                $given->xmlSerialize(true, $sxe->addChild('given'));
            }
        }
        if (0 < count($this->prefix)) {
            foreach($this->prefix as $prefix) {
                $prefix->xmlSerialize(true, $sxe->addChild('prefix'));
            }
        }
        if (0 < count($this->suffix)) {
            foreach($this->suffix as $suffix) {
                $suffix->xmlSerialize(true, $sxe->addChild('suffix'));
            }
        }
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}