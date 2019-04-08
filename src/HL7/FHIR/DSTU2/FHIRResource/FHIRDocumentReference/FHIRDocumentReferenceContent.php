<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRDocumentReference;

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
 * A reference to a document .
 */
class FHIRDocumentReferenceContent extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The document or url of the document along with critical metadata to prove content has integrity.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public $attachment = null;

    /**
     * An identifier of the document encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $format = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'DocumentReference.Content';

    /**
     * The document or url of the document along with critical metadata to prove content has integrity.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getAttachment() {
        return $this->attachment;
    }

    /**
     * The document or url of the document along with critical metadata to prove content has integrity.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $attachment
     * @return $this
     */
    public function setAttachment($attachment) {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * An identifier of the document encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getFormat() {
        return $this->format;
    }

    /**
     * An identifier of the document encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $format
     * @return $this
     */
    public function addFormat($format) {
        $this->format[] = $format;
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
            if (isset($data['attachment'])) {
                $this->setAttachment($data['attachment']);
            }
            if (isset($data['format'])) {
                if (is_array($data['format'])) {
                    foreach($data['format'] as $d) {
                        $this->addformat($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"format" must be array of objects or null, '.gettype($data['format']).' seen.'); 
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
        if (isset($this->attachment)) $json['attachment'] = $this->attachment;
        if (0 < count($this->format)) {
            $json['format'] = [];
            foreach($this->format as $format) {
                if (null !== $format) $json['format'][] = $format;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DocumentReferenceContent xmlns="http://hl7.org/fhir"></DocumentReferenceContent>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->attachment)) $this->attachment->xmlSerialize(true, $sxe->addChild('attachment'));
        if (0 < count($this->format)) {
            foreach($this->format as $format) {
                $format->xmlSerialize(true, $sxe->addChild('format'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}