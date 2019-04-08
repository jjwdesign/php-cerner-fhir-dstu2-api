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
 * A manifest that defines a set of documents.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDocumentManifest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $masterIdentifier = null;

    /**
     * Other identifiers associated with the document manifest, including version independent  identifiers.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $recipient = [];

    /**
     * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge Summary, Prescription, etc.). The type of a set of documents may be the same as one of the documents in it - especially if there is only one - but it may be wider.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Identifies who is responsible for creating the manifest, and adding  documents to it.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $author = [];

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * The status of this document manifest.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The list of Documents included in the manifest.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestContent[]
     */
    public $content = [];

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestRelated[]
     */
    public $related = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'DocumentManifest';

    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier() {
        return $this->masterIdentifier;
    }

    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $masterIdentifier
     * @return $this
     */
    public function setMasterIdentifier($masterIdentifier) {
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * Other identifiers associated with the document manifest, including version independent  identifiers.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Other identifiers associated with the document manifest, including version independent  identifiers.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getRecipient() {
        return $this->recipient;
    }

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $recipient
     * @return $this
     */
    public function addRecipient($recipient) {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge Summary, Prescription, etc.). The type of a set of documents may be the same as one of the documents in it - especially if there is only one - but it may be wider.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge Summary, Prescription, etc.). The type of a set of documents may be the same as one of the documents in it - especially if there is only one - but it may be wider.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Identifies who is responsible for creating the manifest, and adding  documents to it.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Identifies who is responsible for creating the manifest, and adding  documents to it.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function addAuthor($author) {
        $this->author[] = $author;
        return $this;
    }

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $source
     * @return $this
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * The status of this document manifest.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of this document manifest.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * The list of Documents included in the manifest.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestContent[]
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * The list of Documents included in the manifest.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestContent $content
     * @return $this
     */
    public function addContent($content) {
        $this->content[] = $content;
        return $this;
    }

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestRelated[]
     */
    public function getRelated() {
        return $this->related;
    }

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDocumentManifest\FHIRDocumentManifestRelated $related
     * @return $this
     */
    public function addRelated($related) {
        $this->related[] = $related;
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
            if (isset($data['masterIdentifier'])) {
                $this->setMasterIdentifier($data['masterIdentifier']);
            }
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addidentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.'); 
                }
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['recipient'])) {
                if (is_array($data['recipient'])) {
                    foreach($data['recipient'] as $d) {
                        $this->addrecipient($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"recipient" must be array of objects or null, '.gettype($data['recipient']).' seen.'); 
                }
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['author'])) {
                if (is_array($data['author'])) {
                    foreach($data['author'] as $d) {
                        $this->addauthor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"author" must be array of objects or null, '.gettype($data['author']).' seen.'); 
                }
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['content'])) {
                if (is_array($data['content'])) {
                    foreach($data['content'] as $d) {
                        $this->addcontent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"content" must be array of objects or null, '.gettype($data['content']).' seen.'); 
                }
            }
            if (isset($data['related'])) {
                if (is_array($data['related'])) {
                    foreach($data['related'] as $d) {
                        $this->addrelated($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"related" must be array of objects or null, '.gettype($data['related']).' seen.'); 
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
        if (isset($this->masterIdentifier)) $json['masterIdentifier'] = $this->masterIdentifier;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (0 < count($this->recipient)) {
            $json['recipient'] = [];
            foreach($this->recipient as $recipient) {
                if (null !== $recipient) $json['recipient'][] = $recipient;
            }
        }
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                if (null !== $author) $json['author'][] = $author;
            }
        }
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->source)) $json['source'] = $this->source;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->content)) {
            $json['content'] = [];
            foreach($this->content as $content) {
                if (null !== $content) $json['content'][] = $content;
            }
        }
        if (0 < count($this->related)) {
            $json['related'] = [];
            foreach($this->related as $related) {
                if (null !== $related) $json['related'][] = $related;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DocumentManifest xmlns="http://hl7.org/fhir"></DocumentManifest>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->masterIdentifier)) $this->masterIdentifier->xmlSerialize(true, $sxe->addChild('masterIdentifier'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (0 < count($this->recipient)) {
            foreach($this->recipient as $recipient) {
                $recipient->xmlSerialize(true, $sxe->addChild('recipient'));
            }
        }
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->source)) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->content)) {
            foreach($this->content as $content) {
                $content->xmlSerialize(true, $sxe->addChild('content'));
            }
        }
        if (0 < count($this->related)) {
            foreach($this->related as $related) {
                $related->xmlSerialize(true, $sxe->addChild('related'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}