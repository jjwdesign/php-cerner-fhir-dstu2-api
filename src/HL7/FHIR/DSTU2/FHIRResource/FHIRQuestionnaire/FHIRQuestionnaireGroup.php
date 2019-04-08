<?php namespace App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire;

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
 * A structured set of questions intended to guide the collection of answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 */
class FHIRQuestionnaireGroup extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent group in a QuestionnaireResponse resource.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * The human-readable name for this section of the questionnaire.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * Identifies a how this group of questions is known in a particular terminology such as LOINC.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $concept = [];

    /**
     * Additional text for the group, used for display purposes.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * If true, indicates that the group must be present and have required questions within it answered.  If false, the group may be skipped when answering the questionnaire.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $required = null;

    /**
     * Whether the group may occur multiple times in the instance, containing multiple sets of answers.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $repeats = null;

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public $group = [];

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireQuestion[]
     */
    public $question = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire.Group';

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent group in a QuestionnaireResponse resource.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getLinkId() {
        return $this->linkId;
    }

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent group in a QuestionnaireResponse resource.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $linkId
     * @return $this
     */
    public function setLinkId($linkId) {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * The human-readable name for this section of the questionnaire.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * The human-readable name for this section of the questionnaire.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Identifies a how this group of questions is known in a particular terminology such as LOINC.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getConcept() {
        return $this->concept;
    }

    /**
     * Identifies a how this group of questions is known in a particular terminology such as LOINC.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $concept
     * @return $this
     */
    public function addConcept($concept) {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * Additional text for the group, used for display purposes.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Additional text for the group, used for display purposes.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * If true, indicates that the group must be present and have required questions within it answered.  If false, the group may be skipped when answering the questionnaire.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getRequired() {
        return $this->required;
    }

    /**
     * If true, indicates that the group must be present and have required questions within it answered.  If false, the group may be skipped when answering the questionnaire.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $required
     * @return $this
     */
    public function setRequired($required) {
        $this->required = $required;
        return $this;
    }

    /**
     * Whether the group may occur multiple times in the instance, containing multiple sets of answers.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getRepeats() {
        return $this->repeats;
    }

    /**
     * Whether the group may occur multiple times in the instance, containing multiple sets of answers.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $repeats
     * @return $this
     */
    public function setRepeats($repeats) {
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public function getGroup() {
        return $this->group;
    }

    /**
     * A sub-group within a group. The ordering of groups within this group is relevant.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup $group
     * @return $this
     */
    public function addGroup($group) {
        $this->group[] = $group;
        return $this;
    }

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireQuestion[]
     */
    public function getQuestion() {
        return $this->question;
    }

    /**
     * Set of questions within this group. The order of questions within the group is relevant.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireQuestion $question
     * @return $this
     */
    public function addQuestion($question) {
        $this->question[] = $question;
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
            if (isset($data['linkId'])) {
                $this->setLinkId($data['linkId']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['concept'])) {
                if (is_array($data['concept'])) {
                    foreach($data['concept'] as $d) {
                        $this->addconcept($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"concept" must be array of objects or null, '.gettype($data['concept']).' seen.'); 
                }
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['required'])) {
                $this->setRequired($data['required']);
            }
            if (isset($data['repeats'])) {
                $this->setRepeats($data['repeats']);
            }
            if (isset($data['group'])) {
                if (is_array($data['group'])) {
                    foreach($data['group'] as $d) {
                        $this->addgroup($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"group" must be array of objects or null, '.gettype($data['group']).' seen.'); 
                }
            }
            if (isset($data['question'])) {
                if (is_array($data['question'])) {
                    foreach($data['question'] as $d) {
                        $this->addquestion($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"question" must be array of objects or null, '.gettype($data['question']).' seen.'); 
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
        if (isset($this->linkId)) $json['linkId'] = $this->linkId;
        if (isset($this->title)) $json['title'] = $this->title;
        if (0 < count($this->concept)) {
            $json['concept'] = [];
            foreach($this->concept as $concept) {
                if (null !== $concept) $json['concept'][] = $concept;
            }
        }
        if (isset($this->text)) $json['text'] = $this->text;
        if (isset($this->required)) $json['required'] = $this->required;
        if (isset($this->repeats)) $json['repeats'] = $this->repeats;
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                if (null !== $group) $json['group'][] = $group;
            }
        }
        if (0 < count($this->question)) {
            $json['question'] = [];
            foreach($this->question as $question) {
                if (null !== $question) $json['question'][] = $question;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireGroup xmlns="http://hl7.org/fhir"></QuestionnaireGroup>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->linkId)) $this->linkId->xmlSerialize(true, $sxe->addChild('linkId'));
        if (isset($this->title)) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (0 < count($this->concept)) {
            foreach($this->concept as $concept) {
                $concept->xmlSerialize(true, $sxe->addChild('concept'));
            }
        }
        if (isset($this->text)) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (isset($this->required)) $this->required->xmlSerialize(true, $sxe->addChild('required'));
        if (isset($this->repeats)) $this->repeats->xmlSerialize(true, $sxe->addChild('repeats'));
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if (0 < count($this->question)) {
            foreach($this->question as $question) {
                $question->xmlSerialize(true, $sxe->addChild('question'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}