<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse;

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
 * This resource provides the adjudication details from the processing of a Claim resource.
 */
class FHIRClaimResponseAddItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * List of input service items which this service line is intended to replace.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    public $sequenceLinkId = [];

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $service = null;

    /**
     * The fee charged for the professional service or product..
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $fee = null;

    /**
     * A list of note references to the notes provided below.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    public $noteNumberLinkId = [];

    /**
     * The adjudications results.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication3[]
     */
    public $adjudication = [];

    /**
     * The second tier service adjudications for payor added services.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    public $detail = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ClaimResponse.AddItem';

    /**
     * List of input service items which this service line is intended to replace.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    public function getSequenceLinkId() {
        return $this->sequenceLinkId;
    }

    /**
     * List of input service items which this service line is intended to replace.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @return $this
     */
    public function addSequenceLinkId($sequenceLinkId) {
        $this->sequenceLinkId[] = $sequenceLinkId;
        return $this;
    }

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getService() {
        return $this->service;
    }

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $service
     * @return $this
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * The fee charged for the professional service or product..
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFee() {
        return $this->fee;
    }

    /**
     * The fee charged for the professional service or product..
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $fee
     * @return $this
     */
    public function setFee($fee) {
        $this->fee = $fee;
        return $this;
    }

    /**
     * A list of note references to the notes provided below.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumberLinkId() {
        return $this->noteNumberLinkId;
    }

    /**
     * A list of note references to the notes provided below.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $noteNumberLinkId
     * @return $this
     */
    public function addNoteNumberLinkId($noteNumberLinkId) {
        $this->noteNumberLinkId[] = $noteNumberLinkId;
        return $this;
    }

    /**
     * The adjudications results.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication3[]
     */
    public function getAdjudication() {
        return $this->adjudication;
    }

    /**
     * The adjudications results.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication3 $adjudication
     * @return $this
     */
    public function addAdjudication($adjudication) {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * The second tier service adjudications for payor added services.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    public function getDetail() {
        return $this->detail;
    }

    /**
     * The second tier service adjudications for payor added services.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1 $detail
     * @return $this
     */
    public function addDetail($detail) {
        $this->detail[] = $detail;
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
            if (isset($data['sequenceLinkId'])) {
                if (is_array($data['sequenceLinkId'])) {
                    foreach($data['sequenceLinkId'] as $d) {
                        $this->addsequenceLinkId($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"sequenceLinkId" must be array of objects or null, '.gettype($data['sequenceLinkId']).' seen.'); 
                }
            }
            if (isset($data['service'])) {
                $this->setService($data['service']);
            }
            if (isset($data['fee'])) {
                $this->setFee($data['fee']);
            }
            if (isset($data['noteNumberLinkId'])) {
                if (is_array($data['noteNumberLinkId'])) {
                    foreach($data['noteNumberLinkId'] as $d) {
                        $this->addnoteNumberLinkId($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"noteNumberLinkId" must be array of objects or null, '.gettype($data['noteNumberLinkId']).' seen.'); 
                }
            }
            if (isset($data['adjudication'])) {
                if (is_array($data['adjudication'])) {
                    foreach($data['adjudication'] as $d) {
                        $this->addadjudication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"adjudication" must be array of objects or null, '.gettype($data['adjudication']).' seen.'); 
                }
            }
            if (isset($data['detail'])) {
                if (is_array($data['detail'])) {
                    foreach($data['detail'] as $d) {
                        $this->adddetail($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"detail" must be array of objects or null, '.gettype($data['detail']).' seen.'); 
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
        if (0 < count($this->sequenceLinkId)) {
            $json['sequenceLinkId'] = [];
            foreach($this->sequenceLinkId as $sequenceLinkId) {
                if (null !== $sequenceLinkId) $json['sequenceLinkId'][] = $sequenceLinkId;
            }
        }
        if (isset($this->service)) $json['service'] = $this->service;
        if (isset($this->fee)) $json['fee'] = $this->fee;
        if (0 < count($this->noteNumberLinkId)) {
            $json['noteNumberLinkId'] = [];
            foreach($this->noteNumberLinkId as $noteNumberLinkId) {
                if (null !== $noteNumberLinkId) $json['noteNumberLinkId'][] = $noteNumberLinkId;
            }
        }
        if (0 < count($this->adjudication)) {
            $json['adjudication'] = [];
            foreach($this->adjudication as $adjudication) {
                if (null !== $adjudication) $json['adjudication'][] = $adjudication;
            }
        }
        if (0 < count($this->detail)) {
            $json['detail'] = [];
            foreach($this->detail as $detail) {
                if (null !== $detail) $json['detail'][] = $detail;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimResponseAddItem xmlns="http://hl7.org/fhir"></ClaimResponseAddItem>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->sequenceLinkId)) {
            foreach($this->sequenceLinkId as $sequenceLinkId) {
                $sequenceLinkId->xmlSerialize(true, $sxe->addChild('sequenceLinkId'));
            }
        }
        if (isset($this->service)) $this->service->xmlSerialize(true, $sxe->addChild('service'));
        if (isset($this->fee)) $this->fee->xmlSerialize(true, $sxe->addChild('fee'));
        if (0 < count($this->noteNumberLinkId)) {
            foreach($this->noteNumberLinkId as $noteNumberLinkId) {
                $noteNumberLinkId->xmlSerialize(true, $sxe->addChild('noteNumberLinkId'));
            }
        }
        if (0 < count($this->adjudication)) {
            foreach($this->adjudication as $adjudication) {
                $adjudication->xmlSerialize(true, $sxe->addChild('adjudication'));
            }
        }
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}