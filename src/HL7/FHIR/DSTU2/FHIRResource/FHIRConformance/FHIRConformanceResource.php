<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRConformance;

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
 * A conformance statement is a set of capabilities of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 */
class FHIRConformanceResource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A type of resource exposed via the restful interface.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $profile = null;

    /**
     * Identifies a restful operation supported by the solution.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRConformance\FHIRConformanceInteraction[]
     */
    public $interaction = [];

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRResourceVersionPolicy
     */
    public $versioning = null;

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $readHistory = null;

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $updateCreate = null;

    /**
     * A flag that indicates that the server supports conditional create.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $conditionalCreate = null;

    /**
     * A flag that indicates that the server supports conditional update.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $conditionalUpdate = null;

    /**
     * A code that indicates how the server supports conditional delete.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionalDeleteStatus
     */
    public $conditionalDelete = null;

    /**
     * A list of _include values supported by the server.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public $searchInclude = [];

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public $searchRevInclude = [];

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRConformance\FHIRConformanceSearchParam[]
     */
    public $searchParam = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Conformance.Resource';

    /**
     * A type of resource exposed via the restful interface.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getType() {
        return $this->type;
    }

    /**
     * A type of resource exposed via the restful interface.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getProfile() {
        return $this->profile;
    }

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $profile
     * @return $this
     */
    public function setProfile($profile) {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRConformance\FHIRConformanceInteraction[]
     */
    public function getInteraction() {
        return $this->interaction;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRConformance\FHIRConformanceInteraction $interaction
     * @return $this
     */
    public function addInteraction($interaction) {
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning() {
        return $this->versioning;
    }

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @return $this
     */
    public function setVersioning($versioning) {
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getReadHistory() {
        return $this->readHistory;
    }

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $readHistory
     * @return $this
     */
    public function setReadHistory($readHistory) {
        $this->readHistory = $readHistory;
        return $this;
    }

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate() {
        return $this->updateCreate;
    }

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $updateCreate
     * @return $this
     */
    public function setUpdateCreate($updateCreate) {
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * A flag that indicates that the server supports conditional create.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate() {
        return $this->conditionalCreate;
    }

    /**
     * A flag that indicates that the server supports conditional create.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $conditionalCreate
     * @return $this
     */
    public function setConditionalCreate($conditionalCreate) {
        $this->conditionalCreate = $conditionalCreate;
        return $this;
    }

    /**
     * A flag that indicates that the server supports conditional update.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate() {
        return $this->conditionalUpdate;
    }

    /**
     * A flag that indicates that the server supports conditional update.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $conditionalUpdate
     * @return $this
     */
    public function setConditionalUpdate($conditionalUpdate) {
        $this->conditionalUpdate = $conditionalUpdate;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete() {
        return $this->conditionalDelete;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @return $this
     */
    public function setConditionalDelete($conditionalDelete) {
        $this->conditionalDelete = $conditionalDelete;
        return $this;
    }

    /**
     * A list of _include values supported by the server.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public function getSearchInclude() {
        return $this->searchInclude;
    }

    /**
     * A list of _include values supported by the server.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $searchInclude
     * @return $this
     */
    public function addSearchInclude($searchInclude) {
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude() {
        return $this->searchRevInclude;
    }

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $searchRevInclude
     * @return $this
     */
    public function addSearchRevInclude($searchRevInclude) {
        $this->searchRevInclude[] = $searchRevInclude;
        return $this;
    }

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRConformance\FHIRConformanceSearchParam[]
     */
    public function getSearchParam() {
        return $this->searchParam;
    }

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRConformance\FHIRConformanceSearchParam $searchParam
     * @return $this
     */
    public function addSearchParam($searchParam) {
        $this->searchParam[] = $searchParam;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['profile'])) {
                $this->setProfile($data['profile']);
            }
            if (isset($data['interaction'])) {
                if (is_array($data['interaction'])) {
                    foreach($data['interaction'] as $d) {
                        $this->addinteraction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"interaction" must be array of objects or null, '.gettype($data['interaction']).' seen.'); 
                }
            }
            if (isset($data['versioning'])) {
                $this->setVersioning($data['versioning']);
            }
            if (isset($data['readHistory'])) {
                $this->setReadHistory($data['readHistory']);
            }
            if (isset($data['updateCreate'])) {
                $this->setUpdateCreate($data['updateCreate']);
            }
            if (isset($data['conditionalCreate'])) {
                $this->setConditionalCreate($data['conditionalCreate']);
            }
            if (isset($data['conditionalUpdate'])) {
                $this->setConditionalUpdate($data['conditionalUpdate']);
            }
            if (isset($data['conditionalDelete'])) {
                $this->setConditionalDelete($data['conditionalDelete']);
            }
            if (isset($data['searchInclude'])) {
                if (is_array($data['searchInclude'])) {
                    foreach($data['searchInclude'] as $d) {
                        $this->addsearchInclude($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"searchInclude" must be array of objects or null, '.gettype($data['searchInclude']).' seen.'); 
                }
            }
            if (isset($data['searchRevInclude'])) {
                if (is_array($data['searchRevInclude'])) {
                    foreach($data['searchRevInclude'] as $d) {
                        $this->addsearchRevInclude($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"searchRevInclude" must be array of objects or null, '.gettype($data['searchRevInclude']).' seen.'); 
                }
            }
            if (isset($data['searchParam'])) {
                if (is_array($data['searchParam'])) {
                    foreach($data['searchParam'] as $d) {
                        $this->addsearchParam($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"searchParam" must be array of objects or null, '.gettype($data['searchParam']).' seen.'); 
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->profile)) $json['profile'] = $this->profile;
        if (0 < count($this->interaction)) {
            $json['interaction'] = [];
            foreach($this->interaction as $interaction) {
                if (null !== $interaction) $json['interaction'][] = $interaction;
            }
        }
        if (isset($this->versioning)) $json['versioning'] = $this->versioning;
        if (isset($this->readHistory)) $json['readHistory'] = $this->readHistory;
        if (isset($this->updateCreate)) $json['updateCreate'] = $this->updateCreate;
        if (isset($this->conditionalCreate)) $json['conditionalCreate'] = $this->conditionalCreate;
        if (isset($this->conditionalUpdate)) $json['conditionalUpdate'] = $this->conditionalUpdate;
        if (isset($this->conditionalDelete)) $json['conditionalDelete'] = $this->conditionalDelete;
        if (0 < count($this->searchInclude)) {
            $json['searchInclude'] = [];
            foreach($this->searchInclude as $searchInclude) {
                if (null !== $searchInclude) $json['searchInclude'][] = $searchInclude;
            }
        }
        if (0 < count($this->searchRevInclude)) {
            $json['searchRevInclude'] = [];
            foreach($this->searchRevInclude as $searchRevInclude) {
                if (null !== $searchRevInclude) $json['searchRevInclude'][] = $searchRevInclude;
            }
        }
        if (0 < count($this->searchParam)) {
            $json['searchParam'] = [];
            foreach($this->searchParam as $searchParam) {
                if (null !== $searchParam) $json['searchParam'][] = $searchParam;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConformanceResource xmlns="http://hl7.org/fhir"></ConformanceResource>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->profile)) $this->profile->xmlSerialize(true, $sxe->addChild('profile'));
        if (0 < count($this->interaction)) {
            foreach($this->interaction as $interaction) {
                $interaction->xmlSerialize(true, $sxe->addChild('interaction'));
            }
        }
        if (isset($this->versioning)) $this->versioning->xmlSerialize(true, $sxe->addChild('versioning'));
        if (isset($this->readHistory)) $this->readHistory->xmlSerialize(true, $sxe->addChild('readHistory'));
        if (isset($this->updateCreate)) $this->updateCreate->xmlSerialize(true, $sxe->addChild('updateCreate'));
        if (isset($this->conditionalCreate)) $this->conditionalCreate->xmlSerialize(true, $sxe->addChild('conditionalCreate'));
        if (isset($this->conditionalUpdate)) $this->conditionalUpdate->xmlSerialize(true, $sxe->addChild('conditionalUpdate'));
        if (isset($this->conditionalDelete)) $this->conditionalDelete->xmlSerialize(true, $sxe->addChild('conditionalDelete'));
        if (0 < count($this->searchInclude)) {
            foreach($this->searchInclude as $searchInclude) {
                $searchInclude->xmlSerialize(true, $sxe->addChild('searchInclude'));
            }
        }
        if (0 < count($this->searchRevInclude)) {
            foreach($this->searchRevInclude as $searchRevInclude) {
                $searchRevInclude->xmlSerialize(true, $sxe->addChild('searchRevInclude'));
            }
        }
        if (0 < count($this->searchParam)) {
            foreach($this->searchParam as $searchParam) {
                $searchParam->xmlSerialize(true, $sxe->addChild('searchParam'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}