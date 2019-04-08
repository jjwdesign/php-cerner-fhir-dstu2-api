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
 * The findings and interpretation of diagnostic  tests performed on patients, groups of patients, devices, and locations, and/or specimens derived from these. The report includes clinical context such as requesting and provider information, and some mix of atomic results, images, textual and coded interpretations, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDiagnosticReport extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The status of the diagnostic report as a whole.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDiagnosticReportStatus
     */
    public $status = null;

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * A code or name that describes this diagnostic report.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The link to the health care event (encounter) when the order was made.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * The date and time that this version of the report was released from the source diagnostic service.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Details concerning a test or procedure requested.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $request = [];

    /**
     * Details about the specimens on which this diagnostic report is based.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $specimen = [];

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $result = [];

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public $imagingStudy = [];

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    public $image = [];

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $conclusion = null;

    /**
     * Codes for the conclusion.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public $codedDiagnosis = [];

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment[]
     */
    public $presentedForm = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'DiagnosticReport';

    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of the diagnostic report as a whole.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the diagnostic report as a whole.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDiagnosticReportStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * A code or name that describes this diagnostic report.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * A code or name that describes this diagnostic report.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The link to the health care event (encounter) when the order was made.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter() {
        return $this->encounter;
    }

    /**
     * The link to the health care event (encounter) when the order was made.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter) {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime() {
        return $this->effectiveDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime) {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod() {
        return $this->effectivePeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod) {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * The date and time that this version of the report was released from the source diagnostic service.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getIssued() {
        return $this->issued;
    }

    /**
     * The date and time that this version of the report was released from the source diagnostic service.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $issued
     * @return $this
     */
    public function setIssued($issued) {
        $this->issued = $issued;
        return $this;
    }

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer) {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Details concerning a test or procedure requested.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Details concerning a test or procedure requested.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function addRequest($request) {
        $this->request[] = $request;
        return $this;
    }

    /**
     * Details about the specimens on which this diagnostic report is based.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getSpecimen() {
        return $this->specimen;
    }

    /**
     * Details about the specimens on which this diagnostic report is based.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $specimen
     * @return $this
     */
    public function addSpecimen($specimen) {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $result
     * @return $this
     */
    public function addResult($result) {
        $this->result[] = $result;
        return $this;
    }

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getImagingStudy() {
        return $this->imagingStudy;
    }

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $imagingStudy
     * @return $this
     */
    public function addImagingStudy($imagingStudy) {
        $this->imagingStudy[] = $imagingStudy;
        return $this;
    }

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage $image
     * @return $this
     */
    public function addImage($image) {
        $this->image[] = $image;
        return $this;
    }

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getConclusion() {
        return $this->conclusion;
    }

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $conclusion
     * @return $this
     */
    public function setConclusion($conclusion) {
        $this->conclusion = $conclusion;
        return $this;
    }

    /**
     * Codes for the conclusion.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCodedDiagnosis() {
        return $this->codedDiagnosis;
    }

    /**
     * Codes for the conclusion.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $codedDiagnosis
     * @return $this
     */
    public function addCodedDiagnosis($codedDiagnosis) {
        $this->codedDiagnosis[] = $codedDiagnosis;
        return $this;
    }

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment[]
     */
    public function getPresentedForm() {
        return $this->presentedForm;
    }

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $presentedForm
     * @return $this
     */
    public function addPresentedForm($presentedForm) {
        $this->presentedForm[] = $presentedForm;
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
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addidentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.'); 
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['request'])) {
                if (is_array($data['request'])) {
                    foreach($data['request'] as $d) {
                        $this->addrequest($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"request" must be array of objects or null, '.gettype($data['request']).' seen.'); 
                }
            }
            if (isset($data['specimen'])) {
                if (is_array($data['specimen'])) {
                    foreach($data['specimen'] as $d) {
                        $this->addspecimen($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specimen" must be array of objects or null, '.gettype($data['specimen']).' seen.'); 
                }
            }
            if (isset($data['result'])) {
                if (is_array($data['result'])) {
                    foreach($data['result'] as $d) {
                        $this->addresult($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"result" must be array of objects or null, '.gettype($data['result']).' seen.'); 
                }
            }
            if (isset($data['imagingStudy'])) {
                if (is_array($data['imagingStudy'])) {
                    foreach($data['imagingStudy'] as $d) {
                        $this->addimagingStudy($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"imagingStudy" must be array of objects or null, '.gettype($data['imagingStudy']).' seen.'); 
                }
            }
            if (isset($data['image'])) {
                if (is_array($data['image'])) {
                    foreach($data['image'] as $d) {
                        $this->addimage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"image" must be array of objects or null, '.gettype($data['image']).' seen.'); 
                }
            }
            if (isset($data['conclusion'])) {
                $this->setConclusion($data['conclusion']);
            }
            if (isset($data['codedDiagnosis'])) {
                if (is_array($data['codedDiagnosis'])) {
                    foreach($data['codedDiagnosis'] as $d) {
                        $this->addcodedDiagnosis($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"codedDiagnosis" must be array of objects or null, '.gettype($data['codedDiagnosis']).' seen.'); 
                }
            }
            if (isset($data['presentedForm'])) {
                if (is_array($data['presentedForm'])) {
                    foreach($data['presentedForm'] as $d) {
                        $this->addpresentedForm($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"presentedForm" must be array of objects or null, '.gettype($data['presentedForm']).' seen.'); 
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->encounter)) $json['encounter'] = $this->encounter;
        if (isset($this->effectiveDateTime)) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (isset($this->effectivePeriod)) $json['effectivePeriod'] = $this->effectivePeriod;
        if (isset($this->issued)) $json['issued'] = $this->issued;
        if (isset($this->performer)) $json['performer'] = $this->performer;
        if (0 < count($this->request)) {
            $json['request'] = [];
            foreach($this->request as $request) {
                if (null !== $request) $json['request'][] = $request;
            }
        }
        if (0 < count($this->specimen)) {
            $json['specimen'] = [];
            foreach($this->specimen as $specimen) {
                if (null !== $specimen) $json['specimen'][] = $specimen;
            }
        }
        if (0 < count($this->result)) {
            $json['result'] = [];
            foreach($this->result as $result) {
                if (null !== $result) $json['result'][] = $result;
            }
        }
        if (0 < count($this->imagingStudy)) {
            $json['imagingStudy'] = [];
            foreach($this->imagingStudy as $imagingStudy) {
                if (null !== $imagingStudy) $json['imagingStudy'][] = $imagingStudy;
            }
        }
        if (0 < count($this->image)) {
            $json['image'] = [];
            foreach($this->image as $image) {
                if (null !== $image) $json['image'][] = $image;
            }
        }
        if (isset($this->conclusion)) $json['conclusion'] = $this->conclusion;
        if (0 < count($this->codedDiagnosis)) {
            $json['codedDiagnosis'] = [];
            foreach($this->codedDiagnosis as $codedDiagnosis) {
                if (null !== $codedDiagnosis) $json['codedDiagnosis'][] = $codedDiagnosis;
            }
        }
        if (0 < count($this->presentedForm)) {
            $json['presentedForm'] = [];
            foreach($this->presentedForm as $presentedForm) {
                if (null !== $presentedForm) $json['presentedForm'][] = $presentedForm;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DiagnosticReport xmlns="http://hl7.org/fhir"></DiagnosticReport>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->encounter)) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (isset($this->effectiveDateTime)) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (isset($this->effectivePeriod)) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (isset($this->issued)) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (isset($this->performer)) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (0 < count($this->request)) {
            foreach($this->request as $request) {
                $request->xmlSerialize(true, $sxe->addChild('request'));
            }
        }
        if (0 < count($this->specimen)) {
            foreach($this->specimen as $specimen) {
                $specimen->xmlSerialize(true, $sxe->addChild('specimen'));
            }
        }
        if (0 < count($this->result)) {
            foreach($this->result as $result) {
                $result->xmlSerialize(true, $sxe->addChild('result'));
            }
        }
        if (0 < count($this->imagingStudy)) {
            foreach($this->imagingStudy as $imagingStudy) {
                $imagingStudy->xmlSerialize(true, $sxe->addChild('imagingStudy'));
            }
        }
        if (0 < count($this->image)) {
            foreach($this->image as $image) {
                $image->xmlSerialize(true, $sxe->addChild('image'));
            }
        }
        if (isset($this->conclusion)) $this->conclusion->xmlSerialize(true, $sxe->addChild('conclusion'));
        if (0 < count($this->codedDiagnosis)) {
            foreach($this->codedDiagnosis as $codedDiagnosis) {
                $codedDiagnosis->xmlSerialize(true, $sxe->addChild('codedDiagnosis'));
            }
        }
        if (0 < count($this->presentedForm)) {
            foreach($this->presentedForm as $presentedForm) {
                $presentedForm->xmlSerialize(true, $sxe->addChild('presentedForm'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}