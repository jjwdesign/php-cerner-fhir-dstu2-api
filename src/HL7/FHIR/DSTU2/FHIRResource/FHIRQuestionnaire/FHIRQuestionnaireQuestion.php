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
class FHIRQuestionnaireQuestion extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An identifier that is unique within the questionnaire allowing linkage to the equivalent group in a [[[QuestionnaireResponse]]] resource.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * Identifies a how this question is known in a particular terminology such as LOINC.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $concept = [];

    /**
     * The actual question as shown to the user to prompt them for an answer.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The expected format of the answer, e.g. the type of input (string, integer) or whether a (multiple) choice is expected.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnswerFormat
     */
    public $type = null;

    /**
     * If true, indicates that the question must be answered and have required groups within it also present.  If false, the question and any contained groups may be skipped when answering the questionnaire.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $required = null;

    /**
     * If true, the question may have more than one answer.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $repeats = null;

    /**
     * Reference to a value set containing a list of codes representing permitted answers for the question.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $options = null;

    /**
     * For a "choice" question, identifies one of the permitted answers for the question.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $option = [];

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public $group = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire.Question';

    /**
     * An identifier that is unique within the questionnaire allowing linkage to the equivalent group in a [[[QuestionnaireResponse]]] resource.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getLinkId() {
        return $this->linkId;
    }

    /**
     * An identifier that is unique within the questionnaire allowing linkage to the equivalent group in a [[[QuestionnaireResponse]]] resource.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $linkId
     * @return $this
     */
    public function setLinkId($linkId) {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Identifies a how this question is known in a particular terminology such as LOINC.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getConcept() {
        return $this->concept;
    }

    /**
     * Identifies a how this question is known in a particular terminology such as LOINC.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $concept
     * @return $this
     */
    public function addConcept($concept) {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * The actual question as shown to the user to prompt them for an answer.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getText() {
        return $this->text;
    }

    /**
     * The actual question as shown to the user to prompt them for an answer.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * The expected format of the answer, e.g. the type of input (string, integer) or whether a (multiple) choice is expected.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnswerFormat
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The expected format of the answer, e.g. the type of input (string, integer) or whether a (multiple) choice is expected.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnswerFormat $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * If true, indicates that the question must be answered and have required groups within it also present.  If false, the question and any contained groups may be skipped when answering the questionnaire.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getRequired() {
        return $this->required;
    }

    /**
     * If true, indicates that the question must be answered and have required groups within it also present.  If false, the question and any contained groups may be skipped when answering the questionnaire.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $required
     * @return $this
     */
    public function setRequired($required) {
        $this->required = $required;
        return $this;
    }

    /**
     * If true, the question may have more than one answer.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getRepeats() {
        return $this->repeats;
    }

    /**
     * If true, the question may have more than one answer.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $repeats
     * @return $this
     */
    public function setRepeats($repeats) {
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * Reference to a value set containing a list of codes representing permitted answers for the question.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getOptions() {
        return $this->options;
    }

    /**
     * Reference to a value set containing a list of codes representing permitted answers for the question.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $options
     * @return $this
     */
    public function setOptions($options) {
        $this->options = $options;
        return $this;
    }

    /**
     * For a "choice" question, identifies one of the permitted answers for the question.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getOption() {
        return $this->option;
    }

    /**
     * For a "choice" question, identifies one of the permitted answers for the question.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $option
     * @return $this
     */
    public function addOption($option) {
        $this->option[] = $option;
        return $this;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public function getGroup() {
        return $this->group;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup $group
     * @return $this
     */
    public function addGroup($group) {
        $this->group[] = $group;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['required'])) {
                $this->setRequired($data['required']);
            }
            if (isset($data['repeats'])) {
                $this->setRepeats($data['repeats']);
            }
            if (isset($data['options'])) {
                $this->setOptions($data['options']);
            }
            if (isset($data['option'])) {
                if (is_array($data['option'])) {
                    foreach($data['option'] as $d) {
                        $this->addoption($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"option" must be array of objects or null, '.gettype($data['option']).' seen.'); 
                }
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
        if (0 < count($this->concept)) {
            $json['concept'] = [];
            foreach($this->concept as $concept) {
                if (null !== $concept) $json['concept'][] = $concept;
            }
        }
        if (isset($this->text)) $json['text'] = $this->text;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->required)) $json['required'] = $this->required;
        if (isset($this->repeats)) $json['repeats'] = $this->repeats;
        if (isset($this->options)) $json['options'] = $this->options;
        if (0 < count($this->option)) {
            $json['option'] = [];
            foreach($this->option as $option) {
                if (null !== $option) $json['option'][] = $option;
            }
        }
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                if (null !== $group) $json['group'][] = $group;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireQuestion xmlns="http://hl7.org/fhir"></QuestionnaireQuestion>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->linkId)) $this->linkId->xmlSerialize(true, $sxe->addChild('linkId'));
        if (0 < count($this->concept)) {
            foreach($this->concept as $concept) {
                $concept->xmlSerialize(true, $sxe->addChild('concept'));
            }
        }
        if (isset($this->text)) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->required)) $this->required->xmlSerialize(true, $sxe->addChild('required'));
        if (isset($this->repeats)) $this->repeats->xmlSerialize(true, $sxe->addChild('repeats'));
        if (isset($this->options)) $this->options->xmlSerialize(true, $sxe->addChild('options'));
        if (0 < count($this->option)) {
            foreach($this->option as $option) {
                $option->xmlSerialize(true, $sxe->addChild('option'));
            }
        }
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}