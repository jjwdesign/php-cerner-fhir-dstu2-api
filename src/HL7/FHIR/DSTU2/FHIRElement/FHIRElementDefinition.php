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
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRElementDefinition extends FHIRElement implements \JsonSerializable
{
    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPropertyRepresentation[]
     */
    public $representation = [];

    /**
     * The name of this element definition (to refer to it from other element definitions using ElementDefinition.nameReference). This is a unique name referring to a specific set of constraints applied to this element. One use of this is to provide a name to different slices of the same element.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public $code = [];

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public $slicing = null;

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $short = null;

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $definition = null;

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $comments = null;

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $requirements = null;

    /**
     * Identifies additional names by which this element might also be known.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public $alias = [];

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Information about the base definition of the element, provided to make it unncessary for tools to trace the deviation of the element through the derived and related profiles. This information is only provided where the element definition represents a constraint on another element definition, and must be present if there is a base element definition.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public $base = null;

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public $type = [];

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $nameReference = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $defaultValueBoolean = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $defaultValueInteger = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $defaultValueDecimal = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public $defaultValueBase64Binary = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $defaultValueInstant = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $defaultValueString = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $defaultValueUri = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $defaultValueDate = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $defaultValueDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public $defaultValueTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $defaultValueCode = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public $defaultValueOid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public $defaultValueUuid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public $defaultValueId = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public $defaultValueUnsignedInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $defaultValuePositiveInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $defaultValueMarkdown = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public $defaultValueAnnotation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public $defaultValueAttachment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $defaultValueIdentifier = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $defaultValueCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $defaultValueCoding = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public $defaultValueQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $defaultValueRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $defaultValuePeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $defaultValueRatio = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $defaultValueReference = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public $defaultValueSampledData = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public $defaultValueSignature = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public $defaultValueHumanName = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public $defaultValueAddress = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public $defaultValueContactPoint = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public $defaultValueTiming = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public $defaultValueMeta = null;

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $meaningWhenMissing = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $fixedBoolean = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $fixedInteger = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $fixedDecimal = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public $fixedBase64Binary = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $fixedInstant = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $fixedString = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $fixedUri = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $fixedDate = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $fixedDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public $fixedTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $fixedCode = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public $fixedOid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public $fixedUuid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public $fixedId = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public $fixedUnsignedInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $fixedPositiveInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $fixedMarkdown = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public $fixedAnnotation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public $fixedAttachment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $fixedIdentifier = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $fixedCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $fixedCoding = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public $fixedQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $fixedRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $fixedPeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $fixedRatio = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $fixedReference = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public $fixedSampledData = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public $fixedSignature = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public $fixedHumanName = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public $fixedAddress = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public $fixedContactPoint = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public $fixedTiming = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public $fixedMeta = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $patternBoolean = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $patternInteger = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $patternDecimal = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public $patternBase64Binary = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $patternInstant = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $patternString = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $patternUri = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $patternDate = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $patternDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public $patternTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $patternCode = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public $patternOid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public $patternUuid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public $patternId = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public $patternUnsignedInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $patternPositiveInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $patternMarkdown = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public $patternAnnotation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public $patternAttachment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $patternIdentifier = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $patternCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $patternCoding = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public $patternQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $patternRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $patternPeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $patternRatio = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $patternReference = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public $patternSampledData = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public $patternSignature = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public $patternHumanName = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public $patternAddress = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public $patternContactPoint = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public $patternTiming = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public $patternMeta = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $exampleBoolean = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $exampleInteger = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $exampleDecimal = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public $exampleBase64Binary = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $exampleInstant = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $exampleString = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $exampleUri = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $exampleDate = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $exampleDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public $exampleTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $exampleCode = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public $exampleOid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public $exampleUuid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public $exampleId = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public $exampleUnsignedInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $examplePositiveInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $exampleMarkdown = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public $exampleAnnotation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public $exampleAttachment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $exampleIdentifier = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $exampleCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $exampleCoding = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public $exampleQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $exampleRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $examplePeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $exampleRatio = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $exampleReference = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public $exampleSampledData = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public $exampleSignature = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public $exampleHumanName = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public $exampleAddress = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public $exampleContactPoint = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public $exampleTiming = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public $exampleMeta = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $minValueBoolean = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $minValueInteger = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $minValueDecimal = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public $minValueBase64Binary = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $minValueInstant = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $minValueString = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $minValueUri = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $minValueDate = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $minValueDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public $minValueTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $minValueCode = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public $minValueOid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public $minValueUuid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public $minValueId = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public $minValueUnsignedInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $minValuePositiveInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $minValueMarkdown = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public $minValueAnnotation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public $minValueAttachment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $minValueIdentifier = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $minValueCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $minValueCoding = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public $minValueQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $minValueRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $minValuePeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $minValueRatio = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $minValueReference = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public $minValueSampledData = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public $minValueSignature = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public $minValueHumanName = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public $minValueAddress = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public $minValueContactPoint = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public $minValueTiming = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public $minValueMeta = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $maxValueBoolean = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $maxValueInteger = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public $maxValueDecimal = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public $maxValueBase64Binary = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public $maxValueInstant = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public $maxValueString = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public $maxValueUri = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public $maxValueDate = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public $maxValueDateTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public $maxValueTime = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public $maxValueCode = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public $maxValueOid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public $maxValueUuid = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public $maxValueId = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public $maxValueUnsignedInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public $maxValuePositiveInt = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public $maxValueMarkdown = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public $maxValueAnnotation = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public $maxValueAttachment = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public $maxValueIdentifier = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public $maxValueCodeableConcept = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public $maxValueCoding = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public $maxValueQuantity = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public $maxValueRange = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public $maxValuePeriod = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public $maxValueRatio = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public $maxValueReference = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public $maxValueSampledData = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public $maxValueSignature = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public $maxValueHumanName = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public $maxValueAddress = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public $maxValueContactPoint = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public $maxValueTiming = null;

    /**
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public $maxValueMeta = null;

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public $maxLength = null;

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId[]
     */
    public $condition = [];

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public $constraint = [];

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $mustSupport = null;

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $isModifier = null;

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @var \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public $isSummary = null;

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public $binding = null;

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @var \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public $mapping = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ElementDefinition';

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path) {
        $this->path = $path;
        return $this;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPropertyRepresentation[]
     */
    public function getRepresentation() {
        return $this->representation;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPropertyRepresentation $representation
     * @return $this
     */
    public function addRepresentation($representation) {
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * The name of this element definition (to refer to it from other element definitions using ElementDefinition.nameReference). This is a unique name referring to a specific set of constraints applied to this element. One use of this is to provide a name to different slices of the same element.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * The name of this element definition (to refer to it from other element definitions using ElementDefinition.nameReference). This is a unique name referring to a specific set of constraints applied to this element. One use of this is to provide a name to different slices of the same element.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $label
     * @return $this
     */
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $code
     * @return $this
     */
    public function addCode($code) {
        $this->code[] = $code;
        return $this;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing() {
        return $this->slicing;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @return $this
     */
    public function setSlicing($slicing) {
        $this->slicing = $slicing;
        return $this;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getShort() {
        return $this->short;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $short
     * @return $this
     */
    public function setShort($short) {
        $this->short = $short;
        return $this;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getDefinition() {
        return $this->definition;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $definition
     * @return $this
     */
    public function setDefinition($definition) {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $comments
     * @return $this
     */
    public function setComments($comments) {
        $this->comments = $comments;
        return $this;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getRequirements() {
        return $this->requirements;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $requirements
     * @return $this
     */
    public function setRequirements($requirements) {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString[]
     */
    public function getAlias() {
        return $this->alias;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $alias
     * @return $this
     */
    public function addAlias($alias) {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $min
     * @return $this
     */
    public function setMin($min) {
        $this->min = $min;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max) {
        $this->max = $max;
        return $this;
    }

    /**
     * Information about the base definition of the element, provided to make it unncessary for tools to trace the deviation of the element through the derived and related profiles. This information is only provided where the element definition represents a constraint on another element definition, and must be present if there is a base element definition.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Information about the base definition of the element, provided to make it unncessary for tools to trace the deviation of the element through the derived and related profiles. This information is only provided where the element definition represents a constraint on another element definition, and must be present if there is a base element definition.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @return $this
     */
    public function setBase($base) {
        $this->base = $base;
        return $this;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @return $this
     */
    public function addType($type) {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getNameReference() {
        return $this->nameReference;
    }

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $nameReference
     * @return $this
     */
    public function setNameReference($nameReference) {
        $this->nameReference = $nameReference;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean() {
        return $this->defaultValueBoolean;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean) {
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger() {
        return $this->defaultValueInteger;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $defaultValueInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger) {
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal() {
        return $this->defaultValueDecimal;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal) {
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary() {
        return $this->defaultValueBase64Binary;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary) {
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant() {
        return $this->defaultValueInstant;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $defaultValueInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant) {
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getDefaultValueString() {
        return $this->defaultValueString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $defaultValueString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString) {
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri() {
        return $this->defaultValueUri;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $defaultValueUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri) {
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate() {
        return $this->defaultValueDate;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $defaultValueDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate) {
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime() {
        return $this->defaultValueDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime) {
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime() {
        return $this->defaultValueTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $defaultValueTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime) {
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode() {
        return $this->defaultValueCode;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $defaultValueCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode) {
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public function getDefaultValueOid() {
        return $this->defaultValueOid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid $defaultValueOid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid) {
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public function getDefaultValueUuid() {
        return $this->defaultValueUuid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid $defaultValueUuid
     * @return $this
     */
    public function setDefaultValueUuid($defaultValueUuid) {
        $this->defaultValueUuid = $defaultValueUuid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public function getDefaultValueId() {
        return $this->defaultValueId;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $defaultValueId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId) {
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt() {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt) {
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt() {
        return $this->defaultValuePositiveInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt) {
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown() {
        return $this->defaultValueMarkdown;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown) {
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation() {
        return $this->defaultValueAnnotation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation($defaultValueAnnotation) {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment() {
        return $this->defaultValueAttachment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return $this
     */
    public function setDefaultValueAttachment($defaultValueAttachment) {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier() {
        return $this->defaultValueIdentifier;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier($defaultValueIdentifier) {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept() {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept($defaultValueCodeableConcept) {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding() {
        return $this->defaultValueCoding;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $defaultValueCoding
     * @return $this
     */
    public function setDefaultValueCoding($defaultValueCoding) {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity() {
        return $this->defaultValueQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return $this
     */
    public function setDefaultValueQuantity($defaultValueQuantity) {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange() {
        return $this->defaultValueRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $defaultValueRange
     * @return $this
     */
    public function setDefaultValueRange($defaultValueRange) {
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod() {
        return $this->defaultValuePeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return $this
     */
    public function setDefaultValuePeriod($defaultValuePeriod) {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio() {
        return $this->defaultValueRatio;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $defaultValueRatio
     * @return $this
     */
    public function setDefaultValueRatio($defaultValueRatio) {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference() {
        return $this->defaultValueReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $defaultValueReference
     * @return $this
     */
    public function setDefaultValueReference($defaultValueReference) {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData() {
        return $this->defaultValueSampledData;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return $this
     */
    public function setDefaultValueSampledData($defaultValueSampledData) {
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature() {
        return $this->defaultValueSignature;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature $defaultValueSignature
     * @return $this
     */
    public function setDefaultValueSignature($defaultValueSignature) {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName() {
        return $this->defaultValueHumanName;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return $this
     */
    public function setDefaultValueHumanName($defaultValueHumanName) {
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress() {
        return $this->defaultValueAddress;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress $defaultValueAddress
     * @return $this
     */
    public function setDefaultValueAddress($defaultValueAddress) {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint() {
        return $this->defaultValueContactPoint;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint($defaultValueContactPoint) {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming() {
        return $this->defaultValueTiming;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $defaultValueTiming
     * @return $this
     */
    public function setDefaultValueTiming($defaultValueTiming) {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta() {
        return $this->defaultValueMeta;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta $defaultValueMeta
     * @return $this
     */
    public function setDefaultValueMeta($defaultValueMeta) {
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing() {
        return $this->meaningWhenMissing;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $meaningWhenMissing
     * @return $this
     */
    public function setMeaningWhenMissing($meaningWhenMissing) {
        $this->meaningWhenMissing = $meaningWhenMissing;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean() {
        return $this->fixedBoolean;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $fixedBoolean
     * @return $this
     */
    public function setFixedBoolean($fixedBoolean) {
        $this->fixedBoolean = $fixedBoolean;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getFixedInteger() {
        return $this->fixedInteger;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $fixedInteger
     * @return $this
     */
    public function setFixedInteger($fixedInteger) {
        $this->fixedInteger = $fixedInteger;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal() {
        return $this->fixedDecimal;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $fixedDecimal
     * @return $this
     */
    public function setFixedDecimal($fixedDecimal) {
        $this->fixedDecimal = $fixedDecimal;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary() {
        return $this->fixedBase64Binary;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     * @return $this
     */
    public function setFixedBase64Binary($fixedBase64Binary) {
        $this->fixedBase64Binary = $fixedBase64Binary;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getFixedInstant() {
        return $this->fixedInstant;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $fixedInstant
     * @return $this
     */
    public function setFixedInstant($fixedInstant) {
        $this->fixedInstant = $fixedInstant;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getFixedString() {
        return $this->fixedString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $fixedString
     * @return $this
     */
    public function setFixedString($fixedString) {
        $this->fixedString = $fixedString;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getFixedUri() {
        return $this->fixedUri;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $fixedUri
     * @return $this
     */
    public function setFixedUri($fixedUri) {
        $this->fixedUri = $fixedUri;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getFixedDate() {
        return $this->fixedDate;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $fixedDate
     * @return $this
     */
    public function setFixedDate($fixedDate) {
        $this->fixedDate = $fixedDate;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime() {
        return $this->fixedDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $fixedDateTime
     * @return $this
     */
    public function setFixedDateTime($fixedDateTime) {
        $this->fixedDateTime = $fixedDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getFixedTime() {
        return $this->fixedTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $fixedTime
     * @return $this
     */
    public function setFixedTime($fixedTime) {
        $this->fixedTime = $fixedTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getFixedCode() {
        return $this->fixedCode;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $fixedCode
     * @return $this
     */
    public function setFixedCode($fixedCode) {
        $this->fixedCode = $fixedCode;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public function getFixedOid() {
        return $this->fixedOid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid $fixedOid
     * @return $this
     */
    public function setFixedOid($fixedOid) {
        $this->fixedOid = $fixedOid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public function getFixedUuid() {
        return $this->fixedUuid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid $fixedUuid
     * @return $this
     */
    public function setFixedUuid($fixedUuid) {
        $this->fixedUuid = $fixedUuid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public function getFixedId() {
        return $this->fixedId;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $fixedId
     * @return $this
     */
    public function setFixedId($fixedId) {
        $this->fixedId = $fixedId;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt() {
        return $this->fixedUnsignedInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     * @return $this
     */
    public function setFixedUnsignedInt($fixedUnsignedInt) {
        $this->fixedUnsignedInt = $fixedUnsignedInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt() {
        return $this->fixedPositiveInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @return $this
     */
    public function setFixedPositiveInt($fixedPositiveInt) {
        $this->fixedPositiveInt = $fixedPositiveInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown() {
        return $this->fixedMarkdown;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @return $this
     */
    public function setFixedMarkdown($fixedMarkdown) {
        $this->fixedMarkdown = $fixedMarkdown;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation() {
        return $this->fixedAnnotation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $fixedAnnotation
     * @return $this
     */
    public function setFixedAnnotation($fixedAnnotation) {
        $this->fixedAnnotation = $fixedAnnotation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment() {
        return $this->fixedAttachment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $fixedAttachment
     * @return $this
     */
    public function setFixedAttachment($fixedAttachment) {
        $this->fixedAttachment = $fixedAttachment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier() {
        return $this->fixedIdentifier;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $fixedIdentifier
     * @return $this
     */
    public function setFixedIdentifier($fixedIdentifier) {
        $this->fixedIdentifier = $fixedIdentifier;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept() {
        return $this->fixedCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     * @return $this
     */
    public function setFixedCodeableConcept($fixedCodeableConcept) {
        $this->fixedCodeableConcept = $fixedCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getFixedCoding() {
        return $this->fixedCoding;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $fixedCoding
     * @return $this
     */
    public function setFixedCoding($fixedCoding) {
        $this->fixedCoding = $fixedCoding;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity() {
        return $this->fixedQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity $fixedQuantity
     * @return $this
     */
    public function setFixedQuantity($fixedQuantity) {
        $this->fixedQuantity = $fixedQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getFixedRange() {
        return $this->fixedRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $fixedRange
     * @return $this
     */
    public function setFixedRange($fixedRange) {
        $this->fixedRange = $fixedRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod() {
        return $this->fixedPeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $fixedPeriod
     * @return $this
     */
    public function setFixedPeriod($fixedPeriod) {
        $this->fixedPeriod = $fixedPeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getFixedRatio() {
        return $this->fixedRatio;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $fixedRatio
     * @return $this
     */
    public function setFixedRatio($fixedRatio) {
        $this->fixedRatio = $fixedRatio;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getFixedReference() {
        return $this->fixedReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $fixedReference
     * @return $this
     */
    public function setFixedReference($fixedReference) {
        $this->fixedReference = $fixedReference;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData() {
        return $this->fixedSampledData;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData $fixedSampledData
     * @return $this
     */
    public function setFixedSampledData($fixedSampledData) {
        $this->fixedSampledData = $fixedSampledData;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public function getFixedSignature() {
        return $this->fixedSignature;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature $fixedSignature
     * @return $this
     */
    public function setFixedSignature($fixedSignature) {
        $this->fixedSignature = $fixedSignature;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName() {
        return $this->fixedHumanName;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName $fixedHumanName
     * @return $this
     */
    public function setFixedHumanName($fixedHumanName) {
        $this->fixedHumanName = $fixedHumanName;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public function getFixedAddress() {
        return $this->fixedAddress;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress $fixedAddress
     * @return $this
     */
    public function setFixedAddress($fixedAddress) {
        $this->fixedAddress = $fixedAddress;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint() {
        return $this->fixedContactPoint;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint $fixedContactPoint
     * @return $this
     */
    public function setFixedContactPoint($fixedContactPoint) {
        $this->fixedContactPoint = $fixedContactPoint;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public function getFixedTiming() {
        return $this->fixedTiming;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $fixedTiming
     * @return $this
     */
    public function setFixedTiming($fixedTiming) {
        $this->fixedTiming = $fixedTiming;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public function getFixedMeta() {
        return $this->fixedMeta;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta $fixedMeta
     * @return $this
     */
    public function setFixedMeta($fixedMeta) {
        $this->fixedMeta = $fixedMeta;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean() {
        return $this->patternBoolean;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $patternBoolean
     * @return $this
     */
    public function setPatternBoolean($patternBoolean) {
        $this->patternBoolean = $patternBoolean;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getPatternInteger() {
        return $this->patternInteger;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $patternInteger
     * @return $this
     */
    public function setPatternInteger($patternInteger) {
        $this->patternInteger = $patternInteger;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal() {
        return $this->patternDecimal;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $patternDecimal
     * @return $this
     */
    public function setPatternDecimal($patternDecimal) {
        $this->patternDecimal = $patternDecimal;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary() {
        return $this->patternBase64Binary;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary $patternBase64Binary
     * @return $this
     */
    public function setPatternBase64Binary($patternBase64Binary) {
        $this->patternBase64Binary = $patternBase64Binary;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getPatternInstant() {
        return $this->patternInstant;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $patternInstant
     * @return $this
     */
    public function setPatternInstant($patternInstant) {
        $this->patternInstant = $patternInstant;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getPatternString() {
        return $this->patternString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $patternString
     * @return $this
     */
    public function setPatternString($patternString) {
        $this->patternString = $patternString;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getPatternUri() {
        return $this->patternUri;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $patternUri
     * @return $this
     */
    public function setPatternUri($patternUri) {
        $this->patternUri = $patternUri;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getPatternDate() {
        return $this->patternDate;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $patternDate
     * @return $this
     */
    public function setPatternDate($patternDate) {
        $this->patternDate = $patternDate;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime() {
        return $this->patternDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $patternDateTime
     * @return $this
     */
    public function setPatternDateTime($patternDateTime) {
        $this->patternDateTime = $patternDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getPatternTime() {
        return $this->patternTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $patternTime
     * @return $this
     */
    public function setPatternTime($patternTime) {
        $this->patternTime = $patternTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getPatternCode() {
        return $this->patternCode;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $patternCode
     * @return $this
     */
    public function setPatternCode($patternCode) {
        $this->patternCode = $patternCode;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public function getPatternOid() {
        return $this->patternOid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid $patternOid
     * @return $this
     */
    public function setPatternOid($patternOid) {
        $this->patternOid = $patternOid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public function getPatternUuid() {
        return $this->patternUuid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid $patternUuid
     * @return $this
     */
    public function setPatternUuid($patternUuid) {
        $this->patternUuid = $patternUuid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public function getPatternId() {
        return $this->patternId;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $patternId
     * @return $this
     */
    public function setPatternId($patternId) {
        $this->patternId = $patternId;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt() {
        return $this->patternUnsignedInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     * @return $this
     */
    public function setPatternUnsignedInt($patternUnsignedInt) {
        $this->patternUnsignedInt = $patternUnsignedInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt() {
        return $this->patternPositiveInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @return $this
     */
    public function setPatternPositiveInt($patternPositiveInt) {
        $this->patternPositiveInt = $patternPositiveInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown() {
        return $this->patternMarkdown;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $patternMarkdown
     * @return $this
     */
    public function setPatternMarkdown($patternMarkdown) {
        $this->patternMarkdown = $patternMarkdown;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation() {
        return $this->patternAnnotation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $patternAnnotation
     * @return $this
     */
    public function setPatternAnnotation($patternAnnotation) {
        $this->patternAnnotation = $patternAnnotation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment() {
        return $this->patternAttachment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $patternAttachment
     * @return $this
     */
    public function setPatternAttachment($patternAttachment) {
        $this->patternAttachment = $patternAttachment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier() {
        return $this->patternIdentifier;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $patternIdentifier
     * @return $this
     */
    public function setPatternIdentifier($patternIdentifier) {
        $this->patternIdentifier = $patternIdentifier;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept() {
        return $this->patternCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     * @return $this
     */
    public function setPatternCodeableConcept($patternCodeableConcept) {
        $this->patternCodeableConcept = $patternCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getPatternCoding() {
        return $this->patternCoding;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $patternCoding
     * @return $this
     */
    public function setPatternCoding($patternCoding) {
        $this->patternCoding = $patternCoding;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity() {
        return $this->patternQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity $patternQuantity
     * @return $this
     */
    public function setPatternQuantity($patternQuantity) {
        $this->patternQuantity = $patternQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getPatternRange() {
        return $this->patternRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $patternRange
     * @return $this
     */
    public function setPatternRange($patternRange) {
        $this->patternRange = $patternRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod() {
        return $this->patternPeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $patternPeriod
     * @return $this
     */
    public function setPatternPeriod($patternPeriod) {
        $this->patternPeriod = $patternPeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getPatternRatio() {
        return $this->patternRatio;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $patternRatio
     * @return $this
     */
    public function setPatternRatio($patternRatio) {
        $this->patternRatio = $patternRatio;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatternReference() {
        return $this->patternReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $patternReference
     * @return $this
     */
    public function setPatternReference($patternReference) {
        $this->patternReference = $patternReference;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData() {
        return $this->patternSampledData;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData $patternSampledData
     * @return $this
     */
    public function setPatternSampledData($patternSampledData) {
        $this->patternSampledData = $patternSampledData;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public function getPatternSignature() {
        return $this->patternSignature;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature $patternSignature
     * @return $this
     */
    public function setPatternSignature($patternSignature) {
        $this->patternSignature = $patternSignature;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName() {
        return $this->patternHumanName;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName $patternHumanName
     * @return $this
     */
    public function setPatternHumanName($patternHumanName) {
        $this->patternHumanName = $patternHumanName;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public function getPatternAddress() {
        return $this->patternAddress;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress $patternAddress
     * @return $this
     */
    public function setPatternAddress($patternAddress) {
        $this->patternAddress = $patternAddress;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint() {
        return $this->patternContactPoint;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint $patternContactPoint
     * @return $this
     */
    public function setPatternContactPoint($patternContactPoint) {
        $this->patternContactPoint = $patternContactPoint;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public function getPatternTiming() {
        return $this->patternTiming;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $patternTiming
     * @return $this
     */
    public function setPatternTiming($patternTiming) {
        $this->patternTiming = $patternTiming;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public function getPatternMeta() {
        return $this->patternMeta;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta $patternMeta
     * @return $this
     */
    public function setPatternMeta($patternMeta) {
        $this->patternMeta = $patternMeta;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean() {
        return $this->exampleBoolean;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $exampleBoolean
     * @return $this
     */
    public function setExampleBoolean($exampleBoolean) {
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getExampleInteger() {
        return $this->exampleInteger;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $exampleInteger
     * @return $this
     */
    public function setExampleInteger($exampleInteger) {
        $this->exampleInteger = $exampleInteger;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getExampleDecimal() {
        return $this->exampleDecimal;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $exampleDecimal
     * @return $this
     */
    public function setExampleDecimal($exampleDecimal) {
        $this->exampleDecimal = $exampleDecimal;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getExampleBase64Binary() {
        return $this->exampleBase64Binary;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary $exampleBase64Binary
     * @return $this
     */
    public function setExampleBase64Binary($exampleBase64Binary) {
        $this->exampleBase64Binary = $exampleBase64Binary;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getExampleInstant() {
        return $this->exampleInstant;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $exampleInstant
     * @return $this
     */
    public function setExampleInstant($exampleInstant) {
        $this->exampleInstant = $exampleInstant;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getExampleString() {
        return $this->exampleString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $exampleString
     * @return $this
     */
    public function setExampleString($exampleString) {
        $this->exampleString = $exampleString;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getExampleUri() {
        return $this->exampleUri;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $exampleUri
     * @return $this
     */
    public function setExampleUri($exampleUri) {
        $this->exampleUri = $exampleUri;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getExampleDate() {
        return $this->exampleDate;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $exampleDate
     * @return $this
     */
    public function setExampleDate($exampleDate) {
        $this->exampleDate = $exampleDate;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getExampleDateTime() {
        return $this->exampleDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $exampleDateTime
     * @return $this
     */
    public function setExampleDateTime($exampleDateTime) {
        $this->exampleDateTime = $exampleDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getExampleTime() {
        return $this->exampleTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $exampleTime
     * @return $this
     */
    public function setExampleTime($exampleTime) {
        $this->exampleTime = $exampleTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getExampleCode() {
        return $this->exampleCode;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $exampleCode
     * @return $this
     */
    public function setExampleCode($exampleCode) {
        $this->exampleCode = $exampleCode;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public function getExampleOid() {
        return $this->exampleOid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid $exampleOid
     * @return $this
     */
    public function setExampleOid($exampleOid) {
        $this->exampleOid = $exampleOid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public function getExampleUuid() {
        return $this->exampleUuid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid $exampleUuid
     * @return $this
     */
    public function setExampleUuid($exampleUuid) {
        $this->exampleUuid = $exampleUuid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public function getExampleId() {
        return $this->exampleId;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $exampleId
     * @return $this
     */
    public function setExampleId($exampleId) {
        $this->exampleId = $exampleId;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getExampleUnsignedInt() {
        return $this->exampleUnsignedInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt $exampleUnsignedInt
     * @return $this
     */
    public function setExampleUnsignedInt($exampleUnsignedInt) {
        $this->exampleUnsignedInt = $exampleUnsignedInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getExamplePositiveInt() {
        return $this->examplePositiveInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $examplePositiveInt
     * @return $this
     */
    public function setExamplePositiveInt($examplePositiveInt) {
        $this->examplePositiveInt = $examplePositiveInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getExampleMarkdown() {
        return $this->exampleMarkdown;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $exampleMarkdown
     * @return $this
     */
    public function setExampleMarkdown($exampleMarkdown) {
        $this->exampleMarkdown = $exampleMarkdown;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getExampleAnnotation() {
        return $this->exampleAnnotation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $exampleAnnotation
     * @return $this
     */
    public function setExampleAnnotation($exampleAnnotation) {
        $this->exampleAnnotation = $exampleAnnotation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getExampleAttachment() {
        return $this->exampleAttachment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $exampleAttachment
     * @return $this
     */
    public function setExampleAttachment($exampleAttachment) {
        $this->exampleAttachment = $exampleAttachment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getExampleIdentifier() {
        return $this->exampleIdentifier;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $exampleIdentifier
     * @return $this
     */
    public function setExampleIdentifier($exampleIdentifier) {
        $this->exampleIdentifier = $exampleIdentifier;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getExampleCodeableConcept() {
        return $this->exampleCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
     * @return $this
     */
    public function setExampleCodeableConcept($exampleCodeableConcept) {
        $this->exampleCodeableConcept = $exampleCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getExampleCoding() {
        return $this->exampleCoding;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $exampleCoding
     * @return $this
     */
    public function setExampleCoding($exampleCoding) {
        $this->exampleCoding = $exampleCoding;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public function getExampleQuantity() {
        return $this->exampleQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity $exampleQuantity
     * @return $this
     */
    public function setExampleQuantity($exampleQuantity) {
        $this->exampleQuantity = $exampleQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getExampleRange() {
        return $this->exampleRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $exampleRange
     * @return $this
     */
    public function setExampleRange($exampleRange) {
        $this->exampleRange = $exampleRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getExamplePeriod() {
        return $this->examplePeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $examplePeriod
     * @return $this
     */
    public function setExamplePeriod($examplePeriod) {
        $this->examplePeriod = $examplePeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getExampleRatio() {
        return $this->exampleRatio;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $exampleRatio
     * @return $this
     */
    public function setExampleRatio($exampleRatio) {
        $this->exampleRatio = $exampleRatio;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getExampleReference() {
        return $this->exampleReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $exampleReference
     * @return $this
     */
    public function setExampleReference($exampleReference) {
        $this->exampleReference = $exampleReference;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public function getExampleSampledData() {
        return $this->exampleSampledData;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData $exampleSampledData
     * @return $this
     */
    public function setExampleSampledData($exampleSampledData) {
        $this->exampleSampledData = $exampleSampledData;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public function getExampleSignature() {
        return $this->exampleSignature;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature $exampleSignature
     * @return $this
     */
    public function setExampleSignature($exampleSignature) {
        $this->exampleSignature = $exampleSignature;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public function getExampleHumanName() {
        return $this->exampleHumanName;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName $exampleHumanName
     * @return $this
     */
    public function setExampleHumanName($exampleHumanName) {
        $this->exampleHumanName = $exampleHumanName;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public function getExampleAddress() {
        return $this->exampleAddress;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress $exampleAddress
     * @return $this
     */
    public function setExampleAddress($exampleAddress) {
        $this->exampleAddress = $exampleAddress;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public function getExampleContactPoint() {
        return $this->exampleContactPoint;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint $exampleContactPoint
     * @return $this
     */
    public function setExampleContactPoint($exampleContactPoint) {
        $this->exampleContactPoint = $exampleContactPoint;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public function getExampleTiming() {
        return $this->exampleTiming;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $exampleTiming
     * @return $this
     */
    public function setExampleTiming($exampleTiming) {
        $this->exampleTiming = $exampleTiming;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public function getExampleMeta() {
        return $this->exampleMeta;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta $exampleMeta
     * @return $this
     */
    public function setExampleMeta($exampleMeta) {
        $this->exampleMeta = $exampleMeta;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getMinValueBoolean() {
        return $this->minValueBoolean;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $minValueBoolean
     * @return $this
     */
    public function setMinValueBoolean($minValueBoolean) {
        $this->minValueBoolean = $minValueBoolean;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger() {
        return $this->minValueInteger;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $minValueInteger
     * @return $this
     */
    public function setMinValueInteger($minValueInteger) {
        $this->minValueInteger = $minValueInteger;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal() {
        return $this->minValueDecimal;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $minValueDecimal
     * @return $this
     */
    public function setMinValueDecimal($minValueDecimal) {
        $this->minValueDecimal = $minValueDecimal;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getMinValueBase64Binary() {
        return $this->minValueBase64Binary;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary $minValueBase64Binary
     * @return $this
     */
    public function setMinValueBase64Binary($minValueBase64Binary) {
        $this->minValueBase64Binary = $minValueBase64Binary;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant() {
        return $this->minValueInstant;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $minValueInstant
     * @return $this
     */
    public function setMinValueInstant($minValueInstant) {
        $this->minValueInstant = $minValueInstant;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getMinValueString() {
        return $this->minValueString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $minValueString
     * @return $this
     */
    public function setMinValueString($minValueString) {
        $this->minValueString = $minValueString;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getMinValueUri() {
        return $this->minValueUri;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $minValueUri
     * @return $this
     */
    public function setMinValueUri($minValueUri) {
        $this->minValueUri = $minValueUri;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getMinValueDate() {
        return $this->minValueDate;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $minValueDate
     * @return $this
     */
    public function setMinValueDate($minValueDate) {
        $this->minValueDate = $minValueDate;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime() {
        return $this->minValueDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $minValueDateTime
     * @return $this
     */
    public function setMinValueDateTime($minValueDateTime) {
        $this->minValueDateTime = $minValueDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getMinValueTime() {
        return $this->minValueTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $minValueTime
     * @return $this
     */
    public function setMinValueTime($minValueTime) {
        $this->minValueTime = $minValueTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getMinValueCode() {
        return $this->minValueCode;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $minValueCode
     * @return $this
     */
    public function setMinValueCode($minValueCode) {
        $this->minValueCode = $minValueCode;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public function getMinValueOid() {
        return $this->minValueOid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid $minValueOid
     * @return $this
     */
    public function setMinValueOid($minValueOid) {
        $this->minValueOid = $minValueOid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public function getMinValueUuid() {
        return $this->minValueUuid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid $minValueUuid
     * @return $this
     */
    public function setMinValueUuid($minValueUuid) {
        $this->minValueUuid = $minValueUuid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public function getMinValueId() {
        return $this->minValueId;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $minValueId
     * @return $this
     */
    public function setMinValueId($minValueId) {
        $this->minValueId = $minValueId;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt() {
        return $this->minValueUnsignedInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @return $this
     */
    public function setMinValueUnsignedInt($minValueUnsignedInt) {
        $this->minValueUnsignedInt = $minValueUnsignedInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt() {
        return $this->minValuePositiveInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @return $this
     */
    public function setMinValuePositiveInt($minValuePositiveInt) {
        $this->minValuePositiveInt = $minValuePositiveInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getMinValueMarkdown() {
        return $this->minValueMarkdown;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $minValueMarkdown
     * @return $this
     */
    public function setMinValueMarkdown($minValueMarkdown) {
        $this->minValueMarkdown = $minValueMarkdown;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getMinValueAnnotation() {
        return $this->minValueAnnotation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $minValueAnnotation
     * @return $this
     */
    public function setMinValueAnnotation($minValueAnnotation) {
        $this->minValueAnnotation = $minValueAnnotation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getMinValueAttachment() {
        return $this->minValueAttachment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $minValueAttachment
     * @return $this
     */
    public function setMinValueAttachment($minValueAttachment) {
        $this->minValueAttachment = $minValueAttachment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getMinValueIdentifier() {
        return $this->minValueIdentifier;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $minValueIdentifier
     * @return $this
     */
    public function setMinValueIdentifier($minValueIdentifier) {
        $this->minValueIdentifier = $minValueIdentifier;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getMinValueCodeableConcept() {
        return $this->minValueCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $minValueCodeableConcept
     * @return $this
     */
    public function setMinValueCodeableConcept($minValueCodeableConcept) {
        $this->minValueCodeableConcept = $minValueCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getMinValueCoding() {
        return $this->minValueCoding;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $minValueCoding
     * @return $this
     */
    public function setMinValueCoding($minValueCoding) {
        $this->minValueCoding = $minValueCoding;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity() {
        return $this->minValueQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity $minValueQuantity
     * @return $this
     */
    public function setMinValueQuantity($minValueQuantity) {
        $this->minValueQuantity = $minValueQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getMinValueRange() {
        return $this->minValueRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $minValueRange
     * @return $this
     */
    public function setMinValueRange($minValueRange) {
        $this->minValueRange = $minValueRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getMinValuePeriod() {
        return $this->minValuePeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $minValuePeriod
     * @return $this
     */
    public function setMinValuePeriod($minValuePeriod) {
        $this->minValuePeriod = $minValuePeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getMinValueRatio() {
        return $this->minValueRatio;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $minValueRatio
     * @return $this
     */
    public function setMinValueRatio($minValueRatio) {
        $this->minValueRatio = $minValueRatio;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getMinValueReference() {
        return $this->minValueReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $minValueReference
     * @return $this
     */
    public function setMinValueReference($minValueReference) {
        $this->minValueReference = $minValueReference;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public function getMinValueSampledData() {
        return $this->minValueSampledData;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData $minValueSampledData
     * @return $this
     */
    public function setMinValueSampledData($minValueSampledData) {
        $this->minValueSampledData = $minValueSampledData;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public function getMinValueSignature() {
        return $this->minValueSignature;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature $minValueSignature
     * @return $this
     */
    public function setMinValueSignature($minValueSignature) {
        $this->minValueSignature = $minValueSignature;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public function getMinValueHumanName() {
        return $this->minValueHumanName;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName $minValueHumanName
     * @return $this
     */
    public function setMinValueHumanName($minValueHumanName) {
        $this->minValueHumanName = $minValueHumanName;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public function getMinValueAddress() {
        return $this->minValueAddress;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress $minValueAddress
     * @return $this
     */
    public function setMinValueAddress($minValueAddress) {
        $this->minValueAddress = $minValueAddress;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public function getMinValueContactPoint() {
        return $this->minValueContactPoint;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint $minValueContactPoint
     * @return $this
     */
    public function setMinValueContactPoint($minValueContactPoint) {
        $this->minValueContactPoint = $minValueContactPoint;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public function getMinValueTiming() {
        return $this->minValueTiming;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $minValueTiming
     * @return $this
     */
    public function setMinValueTiming($minValueTiming) {
        $this->minValueTiming = $minValueTiming;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public function getMinValueMeta() {
        return $this->minValueMeta;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta $minValueMeta
     * @return $this
     */
    public function setMinValueMeta($minValueMeta) {
        $this->minValueMeta = $minValueMeta;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getMaxValueBoolean() {
        return $this->maxValueBoolean;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $maxValueBoolean
     * @return $this
     */
    public function setMaxValueBoolean($maxValueBoolean) {
        $this->maxValueBoolean = $maxValueBoolean;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger() {
        return $this->maxValueInteger;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $maxValueInteger
     * @return $this
     */
    public function setMaxValueInteger($maxValueInteger) {
        $this->maxValueInteger = $maxValueInteger;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal() {
        return $this->maxValueDecimal;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDecimal $maxValueDecimal
     * @return $this
     */
    public function setMaxValueDecimal($maxValueDecimal) {
        $this->maxValueDecimal = $maxValueDecimal;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getMaxValueBase64Binary() {
        return $this->maxValueBase64Binary;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBase64Binary $maxValueBase64Binary
     * @return $this
     */
    public function setMaxValueBase64Binary($maxValueBase64Binary) {
        $this->maxValueBase64Binary = $maxValueBase64Binary;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant() {
        return $this->maxValueInstant;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInstant $maxValueInstant
     * @return $this
     */
    public function setMaxValueInstant($maxValueInstant) {
        $this->maxValueInstant = $maxValueInstant;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString
     */
    public function getMaxValueString() {
        return $this->maxValueString;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRString $maxValueString
     * @return $this
     */
    public function setMaxValueString($maxValueString) {
        $this->maxValueString = $maxValueString;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri
     */
    public function getMaxValueUri() {
        return $this->maxValueUri;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUri $maxValueUri
     * @return $this
     */
    public function setMaxValueUri($maxValueUri) {
        $this->maxValueUri = $maxValueUri;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate
     */
    public function getMaxValueDate() {
        return $this->maxValueDate;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate $maxValueDate
     * @return $this
     */
    public function setMaxValueDate($maxValueDate) {
        $this->maxValueDate = $maxValueDate;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime() {
        return $this->maxValueDateTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRDateTime $maxValueDateTime
     * @return $this
     */
    public function setMaxValueDateTime($maxValueDateTime) {
        $this->maxValueDateTime = $maxValueDateTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime
     */
    public function getMaxValueTime() {
        return $this->maxValueTime;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTime $maxValueTime
     * @return $this
     */
    public function setMaxValueTime($maxValueTime) {
        $this->maxValueTime = $maxValueTime;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode
     */
    public function getMaxValueCode() {
        return $this->maxValueCode;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode $maxValueCode
     * @return $this
     */
    public function setMaxValueCode($maxValueCode) {
        $this->maxValueCode = $maxValueCode;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid
     */
    public function getMaxValueOid() {
        return $this->maxValueOid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIROid $maxValueOid
     * @return $this
     */
    public function setMaxValueOid($maxValueOid) {
        $this->maxValueOid = $maxValueOid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid
     */
    public function getMaxValueUuid() {
        return $this->maxValueUuid;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUuid $maxValueUuid
     * @return $this
     */
    public function setMaxValueUuid($maxValueUuid) {
        $this->maxValueUuid = $maxValueUuid;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId
     */
    public function getMaxValueId() {
        return $this->maxValueId;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $maxValueId
     * @return $this
     */
    public function setMaxValueId($maxValueId) {
        $this->maxValueId = $maxValueId;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt() {
        return $this->maxValueUnsignedInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @return $this
     */
    public function setMaxValueUnsignedInt($maxValueUnsignedInt) {
        $this->maxValueUnsignedInt = $maxValueUnsignedInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt() {
        return $this->maxValuePositiveInt;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @return $this
     */
    public function setMaxValuePositiveInt($maxValuePositiveInt) {
        $this->maxValuePositiveInt = $maxValuePositiveInt;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getMaxValueMarkdown() {
        return $this->maxValueMarkdown;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMarkdown $maxValueMarkdown
     * @return $this
     */
    public function setMaxValueMarkdown($maxValueMarkdown) {
        $this->maxValueMarkdown = $maxValueMarkdown;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getMaxValueAnnotation() {
        return $this->maxValueAnnotation;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAnnotation $maxValueAnnotation
     * @return $this
     */
    public function setMaxValueAnnotation($maxValueAnnotation) {
        $this->maxValueAnnotation = $maxValueAnnotation;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getMaxValueAttachment() {
        return $this->maxValueAttachment;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAttachment $maxValueAttachment
     * @return $this
     */
    public function setMaxValueAttachment($maxValueAttachment) {
        $this->maxValueAttachment = $maxValueAttachment;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getMaxValueIdentifier() {
        return $this->maxValueIdentifier;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier $maxValueIdentifier
     * @return $this
     */
    public function setMaxValueIdentifier($maxValueIdentifier) {
        $this->maxValueIdentifier = $maxValueIdentifier;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getMaxValueCodeableConcept() {
        return $this->maxValueCodeableConcept;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept $maxValueCodeableConcept
     * @return $this
     */
    public function setMaxValueCodeableConcept($maxValueCodeableConcept) {
        $this->maxValueCodeableConcept = $maxValueCodeableConcept;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding
     */
    public function getMaxValueCoding() {
        return $this->maxValueCoding;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRCoding $maxValueCoding
     * @return $this
     */
    public function setMaxValueCoding($maxValueCoding) {
        $this->maxValueCoding = $maxValueCoding;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity() {
        return $this->maxValueQuantity;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRQuantity $maxValueQuantity
     * @return $this
     */
    public function setMaxValueQuantity($maxValueQuantity) {
        $this->maxValueQuantity = $maxValueQuantity;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange
     */
    public function getMaxValueRange() {
        return $this->maxValueRange;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRange $maxValueRange
     * @return $this
     */
    public function setMaxValueRange($maxValueRange) {
        $this->maxValueRange = $maxValueRange;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getMaxValuePeriod() {
        return $this->maxValuePeriod;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRPeriod $maxValuePeriod
     * @return $this
     */
    public function setMaxValuePeriod($maxValuePeriod) {
        $this->maxValuePeriod = $maxValuePeriod;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio
     */
    public function getMaxValueRatio() {
        return $this->maxValueRatio;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRRatio $maxValueRatio
     * @return $this
     */
    public function setMaxValueRatio($maxValueRatio) {
        $this->maxValueRatio = $maxValueRatio;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference
     */
    public function getMaxValueReference() {
        return $this->maxValueReference;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference $maxValueReference
     * @return $this
     */
    public function setMaxValueReference($maxValueReference) {
        $this->maxValueReference = $maxValueReference;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData
     */
    public function getMaxValueSampledData() {
        return $this->maxValueSampledData;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSampledData $maxValueSampledData
     * @return $this
     */
    public function setMaxValueSampledData($maxValueSampledData) {
        $this->maxValueSampledData = $maxValueSampledData;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature
     */
    public function getMaxValueSignature() {
        return $this->maxValueSignature;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRSignature $maxValueSignature
     * @return $this
     */
    public function setMaxValueSignature($maxValueSignature) {
        $this->maxValueSignature = $maxValueSignature;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName
     */
    public function getMaxValueHumanName() {
        return $this->maxValueHumanName;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName $maxValueHumanName
     * @return $this
     */
    public function setMaxValueHumanName($maxValueHumanName) {
        $this->maxValueHumanName = $maxValueHumanName;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress
     */
    public function getMaxValueAddress() {
        return $this->maxValueAddress;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress $maxValueAddress
     * @return $this
     */
    public function setMaxValueAddress($maxValueAddress) {
        $this->maxValueAddress = $maxValueAddress;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint
     */
    public function getMaxValueContactPoint() {
        return $this->maxValueContactPoint;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint $maxValueContactPoint
     * @return $this
     */
    public function setMaxValueContactPoint($maxValueContactPoint) {
        $this->maxValueContactPoint = $maxValueContactPoint;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming
     */
    public function getMaxValueTiming() {
        return $this->maxValueTiming;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRTiming $maxValueTiming
     * @return $this
     */
    public function setMaxValueTiming($maxValueTiming) {
        $this->maxValueTiming = $maxValueTiming;
        return $this;
    }

    /**
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta
     */
    public function getMaxValueMeta() {
        return $this->maxValueMeta;
    }

    /**
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRMeta $maxValueMeta
     * @return $this
     */
    public function setMaxValueMeta($maxValueMeta) {
        $this->maxValueMeta = $maxValueMeta;
        return $this;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger
     */
    public function getMaxLength() {
        return $this->maxLength;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRInteger $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength) {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId[]
     */
    public function getCondition() {
        return $this->condition;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRId $condition
     * @return $this
     */
    public function addCondition($condition) {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public function getConstraint() {
        return $this->constraint;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint $constraint
     * @return $this
     */
    public function addConstraint($constraint) {
        $this->constraint[] = $constraint;
        return $this;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getMustSupport() {
        return $this->mustSupport;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $mustSupport
     * @return $this
     */
    public function setMustSupport($mustSupport) {
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getIsModifier() {
        return $this->isModifier;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $isModifier
     * @return $this
     */
    public function setIsModifier($isModifier) {
        $this->isModifier = $isModifier;
        return $this;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @return \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getIsSummary() {
        return $this->isSummary;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @param \App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean $isSummary
     * @return $this
     */
    public function setIsSummary($isSummary) {
        $this->isSummary = $isSummary;
        return $this;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding() {
        return $this->binding;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @return $this
     */
    public function setBinding($binding) {
        $this->binding = $binding;
        return $this;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @return \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public function getMapping() {
        return $this->mapping;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @param \App\HL7\FHIR\DSTU2\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping $mapping
     * @return $this
     */
    public function addMapping($mapping) {
        $this->mapping[] = $mapping;
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
            if (isset($data['path'])) {
                $this->setPath($data['path']);
            }
            if (isset($data['representation'])) {
                if (is_array($data['representation'])) {
                    foreach($data['representation'] as $d) {
                        $this->addrepresentation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"representation" must be array of objects or null, '.gettype($data['representation']).' seen.'); 
                }
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['label'])) {
                $this->setLabel($data['label']);
            }
            if (isset($data['code'])) {
                if (is_array($data['code'])) {
                    foreach($data['code'] as $d) {
                        $this->addcode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"code" must be array of objects or null, '.gettype($data['code']).' seen.'); 
                }
            }
            if (isset($data['slicing'])) {
                $this->setSlicing($data['slicing']);
            }
            if (isset($data['short'])) {
                $this->setShort($data['short']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['comments'])) {
                $this->setComments($data['comments']);
            }
            if (isset($data['requirements'])) {
                $this->setRequirements($data['requirements']);
            }
            if (isset($data['alias'])) {
                if (is_array($data['alias'])) {
                    foreach($data['alias'] as $d) {
                        $this->addalias($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"alias" must be array of objects or null, '.gettype($data['alias']).' seen.'); 
                }
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['base'])) {
                $this->setBase($data['base']);
            }
            if (isset($data['type'])) {
                if (is_array($data['type'])) {
                    foreach($data['type'] as $d) {
                        $this->addtype($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"type" must be array of objects or null, '.gettype($data['type']).' seen.'); 
                }
            }
            if (isset($data['nameReference'])) {
                $this->setNameReference($data['nameReference']);
            }
            if (isset($data['defaultValueBoolean'])) {
                $this->setDefaultValueBoolean($data['defaultValueBoolean']);
            }
            if (isset($data['defaultValueInteger'])) {
                $this->setDefaultValueInteger($data['defaultValueInteger']);
            }
            if (isset($data['defaultValueDecimal'])) {
                $this->setDefaultValueDecimal($data['defaultValueDecimal']);
            }
            if (isset($data['defaultValueBase64Binary'])) {
                $this->setDefaultValueBase64Binary($data['defaultValueBase64Binary']);
            }
            if (isset($data['defaultValueInstant'])) {
                $this->setDefaultValueInstant($data['defaultValueInstant']);
            }
            if (isset($data['defaultValueString'])) {
                $this->setDefaultValueString($data['defaultValueString']);
            }
            if (isset($data['defaultValueUri'])) {
                $this->setDefaultValueUri($data['defaultValueUri']);
            }
            if (isset($data['defaultValueDate'])) {
                $this->setDefaultValueDate($data['defaultValueDate']);
            }
            if (isset($data['defaultValueDateTime'])) {
                $this->setDefaultValueDateTime($data['defaultValueDateTime']);
            }
            if (isset($data['defaultValueTime'])) {
                $this->setDefaultValueTime($data['defaultValueTime']);
            }
            if (isset($data['defaultValueCode'])) {
                $this->setDefaultValueCode($data['defaultValueCode']);
            }
            if (isset($data['defaultValueOid'])) {
                $this->setDefaultValueOid($data['defaultValueOid']);
            }
            if (isset($data['defaultValueUuid'])) {
                $this->setDefaultValueUuid($data['defaultValueUuid']);
            }
            if (isset($data['defaultValueId'])) {
                $this->setDefaultValueId($data['defaultValueId']);
            }
            if (isset($data['defaultValueUnsignedInt'])) {
                $this->setDefaultValueUnsignedInt($data['defaultValueUnsignedInt']);
            }
            if (isset($data['defaultValuePositiveInt'])) {
                $this->setDefaultValuePositiveInt($data['defaultValuePositiveInt']);
            }
            if (isset($data['defaultValueMarkdown'])) {
                $this->setDefaultValueMarkdown($data['defaultValueMarkdown']);
            }
            if (isset($data['defaultValueAnnotation'])) {
                $this->setDefaultValueAnnotation($data['defaultValueAnnotation']);
            }
            if (isset($data['defaultValueAttachment'])) {
                $this->setDefaultValueAttachment($data['defaultValueAttachment']);
            }
            if (isset($data['defaultValueIdentifier'])) {
                $this->setDefaultValueIdentifier($data['defaultValueIdentifier']);
            }
            if (isset($data['defaultValueCodeableConcept'])) {
                $this->setDefaultValueCodeableConcept($data['defaultValueCodeableConcept']);
            }
            if (isset($data['defaultValueCoding'])) {
                $this->setDefaultValueCoding($data['defaultValueCoding']);
            }
            if (isset($data['defaultValueQuantity'])) {
                $this->setDefaultValueQuantity($data['defaultValueQuantity']);
            }
            if (isset($data['defaultValueRange'])) {
                $this->setDefaultValueRange($data['defaultValueRange']);
            }
            if (isset($data['defaultValuePeriod'])) {
                $this->setDefaultValuePeriod($data['defaultValuePeriod']);
            }
            if (isset($data['defaultValueRatio'])) {
                $this->setDefaultValueRatio($data['defaultValueRatio']);
            }
            if (isset($data['defaultValueReference'])) {
                $this->setDefaultValueReference($data['defaultValueReference']);
            }
            if (isset($data['defaultValueSampledData'])) {
                $this->setDefaultValueSampledData($data['defaultValueSampledData']);
            }
            if (isset($data['defaultValueSignature'])) {
                $this->setDefaultValueSignature($data['defaultValueSignature']);
            }
            if (isset($data['defaultValueHumanName'])) {
                $this->setDefaultValueHumanName($data['defaultValueHumanName']);
            }
            if (isset($data['defaultValueAddress'])) {
                $this->setDefaultValueAddress($data['defaultValueAddress']);
            }
            if (isset($data['defaultValueContactPoint'])) {
                $this->setDefaultValueContactPoint($data['defaultValueContactPoint']);
            }
            if (isset($data['defaultValueTiming'])) {
                $this->setDefaultValueTiming($data['defaultValueTiming']);
            }
            if (isset($data['defaultValueMeta'])) {
                $this->setDefaultValueMeta($data['defaultValueMeta']);
            }
            if (isset($data['meaningWhenMissing'])) {
                $this->setMeaningWhenMissing($data['meaningWhenMissing']);
            }
            if (isset($data['fixedBoolean'])) {
                $this->setFixedBoolean($data['fixedBoolean']);
            }
            if (isset($data['fixedInteger'])) {
                $this->setFixedInteger($data['fixedInteger']);
            }
            if (isset($data['fixedDecimal'])) {
                $this->setFixedDecimal($data['fixedDecimal']);
            }
            if (isset($data['fixedBase64Binary'])) {
                $this->setFixedBase64Binary($data['fixedBase64Binary']);
            }
            if (isset($data['fixedInstant'])) {
                $this->setFixedInstant($data['fixedInstant']);
            }
            if (isset($data['fixedString'])) {
                $this->setFixedString($data['fixedString']);
            }
            if (isset($data['fixedUri'])) {
                $this->setFixedUri($data['fixedUri']);
            }
            if (isset($data['fixedDate'])) {
                $this->setFixedDate($data['fixedDate']);
            }
            if (isset($data['fixedDateTime'])) {
                $this->setFixedDateTime($data['fixedDateTime']);
            }
            if (isset($data['fixedTime'])) {
                $this->setFixedTime($data['fixedTime']);
            }
            if (isset($data['fixedCode'])) {
                $this->setFixedCode($data['fixedCode']);
            }
            if (isset($data['fixedOid'])) {
                $this->setFixedOid($data['fixedOid']);
            }
            if (isset($data['fixedUuid'])) {
                $this->setFixedUuid($data['fixedUuid']);
            }
            if (isset($data['fixedId'])) {
                $this->setFixedId($data['fixedId']);
            }
            if (isset($data['fixedUnsignedInt'])) {
                $this->setFixedUnsignedInt($data['fixedUnsignedInt']);
            }
            if (isset($data['fixedPositiveInt'])) {
                $this->setFixedPositiveInt($data['fixedPositiveInt']);
            }
            if (isset($data['fixedMarkdown'])) {
                $this->setFixedMarkdown($data['fixedMarkdown']);
            }
            if (isset($data['fixedAnnotation'])) {
                $this->setFixedAnnotation($data['fixedAnnotation']);
            }
            if (isset($data['fixedAttachment'])) {
                $this->setFixedAttachment($data['fixedAttachment']);
            }
            if (isset($data['fixedIdentifier'])) {
                $this->setFixedIdentifier($data['fixedIdentifier']);
            }
            if (isset($data['fixedCodeableConcept'])) {
                $this->setFixedCodeableConcept($data['fixedCodeableConcept']);
            }
            if (isset($data['fixedCoding'])) {
                $this->setFixedCoding($data['fixedCoding']);
            }
            if (isset($data['fixedQuantity'])) {
                $this->setFixedQuantity($data['fixedQuantity']);
            }
            if (isset($data['fixedRange'])) {
                $this->setFixedRange($data['fixedRange']);
            }
            if (isset($data['fixedPeriod'])) {
                $this->setFixedPeriod($data['fixedPeriod']);
            }
            if (isset($data['fixedRatio'])) {
                $this->setFixedRatio($data['fixedRatio']);
            }
            if (isset($data['fixedReference'])) {
                $this->setFixedReference($data['fixedReference']);
            }
            if (isset($data['fixedSampledData'])) {
                $this->setFixedSampledData($data['fixedSampledData']);
            }
            if (isset($data['fixedSignature'])) {
                $this->setFixedSignature($data['fixedSignature']);
            }
            if (isset($data['fixedHumanName'])) {
                $this->setFixedHumanName($data['fixedHumanName']);
            }
            if (isset($data['fixedAddress'])) {
                $this->setFixedAddress($data['fixedAddress']);
            }
            if (isset($data['fixedContactPoint'])) {
                $this->setFixedContactPoint($data['fixedContactPoint']);
            }
            if (isset($data['fixedTiming'])) {
                $this->setFixedTiming($data['fixedTiming']);
            }
            if (isset($data['fixedMeta'])) {
                $this->setFixedMeta($data['fixedMeta']);
            }
            if (isset($data['patternBoolean'])) {
                $this->setPatternBoolean($data['patternBoolean']);
            }
            if (isset($data['patternInteger'])) {
                $this->setPatternInteger($data['patternInteger']);
            }
            if (isset($data['patternDecimal'])) {
                $this->setPatternDecimal($data['patternDecimal']);
            }
            if (isset($data['patternBase64Binary'])) {
                $this->setPatternBase64Binary($data['patternBase64Binary']);
            }
            if (isset($data['patternInstant'])) {
                $this->setPatternInstant($data['patternInstant']);
            }
            if (isset($data['patternString'])) {
                $this->setPatternString($data['patternString']);
            }
            if (isset($data['patternUri'])) {
                $this->setPatternUri($data['patternUri']);
            }
            if (isset($data['patternDate'])) {
                $this->setPatternDate($data['patternDate']);
            }
            if (isset($data['patternDateTime'])) {
                $this->setPatternDateTime($data['patternDateTime']);
            }
            if (isset($data['patternTime'])) {
                $this->setPatternTime($data['patternTime']);
            }
            if (isset($data['patternCode'])) {
                $this->setPatternCode($data['patternCode']);
            }
            if (isset($data['patternOid'])) {
                $this->setPatternOid($data['patternOid']);
            }
            if (isset($data['patternUuid'])) {
                $this->setPatternUuid($data['patternUuid']);
            }
            if (isset($data['patternId'])) {
                $this->setPatternId($data['patternId']);
            }
            if (isset($data['patternUnsignedInt'])) {
                $this->setPatternUnsignedInt($data['patternUnsignedInt']);
            }
            if (isset($data['patternPositiveInt'])) {
                $this->setPatternPositiveInt($data['patternPositiveInt']);
            }
            if (isset($data['patternMarkdown'])) {
                $this->setPatternMarkdown($data['patternMarkdown']);
            }
            if (isset($data['patternAnnotation'])) {
                $this->setPatternAnnotation($data['patternAnnotation']);
            }
            if (isset($data['patternAttachment'])) {
                $this->setPatternAttachment($data['patternAttachment']);
            }
            if (isset($data['patternIdentifier'])) {
                $this->setPatternIdentifier($data['patternIdentifier']);
            }
            if (isset($data['patternCodeableConcept'])) {
                $this->setPatternCodeableConcept($data['patternCodeableConcept']);
            }
            if (isset($data['patternCoding'])) {
                $this->setPatternCoding($data['patternCoding']);
            }
            if (isset($data['patternQuantity'])) {
                $this->setPatternQuantity($data['patternQuantity']);
            }
            if (isset($data['patternRange'])) {
                $this->setPatternRange($data['patternRange']);
            }
            if (isset($data['patternPeriod'])) {
                $this->setPatternPeriod($data['patternPeriod']);
            }
            if (isset($data['patternRatio'])) {
                $this->setPatternRatio($data['patternRatio']);
            }
            if (isset($data['patternReference'])) {
                $this->setPatternReference($data['patternReference']);
            }
            if (isset($data['patternSampledData'])) {
                $this->setPatternSampledData($data['patternSampledData']);
            }
            if (isset($data['patternSignature'])) {
                $this->setPatternSignature($data['patternSignature']);
            }
            if (isset($data['patternHumanName'])) {
                $this->setPatternHumanName($data['patternHumanName']);
            }
            if (isset($data['patternAddress'])) {
                $this->setPatternAddress($data['patternAddress']);
            }
            if (isset($data['patternContactPoint'])) {
                $this->setPatternContactPoint($data['patternContactPoint']);
            }
            if (isset($data['patternTiming'])) {
                $this->setPatternTiming($data['patternTiming']);
            }
            if (isset($data['patternMeta'])) {
                $this->setPatternMeta($data['patternMeta']);
            }
            if (isset($data['exampleBoolean'])) {
                $this->setExampleBoolean($data['exampleBoolean']);
            }
            if (isset($data['exampleInteger'])) {
                $this->setExampleInteger($data['exampleInteger']);
            }
            if (isset($data['exampleDecimal'])) {
                $this->setExampleDecimal($data['exampleDecimal']);
            }
            if (isset($data['exampleBase64Binary'])) {
                $this->setExampleBase64Binary($data['exampleBase64Binary']);
            }
            if (isset($data['exampleInstant'])) {
                $this->setExampleInstant($data['exampleInstant']);
            }
            if (isset($data['exampleString'])) {
                $this->setExampleString($data['exampleString']);
            }
            if (isset($data['exampleUri'])) {
                $this->setExampleUri($data['exampleUri']);
            }
            if (isset($data['exampleDate'])) {
                $this->setExampleDate($data['exampleDate']);
            }
            if (isset($data['exampleDateTime'])) {
                $this->setExampleDateTime($data['exampleDateTime']);
            }
            if (isset($data['exampleTime'])) {
                $this->setExampleTime($data['exampleTime']);
            }
            if (isset($data['exampleCode'])) {
                $this->setExampleCode($data['exampleCode']);
            }
            if (isset($data['exampleOid'])) {
                $this->setExampleOid($data['exampleOid']);
            }
            if (isset($data['exampleUuid'])) {
                $this->setExampleUuid($data['exampleUuid']);
            }
            if (isset($data['exampleId'])) {
                $this->setExampleId($data['exampleId']);
            }
            if (isset($data['exampleUnsignedInt'])) {
                $this->setExampleUnsignedInt($data['exampleUnsignedInt']);
            }
            if (isset($data['examplePositiveInt'])) {
                $this->setExamplePositiveInt($data['examplePositiveInt']);
            }
            if (isset($data['exampleMarkdown'])) {
                $this->setExampleMarkdown($data['exampleMarkdown']);
            }
            if (isset($data['exampleAnnotation'])) {
                $this->setExampleAnnotation($data['exampleAnnotation']);
            }
            if (isset($data['exampleAttachment'])) {
                $this->setExampleAttachment($data['exampleAttachment']);
            }
            if (isset($data['exampleIdentifier'])) {
                $this->setExampleIdentifier($data['exampleIdentifier']);
            }
            if (isset($data['exampleCodeableConcept'])) {
                $this->setExampleCodeableConcept($data['exampleCodeableConcept']);
            }
            if (isset($data['exampleCoding'])) {
                $this->setExampleCoding($data['exampleCoding']);
            }
            if (isset($data['exampleQuantity'])) {
                $this->setExampleQuantity($data['exampleQuantity']);
            }
            if (isset($data['exampleRange'])) {
                $this->setExampleRange($data['exampleRange']);
            }
            if (isset($data['examplePeriod'])) {
                $this->setExamplePeriod($data['examplePeriod']);
            }
            if (isset($data['exampleRatio'])) {
                $this->setExampleRatio($data['exampleRatio']);
            }
            if (isset($data['exampleReference'])) {
                $this->setExampleReference($data['exampleReference']);
            }
            if (isset($data['exampleSampledData'])) {
                $this->setExampleSampledData($data['exampleSampledData']);
            }
            if (isset($data['exampleSignature'])) {
                $this->setExampleSignature($data['exampleSignature']);
            }
            if (isset($data['exampleHumanName'])) {
                $this->setExampleHumanName($data['exampleHumanName']);
            }
            if (isset($data['exampleAddress'])) {
                $this->setExampleAddress($data['exampleAddress']);
            }
            if (isset($data['exampleContactPoint'])) {
                $this->setExampleContactPoint($data['exampleContactPoint']);
            }
            if (isset($data['exampleTiming'])) {
                $this->setExampleTiming($data['exampleTiming']);
            }
            if (isset($data['exampleMeta'])) {
                $this->setExampleMeta($data['exampleMeta']);
            }
            if (isset($data['minValueBoolean'])) {
                $this->setMinValueBoolean($data['minValueBoolean']);
            }
            if (isset($data['minValueInteger'])) {
                $this->setMinValueInteger($data['minValueInteger']);
            }
            if (isset($data['minValueDecimal'])) {
                $this->setMinValueDecimal($data['minValueDecimal']);
            }
            if (isset($data['minValueBase64Binary'])) {
                $this->setMinValueBase64Binary($data['minValueBase64Binary']);
            }
            if (isset($data['minValueInstant'])) {
                $this->setMinValueInstant($data['minValueInstant']);
            }
            if (isset($data['minValueString'])) {
                $this->setMinValueString($data['minValueString']);
            }
            if (isset($data['minValueUri'])) {
                $this->setMinValueUri($data['minValueUri']);
            }
            if (isset($data['minValueDate'])) {
                $this->setMinValueDate($data['minValueDate']);
            }
            if (isset($data['minValueDateTime'])) {
                $this->setMinValueDateTime($data['minValueDateTime']);
            }
            if (isset($data['minValueTime'])) {
                $this->setMinValueTime($data['minValueTime']);
            }
            if (isset($data['minValueCode'])) {
                $this->setMinValueCode($data['minValueCode']);
            }
            if (isset($data['minValueOid'])) {
                $this->setMinValueOid($data['minValueOid']);
            }
            if (isset($data['minValueUuid'])) {
                $this->setMinValueUuid($data['minValueUuid']);
            }
            if (isset($data['minValueId'])) {
                $this->setMinValueId($data['minValueId']);
            }
            if (isset($data['minValueUnsignedInt'])) {
                $this->setMinValueUnsignedInt($data['minValueUnsignedInt']);
            }
            if (isset($data['minValuePositiveInt'])) {
                $this->setMinValuePositiveInt($data['minValuePositiveInt']);
            }
            if (isset($data['minValueMarkdown'])) {
                $this->setMinValueMarkdown($data['minValueMarkdown']);
            }
            if (isset($data['minValueAnnotation'])) {
                $this->setMinValueAnnotation($data['minValueAnnotation']);
            }
            if (isset($data['minValueAttachment'])) {
                $this->setMinValueAttachment($data['minValueAttachment']);
            }
            if (isset($data['minValueIdentifier'])) {
                $this->setMinValueIdentifier($data['minValueIdentifier']);
            }
            if (isset($data['minValueCodeableConcept'])) {
                $this->setMinValueCodeableConcept($data['minValueCodeableConcept']);
            }
            if (isset($data['minValueCoding'])) {
                $this->setMinValueCoding($data['minValueCoding']);
            }
            if (isset($data['minValueQuantity'])) {
                $this->setMinValueQuantity($data['minValueQuantity']);
            }
            if (isset($data['minValueRange'])) {
                $this->setMinValueRange($data['minValueRange']);
            }
            if (isset($data['minValuePeriod'])) {
                $this->setMinValuePeriod($data['minValuePeriod']);
            }
            if (isset($data['minValueRatio'])) {
                $this->setMinValueRatio($data['minValueRatio']);
            }
            if (isset($data['minValueReference'])) {
                $this->setMinValueReference($data['minValueReference']);
            }
            if (isset($data['minValueSampledData'])) {
                $this->setMinValueSampledData($data['minValueSampledData']);
            }
            if (isset($data['minValueSignature'])) {
                $this->setMinValueSignature($data['minValueSignature']);
            }
            if (isset($data['minValueHumanName'])) {
                $this->setMinValueHumanName($data['minValueHumanName']);
            }
            if (isset($data['minValueAddress'])) {
                $this->setMinValueAddress($data['minValueAddress']);
            }
            if (isset($data['minValueContactPoint'])) {
                $this->setMinValueContactPoint($data['minValueContactPoint']);
            }
            if (isset($data['minValueTiming'])) {
                $this->setMinValueTiming($data['minValueTiming']);
            }
            if (isset($data['minValueMeta'])) {
                $this->setMinValueMeta($data['minValueMeta']);
            }
            if (isset($data['maxValueBoolean'])) {
                $this->setMaxValueBoolean($data['maxValueBoolean']);
            }
            if (isset($data['maxValueInteger'])) {
                $this->setMaxValueInteger($data['maxValueInteger']);
            }
            if (isset($data['maxValueDecimal'])) {
                $this->setMaxValueDecimal($data['maxValueDecimal']);
            }
            if (isset($data['maxValueBase64Binary'])) {
                $this->setMaxValueBase64Binary($data['maxValueBase64Binary']);
            }
            if (isset($data['maxValueInstant'])) {
                $this->setMaxValueInstant($data['maxValueInstant']);
            }
            if (isset($data['maxValueString'])) {
                $this->setMaxValueString($data['maxValueString']);
            }
            if (isset($data['maxValueUri'])) {
                $this->setMaxValueUri($data['maxValueUri']);
            }
            if (isset($data['maxValueDate'])) {
                $this->setMaxValueDate($data['maxValueDate']);
            }
            if (isset($data['maxValueDateTime'])) {
                $this->setMaxValueDateTime($data['maxValueDateTime']);
            }
            if (isset($data['maxValueTime'])) {
                $this->setMaxValueTime($data['maxValueTime']);
            }
            if (isset($data['maxValueCode'])) {
                $this->setMaxValueCode($data['maxValueCode']);
            }
            if (isset($data['maxValueOid'])) {
                $this->setMaxValueOid($data['maxValueOid']);
            }
            if (isset($data['maxValueUuid'])) {
                $this->setMaxValueUuid($data['maxValueUuid']);
            }
            if (isset($data['maxValueId'])) {
                $this->setMaxValueId($data['maxValueId']);
            }
            if (isset($data['maxValueUnsignedInt'])) {
                $this->setMaxValueUnsignedInt($data['maxValueUnsignedInt']);
            }
            if (isset($data['maxValuePositiveInt'])) {
                $this->setMaxValuePositiveInt($data['maxValuePositiveInt']);
            }
            if (isset($data['maxValueMarkdown'])) {
                $this->setMaxValueMarkdown($data['maxValueMarkdown']);
            }
            if (isset($data['maxValueAnnotation'])) {
                $this->setMaxValueAnnotation($data['maxValueAnnotation']);
            }
            if (isset($data['maxValueAttachment'])) {
                $this->setMaxValueAttachment($data['maxValueAttachment']);
            }
            if (isset($data['maxValueIdentifier'])) {
                $this->setMaxValueIdentifier($data['maxValueIdentifier']);
            }
            if (isset($data['maxValueCodeableConcept'])) {
                $this->setMaxValueCodeableConcept($data['maxValueCodeableConcept']);
            }
            if (isset($data['maxValueCoding'])) {
                $this->setMaxValueCoding($data['maxValueCoding']);
            }
            if (isset($data['maxValueQuantity'])) {
                $this->setMaxValueQuantity($data['maxValueQuantity']);
            }
            if (isset($data['maxValueRange'])) {
                $this->setMaxValueRange($data['maxValueRange']);
            }
            if (isset($data['maxValuePeriod'])) {
                $this->setMaxValuePeriod($data['maxValuePeriod']);
            }
            if (isset($data['maxValueRatio'])) {
                $this->setMaxValueRatio($data['maxValueRatio']);
            }
            if (isset($data['maxValueReference'])) {
                $this->setMaxValueReference($data['maxValueReference']);
            }
            if (isset($data['maxValueSampledData'])) {
                $this->setMaxValueSampledData($data['maxValueSampledData']);
            }
            if (isset($data['maxValueSignature'])) {
                $this->setMaxValueSignature($data['maxValueSignature']);
            }
            if (isset($data['maxValueHumanName'])) {
                $this->setMaxValueHumanName($data['maxValueHumanName']);
            }
            if (isset($data['maxValueAddress'])) {
                $this->setMaxValueAddress($data['maxValueAddress']);
            }
            if (isset($data['maxValueContactPoint'])) {
                $this->setMaxValueContactPoint($data['maxValueContactPoint']);
            }
            if (isset($data['maxValueTiming'])) {
                $this->setMaxValueTiming($data['maxValueTiming']);
            }
            if (isset($data['maxValueMeta'])) {
                $this->setMaxValueMeta($data['maxValueMeta']);
            }
            if (isset($data['maxLength'])) {
                $this->setMaxLength($data['maxLength']);
            }
            if (isset($data['condition'])) {
                if (is_array($data['condition'])) {
                    foreach($data['condition'] as $d) {
                        $this->addcondition($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"condition" must be array of objects or null, '.gettype($data['condition']).' seen.'); 
                }
            }
            if (isset($data['constraint'])) {
                if (is_array($data['constraint'])) {
                    foreach($data['constraint'] as $d) {
                        $this->addconstraint($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"constraint" must be array of objects or null, '.gettype($data['constraint']).' seen.'); 
                }
            }
            if (isset($data['mustSupport'])) {
                $this->setMustSupport($data['mustSupport']);
            }
            if (isset($data['isModifier'])) {
                $this->setIsModifier($data['isModifier']);
            }
            if (isset($data['isSummary'])) {
                $this->setIsSummary($data['isSummary']);
            }
            if (isset($data['binding'])) {
                $this->setBinding($data['binding']);
            }
            if (isset($data['mapping'])) {
                if (is_array($data['mapping'])) {
                    foreach($data['mapping'] as $d) {
                        $this->addmapping($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"mapping" must be array of objects or null, '.gettype($data['mapping']).' seen.'); 
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
        if (isset($this->path)) $json['path'] = $this->path;
        if (0 < count($this->representation)) {
            $json['representation'] = [];
            foreach($this->representation as $representation) {
                if (null !== $representation) $json['representation'][] = $representation;
            }
        }
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->label)) $json['label'] = $this->label;
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                if (null !== $code) $json['code'][] = $code;
            }
        }
        if (isset($this->slicing)) $json['slicing'] = $this->slicing;
        if (isset($this->short)) $json['short'] = $this->short;
        if (isset($this->definition)) $json['definition'] = $this->definition;
        if (isset($this->comments)) $json['comments'] = $this->comments;
        if (isset($this->requirements)) $json['requirements'] = $this->requirements;
        if (0 < count($this->alias)) {
            $json['alias'] = [];
            foreach($this->alias as $alias) {
                if (null !== $alias) $json['alias'][] = $alias;
            }
        }
        if (isset($this->min)) $json['min'] = $this->min;
        if (isset($this->max)) $json['max'] = $this->max;
        if (isset($this->base)) $json['base'] = $this->base;
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                if (null !== $type) $json['type'][] = $type;
            }
        }
        if (isset($this->nameReference)) $json['nameReference'] = $this->nameReference;
        if (isset($this->defaultValueBoolean)) $json['defaultValueBoolean'] = $this->defaultValueBoolean;
        if (isset($this->defaultValueInteger)) $json['defaultValueInteger'] = $this->defaultValueInteger;
        if (isset($this->defaultValueDecimal)) $json['defaultValueDecimal'] = $this->defaultValueDecimal;
        if (isset($this->defaultValueBase64Binary)) $json['defaultValueBase64Binary'] = $this->defaultValueBase64Binary;
        if (isset($this->defaultValueInstant)) $json['defaultValueInstant'] = $this->defaultValueInstant;
        if (isset($this->defaultValueString)) $json['defaultValueString'] = $this->defaultValueString;
        if (isset($this->defaultValueUri)) $json['defaultValueUri'] = $this->defaultValueUri;
        if (isset($this->defaultValueDate)) $json['defaultValueDate'] = $this->defaultValueDate;
        if (isset($this->defaultValueDateTime)) $json['defaultValueDateTime'] = $this->defaultValueDateTime;
        if (isset($this->defaultValueTime)) $json['defaultValueTime'] = $this->defaultValueTime;
        if (isset($this->defaultValueCode)) $json['defaultValueCode'] = $this->defaultValueCode;
        if (isset($this->defaultValueOid)) $json['defaultValueOid'] = $this->defaultValueOid;
        if (isset($this->defaultValueUuid)) $json['defaultValueUuid'] = $this->defaultValueUuid;
        if (isset($this->defaultValueId)) $json['defaultValueId'] = $this->defaultValueId;
        if (isset($this->defaultValueUnsignedInt)) $json['defaultValueUnsignedInt'] = $this->defaultValueUnsignedInt;
        if (isset($this->defaultValuePositiveInt)) $json['defaultValuePositiveInt'] = $this->defaultValuePositiveInt;
        if (isset($this->defaultValueMarkdown)) $json['defaultValueMarkdown'] = $this->defaultValueMarkdown;
        if (isset($this->defaultValueAnnotation)) $json['defaultValueAnnotation'] = $this->defaultValueAnnotation;
        if (isset($this->defaultValueAttachment)) $json['defaultValueAttachment'] = $this->defaultValueAttachment;
        if (isset($this->defaultValueIdentifier)) $json['defaultValueIdentifier'] = $this->defaultValueIdentifier;
        if (isset($this->defaultValueCodeableConcept)) $json['defaultValueCodeableConcept'] = $this->defaultValueCodeableConcept;
        if (isset($this->defaultValueCoding)) $json['defaultValueCoding'] = $this->defaultValueCoding;
        if (isset($this->defaultValueQuantity)) $json['defaultValueQuantity'] = $this->defaultValueQuantity;
        if (isset($this->defaultValueRange)) $json['defaultValueRange'] = $this->defaultValueRange;
        if (isset($this->defaultValuePeriod)) $json['defaultValuePeriod'] = $this->defaultValuePeriod;
        if (isset($this->defaultValueRatio)) $json['defaultValueRatio'] = $this->defaultValueRatio;
        if (isset($this->defaultValueReference)) $json['defaultValueReference'] = $this->defaultValueReference;
        if (isset($this->defaultValueSampledData)) $json['defaultValueSampledData'] = $this->defaultValueSampledData;
        if (isset($this->defaultValueSignature)) $json['defaultValueSignature'] = $this->defaultValueSignature;
        if (isset($this->defaultValueHumanName)) $json['defaultValueHumanName'] = $this->defaultValueHumanName;
        if (isset($this->defaultValueAddress)) $json['defaultValueAddress'] = $this->defaultValueAddress;
        if (isset($this->defaultValueContactPoint)) $json['defaultValueContactPoint'] = $this->defaultValueContactPoint;
        if (isset($this->defaultValueTiming)) $json['defaultValueTiming'] = $this->defaultValueTiming;
        if (isset($this->defaultValueMeta)) $json['defaultValueMeta'] = $this->defaultValueMeta;
        if (isset($this->meaningWhenMissing)) $json['meaningWhenMissing'] = $this->meaningWhenMissing;
        if (isset($this->fixedBoolean)) $json['fixedBoolean'] = $this->fixedBoolean;
        if (isset($this->fixedInteger)) $json['fixedInteger'] = $this->fixedInteger;
        if (isset($this->fixedDecimal)) $json['fixedDecimal'] = $this->fixedDecimal;
        if (isset($this->fixedBase64Binary)) $json['fixedBase64Binary'] = $this->fixedBase64Binary;
        if (isset($this->fixedInstant)) $json['fixedInstant'] = $this->fixedInstant;
        if (isset($this->fixedString)) $json['fixedString'] = $this->fixedString;
        if (isset($this->fixedUri)) $json['fixedUri'] = $this->fixedUri;
        if (isset($this->fixedDate)) $json['fixedDate'] = $this->fixedDate;
        if (isset($this->fixedDateTime)) $json['fixedDateTime'] = $this->fixedDateTime;
        if (isset($this->fixedTime)) $json['fixedTime'] = $this->fixedTime;
        if (isset($this->fixedCode)) $json['fixedCode'] = $this->fixedCode;
        if (isset($this->fixedOid)) $json['fixedOid'] = $this->fixedOid;
        if (isset($this->fixedUuid)) $json['fixedUuid'] = $this->fixedUuid;
        if (isset($this->fixedId)) $json['fixedId'] = $this->fixedId;
        if (isset($this->fixedUnsignedInt)) $json['fixedUnsignedInt'] = $this->fixedUnsignedInt;
        if (isset($this->fixedPositiveInt)) $json['fixedPositiveInt'] = $this->fixedPositiveInt;
        if (isset($this->fixedMarkdown)) $json['fixedMarkdown'] = $this->fixedMarkdown;
        if (isset($this->fixedAnnotation)) $json['fixedAnnotation'] = $this->fixedAnnotation;
        if (isset($this->fixedAttachment)) $json['fixedAttachment'] = $this->fixedAttachment;
        if (isset($this->fixedIdentifier)) $json['fixedIdentifier'] = $this->fixedIdentifier;
        if (isset($this->fixedCodeableConcept)) $json['fixedCodeableConcept'] = $this->fixedCodeableConcept;
        if (isset($this->fixedCoding)) $json['fixedCoding'] = $this->fixedCoding;
        if (isset($this->fixedQuantity)) $json['fixedQuantity'] = $this->fixedQuantity;
        if (isset($this->fixedRange)) $json['fixedRange'] = $this->fixedRange;
        if (isset($this->fixedPeriod)) $json['fixedPeriod'] = $this->fixedPeriod;
        if (isset($this->fixedRatio)) $json['fixedRatio'] = $this->fixedRatio;
        if (isset($this->fixedReference)) $json['fixedReference'] = $this->fixedReference;
        if (isset($this->fixedSampledData)) $json['fixedSampledData'] = $this->fixedSampledData;
        if (isset($this->fixedSignature)) $json['fixedSignature'] = $this->fixedSignature;
        if (isset($this->fixedHumanName)) $json['fixedHumanName'] = $this->fixedHumanName;
        if (isset($this->fixedAddress)) $json['fixedAddress'] = $this->fixedAddress;
        if (isset($this->fixedContactPoint)) $json['fixedContactPoint'] = $this->fixedContactPoint;
        if (isset($this->fixedTiming)) $json['fixedTiming'] = $this->fixedTiming;
        if (isset($this->fixedMeta)) $json['fixedMeta'] = $this->fixedMeta;
        if (isset($this->patternBoolean)) $json['patternBoolean'] = $this->patternBoolean;
        if (isset($this->patternInteger)) $json['patternInteger'] = $this->patternInteger;
        if (isset($this->patternDecimal)) $json['patternDecimal'] = $this->patternDecimal;
        if (isset($this->patternBase64Binary)) $json['patternBase64Binary'] = $this->patternBase64Binary;
        if (isset($this->patternInstant)) $json['patternInstant'] = $this->patternInstant;
        if (isset($this->patternString)) $json['patternString'] = $this->patternString;
        if (isset($this->patternUri)) $json['patternUri'] = $this->patternUri;
        if (isset($this->patternDate)) $json['patternDate'] = $this->patternDate;
        if (isset($this->patternDateTime)) $json['patternDateTime'] = $this->patternDateTime;
        if (isset($this->patternTime)) $json['patternTime'] = $this->patternTime;
        if (isset($this->patternCode)) $json['patternCode'] = $this->patternCode;
        if (isset($this->patternOid)) $json['patternOid'] = $this->patternOid;
        if (isset($this->patternUuid)) $json['patternUuid'] = $this->patternUuid;
        if (isset($this->patternId)) $json['patternId'] = $this->patternId;
        if (isset($this->patternUnsignedInt)) $json['patternUnsignedInt'] = $this->patternUnsignedInt;
        if (isset($this->patternPositiveInt)) $json['patternPositiveInt'] = $this->patternPositiveInt;
        if (isset($this->patternMarkdown)) $json['patternMarkdown'] = $this->patternMarkdown;
        if (isset($this->patternAnnotation)) $json['patternAnnotation'] = $this->patternAnnotation;
        if (isset($this->patternAttachment)) $json['patternAttachment'] = $this->patternAttachment;
        if (isset($this->patternIdentifier)) $json['patternIdentifier'] = $this->patternIdentifier;
        if (isset($this->patternCodeableConcept)) $json['patternCodeableConcept'] = $this->patternCodeableConcept;
        if (isset($this->patternCoding)) $json['patternCoding'] = $this->patternCoding;
        if (isset($this->patternQuantity)) $json['patternQuantity'] = $this->patternQuantity;
        if (isset($this->patternRange)) $json['patternRange'] = $this->patternRange;
        if (isset($this->patternPeriod)) $json['patternPeriod'] = $this->patternPeriod;
        if (isset($this->patternRatio)) $json['patternRatio'] = $this->patternRatio;
        if (isset($this->patternReference)) $json['patternReference'] = $this->patternReference;
        if (isset($this->patternSampledData)) $json['patternSampledData'] = $this->patternSampledData;
        if (isset($this->patternSignature)) $json['patternSignature'] = $this->patternSignature;
        if (isset($this->patternHumanName)) $json['patternHumanName'] = $this->patternHumanName;
        if (isset($this->patternAddress)) $json['patternAddress'] = $this->patternAddress;
        if (isset($this->patternContactPoint)) $json['patternContactPoint'] = $this->patternContactPoint;
        if (isset($this->patternTiming)) $json['patternTiming'] = $this->patternTiming;
        if (isset($this->patternMeta)) $json['patternMeta'] = $this->patternMeta;
        if (isset($this->exampleBoolean)) $json['exampleBoolean'] = $this->exampleBoolean;
        if (isset($this->exampleInteger)) $json['exampleInteger'] = $this->exampleInteger;
        if (isset($this->exampleDecimal)) $json['exampleDecimal'] = $this->exampleDecimal;
        if (isset($this->exampleBase64Binary)) $json['exampleBase64Binary'] = $this->exampleBase64Binary;
        if (isset($this->exampleInstant)) $json['exampleInstant'] = $this->exampleInstant;
        if (isset($this->exampleString)) $json['exampleString'] = $this->exampleString;
        if (isset($this->exampleUri)) $json['exampleUri'] = $this->exampleUri;
        if (isset($this->exampleDate)) $json['exampleDate'] = $this->exampleDate;
        if (isset($this->exampleDateTime)) $json['exampleDateTime'] = $this->exampleDateTime;
        if (isset($this->exampleTime)) $json['exampleTime'] = $this->exampleTime;
        if (isset($this->exampleCode)) $json['exampleCode'] = $this->exampleCode;
        if (isset($this->exampleOid)) $json['exampleOid'] = $this->exampleOid;
        if (isset($this->exampleUuid)) $json['exampleUuid'] = $this->exampleUuid;
        if (isset($this->exampleId)) $json['exampleId'] = $this->exampleId;
        if (isset($this->exampleUnsignedInt)) $json['exampleUnsignedInt'] = $this->exampleUnsignedInt;
        if (isset($this->examplePositiveInt)) $json['examplePositiveInt'] = $this->examplePositiveInt;
        if (isset($this->exampleMarkdown)) $json['exampleMarkdown'] = $this->exampleMarkdown;
        if (isset($this->exampleAnnotation)) $json['exampleAnnotation'] = $this->exampleAnnotation;
        if (isset($this->exampleAttachment)) $json['exampleAttachment'] = $this->exampleAttachment;
        if (isset($this->exampleIdentifier)) $json['exampleIdentifier'] = $this->exampleIdentifier;
        if (isset($this->exampleCodeableConcept)) $json['exampleCodeableConcept'] = $this->exampleCodeableConcept;
        if (isset($this->exampleCoding)) $json['exampleCoding'] = $this->exampleCoding;
        if (isset($this->exampleQuantity)) $json['exampleQuantity'] = $this->exampleQuantity;
        if (isset($this->exampleRange)) $json['exampleRange'] = $this->exampleRange;
        if (isset($this->examplePeriod)) $json['examplePeriod'] = $this->examplePeriod;
        if (isset($this->exampleRatio)) $json['exampleRatio'] = $this->exampleRatio;
        if (isset($this->exampleReference)) $json['exampleReference'] = $this->exampleReference;
        if (isset($this->exampleSampledData)) $json['exampleSampledData'] = $this->exampleSampledData;
        if (isset($this->exampleSignature)) $json['exampleSignature'] = $this->exampleSignature;
        if (isset($this->exampleHumanName)) $json['exampleHumanName'] = $this->exampleHumanName;
        if (isset($this->exampleAddress)) $json['exampleAddress'] = $this->exampleAddress;
        if (isset($this->exampleContactPoint)) $json['exampleContactPoint'] = $this->exampleContactPoint;
        if (isset($this->exampleTiming)) $json['exampleTiming'] = $this->exampleTiming;
        if (isset($this->exampleMeta)) $json['exampleMeta'] = $this->exampleMeta;
        if (isset($this->minValueBoolean)) $json['minValueBoolean'] = $this->minValueBoolean;
        if (isset($this->minValueInteger)) $json['minValueInteger'] = $this->minValueInteger;
        if (isset($this->minValueDecimal)) $json['minValueDecimal'] = $this->minValueDecimal;
        if (isset($this->minValueBase64Binary)) $json['minValueBase64Binary'] = $this->minValueBase64Binary;
        if (isset($this->minValueInstant)) $json['minValueInstant'] = $this->minValueInstant;
        if (isset($this->minValueString)) $json['minValueString'] = $this->minValueString;
        if (isset($this->minValueUri)) $json['minValueUri'] = $this->minValueUri;
        if (isset($this->minValueDate)) $json['minValueDate'] = $this->minValueDate;
        if (isset($this->minValueDateTime)) $json['minValueDateTime'] = $this->minValueDateTime;
        if (isset($this->minValueTime)) $json['minValueTime'] = $this->minValueTime;
        if (isset($this->minValueCode)) $json['minValueCode'] = $this->minValueCode;
        if (isset($this->minValueOid)) $json['minValueOid'] = $this->minValueOid;
        if (isset($this->minValueUuid)) $json['minValueUuid'] = $this->minValueUuid;
        if (isset($this->minValueId)) $json['minValueId'] = $this->minValueId;
        if (isset($this->minValueUnsignedInt)) $json['minValueUnsignedInt'] = $this->minValueUnsignedInt;
        if (isset($this->minValuePositiveInt)) $json['minValuePositiveInt'] = $this->minValuePositiveInt;
        if (isset($this->minValueMarkdown)) $json['minValueMarkdown'] = $this->minValueMarkdown;
        if (isset($this->minValueAnnotation)) $json['minValueAnnotation'] = $this->minValueAnnotation;
        if (isset($this->minValueAttachment)) $json['minValueAttachment'] = $this->minValueAttachment;
        if (isset($this->minValueIdentifier)) $json['minValueIdentifier'] = $this->minValueIdentifier;
        if (isset($this->minValueCodeableConcept)) $json['minValueCodeableConcept'] = $this->minValueCodeableConcept;
        if (isset($this->minValueCoding)) $json['minValueCoding'] = $this->minValueCoding;
        if (isset($this->minValueQuantity)) $json['minValueQuantity'] = $this->minValueQuantity;
        if (isset($this->minValueRange)) $json['minValueRange'] = $this->minValueRange;
        if (isset($this->minValuePeriod)) $json['minValuePeriod'] = $this->minValuePeriod;
        if (isset($this->minValueRatio)) $json['minValueRatio'] = $this->minValueRatio;
        if (isset($this->minValueReference)) $json['minValueReference'] = $this->minValueReference;
        if (isset($this->minValueSampledData)) $json['minValueSampledData'] = $this->minValueSampledData;
        if (isset($this->minValueSignature)) $json['minValueSignature'] = $this->minValueSignature;
        if (isset($this->minValueHumanName)) $json['minValueHumanName'] = $this->minValueHumanName;
        if (isset($this->minValueAddress)) $json['minValueAddress'] = $this->minValueAddress;
        if (isset($this->minValueContactPoint)) $json['minValueContactPoint'] = $this->minValueContactPoint;
        if (isset($this->minValueTiming)) $json['minValueTiming'] = $this->minValueTiming;
        if (isset($this->minValueMeta)) $json['minValueMeta'] = $this->minValueMeta;
        if (isset($this->maxValueBoolean)) $json['maxValueBoolean'] = $this->maxValueBoolean;
        if (isset($this->maxValueInteger)) $json['maxValueInteger'] = $this->maxValueInteger;
        if (isset($this->maxValueDecimal)) $json['maxValueDecimal'] = $this->maxValueDecimal;
        if (isset($this->maxValueBase64Binary)) $json['maxValueBase64Binary'] = $this->maxValueBase64Binary;
        if (isset($this->maxValueInstant)) $json['maxValueInstant'] = $this->maxValueInstant;
        if (isset($this->maxValueString)) $json['maxValueString'] = $this->maxValueString;
        if (isset($this->maxValueUri)) $json['maxValueUri'] = $this->maxValueUri;
        if (isset($this->maxValueDate)) $json['maxValueDate'] = $this->maxValueDate;
        if (isset($this->maxValueDateTime)) $json['maxValueDateTime'] = $this->maxValueDateTime;
        if (isset($this->maxValueTime)) $json['maxValueTime'] = $this->maxValueTime;
        if (isset($this->maxValueCode)) $json['maxValueCode'] = $this->maxValueCode;
        if (isset($this->maxValueOid)) $json['maxValueOid'] = $this->maxValueOid;
        if (isset($this->maxValueUuid)) $json['maxValueUuid'] = $this->maxValueUuid;
        if (isset($this->maxValueId)) $json['maxValueId'] = $this->maxValueId;
        if (isset($this->maxValueUnsignedInt)) $json['maxValueUnsignedInt'] = $this->maxValueUnsignedInt;
        if (isset($this->maxValuePositiveInt)) $json['maxValuePositiveInt'] = $this->maxValuePositiveInt;
        if (isset($this->maxValueMarkdown)) $json['maxValueMarkdown'] = $this->maxValueMarkdown;
        if (isset($this->maxValueAnnotation)) $json['maxValueAnnotation'] = $this->maxValueAnnotation;
        if (isset($this->maxValueAttachment)) $json['maxValueAttachment'] = $this->maxValueAttachment;
        if (isset($this->maxValueIdentifier)) $json['maxValueIdentifier'] = $this->maxValueIdentifier;
        if (isset($this->maxValueCodeableConcept)) $json['maxValueCodeableConcept'] = $this->maxValueCodeableConcept;
        if (isset($this->maxValueCoding)) $json['maxValueCoding'] = $this->maxValueCoding;
        if (isset($this->maxValueQuantity)) $json['maxValueQuantity'] = $this->maxValueQuantity;
        if (isset($this->maxValueRange)) $json['maxValueRange'] = $this->maxValueRange;
        if (isset($this->maxValuePeriod)) $json['maxValuePeriod'] = $this->maxValuePeriod;
        if (isset($this->maxValueRatio)) $json['maxValueRatio'] = $this->maxValueRatio;
        if (isset($this->maxValueReference)) $json['maxValueReference'] = $this->maxValueReference;
        if (isset($this->maxValueSampledData)) $json['maxValueSampledData'] = $this->maxValueSampledData;
        if (isset($this->maxValueSignature)) $json['maxValueSignature'] = $this->maxValueSignature;
        if (isset($this->maxValueHumanName)) $json['maxValueHumanName'] = $this->maxValueHumanName;
        if (isset($this->maxValueAddress)) $json['maxValueAddress'] = $this->maxValueAddress;
        if (isset($this->maxValueContactPoint)) $json['maxValueContactPoint'] = $this->maxValueContactPoint;
        if (isset($this->maxValueTiming)) $json['maxValueTiming'] = $this->maxValueTiming;
        if (isset($this->maxValueMeta)) $json['maxValueMeta'] = $this->maxValueMeta;
        if (isset($this->maxLength)) $json['maxLength'] = $this->maxLength;
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                if (null !== $condition) $json['condition'][] = $condition;
            }
        }
        if (0 < count($this->constraint)) {
            $json['constraint'] = [];
            foreach($this->constraint as $constraint) {
                if (null !== $constraint) $json['constraint'][] = $constraint;
            }
        }
        if (isset($this->mustSupport)) $json['mustSupport'] = $this->mustSupport;
        if (isset($this->isModifier)) $json['isModifier'] = $this->isModifier;
        if (isset($this->isSummary)) $json['isSummary'] = $this->isSummary;
        if (isset($this->binding)) $json['binding'] = $this->binding;
        if (0 < count($this->mapping)) {
            $json['mapping'] = [];
            foreach($this->mapping as $mapping) {
                if (null !== $mapping) $json['mapping'][] = $mapping;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ElementDefinition xmlns="http://hl7.org/fhir"></ElementDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->path)) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (0 < count($this->representation)) {
            foreach($this->representation as $representation) {
                $representation->xmlSerialize(true, $sxe->addChild('representation'));
            }
        }
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->label)) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (isset($this->slicing)) $this->slicing->xmlSerialize(true, $sxe->addChild('slicing'));
        if (isset($this->short)) $this->short->xmlSerialize(true, $sxe->addChild('short'));
        if (isset($this->definition)) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (isset($this->comments)) $this->comments->xmlSerialize(true, $sxe->addChild('comments'));
        if (isset($this->requirements)) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (0 < count($this->alias)) {
            foreach($this->alias as $alias) {
                $alias->xmlSerialize(true, $sxe->addChild('alias'));
            }
        }
        if (isset($this->min)) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (isset($this->max)) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (isset($this->base)) $this->base->xmlSerialize(true, $sxe->addChild('base'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (isset($this->nameReference)) $this->nameReference->xmlSerialize(true, $sxe->addChild('nameReference'));
        if (isset($this->defaultValueBoolean)) $this->defaultValueBoolean->xmlSerialize(true, $sxe->addChild('defaultValueBoolean'));
        if (isset($this->defaultValueInteger)) $this->defaultValueInteger->xmlSerialize(true, $sxe->addChild('defaultValueInteger'));
        if (isset($this->defaultValueDecimal)) $this->defaultValueDecimal->xmlSerialize(true, $sxe->addChild('defaultValueDecimal'));
        if (isset($this->defaultValueBase64Binary)) $this->defaultValueBase64Binary->xmlSerialize(true, $sxe->addChild('defaultValueBase64Binary'));
        if (isset($this->defaultValueInstant)) $this->defaultValueInstant->xmlSerialize(true, $sxe->addChild('defaultValueInstant'));
        if (isset($this->defaultValueString)) $this->defaultValueString->xmlSerialize(true, $sxe->addChild('defaultValueString'));
        if (isset($this->defaultValueUri)) $this->defaultValueUri->xmlSerialize(true, $sxe->addChild('defaultValueUri'));
        if (isset($this->defaultValueDate)) $this->defaultValueDate->xmlSerialize(true, $sxe->addChild('defaultValueDate'));
        if (isset($this->defaultValueDateTime)) $this->defaultValueDateTime->xmlSerialize(true, $sxe->addChild('defaultValueDateTime'));
        if (isset($this->defaultValueTime)) $this->defaultValueTime->xmlSerialize(true, $sxe->addChild('defaultValueTime'));
        if (isset($this->defaultValueCode)) $this->defaultValueCode->xmlSerialize(true, $sxe->addChild('defaultValueCode'));
        if (isset($this->defaultValueOid)) $this->defaultValueOid->xmlSerialize(true, $sxe->addChild('defaultValueOid'));
        if (isset($this->defaultValueUuid)) $this->defaultValueUuid->xmlSerialize(true, $sxe->addChild('defaultValueUuid'));
        if (isset($this->defaultValueId)) $this->defaultValueId->xmlSerialize(true, $sxe->addChild('defaultValueId'));
        if (isset($this->defaultValueUnsignedInt)) $this->defaultValueUnsignedInt->xmlSerialize(true, $sxe->addChild('defaultValueUnsignedInt'));
        if (isset($this->defaultValuePositiveInt)) $this->defaultValuePositiveInt->xmlSerialize(true, $sxe->addChild('defaultValuePositiveInt'));
        if (isset($this->defaultValueMarkdown)) $this->defaultValueMarkdown->xmlSerialize(true, $sxe->addChild('defaultValueMarkdown'));
        if (isset($this->defaultValueAnnotation)) $this->defaultValueAnnotation->xmlSerialize(true, $sxe->addChild('defaultValueAnnotation'));
        if (isset($this->defaultValueAttachment)) $this->defaultValueAttachment->xmlSerialize(true, $sxe->addChild('defaultValueAttachment'));
        if (isset($this->defaultValueIdentifier)) $this->defaultValueIdentifier->xmlSerialize(true, $sxe->addChild('defaultValueIdentifier'));
        if (isset($this->defaultValueCodeableConcept)) $this->defaultValueCodeableConcept->xmlSerialize(true, $sxe->addChild('defaultValueCodeableConcept'));
        if (isset($this->defaultValueCoding)) $this->defaultValueCoding->xmlSerialize(true, $sxe->addChild('defaultValueCoding'));
        if (isset($this->defaultValueQuantity)) $this->defaultValueQuantity->xmlSerialize(true, $sxe->addChild('defaultValueQuantity'));
        if (isset($this->defaultValueRange)) $this->defaultValueRange->xmlSerialize(true, $sxe->addChild('defaultValueRange'));
        if (isset($this->defaultValuePeriod)) $this->defaultValuePeriod->xmlSerialize(true, $sxe->addChild('defaultValuePeriod'));
        if (isset($this->defaultValueRatio)) $this->defaultValueRatio->xmlSerialize(true, $sxe->addChild('defaultValueRatio'));
        if (isset($this->defaultValueReference)) $this->defaultValueReference->xmlSerialize(true, $sxe->addChild('defaultValueReference'));
        if (isset($this->defaultValueSampledData)) $this->defaultValueSampledData->xmlSerialize(true, $sxe->addChild('defaultValueSampledData'));
        if (isset($this->defaultValueSignature)) $this->defaultValueSignature->xmlSerialize(true, $sxe->addChild('defaultValueSignature'));
        if (isset($this->defaultValueHumanName)) $this->defaultValueHumanName->xmlSerialize(true, $sxe->addChild('defaultValueHumanName'));
        if (isset($this->defaultValueAddress)) $this->defaultValueAddress->xmlSerialize(true, $sxe->addChild('defaultValueAddress'));
        if (isset($this->defaultValueContactPoint)) $this->defaultValueContactPoint->xmlSerialize(true, $sxe->addChild('defaultValueContactPoint'));
        if (isset($this->defaultValueTiming)) $this->defaultValueTiming->xmlSerialize(true, $sxe->addChild('defaultValueTiming'));
        if (isset($this->defaultValueMeta)) $this->defaultValueMeta->xmlSerialize(true, $sxe->addChild('defaultValueMeta'));
        if (isset($this->meaningWhenMissing)) $this->meaningWhenMissing->xmlSerialize(true, $sxe->addChild('meaningWhenMissing'));
        if (isset($this->fixedBoolean)) $this->fixedBoolean->xmlSerialize(true, $sxe->addChild('fixedBoolean'));
        if (isset($this->fixedInteger)) $this->fixedInteger->xmlSerialize(true, $sxe->addChild('fixedInteger'));
        if (isset($this->fixedDecimal)) $this->fixedDecimal->xmlSerialize(true, $sxe->addChild('fixedDecimal'));
        if (isset($this->fixedBase64Binary)) $this->fixedBase64Binary->xmlSerialize(true, $sxe->addChild('fixedBase64Binary'));
        if (isset($this->fixedInstant)) $this->fixedInstant->xmlSerialize(true, $sxe->addChild('fixedInstant'));
        if (isset($this->fixedString)) $this->fixedString->xmlSerialize(true, $sxe->addChild('fixedString'));
        if (isset($this->fixedUri)) $this->fixedUri->xmlSerialize(true, $sxe->addChild('fixedUri'));
        if (isset($this->fixedDate)) $this->fixedDate->xmlSerialize(true, $sxe->addChild('fixedDate'));
        if (isset($this->fixedDateTime)) $this->fixedDateTime->xmlSerialize(true, $sxe->addChild('fixedDateTime'));
        if (isset($this->fixedTime)) $this->fixedTime->xmlSerialize(true, $sxe->addChild('fixedTime'));
        if (isset($this->fixedCode)) $this->fixedCode->xmlSerialize(true, $sxe->addChild('fixedCode'));
        if (isset($this->fixedOid)) $this->fixedOid->xmlSerialize(true, $sxe->addChild('fixedOid'));
        if (isset($this->fixedUuid)) $this->fixedUuid->xmlSerialize(true, $sxe->addChild('fixedUuid'));
        if (isset($this->fixedId)) $this->fixedId->xmlSerialize(true, $sxe->addChild('fixedId'));
        if (isset($this->fixedUnsignedInt)) $this->fixedUnsignedInt->xmlSerialize(true, $sxe->addChild('fixedUnsignedInt'));
        if (isset($this->fixedPositiveInt)) $this->fixedPositiveInt->xmlSerialize(true, $sxe->addChild('fixedPositiveInt'));
        if (isset($this->fixedMarkdown)) $this->fixedMarkdown->xmlSerialize(true, $sxe->addChild('fixedMarkdown'));
        if (isset($this->fixedAnnotation)) $this->fixedAnnotation->xmlSerialize(true, $sxe->addChild('fixedAnnotation'));
        if (isset($this->fixedAttachment)) $this->fixedAttachment->xmlSerialize(true, $sxe->addChild('fixedAttachment'));
        if (isset($this->fixedIdentifier)) $this->fixedIdentifier->xmlSerialize(true, $sxe->addChild('fixedIdentifier'));
        if (isset($this->fixedCodeableConcept)) $this->fixedCodeableConcept->xmlSerialize(true, $sxe->addChild('fixedCodeableConcept'));
        if (isset($this->fixedCoding)) $this->fixedCoding->xmlSerialize(true, $sxe->addChild('fixedCoding'));
        if (isset($this->fixedQuantity)) $this->fixedQuantity->xmlSerialize(true, $sxe->addChild('fixedQuantity'));
        if (isset($this->fixedRange)) $this->fixedRange->xmlSerialize(true, $sxe->addChild('fixedRange'));
        if (isset($this->fixedPeriod)) $this->fixedPeriod->xmlSerialize(true, $sxe->addChild('fixedPeriod'));
        if (isset($this->fixedRatio)) $this->fixedRatio->xmlSerialize(true, $sxe->addChild('fixedRatio'));
        if (isset($this->fixedReference)) $this->fixedReference->xmlSerialize(true, $sxe->addChild('fixedReference'));
        if (isset($this->fixedSampledData)) $this->fixedSampledData->xmlSerialize(true, $sxe->addChild('fixedSampledData'));
        if (isset($this->fixedSignature)) $this->fixedSignature->xmlSerialize(true, $sxe->addChild('fixedSignature'));
        if (isset($this->fixedHumanName)) $this->fixedHumanName->xmlSerialize(true, $sxe->addChild('fixedHumanName'));
        if (isset($this->fixedAddress)) $this->fixedAddress->xmlSerialize(true, $sxe->addChild('fixedAddress'));
        if (isset($this->fixedContactPoint)) $this->fixedContactPoint->xmlSerialize(true, $sxe->addChild('fixedContactPoint'));
        if (isset($this->fixedTiming)) $this->fixedTiming->xmlSerialize(true, $sxe->addChild('fixedTiming'));
        if (isset($this->fixedMeta)) $this->fixedMeta->xmlSerialize(true, $sxe->addChild('fixedMeta'));
        if (isset($this->patternBoolean)) $this->patternBoolean->xmlSerialize(true, $sxe->addChild('patternBoolean'));
        if (isset($this->patternInteger)) $this->patternInteger->xmlSerialize(true, $sxe->addChild('patternInteger'));
        if (isset($this->patternDecimal)) $this->patternDecimal->xmlSerialize(true, $sxe->addChild('patternDecimal'));
        if (isset($this->patternBase64Binary)) $this->patternBase64Binary->xmlSerialize(true, $sxe->addChild('patternBase64Binary'));
        if (isset($this->patternInstant)) $this->patternInstant->xmlSerialize(true, $sxe->addChild('patternInstant'));
        if (isset($this->patternString)) $this->patternString->xmlSerialize(true, $sxe->addChild('patternString'));
        if (isset($this->patternUri)) $this->patternUri->xmlSerialize(true, $sxe->addChild('patternUri'));
        if (isset($this->patternDate)) $this->patternDate->xmlSerialize(true, $sxe->addChild('patternDate'));
        if (isset($this->patternDateTime)) $this->patternDateTime->xmlSerialize(true, $sxe->addChild('patternDateTime'));
        if (isset($this->patternTime)) $this->patternTime->xmlSerialize(true, $sxe->addChild('patternTime'));
        if (isset($this->patternCode)) $this->patternCode->xmlSerialize(true, $sxe->addChild('patternCode'));
        if (isset($this->patternOid)) $this->patternOid->xmlSerialize(true, $sxe->addChild('patternOid'));
        if (isset($this->patternUuid)) $this->patternUuid->xmlSerialize(true, $sxe->addChild('patternUuid'));
        if (isset($this->patternId)) $this->patternId->xmlSerialize(true, $sxe->addChild('patternId'));
        if (isset($this->patternUnsignedInt)) $this->patternUnsignedInt->xmlSerialize(true, $sxe->addChild('patternUnsignedInt'));
        if (isset($this->patternPositiveInt)) $this->patternPositiveInt->xmlSerialize(true, $sxe->addChild('patternPositiveInt'));
        if (isset($this->patternMarkdown)) $this->patternMarkdown->xmlSerialize(true, $sxe->addChild('patternMarkdown'));
        if (isset($this->patternAnnotation)) $this->patternAnnotation->xmlSerialize(true, $sxe->addChild('patternAnnotation'));
        if (isset($this->patternAttachment)) $this->patternAttachment->xmlSerialize(true, $sxe->addChild('patternAttachment'));
        if (isset($this->patternIdentifier)) $this->patternIdentifier->xmlSerialize(true, $sxe->addChild('patternIdentifier'));
        if (isset($this->patternCodeableConcept)) $this->patternCodeableConcept->xmlSerialize(true, $sxe->addChild('patternCodeableConcept'));
        if (isset($this->patternCoding)) $this->patternCoding->xmlSerialize(true, $sxe->addChild('patternCoding'));
        if (isset($this->patternQuantity)) $this->patternQuantity->xmlSerialize(true, $sxe->addChild('patternQuantity'));
        if (isset($this->patternRange)) $this->patternRange->xmlSerialize(true, $sxe->addChild('patternRange'));
        if (isset($this->patternPeriod)) $this->patternPeriod->xmlSerialize(true, $sxe->addChild('patternPeriod'));
        if (isset($this->patternRatio)) $this->patternRatio->xmlSerialize(true, $sxe->addChild('patternRatio'));
        if (isset($this->patternReference)) $this->patternReference->xmlSerialize(true, $sxe->addChild('patternReference'));
        if (isset($this->patternSampledData)) $this->patternSampledData->xmlSerialize(true, $sxe->addChild('patternSampledData'));
        if (isset($this->patternSignature)) $this->patternSignature->xmlSerialize(true, $sxe->addChild('patternSignature'));
        if (isset($this->patternHumanName)) $this->patternHumanName->xmlSerialize(true, $sxe->addChild('patternHumanName'));
        if (isset($this->patternAddress)) $this->patternAddress->xmlSerialize(true, $sxe->addChild('patternAddress'));
        if (isset($this->patternContactPoint)) $this->patternContactPoint->xmlSerialize(true, $sxe->addChild('patternContactPoint'));
        if (isset($this->patternTiming)) $this->patternTiming->xmlSerialize(true, $sxe->addChild('patternTiming'));
        if (isset($this->patternMeta)) $this->patternMeta->xmlSerialize(true, $sxe->addChild('patternMeta'));
        if (isset($this->exampleBoolean)) $this->exampleBoolean->xmlSerialize(true, $sxe->addChild('exampleBoolean'));
        if (isset($this->exampleInteger)) $this->exampleInteger->xmlSerialize(true, $sxe->addChild('exampleInteger'));
        if (isset($this->exampleDecimal)) $this->exampleDecimal->xmlSerialize(true, $sxe->addChild('exampleDecimal'));
        if (isset($this->exampleBase64Binary)) $this->exampleBase64Binary->xmlSerialize(true, $sxe->addChild('exampleBase64Binary'));
        if (isset($this->exampleInstant)) $this->exampleInstant->xmlSerialize(true, $sxe->addChild('exampleInstant'));
        if (isset($this->exampleString)) $this->exampleString->xmlSerialize(true, $sxe->addChild('exampleString'));
        if (isset($this->exampleUri)) $this->exampleUri->xmlSerialize(true, $sxe->addChild('exampleUri'));
        if (isset($this->exampleDate)) $this->exampleDate->xmlSerialize(true, $sxe->addChild('exampleDate'));
        if (isset($this->exampleDateTime)) $this->exampleDateTime->xmlSerialize(true, $sxe->addChild('exampleDateTime'));
        if (isset($this->exampleTime)) $this->exampleTime->xmlSerialize(true, $sxe->addChild('exampleTime'));
        if (isset($this->exampleCode)) $this->exampleCode->xmlSerialize(true, $sxe->addChild('exampleCode'));
        if (isset($this->exampleOid)) $this->exampleOid->xmlSerialize(true, $sxe->addChild('exampleOid'));
        if (isset($this->exampleUuid)) $this->exampleUuid->xmlSerialize(true, $sxe->addChild('exampleUuid'));
        if (isset($this->exampleId)) $this->exampleId->xmlSerialize(true, $sxe->addChild('exampleId'));
        if (isset($this->exampleUnsignedInt)) $this->exampleUnsignedInt->xmlSerialize(true, $sxe->addChild('exampleUnsignedInt'));
        if (isset($this->examplePositiveInt)) $this->examplePositiveInt->xmlSerialize(true, $sxe->addChild('examplePositiveInt'));
        if (isset($this->exampleMarkdown)) $this->exampleMarkdown->xmlSerialize(true, $sxe->addChild('exampleMarkdown'));
        if (isset($this->exampleAnnotation)) $this->exampleAnnotation->xmlSerialize(true, $sxe->addChild('exampleAnnotation'));
        if (isset($this->exampleAttachment)) $this->exampleAttachment->xmlSerialize(true, $sxe->addChild('exampleAttachment'));
        if (isset($this->exampleIdentifier)) $this->exampleIdentifier->xmlSerialize(true, $sxe->addChild('exampleIdentifier'));
        if (isset($this->exampleCodeableConcept)) $this->exampleCodeableConcept->xmlSerialize(true, $sxe->addChild('exampleCodeableConcept'));
        if (isset($this->exampleCoding)) $this->exampleCoding->xmlSerialize(true, $sxe->addChild('exampleCoding'));
        if (isset($this->exampleQuantity)) $this->exampleQuantity->xmlSerialize(true, $sxe->addChild('exampleQuantity'));
        if (isset($this->exampleRange)) $this->exampleRange->xmlSerialize(true, $sxe->addChild('exampleRange'));
        if (isset($this->examplePeriod)) $this->examplePeriod->xmlSerialize(true, $sxe->addChild('examplePeriod'));
        if (isset($this->exampleRatio)) $this->exampleRatio->xmlSerialize(true, $sxe->addChild('exampleRatio'));
        if (isset($this->exampleReference)) $this->exampleReference->xmlSerialize(true, $sxe->addChild('exampleReference'));
        if (isset($this->exampleSampledData)) $this->exampleSampledData->xmlSerialize(true, $sxe->addChild('exampleSampledData'));
        if (isset($this->exampleSignature)) $this->exampleSignature->xmlSerialize(true, $sxe->addChild('exampleSignature'));
        if (isset($this->exampleHumanName)) $this->exampleHumanName->xmlSerialize(true, $sxe->addChild('exampleHumanName'));
        if (isset($this->exampleAddress)) $this->exampleAddress->xmlSerialize(true, $sxe->addChild('exampleAddress'));
        if (isset($this->exampleContactPoint)) $this->exampleContactPoint->xmlSerialize(true, $sxe->addChild('exampleContactPoint'));
        if (isset($this->exampleTiming)) $this->exampleTiming->xmlSerialize(true, $sxe->addChild('exampleTiming'));
        if (isset($this->exampleMeta)) $this->exampleMeta->xmlSerialize(true, $sxe->addChild('exampleMeta'));
        if (isset($this->minValueBoolean)) $this->minValueBoolean->xmlSerialize(true, $sxe->addChild('minValueBoolean'));
        if (isset($this->minValueInteger)) $this->minValueInteger->xmlSerialize(true, $sxe->addChild('minValueInteger'));
        if (isset($this->minValueDecimal)) $this->minValueDecimal->xmlSerialize(true, $sxe->addChild('minValueDecimal'));
        if (isset($this->minValueBase64Binary)) $this->minValueBase64Binary->xmlSerialize(true, $sxe->addChild('minValueBase64Binary'));
        if (isset($this->minValueInstant)) $this->minValueInstant->xmlSerialize(true, $sxe->addChild('minValueInstant'));
        if (isset($this->minValueString)) $this->minValueString->xmlSerialize(true, $sxe->addChild('minValueString'));
        if (isset($this->minValueUri)) $this->minValueUri->xmlSerialize(true, $sxe->addChild('minValueUri'));
        if (isset($this->minValueDate)) $this->minValueDate->xmlSerialize(true, $sxe->addChild('minValueDate'));
        if (isset($this->minValueDateTime)) $this->minValueDateTime->xmlSerialize(true, $sxe->addChild('minValueDateTime'));
        if (isset($this->minValueTime)) $this->minValueTime->xmlSerialize(true, $sxe->addChild('minValueTime'));
        if (isset($this->minValueCode)) $this->minValueCode->xmlSerialize(true, $sxe->addChild('minValueCode'));
        if (isset($this->minValueOid)) $this->minValueOid->xmlSerialize(true, $sxe->addChild('minValueOid'));
        if (isset($this->minValueUuid)) $this->minValueUuid->xmlSerialize(true, $sxe->addChild('minValueUuid'));
        if (isset($this->minValueId)) $this->minValueId->xmlSerialize(true, $sxe->addChild('minValueId'));
        if (isset($this->minValueUnsignedInt)) $this->minValueUnsignedInt->xmlSerialize(true, $sxe->addChild('minValueUnsignedInt'));
        if (isset($this->minValuePositiveInt)) $this->minValuePositiveInt->xmlSerialize(true, $sxe->addChild('minValuePositiveInt'));
        if (isset($this->minValueMarkdown)) $this->minValueMarkdown->xmlSerialize(true, $sxe->addChild('minValueMarkdown'));
        if (isset($this->minValueAnnotation)) $this->minValueAnnotation->xmlSerialize(true, $sxe->addChild('minValueAnnotation'));
        if (isset($this->minValueAttachment)) $this->minValueAttachment->xmlSerialize(true, $sxe->addChild('minValueAttachment'));
        if (isset($this->minValueIdentifier)) $this->minValueIdentifier->xmlSerialize(true, $sxe->addChild('minValueIdentifier'));
        if (isset($this->minValueCodeableConcept)) $this->minValueCodeableConcept->xmlSerialize(true, $sxe->addChild('minValueCodeableConcept'));
        if (isset($this->minValueCoding)) $this->minValueCoding->xmlSerialize(true, $sxe->addChild('minValueCoding'));
        if (isset($this->minValueQuantity)) $this->minValueQuantity->xmlSerialize(true, $sxe->addChild('minValueQuantity'));
        if (isset($this->minValueRange)) $this->minValueRange->xmlSerialize(true, $sxe->addChild('minValueRange'));
        if (isset($this->minValuePeriod)) $this->minValuePeriod->xmlSerialize(true, $sxe->addChild('minValuePeriod'));
        if (isset($this->minValueRatio)) $this->minValueRatio->xmlSerialize(true, $sxe->addChild('minValueRatio'));
        if (isset($this->minValueReference)) $this->minValueReference->xmlSerialize(true, $sxe->addChild('minValueReference'));
        if (isset($this->minValueSampledData)) $this->minValueSampledData->xmlSerialize(true, $sxe->addChild('minValueSampledData'));
        if (isset($this->minValueSignature)) $this->minValueSignature->xmlSerialize(true, $sxe->addChild('minValueSignature'));
        if (isset($this->minValueHumanName)) $this->minValueHumanName->xmlSerialize(true, $sxe->addChild('minValueHumanName'));
        if (isset($this->minValueAddress)) $this->minValueAddress->xmlSerialize(true, $sxe->addChild('minValueAddress'));
        if (isset($this->minValueContactPoint)) $this->minValueContactPoint->xmlSerialize(true, $sxe->addChild('minValueContactPoint'));
        if (isset($this->minValueTiming)) $this->minValueTiming->xmlSerialize(true, $sxe->addChild('minValueTiming'));
        if (isset($this->minValueMeta)) $this->minValueMeta->xmlSerialize(true, $sxe->addChild('minValueMeta'));
        if (isset($this->maxValueBoolean)) $this->maxValueBoolean->xmlSerialize(true, $sxe->addChild('maxValueBoolean'));
        if (isset($this->maxValueInteger)) $this->maxValueInteger->xmlSerialize(true, $sxe->addChild('maxValueInteger'));
        if (isset($this->maxValueDecimal)) $this->maxValueDecimal->xmlSerialize(true, $sxe->addChild('maxValueDecimal'));
        if (isset($this->maxValueBase64Binary)) $this->maxValueBase64Binary->xmlSerialize(true, $sxe->addChild('maxValueBase64Binary'));
        if (isset($this->maxValueInstant)) $this->maxValueInstant->xmlSerialize(true, $sxe->addChild('maxValueInstant'));
        if (isset($this->maxValueString)) $this->maxValueString->xmlSerialize(true, $sxe->addChild('maxValueString'));
        if (isset($this->maxValueUri)) $this->maxValueUri->xmlSerialize(true, $sxe->addChild('maxValueUri'));
        if (isset($this->maxValueDate)) $this->maxValueDate->xmlSerialize(true, $sxe->addChild('maxValueDate'));
        if (isset($this->maxValueDateTime)) $this->maxValueDateTime->xmlSerialize(true, $sxe->addChild('maxValueDateTime'));
        if (isset($this->maxValueTime)) $this->maxValueTime->xmlSerialize(true, $sxe->addChild('maxValueTime'));
        if (isset($this->maxValueCode)) $this->maxValueCode->xmlSerialize(true, $sxe->addChild('maxValueCode'));
        if (isset($this->maxValueOid)) $this->maxValueOid->xmlSerialize(true, $sxe->addChild('maxValueOid'));
        if (isset($this->maxValueUuid)) $this->maxValueUuid->xmlSerialize(true, $sxe->addChild('maxValueUuid'));
        if (isset($this->maxValueId)) $this->maxValueId->xmlSerialize(true, $sxe->addChild('maxValueId'));
        if (isset($this->maxValueUnsignedInt)) $this->maxValueUnsignedInt->xmlSerialize(true, $sxe->addChild('maxValueUnsignedInt'));
        if (isset($this->maxValuePositiveInt)) $this->maxValuePositiveInt->xmlSerialize(true, $sxe->addChild('maxValuePositiveInt'));
        if (isset($this->maxValueMarkdown)) $this->maxValueMarkdown->xmlSerialize(true, $sxe->addChild('maxValueMarkdown'));
        if (isset($this->maxValueAnnotation)) $this->maxValueAnnotation->xmlSerialize(true, $sxe->addChild('maxValueAnnotation'));
        if (isset($this->maxValueAttachment)) $this->maxValueAttachment->xmlSerialize(true, $sxe->addChild('maxValueAttachment'));
        if (isset($this->maxValueIdentifier)) $this->maxValueIdentifier->xmlSerialize(true, $sxe->addChild('maxValueIdentifier'));
        if (isset($this->maxValueCodeableConcept)) $this->maxValueCodeableConcept->xmlSerialize(true, $sxe->addChild('maxValueCodeableConcept'));
        if (isset($this->maxValueCoding)) $this->maxValueCoding->xmlSerialize(true, $sxe->addChild('maxValueCoding'));
        if (isset($this->maxValueQuantity)) $this->maxValueQuantity->xmlSerialize(true, $sxe->addChild('maxValueQuantity'));
        if (isset($this->maxValueRange)) $this->maxValueRange->xmlSerialize(true, $sxe->addChild('maxValueRange'));
        if (isset($this->maxValuePeriod)) $this->maxValuePeriod->xmlSerialize(true, $sxe->addChild('maxValuePeriod'));
        if (isset($this->maxValueRatio)) $this->maxValueRatio->xmlSerialize(true, $sxe->addChild('maxValueRatio'));
        if (isset($this->maxValueReference)) $this->maxValueReference->xmlSerialize(true, $sxe->addChild('maxValueReference'));
        if (isset($this->maxValueSampledData)) $this->maxValueSampledData->xmlSerialize(true, $sxe->addChild('maxValueSampledData'));
        if (isset($this->maxValueSignature)) $this->maxValueSignature->xmlSerialize(true, $sxe->addChild('maxValueSignature'));
        if (isset($this->maxValueHumanName)) $this->maxValueHumanName->xmlSerialize(true, $sxe->addChild('maxValueHumanName'));
        if (isset($this->maxValueAddress)) $this->maxValueAddress->xmlSerialize(true, $sxe->addChild('maxValueAddress'));
        if (isset($this->maxValueContactPoint)) $this->maxValueContactPoint->xmlSerialize(true, $sxe->addChild('maxValueContactPoint'));
        if (isset($this->maxValueTiming)) $this->maxValueTiming->xmlSerialize(true, $sxe->addChild('maxValueTiming'));
        if (isset($this->maxValueMeta)) $this->maxValueMeta->xmlSerialize(true, $sxe->addChild('maxValueMeta'));
        if (isset($this->maxLength)) $this->maxLength->xmlSerialize(true, $sxe->addChild('maxLength'));
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if (0 < count($this->constraint)) {
            foreach($this->constraint as $constraint) {
                $constraint->xmlSerialize(true, $sxe->addChild('constraint'));
            }
        }
        if (isset($this->mustSupport)) $this->mustSupport->xmlSerialize(true, $sxe->addChild('mustSupport'));
        if (isset($this->isModifier)) $this->isModifier->xmlSerialize(true, $sxe->addChild('isModifier'));
        if (isset($this->isSummary)) $this->isSummary->xmlSerialize(true, $sxe->addChild('isSummary'));
        if (isset($this->binding)) $this->binding->xmlSerialize(true, $sxe->addChild('binding'));
        if (0 < count($this->mapping)) {
            foreach($this->mapping as $mapping) {
                $mapping->xmlSerialize(true, $sxe->addChild('mapping'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}