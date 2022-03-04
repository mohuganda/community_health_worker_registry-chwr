<?php namespace FHIR_STU_THREE\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 17th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Aug 11, 2016 17:02+1000 for FHIR v1.6.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use FHIR_STU_THREE\FHIRElement;
use FHIR_STU_THREE\JsonSerializable;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRElementDefinition extends FHIRElement implements JsonSerializable
{
    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPropertyRepresentation[]
     */
    public $representation = array();

    /**
     * The name of this element definition. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding[]
     */
    public $code = array();

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @var \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public $slicing = null;

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $short = null;

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $definition = null;

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $comments = null;

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $requirements = null;

    /**
     * Identifies additional names by which this element might also be known.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString[]
     */
    public $alias = array();

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. This information is provided when the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public $base = null;

    /**
     * Identifies the identity of an element defined elsewhere in the profile whose content rules should be applied to the current element.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public $contentReference = null;

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public $type = array();

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public $defaultValueBase64Binary = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $defaultValueBoolean = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public $defaultValueCode = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public $defaultValueDate = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $defaultValueDateTime = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public $defaultValueDecimal = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public $defaultValueId = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public $defaultValueInstant = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $defaultValueInteger = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $defaultValueMarkdown = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public $defaultValueOid = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public $defaultValuePositiveInt = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $defaultValueString = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public $defaultValueTime = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public $defaultValueUnsignedInt = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public $defaultValueUri = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public $defaultValueAddress = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRAge
     */
    public $defaultValueAge = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public $defaultValueAnnotation = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public $defaultValueAttachment = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $defaultValueCodeableConcept = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public $defaultValueCoding = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public $defaultValueContactPoint = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRCount
     */
    public $defaultValueCount = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRDistance
     */
    public $defaultValueDistance = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRDuration
     */
    public $defaultValueDuration = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public $defaultValueHumanName = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public $defaultValueIdentifier = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRMoney
     */
    public $defaultValueMoney = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public $defaultValuePeriod = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public $defaultValueQuantity = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public $defaultValueRange = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public $defaultValueRatio = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $defaultValueReference = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public $defaultValueSampledData = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public $defaultValueSignature = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public $defaultValueTiming = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public $defaultValueMeta = null;

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $meaningWhenMissing = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public $fixedBase64Binary = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $fixedBoolean = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public $fixedCode = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public $fixedDate = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $fixedDateTime = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public $fixedDecimal = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public $fixedId = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public $fixedInstant = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $fixedInteger = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $fixedMarkdown = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public $fixedOid = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public $fixedPositiveInt = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $fixedString = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public $fixedTime = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public $fixedUnsignedInt = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public $fixedUri = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public $fixedAddress = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRAge
     */
    public $fixedAge = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public $fixedAnnotation = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public $fixedAttachment = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $fixedCodeableConcept = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public $fixedCoding = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public $fixedContactPoint = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRCount
     */
    public $fixedCount = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRDistance
     */
    public $fixedDistance = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRDuration
     */
    public $fixedDuration = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public $fixedHumanName = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public $fixedIdentifier = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRMoney
     */
    public $fixedMoney = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public $fixedPeriod = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public $fixedQuantity = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public $fixedRange = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public $fixedRatio = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $fixedReference = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public $fixedSampledData = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public $fixedSignature = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public $fixedTiming = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public $fixedMeta = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public $patternBase64Binary = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $patternBoolean = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public $patternCode = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public $patternDate = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $patternDateTime = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public $patternDecimal = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public $patternId = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public $patternInstant = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $patternInteger = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $patternMarkdown = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public $patternOid = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public $patternPositiveInt = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $patternString = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public $patternTime = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public $patternUnsignedInt = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public $patternUri = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public $patternAddress = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRAge
     */
    public $patternAge = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public $patternAnnotation = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public $patternAttachment = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $patternCodeableConcept = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public $patternCoding = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public $patternContactPoint = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRCount
     */
    public $patternCount = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRDistance
     */
    public $patternDistance = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRDuration
     */
    public $patternDuration = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public $patternHumanName = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public $patternIdentifier = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRMoney
     */
    public $patternMoney = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public $patternPeriod = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public $patternQuantity = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public $patternRange = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public $patternRatio = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $patternReference = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public $patternSampledData = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public $patternSignature = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public $patternTiming = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public $patternMeta = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public $exampleBase64Binary = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $exampleBoolean = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public $exampleCode = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public $exampleDate = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $exampleDateTime = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public $exampleDecimal = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public $exampleId = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public $exampleInstant = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $exampleInteger = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $exampleMarkdown = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public $exampleOid = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public $examplePositiveInt = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $exampleString = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public $exampleTime = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public $exampleUnsignedInt = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public $exampleUri = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public $exampleAddress = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRAge
     */
    public $exampleAge = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public $exampleAnnotation = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public $exampleAttachment = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $exampleCodeableConcept = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public $exampleCoding = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public $exampleContactPoint = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRCount
     */
    public $exampleCount = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRDistance
     */
    public $exampleDistance = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRDuration
     */
    public $exampleDuration = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public $exampleHumanName = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public $exampleIdentifier = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRMoney
     */
    public $exampleMoney = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public $examplePeriod = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public $exampleQuantity = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public $exampleRange = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public $exampleRatio = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $exampleReference = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public $exampleSampledData = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public $exampleSignature = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public $exampleTiming = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public $exampleMeta = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public $minValueDate = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $minValueDateTime = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public $minValueInstant = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public $minValueTime = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public $minValueDecimal = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $minValueInteger = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public $minValuePositiveInt = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public $minValueUnsignedInt = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public $minValueQuantity = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public $maxValueDate = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $maxValueDateTime = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public $maxValueInstant = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public $maxValueTime = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public $maxValueDecimal = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $maxValueInteger = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public $maxValuePositiveInt = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public $maxValueUnsignedInt = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public $maxValueQuantity = null;

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $maxLength = null;

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRId[]
     */
    public $condition = array();

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public $constraint = array();

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $mustSupport = null;

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $isModifier = null;

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $isSummary = null;

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @var \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public $binding = null;

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public $mapping = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ElementDefinition';

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPropertyRepresentation[]
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPropertyRepresentation[] $representation
     * @return $this
     */
    public function addRepresentation($representation)
    {
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * The name of this element definition. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this element definition. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding[] $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @return \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing()
    {
        return $this->slicing;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @param \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @return $this
     */
    public function setSlicing($slicing)
    {
        $this->slicing = $slicing;
        return $this;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $short
     * @return $this
     */
    public function setShort($short)
    {
        $this->short = $short;
        return $this;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString[] $alias
     * @return $this
     */
    public function addAlias($alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $min
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. This information is provided when the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. This information is provided when the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @return $this
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Identifies the identity of an element defined elsewhere in the profile whose content rules should be applied to the current element.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * Identifies the identity of an element defined elsewhere in the profile whose content rules should be applied to the current element.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUri $contentReference
     * @return $this
     */
    public function setContentReference($contentReference)
    {
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[] $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary)
    {
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCode $defaultValueCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode)
    {
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDate $defaultValueDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate)
    {
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime)
    {
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRId $defaultValueId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId)
    {
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInstant $defaultValueInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant)
    {
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $defaultValueInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger)
    {
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown)
    {
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIROid $defaultValueOid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid)
    {
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt)
    {
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $defaultValueString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString)
    {
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTime $defaultValueTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime)
    {
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt)
    {
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUri $defaultValueUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri)
    {
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAddress $defaultValueAddress
     * @return $this
     */
    public function setDefaultValueAddress($defaultValueAddress)
    {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRAge $defaultValueAge
     * @return $this
     */
    public function setDefaultValueAge($defaultValueAge)
    {
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation($defaultValueAnnotation)
    {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return $this
     */
    public function setDefaultValueAttachment($defaultValueAttachment)
    {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept($defaultValueCodeableConcept)
    {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding $defaultValueCoding
     * @return $this
     */
    public function setDefaultValueCoding($defaultValueCoding)
    {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint($defaultValueContactPoint)
    {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRCount
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRCount $defaultValueCount
     * @return $this
     */
    public function setDefaultValueCount($defaultValueCount)
    {
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRDistance $defaultValueDistance
     * @return $this
     */
    public function setDefaultValueDistance($defaultValueDistance)
    {
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRDuration $defaultValueDuration
     * @return $this
     */
    public function setDefaultValueDuration($defaultValueDuration)
    {
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return $this
     */
    public function setDefaultValueHumanName($defaultValueHumanName)
    {
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier($defaultValueIdentifier)
    {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRMoney $defaultValueMoney
     * @return $this
     */
    public function setDefaultValueMoney($defaultValueMoney)
    {
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return $this
     */
    public function setDefaultValuePeriod($defaultValuePeriod)
    {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return $this
     */
    public function setDefaultValueQuantity($defaultValueQuantity)
    {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRange $defaultValueRange
     * @return $this
     */
    public function setDefaultValueRange($defaultValueRange)
    {
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRatio $defaultValueRatio
     * @return $this
     */
    public function setDefaultValueRatio($defaultValueRatio)
    {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $defaultValueReference
     * @return $this
     */
    public function setDefaultValueReference($defaultValueReference)
    {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return $this
     */
    public function setDefaultValueSampledData($defaultValueSampledData)
    {
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSignature $defaultValueSignature
     * @return $this
     */
    public function setDefaultValueSignature($defaultValueSignature)
    {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTiming $defaultValueTiming
     * @return $this
     */
    public function setDefaultValueTiming($defaultValueTiming)
    {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta()
    {
        return $this->defaultValueMeta;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMeta $defaultValueMeta
     * @return $this
     */
    public function setDefaultValueMeta($defaultValueMeta)
    {
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing()
    {
        return $this->meaningWhenMissing;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $meaningWhenMissing
     * @return $this
     */
    public function setMeaningWhenMissing($meaningWhenMissing)
    {
        $this->meaningWhenMissing = $meaningWhenMissing;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary()
    {
        return $this->fixedBase64Binary;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     * @return $this
     */
    public function setFixedBase64Binary($fixedBase64Binary)
    {
        $this->fixedBase64Binary = $fixedBase64Binary;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean()
    {
        return $this->fixedBoolean;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $fixedBoolean
     * @return $this
     */
    public function setFixedBoolean($fixedBoolean)
    {
        $this->fixedBoolean = $fixedBoolean;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public function getFixedCode()
    {
        return $this->fixedCode;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCode $fixedCode
     * @return $this
     */
    public function setFixedCode($fixedCode)
    {
        $this->fixedCode = $fixedCode;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public function getFixedDate()
    {
        return $this->fixedDate;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDate $fixedDate
     * @return $this
     */
    public function setFixedDate($fixedDate)
    {
        $this->fixedDate = $fixedDate;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime()
    {
        return $this->fixedDateTime;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $fixedDateTime
     * @return $this
     */
    public function setFixedDateTime($fixedDateTime)
    {
        $this->fixedDateTime = $fixedDateTime;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal()
    {
        return $this->fixedDecimal;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDecimal $fixedDecimal
     * @return $this
     */
    public function setFixedDecimal($fixedDecimal)
    {
        $this->fixedDecimal = $fixedDecimal;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public function getFixedId()
    {
        return $this->fixedId;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRId $fixedId
     * @return $this
     */
    public function setFixedId($fixedId)
    {
        $this->fixedId = $fixedId;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public function getFixedInstant()
    {
        return $this->fixedInstant;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInstant $fixedInstant
     * @return $this
     */
    public function setFixedInstant($fixedInstant)
    {
        $this->fixedInstant = $fixedInstant;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getFixedInteger()
    {
        return $this->fixedInteger;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $fixedInteger
     * @return $this
     */
    public function setFixedInteger($fixedInteger)
    {
        $this->fixedInteger = $fixedInteger;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown()
    {
        return $this->fixedMarkdown;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @return $this
     */
    public function setFixedMarkdown($fixedMarkdown)
    {
        $this->fixedMarkdown = $fixedMarkdown;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public function getFixedOid()
    {
        return $this->fixedOid;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIROid $fixedOid
     * @return $this
     */
    public function setFixedOid($fixedOid)
    {
        $this->fixedOid = $fixedOid;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt()
    {
        return $this->fixedPositiveInt;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @return $this
     */
    public function setFixedPositiveInt($fixedPositiveInt)
    {
        $this->fixedPositiveInt = $fixedPositiveInt;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getFixedString()
    {
        return $this->fixedString;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $fixedString
     * @return $this
     */
    public function setFixedString($fixedString)
    {
        $this->fixedString = $fixedString;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public function getFixedTime()
    {
        return $this->fixedTime;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTime $fixedTime
     * @return $this
     */
    public function setFixedTime($fixedTime)
    {
        $this->fixedTime = $fixedTime;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt()
    {
        return $this->fixedUnsignedInt;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     * @return $this
     */
    public function setFixedUnsignedInt($fixedUnsignedInt)
    {
        $this->fixedUnsignedInt = $fixedUnsignedInt;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public function getFixedUri()
    {
        return $this->fixedUri;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUri $fixedUri
     * @return $this
     */
    public function setFixedUri($fixedUri)
    {
        $this->fixedUri = $fixedUri;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public function getFixedAddress()
    {
        return $this->fixedAddress;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAddress $fixedAddress
     * @return $this
     */
    public function setFixedAddress($fixedAddress)
    {
        $this->fixedAddress = $fixedAddress;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRAge
     */
    public function getFixedAge()
    {
        return $this->fixedAge;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRAge $fixedAge
     * @return $this
     */
    public function setFixedAge($fixedAge)
    {
        $this->fixedAge = $fixedAge;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation()
    {
        return $this->fixedAnnotation;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAnnotation $fixedAnnotation
     * @return $this
     */
    public function setFixedAnnotation($fixedAnnotation)
    {
        $this->fixedAnnotation = $fixedAnnotation;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment()
    {
        return $this->fixedAttachment;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAttachment $fixedAttachment
     * @return $this
     */
    public function setFixedAttachment($fixedAttachment)
    {
        $this->fixedAttachment = $fixedAttachment;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept()
    {
        return $this->fixedCodeableConcept;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     * @return $this
     */
    public function setFixedCodeableConcept($fixedCodeableConcept)
    {
        $this->fixedCodeableConcept = $fixedCodeableConcept;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public function getFixedCoding()
    {
        return $this->fixedCoding;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding $fixedCoding
     * @return $this
     */
    public function setFixedCoding($fixedCoding)
    {
        $this->fixedCoding = $fixedCoding;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint()
    {
        return $this->fixedContactPoint;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRContactPoint $fixedContactPoint
     * @return $this
     */
    public function setFixedContactPoint($fixedContactPoint)
    {
        $this->fixedContactPoint = $fixedContactPoint;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRCount
     */
    public function getFixedCount()
    {
        return $this->fixedCount;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRCount $fixedCount
     * @return $this
     */
    public function setFixedCount($fixedCount)
    {
        $this->fixedCount = $fixedCount;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRDistance
     */
    public function getFixedDistance()
    {
        return $this->fixedDistance;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRDistance $fixedDistance
     * @return $this
     */
    public function setFixedDistance($fixedDistance)
    {
        $this->fixedDistance = $fixedDistance;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRDuration
     */
    public function getFixedDuration()
    {
        return $this->fixedDuration;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRDuration $fixedDuration
     * @return $this
     */
    public function setFixedDuration($fixedDuration)
    {
        $this->fixedDuration = $fixedDuration;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName()
    {
        return $this->fixedHumanName;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRHumanName $fixedHumanName
     * @return $this
     */
    public function setFixedHumanName($fixedHumanName)
    {
        $this->fixedHumanName = $fixedHumanName;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier()
    {
        return $this->fixedIdentifier;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRIdentifier $fixedIdentifier
     * @return $this
     */
    public function setFixedIdentifier($fixedIdentifier)
    {
        $this->fixedIdentifier = $fixedIdentifier;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRMoney
     */
    public function getFixedMoney()
    {
        return $this->fixedMoney;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRMoney $fixedMoney
     * @return $this
     */
    public function setFixedMoney($fixedMoney)
    {
        $this->fixedMoney = $fixedMoney;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod()
    {
        return $this->fixedPeriod;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPeriod $fixedPeriod
     * @return $this
     */
    public function setFixedPeriod($fixedPeriod)
    {
        $this->fixedPeriod = $fixedPeriod;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity()
    {
        return $this->fixedQuantity;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRQuantity $fixedQuantity
     * @return $this
     */
    public function setFixedQuantity($fixedQuantity)
    {
        $this->fixedQuantity = $fixedQuantity;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public function getFixedRange()
    {
        return $this->fixedRange;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRange $fixedRange
     * @return $this
     */
    public function setFixedRange($fixedRange)
    {
        $this->fixedRange = $fixedRange;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public function getFixedRatio()
    {
        return $this->fixedRatio;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRatio $fixedRatio
     * @return $this
     */
    public function setFixedRatio($fixedRatio)
    {
        $this->fixedRatio = $fixedRatio;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getFixedReference()
    {
        return $this->fixedReference;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $fixedReference
     * @return $this
     */
    public function setFixedReference($fixedReference)
    {
        $this->fixedReference = $fixedReference;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData()
    {
        return $this->fixedSampledData;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSampledData $fixedSampledData
     * @return $this
     */
    public function setFixedSampledData($fixedSampledData)
    {
        $this->fixedSampledData = $fixedSampledData;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public function getFixedSignature()
    {
        return $this->fixedSignature;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSignature $fixedSignature
     * @return $this
     */
    public function setFixedSignature($fixedSignature)
    {
        $this->fixedSignature = $fixedSignature;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public function getFixedTiming()
    {
        return $this->fixedTiming;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTiming $fixedTiming
     * @return $this
     */
    public function setFixedTiming($fixedTiming)
    {
        $this->fixedTiming = $fixedTiming;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public function getFixedMeta()
    {
        return $this->fixedMeta;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMeta $fixedMeta
     * @return $this
     */
    public function setFixedMeta($fixedMeta)
    {
        $this->fixedMeta = $fixedMeta;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary()
    {
        return $this->patternBase64Binary;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary $patternBase64Binary
     * @return $this
     */
    public function setPatternBase64Binary($patternBase64Binary)
    {
        $this->patternBase64Binary = $patternBase64Binary;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean()
    {
        return $this->patternBoolean;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $patternBoolean
     * @return $this
     */
    public function setPatternBoolean($patternBoolean)
    {
        $this->patternBoolean = $patternBoolean;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public function getPatternCode()
    {
        return $this->patternCode;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCode $patternCode
     * @return $this
     */
    public function setPatternCode($patternCode)
    {
        $this->patternCode = $patternCode;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public function getPatternDate()
    {
        return $this->patternDate;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDate $patternDate
     * @return $this
     */
    public function setPatternDate($patternDate)
    {
        $this->patternDate = $patternDate;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime()
    {
        return $this->patternDateTime;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $patternDateTime
     * @return $this
     */
    public function setPatternDateTime($patternDateTime)
    {
        $this->patternDateTime = $patternDateTime;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal()
    {
        return $this->patternDecimal;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDecimal $patternDecimal
     * @return $this
     */
    public function setPatternDecimal($patternDecimal)
    {
        $this->patternDecimal = $patternDecimal;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public function getPatternId()
    {
        return $this->patternId;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRId $patternId
     * @return $this
     */
    public function setPatternId($patternId)
    {
        $this->patternId = $patternId;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public function getPatternInstant()
    {
        return $this->patternInstant;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInstant $patternInstant
     * @return $this
     */
    public function setPatternInstant($patternInstant)
    {
        $this->patternInstant = $patternInstant;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getPatternInteger()
    {
        return $this->patternInteger;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $patternInteger
     * @return $this
     */
    public function setPatternInteger($patternInteger)
    {
        $this->patternInteger = $patternInteger;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown()
    {
        return $this->patternMarkdown;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $patternMarkdown
     * @return $this
     */
    public function setPatternMarkdown($patternMarkdown)
    {
        $this->patternMarkdown = $patternMarkdown;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public function getPatternOid()
    {
        return $this->patternOid;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIROid $patternOid
     * @return $this
     */
    public function setPatternOid($patternOid)
    {
        $this->patternOid = $patternOid;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt()
    {
        return $this->patternPositiveInt;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @return $this
     */
    public function setPatternPositiveInt($patternPositiveInt)
    {
        $this->patternPositiveInt = $patternPositiveInt;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getPatternString()
    {
        return $this->patternString;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $patternString
     * @return $this
     */
    public function setPatternString($patternString)
    {
        $this->patternString = $patternString;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public function getPatternTime()
    {
        return $this->patternTime;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTime $patternTime
     * @return $this
     */
    public function setPatternTime($patternTime)
    {
        $this->patternTime = $patternTime;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt()
    {
        return $this->patternUnsignedInt;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     * @return $this
     */
    public function setPatternUnsignedInt($patternUnsignedInt)
    {
        $this->patternUnsignedInt = $patternUnsignedInt;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public function getPatternUri()
    {
        return $this->patternUri;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUri $patternUri
     * @return $this
     */
    public function setPatternUri($patternUri)
    {
        $this->patternUri = $patternUri;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public function getPatternAddress()
    {
        return $this->patternAddress;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAddress $patternAddress
     * @return $this
     */
    public function setPatternAddress($patternAddress)
    {
        $this->patternAddress = $patternAddress;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRAge
     */
    public function getPatternAge()
    {
        return $this->patternAge;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRAge $patternAge
     * @return $this
     */
    public function setPatternAge($patternAge)
    {
        $this->patternAge = $patternAge;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation()
    {
        return $this->patternAnnotation;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAnnotation $patternAnnotation
     * @return $this
     */
    public function setPatternAnnotation($patternAnnotation)
    {
        $this->patternAnnotation = $patternAnnotation;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment()
    {
        return $this->patternAttachment;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAttachment $patternAttachment
     * @return $this
     */
    public function setPatternAttachment($patternAttachment)
    {
        $this->patternAttachment = $patternAttachment;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept()
    {
        return $this->patternCodeableConcept;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     * @return $this
     */
    public function setPatternCodeableConcept($patternCodeableConcept)
    {
        $this->patternCodeableConcept = $patternCodeableConcept;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public function getPatternCoding()
    {
        return $this->patternCoding;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding $patternCoding
     * @return $this
     */
    public function setPatternCoding($patternCoding)
    {
        $this->patternCoding = $patternCoding;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint()
    {
        return $this->patternContactPoint;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRContactPoint $patternContactPoint
     * @return $this
     */
    public function setPatternContactPoint($patternContactPoint)
    {
        $this->patternContactPoint = $patternContactPoint;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRCount
     */
    public function getPatternCount()
    {
        return $this->patternCount;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRCount $patternCount
     * @return $this
     */
    public function setPatternCount($patternCount)
    {
        $this->patternCount = $patternCount;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRDistance
     */
    public function getPatternDistance()
    {
        return $this->patternDistance;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRDistance $patternDistance
     * @return $this
     */
    public function setPatternDistance($patternDistance)
    {
        $this->patternDistance = $patternDistance;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRDuration
     */
    public function getPatternDuration()
    {
        return $this->patternDuration;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRDuration $patternDuration
     * @return $this
     */
    public function setPatternDuration($patternDuration)
    {
        $this->patternDuration = $patternDuration;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName()
    {
        return $this->patternHumanName;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRHumanName $patternHumanName
     * @return $this
     */
    public function setPatternHumanName($patternHumanName)
    {
        $this->patternHumanName = $patternHumanName;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier()
    {
        return $this->patternIdentifier;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRIdentifier $patternIdentifier
     * @return $this
     */
    public function setPatternIdentifier($patternIdentifier)
    {
        $this->patternIdentifier = $patternIdentifier;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRMoney
     */
    public function getPatternMoney()
    {
        return $this->patternMoney;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRMoney $patternMoney
     * @return $this
     */
    public function setPatternMoney($patternMoney)
    {
        $this->patternMoney = $patternMoney;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod()
    {
        return $this->patternPeriod;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPeriod $patternPeriod
     * @return $this
     */
    public function setPatternPeriod($patternPeriod)
    {
        $this->patternPeriod = $patternPeriod;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity()
    {
        return $this->patternQuantity;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRQuantity $patternQuantity
     * @return $this
     */
    public function setPatternQuantity($patternQuantity)
    {
        $this->patternQuantity = $patternQuantity;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public function getPatternRange()
    {
        return $this->patternRange;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRange $patternRange
     * @return $this
     */
    public function setPatternRange($patternRange)
    {
        $this->patternRange = $patternRange;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public function getPatternRatio()
    {
        return $this->patternRatio;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRatio $patternRatio
     * @return $this
     */
    public function setPatternRatio($patternRatio)
    {
        $this->patternRatio = $patternRatio;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getPatternReference()
    {
        return $this->patternReference;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $patternReference
     * @return $this
     */
    public function setPatternReference($patternReference)
    {
        $this->patternReference = $patternReference;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData()
    {
        return $this->patternSampledData;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSampledData $patternSampledData
     * @return $this
     */
    public function setPatternSampledData($patternSampledData)
    {
        $this->patternSampledData = $patternSampledData;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public function getPatternSignature()
    {
        return $this->patternSignature;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSignature $patternSignature
     * @return $this
     */
    public function setPatternSignature($patternSignature)
    {
        $this->patternSignature = $patternSignature;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public function getPatternTiming()
    {
        return $this->patternTiming;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTiming $patternTiming
     * @return $this
     */
    public function setPatternTiming($patternTiming)
    {
        $this->patternTiming = $patternTiming;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public function getPatternMeta()
    {
        return $this->patternMeta;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMeta $patternMeta
     * @return $this
     */
    public function setPatternMeta($patternMeta)
    {
        $this->patternMeta = $patternMeta;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public function getExampleBase64Binary()
    {
        return $this->exampleBase64Binary;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary $exampleBase64Binary
     * @return $this
     */
    public function setExampleBase64Binary($exampleBase64Binary)
    {
        $this->exampleBase64Binary = $exampleBase64Binary;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $exampleBoolean
     * @return $this
     */
    public function setExampleBoolean($exampleBoolean)
    {
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public function getExampleCode()
    {
        return $this->exampleCode;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCode $exampleCode
     * @return $this
     */
    public function setExampleCode($exampleCode)
    {
        $this->exampleCode = $exampleCode;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public function getExampleDate()
    {
        return $this->exampleDate;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDate $exampleDate
     * @return $this
     */
    public function setExampleDate($exampleDate)
    {
        $this->exampleDate = $exampleDate;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getExampleDateTime()
    {
        return $this->exampleDateTime;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $exampleDateTime
     * @return $this
     */
    public function setExampleDateTime($exampleDateTime)
    {
        $this->exampleDateTime = $exampleDateTime;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public function getExampleDecimal()
    {
        return $this->exampleDecimal;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDecimal $exampleDecimal
     * @return $this
     */
    public function setExampleDecimal($exampleDecimal)
    {
        $this->exampleDecimal = $exampleDecimal;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public function getExampleId()
    {
        return $this->exampleId;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRId $exampleId
     * @return $this
     */
    public function setExampleId($exampleId)
    {
        $this->exampleId = $exampleId;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public function getExampleInstant()
    {
        return $this->exampleInstant;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInstant $exampleInstant
     * @return $this
     */
    public function setExampleInstant($exampleInstant)
    {
        $this->exampleInstant = $exampleInstant;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getExampleInteger()
    {
        return $this->exampleInteger;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $exampleInteger
     * @return $this
     */
    public function setExampleInteger($exampleInteger)
    {
        $this->exampleInteger = $exampleInteger;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getExampleMarkdown()
    {
        return $this->exampleMarkdown;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $exampleMarkdown
     * @return $this
     */
    public function setExampleMarkdown($exampleMarkdown)
    {
        $this->exampleMarkdown = $exampleMarkdown;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public function getExampleOid()
    {
        return $this->exampleOid;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIROid $exampleOid
     * @return $this
     */
    public function setExampleOid($exampleOid)
    {
        $this->exampleOid = $exampleOid;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public function getExamplePositiveInt()
    {
        return $this->examplePositiveInt;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt $examplePositiveInt
     * @return $this
     */
    public function setExamplePositiveInt($examplePositiveInt)
    {
        $this->examplePositiveInt = $examplePositiveInt;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getExampleString()
    {
        return $this->exampleString;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $exampleString
     * @return $this
     */
    public function setExampleString($exampleString)
    {
        $this->exampleString = $exampleString;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public function getExampleTime()
    {
        return $this->exampleTime;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTime $exampleTime
     * @return $this
     */
    public function setExampleTime($exampleTime)
    {
        $this->exampleTime = $exampleTime;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public function getExampleUnsignedInt()
    {
        return $this->exampleUnsignedInt;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt $exampleUnsignedInt
     * @return $this
     */
    public function setExampleUnsignedInt($exampleUnsignedInt)
    {
        $this->exampleUnsignedInt = $exampleUnsignedInt;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public function getExampleUri()
    {
        return $this->exampleUri;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUri $exampleUri
     * @return $this
     */
    public function setExampleUri($exampleUri)
    {
        $this->exampleUri = $exampleUri;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public function getExampleAddress()
    {
        return $this->exampleAddress;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAddress $exampleAddress
     * @return $this
     */
    public function setExampleAddress($exampleAddress)
    {
        $this->exampleAddress = $exampleAddress;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRAge
     */
    public function getExampleAge()
    {
        return $this->exampleAge;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRAge $exampleAge
     * @return $this
     */
    public function setExampleAge($exampleAge)
    {
        $this->exampleAge = $exampleAge;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public function getExampleAnnotation()
    {
        return $this->exampleAnnotation;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAnnotation $exampleAnnotation
     * @return $this
     */
    public function setExampleAnnotation($exampleAnnotation)
    {
        $this->exampleAnnotation = $exampleAnnotation;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public function getExampleAttachment()
    {
        return $this->exampleAttachment;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAttachment $exampleAttachment
     * @return $this
     */
    public function setExampleAttachment($exampleAttachment)
    {
        $this->exampleAttachment = $exampleAttachment;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getExampleCodeableConcept()
    {
        return $this->exampleCodeableConcept;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
     * @return $this
     */
    public function setExampleCodeableConcept($exampleCodeableConcept)
    {
        $this->exampleCodeableConcept = $exampleCodeableConcept;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public function getExampleCoding()
    {
        return $this->exampleCoding;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding $exampleCoding
     * @return $this
     */
    public function setExampleCoding($exampleCoding)
    {
        $this->exampleCoding = $exampleCoding;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public function getExampleContactPoint()
    {
        return $this->exampleContactPoint;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRContactPoint $exampleContactPoint
     * @return $this
     */
    public function setExampleContactPoint($exampleContactPoint)
    {
        $this->exampleContactPoint = $exampleContactPoint;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRCount
     */
    public function getExampleCount()
    {
        return $this->exampleCount;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRCount $exampleCount
     * @return $this
     */
    public function setExampleCount($exampleCount)
    {
        $this->exampleCount = $exampleCount;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRDistance
     */
    public function getExampleDistance()
    {
        return $this->exampleDistance;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRDistance $exampleDistance
     * @return $this
     */
    public function setExampleDistance($exampleDistance)
    {
        $this->exampleDistance = $exampleDistance;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRDuration
     */
    public function getExampleDuration()
    {
        return $this->exampleDuration;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRDuration $exampleDuration
     * @return $this
     */
    public function setExampleDuration($exampleDuration)
    {
        $this->exampleDuration = $exampleDuration;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public function getExampleHumanName()
    {
        return $this->exampleHumanName;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRHumanName $exampleHumanName
     * @return $this
     */
    public function setExampleHumanName($exampleHumanName)
    {
        $this->exampleHumanName = $exampleHumanName;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public function getExampleIdentifier()
    {
        return $this->exampleIdentifier;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRIdentifier $exampleIdentifier
     * @return $this
     */
    public function setExampleIdentifier($exampleIdentifier)
    {
        $this->exampleIdentifier = $exampleIdentifier;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRMoney
     */
    public function getExampleMoney()
    {
        return $this->exampleMoney;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRMoney $exampleMoney
     * @return $this
     */
    public function setExampleMoney($exampleMoney)
    {
        $this->exampleMoney = $exampleMoney;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public function getExamplePeriod()
    {
        return $this->examplePeriod;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPeriod $examplePeriod
     * @return $this
     */
    public function setExamplePeriod($examplePeriod)
    {
        $this->examplePeriod = $examplePeriod;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public function getExampleQuantity()
    {
        return $this->exampleQuantity;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRQuantity $exampleQuantity
     * @return $this
     */
    public function setExampleQuantity($exampleQuantity)
    {
        $this->exampleQuantity = $exampleQuantity;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public function getExampleRange()
    {
        return $this->exampleRange;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRange $exampleRange
     * @return $this
     */
    public function setExampleRange($exampleRange)
    {
        $this->exampleRange = $exampleRange;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public function getExampleRatio()
    {
        return $this->exampleRatio;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRatio $exampleRatio
     * @return $this
     */
    public function setExampleRatio($exampleRatio)
    {
        $this->exampleRatio = $exampleRatio;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getExampleReference()
    {
        return $this->exampleReference;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $exampleReference
     * @return $this
     */
    public function setExampleReference($exampleReference)
    {
        $this->exampleReference = $exampleReference;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public function getExampleSampledData()
    {
        return $this->exampleSampledData;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSampledData $exampleSampledData
     * @return $this
     */
    public function setExampleSampledData($exampleSampledData)
    {
        $this->exampleSampledData = $exampleSampledData;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public function getExampleSignature()
    {
        return $this->exampleSignature;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSignature $exampleSignature
     * @return $this
     */
    public function setExampleSignature($exampleSignature)
    {
        $this->exampleSignature = $exampleSignature;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public function getExampleTiming()
    {
        return $this->exampleTiming;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTiming $exampleTiming
     * @return $this
     */
    public function setExampleTiming($exampleTiming)
    {
        $this->exampleTiming = $exampleTiming;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public function getExampleMeta()
    {
        return $this->exampleMeta;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMeta $exampleMeta
     * @return $this
     */
    public function setExampleMeta($exampleMeta)
    {
        $this->exampleMeta = $exampleMeta;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public function getMinValueDate()
    {
        return $this->minValueDate;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDate $minValueDate
     * @return $this
     */
    public function setMinValueDate($minValueDate)
    {
        $this->minValueDate = $minValueDate;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime()
    {
        return $this->minValueDateTime;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $minValueDateTime
     * @return $this
     */
    public function setMinValueDateTime($minValueDateTime)
    {
        $this->minValueDateTime = $minValueDateTime;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant()
    {
        return $this->minValueInstant;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInstant $minValueInstant
     * @return $this
     */
    public function setMinValueInstant($minValueInstant)
    {
        $this->minValueInstant = $minValueInstant;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public function getMinValueTime()
    {
        return $this->minValueTime;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTime $minValueTime
     * @return $this
     */
    public function setMinValueTime($minValueTime)
    {
        $this->minValueTime = $minValueTime;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal()
    {
        return $this->minValueDecimal;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDecimal $minValueDecimal
     * @return $this
     */
    public function setMinValueDecimal($minValueDecimal)
    {
        $this->minValueDecimal = $minValueDecimal;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger()
    {
        return $this->minValueInteger;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $minValueInteger
     * @return $this
     */
    public function setMinValueInteger($minValueInteger)
    {
        $this->minValueInteger = $minValueInteger;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt()
    {
        return $this->minValuePositiveInt;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @return $this
     */
    public function setMinValuePositiveInt($minValuePositiveInt)
    {
        $this->minValuePositiveInt = $minValuePositiveInt;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt()
    {
        return $this->minValueUnsignedInt;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @return $this
     */
    public function setMinValueUnsignedInt($minValueUnsignedInt)
    {
        $this->minValueUnsignedInt = $minValueUnsignedInt;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity()
    {
        return $this->minValueQuantity;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of minValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRQuantity $minValueQuantity
     * @return $this
     */
    public function setMinValueQuantity($minValueQuantity)
    {
        $this->minValueQuantity = $minValueQuantity;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public function getMaxValueDate()
    {
        return $this->maxValueDate;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDate $maxValueDate
     * @return $this
     */
    public function setMaxValueDate($maxValueDate)
    {
        $this->maxValueDate = $maxValueDate;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime()
    {
        return $this->maxValueDateTime;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $maxValueDateTime
     * @return $this
     */
    public function setMaxValueDateTime($maxValueDateTime)
    {
        $this->maxValueDateTime = $maxValueDateTime;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant()
    {
        return $this->maxValueInstant;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInstant $maxValueInstant
     * @return $this
     */
    public function setMaxValueInstant($maxValueInstant)
    {
        $this->maxValueInstant = $maxValueInstant;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public function getMaxValueTime()
    {
        return $this->maxValueTime;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTime $maxValueTime
     * @return $this
     */
    public function setMaxValueTime($maxValueTime)
    {
        $this->maxValueTime = $maxValueTime;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal()
    {
        return $this->maxValueDecimal;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDecimal $maxValueDecimal
     * @return $this
     */
    public function setMaxValueDecimal($maxValueDecimal)
    {
        $this->maxValueDecimal = $maxValueDecimal;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger()
    {
        return $this->maxValueInteger;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $maxValueInteger
     * @return $this
     */
    public function setMaxValueInteger($maxValueInteger)
    {
        $this->maxValueInteger = $maxValueInteger;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt()
    {
        return $this->maxValuePositiveInt;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @return $this
     */
    public function setMaxValuePositiveInt($maxValuePositiveInt)
    {
        $this->maxValuePositiveInt = $maxValuePositiveInt;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt()
    {
        return $this->maxValueUnsignedInt;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @return $this
     */
    public function setMaxValueUnsignedInt($maxValueUnsignedInt)
    {
        $this->maxValueUnsignedInt = $maxValueUnsignedInt;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity()
    {
        return $this->maxValueQuantity;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of maxValue*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRQuantity $maxValueQuantity
     * @return $this
     */
    public function setMaxValueQuantity($maxValueQuantity)
    {
        $this->maxValueQuantity = $maxValueQuantity;
        return $this;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRId[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRId[] $condition
     * @return $this
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[] $constraint
     * @return $this
     */
    public function addConstraint($constraint)
    {
        $this->constraint[] = $constraint;
        return $this;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $mustSupport
     * @return $this
     */
    public function setMustSupport($mustSupport)
    {
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getIsModifier()
    {
        return $this->isModifier;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $isModifier
     * @return $this
     */
    public function setIsModifier($isModifier)
    {
        $this->isModifier = $isModifier;
        return $this;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getIsSummary()
    {
        return $this->isSummary;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $isSummary
     * @return $this
     */
    public function setIsSummary($isSummary)
    {
        $this->isSummary = $isSummary;
        return $this;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @return \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @param \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @return $this
     */
    public function setBinding($binding)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[] $mapping
     * @return $this
     */
    public function addMapping($mapping)
    {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->path) $json['path'] = $this->path->jsonSerialize();
        if (0 < count($this->representation)) {
            $json['representation'] = array();
            foreach($this->representation as $representation) {
                $json['representation'][] = $representation->jsonSerialize();
            }
        }
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->label) $json['label'] = $this->label->jsonSerialize();
        if (0 < count($this->code)) {
            $json['code'] = array();
            foreach($this->code as $code) {
                $json['code'][] = $code->jsonSerialize();
            }
        }
        if (null !== $this->slicing) $json['slicing'] = $this->slicing->jsonSerialize();
        if (null !== $this->short) $json['short'] = $this->short->jsonSerialize();
        if (null !== $this->definition) $json['definition'] = $this->definition->jsonSerialize();
        if (null !== $this->comments) $json['comments'] = $this->comments->jsonSerialize();
        if (null !== $this->requirements) $json['requirements'] = $this->requirements->jsonSerialize();
        if (0 < count($this->alias)) {
            $json['alias'] = array();
            foreach($this->alias as $alias) {
                $json['alias'][] = $alias->jsonSerialize();
            }
        }
        if (null !== $this->min) $json['min'] = $this->min->jsonSerialize();
        if (null !== $this->max) $json['max'] = $this->max->jsonSerialize();
        if (null !== $this->base) $json['base'] = $this->base->jsonSerialize();
        if (null !== $this->contentReference) $json['contentReference'] = $this->contentReference->jsonSerialize();
        if (0 < count($this->type)) {
            $json['type'] = array();
            foreach($this->type as $type) {
                $json['type'][] = $type->jsonSerialize();
            }
        }
        if (null !== $this->defaultValueBase64Binary) $json['defaultValueBase64Binary'] = $this->defaultValueBase64Binary->jsonSerialize();
        if (null !== $this->defaultValueBoolean) $json['defaultValueBoolean'] = $this->defaultValueBoolean->jsonSerialize();
        if (null !== $this->defaultValueCode) $json['defaultValueCode'] = $this->defaultValueCode->jsonSerialize();
        if (null !== $this->defaultValueDate) $json['defaultValueDate'] = $this->defaultValueDate->jsonSerialize();
        if (null !== $this->defaultValueDateTime) $json['defaultValueDateTime'] = $this->defaultValueDateTime->jsonSerialize();
        if (null !== $this->defaultValueDecimal) $json['defaultValueDecimal'] = $this->defaultValueDecimal->jsonSerialize();
        if (null !== $this->defaultValueId) $json['defaultValueId'] = $this->defaultValueId->jsonSerialize();
        if (null !== $this->defaultValueInstant) $json['defaultValueInstant'] = $this->defaultValueInstant->jsonSerialize();
        if (null !== $this->defaultValueInteger) $json['defaultValueInteger'] = $this->defaultValueInteger->jsonSerialize();
        if (null !== $this->defaultValueMarkdown) $json['defaultValueMarkdown'] = $this->defaultValueMarkdown->jsonSerialize();
        if (null !== $this->defaultValueOid) $json['defaultValueOid'] = $this->defaultValueOid->jsonSerialize();
        if (null !== $this->defaultValuePositiveInt) $json['defaultValuePositiveInt'] = $this->defaultValuePositiveInt->jsonSerialize();
        if (null !== $this->defaultValueString) $json['defaultValueString'] = $this->defaultValueString->jsonSerialize();
        if (null !== $this->defaultValueTime) $json['defaultValueTime'] = $this->defaultValueTime->jsonSerialize();
        if (null !== $this->defaultValueUnsignedInt) $json['defaultValueUnsignedInt'] = $this->defaultValueUnsignedInt->jsonSerialize();
        if (null !== $this->defaultValueUri) $json['defaultValueUri'] = $this->defaultValueUri->jsonSerialize();
        if (null !== $this->defaultValueAddress) $json['defaultValueAddress'] = $this->defaultValueAddress->jsonSerialize();
        if (null !== $this->defaultValueAge) $json['defaultValueAge'] = $this->defaultValueAge->jsonSerialize();
        if (null !== $this->defaultValueAnnotation) $json['defaultValueAnnotation'] = $this->defaultValueAnnotation->jsonSerialize();
        if (null !== $this->defaultValueAttachment) $json['defaultValueAttachment'] = $this->defaultValueAttachment->jsonSerialize();
        if (null !== $this->defaultValueCodeableConcept) $json['defaultValueCodeableConcept'] = $this->defaultValueCodeableConcept->jsonSerialize();
        if (null !== $this->defaultValueCoding) $json['defaultValueCoding'] = $this->defaultValueCoding->jsonSerialize();
        if (null !== $this->defaultValueContactPoint) $json['defaultValueContactPoint'] = $this->defaultValueContactPoint->jsonSerialize();
        if (null !== $this->defaultValueCount) $json['defaultValueCount'] = $this->defaultValueCount->jsonSerialize();
        if (null !== $this->defaultValueDistance) $json['defaultValueDistance'] = $this->defaultValueDistance->jsonSerialize();
        if (null !== $this->defaultValueDuration) $json['defaultValueDuration'] = $this->defaultValueDuration->jsonSerialize();
        if (null !== $this->defaultValueHumanName) $json['defaultValueHumanName'] = $this->defaultValueHumanName->jsonSerialize();
        if (null !== $this->defaultValueIdentifier) $json['defaultValueIdentifier'] = $this->defaultValueIdentifier->jsonSerialize();
        if (null !== $this->defaultValueMoney) $json['defaultValueMoney'] = $this->defaultValueMoney->jsonSerialize();
        if (null !== $this->defaultValuePeriod) $json['defaultValuePeriod'] = $this->defaultValuePeriod->jsonSerialize();
        if (null !== $this->defaultValueQuantity) $json['defaultValueQuantity'] = $this->defaultValueQuantity->jsonSerialize();
        if (null !== $this->defaultValueRange) $json['defaultValueRange'] = $this->defaultValueRange->jsonSerialize();
        if (null !== $this->defaultValueRatio) $json['defaultValueRatio'] = $this->defaultValueRatio->jsonSerialize();
        if (null !== $this->defaultValueReference) $json['defaultValueReference'] = $this->defaultValueReference->jsonSerialize();
        if (null !== $this->defaultValueSampledData) $json['defaultValueSampledData'] = $this->defaultValueSampledData->jsonSerialize();
        if (null !== $this->defaultValueSignature) $json['defaultValueSignature'] = $this->defaultValueSignature->jsonSerialize();
        if (null !== $this->defaultValueTiming) $json['defaultValueTiming'] = $this->defaultValueTiming->jsonSerialize();
        if (null !== $this->defaultValueMeta) $json['defaultValueMeta'] = $this->defaultValueMeta->jsonSerialize();
        if (null !== $this->meaningWhenMissing) $json['meaningWhenMissing'] = $this->meaningWhenMissing->jsonSerialize();
        if (null !== $this->fixedBase64Binary) $json['fixedBase64Binary'] = $this->fixedBase64Binary->jsonSerialize();
        if (null !== $this->fixedBoolean) $json['fixedBoolean'] = $this->fixedBoolean->jsonSerialize();
        if (null !== $this->fixedCode) $json['fixedCode'] = $this->fixedCode->jsonSerialize();
        if (null !== $this->fixedDate) $json['fixedDate'] = $this->fixedDate->jsonSerialize();
        if (null !== $this->fixedDateTime) $json['fixedDateTime'] = $this->fixedDateTime->jsonSerialize();
        if (null !== $this->fixedDecimal) $json['fixedDecimal'] = $this->fixedDecimal->jsonSerialize();
        if (null !== $this->fixedId) $json['fixedId'] = $this->fixedId->jsonSerialize();
        if (null !== $this->fixedInstant) $json['fixedInstant'] = $this->fixedInstant->jsonSerialize();
        if (null !== $this->fixedInteger) $json['fixedInteger'] = $this->fixedInteger->jsonSerialize();
        if (null !== $this->fixedMarkdown) $json['fixedMarkdown'] = $this->fixedMarkdown->jsonSerialize();
        if (null !== $this->fixedOid) $json['fixedOid'] = $this->fixedOid->jsonSerialize();
        if (null !== $this->fixedPositiveInt) $json['fixedPositiveInt'] = $this->fixedPositiveInt->jsonSerialize();
        if (null !== $this->fixedString) $json['fixedString'] = $this->fixedString->jsonSerialize();
        if (null !== $this->fixedTime) $json['fixedTime'] = $this->fixedTime->jsonSerialize();
        if (null !== $this->fixedUnsignedInt) $json['fixedUnsignedInt'] = $this->fixedUnsignedInt->jsonSerialize();
        if (null !== $this->fixedUri) $json['fixedUri'] = $this->fixedUri->jsonSerialize();
        if (null !== $this->fixedAddress) $json['fixedAddress'] = $this->fixedAddress->jsonSerialize();
        if (null !== $this->fixedAge) $json['fixedAge'] = $this->fixedAge->jsonSerialize();
        if (null !== $this->fixedAnnotation) $json['fixedAnnotation'] = $this->fixedAnnotation->jsonSerialize();
        if (null !== $this->fixedAttachment) $json['fixedAttachment'] = $this->fixedAttachment->jsonSerialize();
        if (null !== $this->fixedCodeableConcept) $json['fixedCodeableConcept'] = $this->fixedCodeableConcept->jsonSerialize();
        if (null !== $this->fixedCoding) $json['fixedCoding'] = $this->fixedCoding->jsonSerialize();
        if (null !== $this->fixedContactPoint) $json['fixedContactPoint'] = $this->fixedContactPoint->jsonSerialize();
        if (null !== $this->fixedCount) $json['fixedCount'] = $this->fixedCount->jsonSerialize();
        if (null !== $this->fixedDistance) $json['fixedDistance'] = $this->fixedDistance->jsonSerialize();
        if (null !== $this->fixedDuration) $json['fixedDuration'] = $this->fixedDuration->jsonSerialize();
        if (null !== $this->fixedHumanName) $json['fixedHumanName'] = $this->fixedHumanName->jsonSerialize();
        if (null !== $this->fixedIdentifier) $json['fixedIdentifier'] = $this->fixedIdentifier->jsonSerialize();
        if (null !== $this->fixedMoney) $json['fixedMoney'] = $this->fixedMoney->jsonSerialize();
        if (null !== $this->fixedPeriod) $json['fixedPeriod'] = $this->fixedPeriod->jsonSerialize();
        if (null !== $this->fixedQuantity) $json['fixedQuantity'] = $this->fixedQuantity->jsonSerialize();
        if (null !== $this->fixedRange) $json['fixedRange'] = $this->fixedRange->jsonSerialize();
        if (null !== $this->fixedRatio) $json['fixedRatio'] = $this->fixedRatio->jsonSerialize();
        if (null !== $this->fixedReference) $json['fixedReference'] = $this->fixedReference->jsonSerialize();
        if (null !== $this->fixedSampledData) $json['fixedSampledData'] = $this->fixedSampledData->jsonSerialize();
        if (null !== $this->fixedSignature) $json['fixedSignature'] = $this->fixedSignature->jsonSerialize();
        if (null !== $this->fixedTiming) $json['fixedTiming'] = $this->fixedTiming->jsonSerialize();
        if (null !== $this->fixedMeta) $json['fixedMeta'] = $this->fixedMeta->jsonSerialize();
        if (null !== $this->patternBase64Binary) $json['patternBase64Binary'] = $this->patternBase64Binary->jsonSerialize();
        if (null !== $this->patternBoolean) $json['patternBoolean'] = $this->patternBoolean->jsonSerialize();
        if (null !== $this->patternCode) $json['patternCode'] = $this->patternCode->jsonSerialize();
        if (null !== $this->patternDate) $json['patternDate'] = $this->patternDate->jsonSerialize();
        if (null !== $this->patternDateTime) $json['patternDateTime'] = $this->patternDateTime->jsonSerialize();
        if (null !== $this->patternDecimal) $json['patternDecimal'] = $this->patternDecimal->jsonSerialize();
        if (null !== $this->patternId) $json['patternId'] = $this->patternId->jsonSerialize();
        if (null !== $this->patternInstant) $json['patternInstant'] = $this->patternInstant->jsonSerialize();
        if (null !== $this->patternInteger) $json['patternInteger'] = $this->patternInteger->jsonSerialize();
        if (null !== $this->patternMarkdown) $json['patternMarkdown'] = $this->patternMarkdown->jsonSerialize();
        if (null !== $this->patternOid) $json['patternOid'] = $this->patternOid->jsonSerialize();
        if (null !== $this->patternPositiveInt) $json['patternPositiveInt'] = $this->patternPositiveInt->jsonSerialize();
        if (null !== $this->patternString) $json['patternString'] = $this->patternString->jsonSerialize();
        if (null !== $this->patternTime) $json['patternTime'] = $this->patternTime->jsonSerialize();
        if (null !== $this->patternUnsignedInt) $json['patternUnsignedInt'] = $this->patternUnsignedInt->jsonSerialize();
        if (null !== $this->patternUri) $json['patternUri'] = $this->patternUri->jsonSerialize();
        if (null !== $this->patternAddress) $json['patternAddress'] = $this->patternAddress->jsonSerialize();
        if (null !== $this->patternAge) $json['patternAge'] = $this->patternAge->jsonSerialize();
        if (null !== $this->patternAnnotation) $json['patternAnnotation'] = $this->patternAnnotation->jsonSerialize();
        if (null !== $this->patternAttachment) $json['patternAttachment'] = $this->patternAttachment->jsonSerialize();
        if (null !== $this->patternCodeableConcept) $json['patternCodeableConcept'] = $this->patternCodeableConcept->jsonSerialize();
        if (null !== $this->patternCoding) $json['patternCoding'] = $this->patternCoding->jsonSerialize();
        if (null !== $this->patternContactPoint) $json['patternContactPoint'] = $this->patternContactPoint->jsonSerialize();
        if (null !== $this->patternCount) $json['patternCount'] = $this->patternCount->jsonSerialize();
        if (null !== $this->patternDistance) $json['patternDistance'] = $this->patternDistance->jsonSerialize();
        if (null !== $this->patternDuration) $json['patternDuration'] = $this->patternDuration->jsonSerialize();
        if (null !== $this->patternHumanName) $json['patternHumanName'] = $this->patternHumanName->jsonSerialize();
        if (null !== $this->patternIdentifier) $json['patternIdentifier'] = $this->patternIdentifier->jsonSerialize();
        if (null !== $this->patternMoney) $json['patternMoney'] = $this->patternMoney->jsonSerialize();
        if (null !== $this->patternPeriod) $json['patternPeriod'] = $this->patternPeriod->jsonSerialize();
        if (null !== $this->patternQuantity) $json['patternQuantity'] = $this->patternQuantity->jsonSerialize();
        if (null !== $this->patternRange) $json['patternRange'] = $this->patternRange->jsonSerialize();
        if (null !== $this->patternRatio) $json['patternRatio'] = $this->patternRatio->jsonSerialize();
        if (null !== $this->patternReference) $json['patternReference'] = $this->patternReference->jsonSerialize();
        if (null !== $this->patternSampledData) $json['patternSampledData'] = $this->patternSampledData->jsonSerialize();
        if (null !== $this->patternSignature) $json['patternSignature'] = $this->patternSignature->jsonSerialize();
        if (null !== $this->patternTiming) $json['patternTiming'] = $this->patternTiming->jsonSerialize();
        if (null !== $this->patternMeta) $json['patternMeta'] = $this->patternMeta->jsonSerialize();
        if (null !== $this->exampleBase64Binary) $json['exampleBase64Binary'] = $this->exampleBase64Binary->jsonSerialize();
        if (null !== $this->exampleBoolean) $json['exampleBoolean'] = $this->exampleBoolean->jsonSerialize();
        if (null !== $this->exampleCode) $json['exampleCode'] = $this->exampleCode->jsonSerialize();
        if (null !== $this->exampleDate) $json['exampleDate'] = $this->exampleDate->jsonSerialize();
        if (null !== $this->exampleDateTime) $json['exampleDateTime'] = $this->exampleDateTime->jsonSerialize();
        if (null !== $this->exampleDecimal) $json['exampleDecimal'] = $this->exampleDecimal->jsonSerialize();
        if (null !== $this->exampleId) $json['exampleId'] = $this->exampleId->jsonSerialize();
        if (null !== $this->exampleInstant) $json['exampleInstant'] = $this->exampleInstant->jsonSerialize();
        if (null !== $this->exampleInteger) $json['exampleInteger'] = $this->exampleInteger->jsonSerialize();
        if (null !== $this->exampleMarkdown) $json['exampleMarkdown'] = $this->exampleMarkdown->jsonSerialize();
        if (null !== $this->exampleOid) $json['exampleOid'] = $this->exampleOid->jsonSerialize();
        if (null !== $this->examplePositiveInt) $json['examplePositiveInt'] = $this->examplePositiveInt->jsonSerialize();
        if (null !== $this->exampleString) $json['exampleString'] = $this->exampleString->jsonSerialize();
        if (null !== $this->exampleTime) $json['exampleTime'] = $this->exampleTime->jsonSerialize();
        if (null !== $this->exampleUnsignedInt) $json['exampleUnsignedInt'] = $this->exampleUnsignedInt->jsonSerialize();
        if (null !== $this->exampleUri) $json['exampleUri'] = $this->exampleUri->jsonSerialize();
        if (null !== $this->exampleAddress) $json['exampleAddress'] = $this->exampleAddress->jsonSerialize();
        if (null !== $this->exampleAge) $json['exampleAge'] = $this->exampleAge->jsonSerialize();
        if (null !== $this->exampleAnnotation) $json['exampleAnnotation'] = $this->exampleAnnotation->jsonSerialize();
        if (null !== $this->exampleAttachment) $json['exampleAttachment'] = $this->exampleAttachment->jsonSerialize();
        if (null !== $this->exampleCodeableConcept) $json['exampleCodeableConcept'] = $this->exampleCodeableConcept->jsonSerialize();
        if (null !== $this->exampleCoding) $json['exampleCoding'] = $this->exampleCoding->jsonSerialize();
        if (null !== $this->exampleContactPoint) $json['exampleContactPoint'] = $this->exampleContactPoint->jsonSerialize();
        if (null !== $this->exampleCount) $json['exampleCount'] = $this->exampleCount->jsonSerialize();
        if (null !== $this->exampleDistance) $json['exampleDistance'] = $this->exampleDistance->jsonSerialize();
        if (null !== $this->exampleDuration) $json['exampleDuration'] = $this->exampleDuration->jsonSerialize();
        if (null !== $this->exampleHumanName) $json['exampleHumanName'] = $this->exampleHumanName->jsonSerialize();
        if (null !== $this->exampleIdentifier) $json['exampleIdentifier'] = $this->exampleIdentifier->jsonSerialize();
        if (null !== $this->exampleMoney) $json['exampleMoney'] = $this->exampleMoney->jsonSerialize();
        if (null !== $this->examplePeriod) $json['examplePeriod'] = $this->examplePeriod->jsonSerialize();
        if (null !== $this->exampleQuantity) $json['exampleQuantity'] = $this->exampleQuantity->jsonSerialize();
        if (null !== $this->exampleRange) $json['exampleRange'] = $this->exampleRange->jsonSerialize();
        if (null !== $this->exampleRatio) $json['exampleRatio'] = $this->exampleRatio->jsonSerialize();
        if (null !== $this->exampleReference) $json['exampleReference'] = $this->exampleReference->jsonSerialize();
        if (null !== $this->exampleSampledData) $json['exampleSampledData'] = $this->exampleSampledData->jsonSerialize();
        if (null !== $this->exampleSignature) $json['exampleSignature'] = $this->exampleSignature->jsonSerialize();
        if (null !== $this->exampleTiming) $json['exampleTiming'] = $this->exampleTiming->jsonSerialize();
        if (null !== $this->exampleMeta) $json['exampleMeta'] = $this->exampleMeta->jsonSerialize();
        if (null !== $this->minValueDate) $json['minValueDate'] = $this->minValueDate->jsonSerialize();
        if (null !== $this->minValueDateTime) $json['minValueDateTime'] = $this->minValueDateTime->jsonSerialize();
        if (null !== $this->minValueInstant) $json['minValueInstant'] = $this->minValueInstant->jsonSerialize();
        if (null !== $this->minValueTime) $json['minValueTime'] = $this->minValueTime->jsonSerialize();
        if (null !== $this->minValueDecimal) $json['minValueDecimal'] = $this->minValueDecimal->jsonSerialize();
        if (null !== $this->minValueInteger) $json['minValueInteger'] = $this->minValueInteger->jsonSerialize();
        if (null !== $this->minValuePositiveInt) $json['minValuePositiveInt'] = $this->minValuePositiveInt->jsonSerialize();
        if (null !== $this->minValueUnsignedInt) $json['minValueUnsignedInt'] = $this->minValueUnsignedInt->jsonSerialize();
        if (null !== $this->minValueQuantity) $json['minValueQuantity'] = $this->minValueQuantity->jsonSerialize();
        if (null !== $this->maxValueDate) $json['maxValueDate'] = $this->maxValueDate->jsonSerialize();
        if (null !== $this->maxValueDateTime) $json['maxValueDateTime'] = $this->maxValueDateTime->jsonSerialize();
        if (null !== $this->maxValueInstant) $json['maxValueInstant'] = $this->maxValueInstant->jsonSerialize();
        if (null !== $this->maxValueTime) $json['maxValueTime'] = $this->maxValueTime->jsonSerialize();
        if (null !== $this->maxValueDecimal) $json['maxValueDecimal'] = $this->maxValueDecimal->jsonSerialize();
        if (null !== $this->maxValueInteger) $json['maxValueInteger'] = $this->maxValueInteger->jsonSerialize();
        if (null !== $this->maxValuePositiveInt) $json['maxValuePositiveInt'] = $this->maxValuePositiveInt->jsonSerialize();
        if (null !== $this->maxValueUnsignedInt) $json['maxValueUnsignedInt'] = $this->maxValueUnsignedInt->jsonSerialize();
        if (null !== $this->maxValueQuantity) $json['maxValueQuantity'] = $this->maxValueQuantity->jsonSerialize();
        if (null !== $this->maxLength) $json['maxLength'] = $this->maxLength->jsonSerialize();
        if (0 < count($this->condition)) {
            $json['condition'] = array();
            foreach($this->condition as $condition) {
                $json['condition'][] = $condition->jsonSerialize();
            }
        }
        if (0 < count($this->constraint)) {
            $json['constraint'] = array();
            foreach($this->constraint as $constraint) {
                $json['constraint'][] = $constraint->jsonSerialize();
            }
        }
        if (null !== $this->mustSupport) $json['mustSupport'] = $this->mustSupport->jsonSerialize();
        if (null !== $this->isModifier) $json['isModifier'] = $this->isModifier->jsonSerialize();
        if (null !== $this->isSummary) $json['isSummary'] = $this->isSummary->jsonSerialize();
        if (null !== $this->binding) $json['binding'] = $this->binding->jsonSerialize();
        if (0 < count($this->mapping)) {
            $json['mapping'] = array();
            foreach($this->mapping as $mapping) {
                $json['mapping'][] = $mapping->jsonSerialize();
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ElementDefinition xmlns="http://hl7.org/fhir"></ElementDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->path) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (0 < count($this->representation)) {
            foreach($this->representation as $representation) {
                $representation->xmlSerialize(true, $sxe->addChild('representation'));
            }
        }
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->label) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (null !== $this->slicing) $this->slicing->xmlSerialize(true, $sxe->addChild('slicing'));
        if (null !== $this->short) $this->short->xmlSerialize(true, $sxe->addChild('short'));
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (null !== $this->comments) $this->comments->xmlSerialize(true, $sxe->addChild('comments'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (0 < count($this->alias)) {
            foreach($this->alias as $alias) {
                $alias->xmlSerialize(true, $sxe->addChild('alias'));
            }
        }
        if (null !== $this->min) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (null !== $this->max) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (null !== $this->base) $this->base->xmlSerialize(true, $sxe->addChild('base'));
        if (null !== $this->contentReference) $this->contentReference->xmlSerialize(true, $sxe->addChild('contentReference'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->defaultValueBase64Binary) $this->defaultValueBase64Binary->xmlSerialize(true, $sxe->addChild('defaultValueBase64Binary'));
        if (null !== $this->defaultValueBoolean) $this->defaultValueBoolean->xmlSerialize(true, $sxe->addChild('defaultValueBoolean'));
        if (null !== $this->defaultValueCode) $this->defaultValueCode->xmlSerialize(true, $sxe->addChild('defaultValueCode'));
        if (null !== $this->defaultValueDate) $this->defaultValueDate->xmlSerialize(true, $sxe->addChild('defaultValueDate'));
        if (null !== $this->defaultValueDateTime) $this->defaultValueDateTime->xmlSerialize(true, $sxe->addChild('defaultValueDateTime'));
        if (null !== $this->defaultValueDecimal) $this->defaultValueDecimal->xmlSerialize(true, $sxe->addChild('defaultValueDecimal'));
        if (null !== $this->defaultValueId) $this->defaultValueId->xmlSerialize(true, $sxe->addChild('defaultValueId'));
        if (null !== $this->defaultValueInstant) $this->defaultValueInstant->xmlSerialize(true, $sxe->addChild('defaultValueInstant'));
        if (null !== $this->defaultValueInteger) $this->defaultValueInteger->xmlSerialize(true, $sxe->addChild('defaultValueInteger'));
        if (null !== $this->defaultValueMarkdown) $this->defaultValueMarkdown->xmlSerialize(true, $sxe->addChild('defaultValueMarkdown'));
        if (null !== $this->defaultValueOid) $this->defaultValueOid->xmlSerialize(true, $sxe->addChild('defaultValueOid'));
        if (null !== $this->defaultValuePositiveInt) $this->defaultValuePositiveInt->xmlSerialize(true, $sxe->addChild('defaultValuePositiveInt'));
        if (null !== $this->defaultValueString) $this->defaultValueString->xmlSerialize(true, $sxe->addChild('defaultValueString'));
        if (null !== $this->defaultValueTime) $this->defaultValueTime->xmlSerialize(true, $sxe->addChild('defaultValueTime'));
        if (null !== $this->defaultValueUnsignedInt) $this->defaultValueUnsignedInt->xmlSerialize(true, $sxe->addChild('defaultValueUnsignedInt'));
        if (null !== $this->defaultValueUri) $this->defaultValueUri->xmlSerialize(true, $sxe->addChild('defaultValueUri'));
        if (null !== $this->defaultValueAddress) $this->defaultValueAddress->xmlSerialize(true, $sxe->addChild('defaultValueAddress'));
        if (null !== $this->defaultValueAge) $this->defaultValueAge->xmlSerialize(true, $sxe->addChild('defaultValueAge'));
        if (null !== $this->defaultValueAnnotation) $this->defaultValueAnnotation->xmlSerialize(true, $sxe->addChild('defaultValueAnnotation'));
        if (null !== $this->defaultValueAttachment) $this->defaultValueAttachment->xmlSerialize(true, $sxe->addChild('defaultValueAttachment'));
        if (null !== $this->defaultValueCodeableConcept) $this->defaultValueCodeableConcept->xmlSerialize(true, $sxe->addChild('defaultValueCodeableConcept'));
        if (null !== $this->defaultValueCoding) $this->defaultValueCoding->xmlSerialize(true, $sxe->addChild('defaultValueCoding'));
        if (null !== $this->defaultValueContactPoint) $this->defaultValueContactPoint->xmlSerialize(true, $sxe->addChild('defaultValueContactPoint'));
        if (null !== $this->defaultValueCount) $this->defaultValueCount->xmlSerialize(true, $sxe->addChild('defaultValueCount'));
        if (null !== $this->defaultValueDistance) $this->defaultValueDistance->xmlSerialize(true, $sxe->addChild('defaultValueDistance'));
        if (null !== $this->defaultValueDuration) $this->defaultValueDuration->xmlSerialize(true, $sxe->addChild('defaultValueDuration'));
        if (null !== $this->defaultValueHumanName) $this->defaultValueHumanName->xmlSerialize(true, $sxe->addChild('defaultValueHumanName'));
        if (null !== $this->defaultValueIdentifier) $this->defaultValueIdentifier->xmlSerialize(true, $sxe->addChild('defaultValueIdentifier'));
        if (null !== $this->defaultValueMoney) $this->defaultValueMoney->xmlSerialize(true, $sxe->addChild('defaultValueMoney'));
        if (null !== $this->defaultValuePeriod) $this->defaultValuePeriod->xmlSerialize(true, $sxe->addChild('defaultValuePeriod'));
        if (null !== $this->defaultValueQuantity) $this->defaultValueQuantity->xmlSerialize(true, $sxe->addChild('defaultValueQuantity'));
        if (null !== $this->defaultValueRange) $this->defaultValueRange->xmlSerialize(true, $sxe->addChild('defaultValueRange'));
        if (null !== $this->defaultValueRatio) $this->defaultValueRatio->xmlSerialize(true, $sxe->addChild('defaultValueRatio'));
        if (null !== $this->defaultValueReference) $this->defaultValueReference->xmlSerialize(true, $sxe->addChild('defaultValueReference'));
        if (null !== $this->defaultValueSampledData) $this->defaultValueSampledData->xmlSerialize(true, $sxe->addChild('defaultValueSampledData'));
        if (null !== $this->defaultValueSignature) $this->defaultValueSignature->xmlSerialize(true, $sxe->addChild('defaultValueSignature'));
        if (null !== $this->defaultValueTiming) $this->defaultValueTiming->xmlSerialize(true, $sxe->addChild('defaultValueTiming'));
        if (null !== $this->defaultValueMeta) $this->defaultValueMeta->xmlSerialize(true, $sxe->addChild('defaultValueMeta'));
        if (null !== $this->meaningWhenMissing) $this->meaningWhenMissing->xmlSerialize(true, $sxe->addChild('meaningWhenMissing'));
        if (null !== $this->fixedBase64Binary) $this->fixedBase64Binary->xmlSerialize(true, $sxe->addChild('fixedBase64Binary'));
        if (null !== $this->fixedBoolean) $this->fixedBoolean->xmlSerialize(true, $sxe->addChild('fixedBoolean'));
        if (null !== $this->fixedCode) $this->fixedCode->xmlSerialize(true, $sxe->addChild('fixedCode'));
        if (null !== $this->fixedDate) $this->fixedDate->xmlSerialize(true, $sxe->addChild('fixedDate'));
        if (null !== $this->fixedDateTime) $this->fixedDateTime->xmlSerialize(true, $sxe->addChild('fixedDateTime'));
        if (null !== $this->fixedDecimal) $this->fixedDecimal->xmlSerialize(true, $sxe->addChild('fixedDecimal'));
        if (null !== $this->fixedId) $this->fixedId->xmlSerialize(true, $sxe->addChild('fixedId'));
        if (null !== $this->fixedInstant) $this->fixedInstant->xmlSerialize(true, $sxe->addChild('fixedInstant'));
        if (null !== $this->fixedInteger) $this->fixedInteger->xmlSerialize(true, $sxe->addChild('fixedInteger'));
        if (null !== $this->fixedMarkdown) $this->fixedMarkdown->xmlSerialize(true, $sxe->addChild('fixedMarkdown'));
        if (null !== $this->fixedOid) $this->fixedOid->xmlSerialize(true, $sxe->addChild('fixedOid'));
        if (null !== $this->fixedPositiveInt) $this->fixedPositiveInt->xmlSerialize(true, $sxe->addChild('fixedPositiveInt'));
        if (null !== $this->fixedString) $this->fixedString->xmlSerialize(true, $sxe->addChild('fixedString'));
        if (null !== $this->fixedTime) $this->fixedTime->xmlSerialize(true, $sxe->addChild('fixedTime'));
        if (null !== $this->fixedUnsignedInt) $this->fixedUnsignedInt->xmlSerialize(true, $sxe->addChild('fixedUnsignedInt'));
        if (null !== $this->fixedUri) $this->fixedUri->xmlSerialize(true, $sxe->addChild('fixedUri'));
        if (null !== $this->fixedAddress) $this->fixedAddress->xmlSerialize(true, $sxe->addChild('fixedAddress'));
        if (null !== $this->fixedAge) $this->fixedAge->xmlSerialize(true, $sxe->addChild('fixedAge'));
        if (null !== $this->fixedAnnotation) $this->fixedAnnotation->xmlSerialize(true, $sxe->addChild('fixedAnnotation'));
        if (null !== $this->fixedAttachment) $this->fixedAttachment->xmlSerialize(true, $sxe->addChild('fixedAttachment'));
        if (null !== $this->fixedCodeableConcept) $this->fixedCodeableConcept->xmlSerialize(true, $sxe->addChild('fixedCodeableConcept'));
        if (null !== $this->fixedCoding) $this->fixedCoding->xmlSerialize(true, $sxe->addChild('fixedCoding'));
        if (null !== $this->fixedContactPoint) $this->fixedContactPoint->xmlSerialize(true, $sxe->addChild('fixedContactPoint'));
        if (null !== $this->fixedCount) $this->fixedCount->xmlSerialize(true, $sxe->addChild('fixedCount'));
        if (null !== $this->fixedDistance) $this->fixedDistance->xmlSerialize(true, $sxe->addChild('fixedDistance'));
        if (null !== $this->fixedDuration) $this->fixedDuration->xmlSerialize(true, $sxe->addChild('fixedDuration'));
        if (null !== $this->fixedHumanName) $this->fixedHumanName->xmlSerialize(true, $sxe->addChild('fixedHumanName'));
        if (null !== $this->fixedIdentifier) $this->fixedIdentifier->xmlSerialize(true, $sxe->addChild('fixedIdentifier'));
        if (null !== $this->fixedMoney) $this->fixedMoney->xmlSerialize(true, $sxe->addChild('fixedMoney'));
        if (null !== $this->fixedPeriod) $this->fixedPeriod->xmlSerialize(true, $sxe->addChild('fixedPeriod'));
        if (null !== $this->fixedQuantity) $this->fixedQuantity->xmlSerialize(true, $sxe->addChild('fixedQuantity'));
        if (null !== $this->fixedRange) $this->fixedRange->xmlSerialize(true, $sxe->addChild('fixedRange'));
        if (null !== $this->fixedRatio) $this->fixedRatio->xmlSerialize(true, $sxe->addChild('fixedRatio'));
        if (null !== $this->fixedReference) $this->fixedReference->xmlSerialize(true, $sxe->addChild('fixedReference'));
        if (null !== $this->fixedSampledData) $this->fixedSampledData->xmlSerialize(true, $sxe->addChild('fixedSampledData'));
        if (null !== $this->fixedSignature) $this->fixedSignature->xmlSerialize(true, $sxe->addChild('fixedSignature'));
        if (null !== $this->fixedTiming) $this->fixedTiming->xmlSerialize(true, $sxe->addChild('fixedTiming'));
        if (null !== $this->fixedMeta) $this->fixedMeta->xmlSerialize(true, $sxe->addChild('fixedMeta'));
        if (null !== $this->patternBase64Binary) $this->patternBase64Binary->xmlSerialize(true, $sxe->addChild('patternBase64Binary'));
        if (null !== $this->patternBoolean) $this->patternBoolean->xmlSerialize(true, $sxe->addChild('patternBoolean'));
        if (null !== $this->patternCode) $this->patternCode->xmlSerialize(true, $sxe->addChild('patternCode'));
        if (null !== $this->patternDate) $this->patternDate->xmlSerialize(true, $sxe->addChild('patternDate'));
        if (null !== $this->patternDateTime) $this->patternDateTime->xmlSerialize(true, $sxe->addChild('patternDateTime'));
        if (null !== $this->patternDecimal) $this->patternDecimal->xmlSerialize(true, $sxe->addChild('patternDecimal'));
        if (null !== $this->patternId) $this->patternId->xmlSerialize(true, $sxe->addChild('patternId'));
        if (null !== $this->patternInstant) $this->patternInstant->xmlSerialize(true, $sxe->addChild('patternInstant'));
        if (null !== $this->patternInteger) $this->patternInteger->xmlSerialize(true, $sxe->addChild('patternInteger'));
        if (null !== $this->patternMarkdown) $this->patternMarkdown->xmlSerialize(true, $sxe->addChild('patternMarkdown'));
        if (null !== $this->patternOid) $this->patternOid->xmlSerialize(true, $sxe->addChild('patternOid'));
        if (null !== $this->patternPositiveInt) $this->patternPositiveInt->xmlSerialize(true, $sxe->addChild('patternPositiveInt'));
        if (null !== $this->patternString) $this->patternString->xmlSerialize(true, $sxe->addChild('patternString'));
        if (null !== $this->patternTime) $this->patternTime->xmlSerialize(true, $sxe->addChild('patternTime'));
        if (null !== $this->patternUnsignedInt) $this->patternUnsignedInt->xmlSerialize(true, $sxe->addChild('patternUnsignedInt'));
        if (null !== $this->patternUri) $this->patternUri->xmlSerialize(true, $sxe->addChild('patternUri'));
        if (null !== $this->patternAddress) $this->patternAddress->xmlSerialize(true, $sxe->addChild('patternAddress'));
        if (null !== $this->patternAge) $this->patternAge->xmlSerialize(true, $sxe->addChild('patternAge'));
        if (null !== $this->patternAnnotation) $this->patternAnnotation->xmlSerialize(true, $sxe->addChild('patternAnnotation'));
        if (null !== $this->patternAttachment) $this->patternAttachment->xmlSerialize(true, $sxe->addChild('patternAttachment'));
        if (null !== $this->patternCodeableConcept) $this->patternCodeableConcept->xmlSerialize(true, $sxe->addChild('patternCodeableConcept'));
        if (null !== $this->patternCoding) $this->patternCoding->xmlSerialize(true, $sxe->addChild('patternCoding'));
        if (null !== $this->patternContactPoint) $this->patternContactPoint->xmlSerialize(true, $sxe->addChild('patternContactPoint'));
        if (null !== $this->patternCount) $this->patternCount->xmlSerialize(true, $sxe->addChild('patternCount'));
        if (null !== $this->patternDistance) $this->patternDistance->xmlSerialize(true, $sxe->addChild('patternDistance'));
        if (null !== $this->patternDuration) $this->patternDuration->xmlSerialize(true, $sxe->addChild('patternDuration'));
        if (null !== $this->patternHumanName) $this->patternHumanName->xmlSerialize(true, $sxe->addChild('patternHumanName'));
        if (null !== $this->patternIdentifier) $this->patternIdentifier->xmlSerialize(true, $sxe->addChild('patternIdentifier'));
        if (null !== $this->patternMoney) $this->patternMoney->xmlSerialize(true, $sxe->addChild('patternMoney'));
        if (null !== $this->patternPeriod) $this->patternPeriod->xmlSerialize(true, $sxe->addChild('patternPeriod'));
        if (null !== $this->patternQuantity) $this->patternQuantity->xmlSerialize(true, $sxe->addChild('patternQuantity'));
        if (null !== $this->patternRange) $this->patternRange->xmlSerialize(true, $sxe->addChild('patternRange'));
        if (null !== $this->patternRatio) $this->patternRatio->xmlSerialize(true, $sxe->addChild('patternRatio'));
        if (null !== $this->patternReference) $this->patternReference->xmlSerialize(true, $sxe->addChild('patternReference'));
        if (null !== $this->patternSampledData) $this->patternSampledData->xmlSerialize(true, $sxe->addChild('patternSampledData'));
        if (null !== $this->patternSignature) $this->patternSignature->xmlSerialize(true, $sxe->addChild('patternSignature'));
        if (null !== $this->patternTiming) $this->patternTiming->xmlSerialize(true, $sxe->addChild('patternTiming'));
        if (null !== $this->patternMeta) $this->patternMeta->xmlSerialize(true, $sxe->addChild('patternMeta'));
        if (null !== $this->exampleBase64Binary) $this->exampleBase64Binary->xmlSerialize(true, $sxe->addChild('exampleBase64Binary'));
        if (null !== $this->exampleBoolean) $this->exampleBoolean->xmlSerialize(true, $sxe->addChild('exampleBoolean'));
        if (null !== $this->exampleCode) $this->exampleCode->xmlSerialize(true, $sxe->addChild('exampleCode'));
        if (null !== $this->exampleDate) $this->exampleDate->xmlSerialize(true, $sxe->addChild('exampleDate'));
        if (null !== $this->exampleDateTime) $this->exampleDateTime->xmlSerialize(true, $sxe->addChild('exampleDateTime'));
        if (null !== $this->exampleDecimal) $this->exampleDecimal->xmlSerialize(true, $sxe->addChild('exampleDecimal'));
        if (null !== $this->exampleId) $this->exampleId->xmlSerialize(true, $sxe->addChild('exampleId'));
        if (null !== $this->exampleInstant) $this->exampleInstant->xmlSerialize(true, $sxe->addChild('exampleInstant'));
        if (null !== $this->exampleInteger) $this->exampleInteger->xmlSerialize(true, $sxe->addChild('exampleInteger'));
        if (null !== $this->exampleMarkdown) $this->exampleMarkdown->xmlSerialize(true, $sxe->addChild('exampleMarkdown'));
        if (null !== $this->exampleOid) $this->exampleOid->xmlSerialize(true, $sxe->addChild('exampleOid'));
        if (null !== $this->examplePositiveInt) $this->examplePositiveInt->xmlSerialize(true, $sxe->addChild('examplePositiveInt'));
        if (null !== $this->exampleString) $this->exampleString->xmlSerialize(true, $sxe->addChild('exampleString'));
        if (null !== $this->exampleTime) $this->exampleTime->xmlSerialize(true, $sxe->addChild('exampleTime'));
        if (null !== $this->exampleUnsignedInt) $this->exampleUnsignedInt->xmlSerialize(true, $sxe->addChild('exampleUnsignedInt'));
        if (null !== $this->exampleUri) $this->exampleUri->xmlSerialize(true, $sxe->addChild('exampleUri'));
        if (null !== $this->exampleAddress) $this->exampleAddress->xmlSerialize(true, $sxe->addChild('exampleAddress'));
        if (null !== $this->exampleAge) $this->exampleAge->xmlSerialize(true, $sxe->addChild('exampleAge'));
        if (null !== $this->exampleAnnotation) $this->exampleAnnotation->xmlSerialize(true, $sxe->addChild('exampleAnnotation'));
        if (null !== $this->exampleAttachment) $this->exampleAttachment->xmlSerialize(true, $sxe->addChild('exampleAttachment'));
        if (null !== $this->exampleCodeableConcept) $this->exampleCodeableConcept->xmlSerialize(true, $sxe->addChild('exampleCodeableConcept'));
        if (null !== $this->exampleCoding) $this->exampleCoding->xmlSerialize(true, $sxe->addChild('exampleCoding'));
        if (null !== $this->exampleContactPoint) $this->exampleContactPoint->xmlSerialize(true, $sxe->addChild('exampleContactPoint'));
        if (null !== $this->exampleCount) $this->exampleCount->xmlSerialize(true, $sxe->addChild('exampleCount'));
        if (null !== $this->exampleDistance) $this->exampleDistance->xmlSerialize(true, $sxe->addChild('exampleDistance'));
        if (null !== $this->exampleDuration) $this->exampleDuration->xmlSerialize(true, $sxe->addChild('exampleDuration'));
        if (null !== $this->exampleHumanName) $this->exampleHumanName->xmlSerialize(true, $sxe->addChild('exampleHumanName'));
        if (null !== $this->exampleIdentifier) $this->exampleIdentifier->xmlSerialize(true, $sxe->addChild('exampleIdentifier'));
        if (null !== $this->exampleMoney) $this->exampleMoney->xmlSerialize(true, $sxe->addChild('exampleMoney'));
        if (null !== $this->examplePeriod) $this->examplePeriod->xmlSerialize(true, $sxe->addChild('examplePeriod'));
        if (null !== $this->exampleQuantity) $this->exampleQuantity->xmlSerialize(true, $sxe->addChild('exampleQuantity'));
        if (null !== $this->exampleRange) $this->exampleRange->xmlSerialize(true, $sxe->addChild('exampleRange'));
        if (null !== $this->exampleRatio) $this->exampleRatio->xmlSerialize(true, $sxe->addChild('exampleRatio'));
        if (null !== $this->exampleReference) $this->exampleReference->xmlSerialize(true, $sxe->addChild('exampleReference'));
        if (null !== $this->exampleSampledData) $this->exampleSampledData->xmlSerialize(true, $sxe->addChild('exampleSampledData'));
        if (null !== $this->exampleSignature) $this->exampleSignature->xmlSerialize(true, $sxe->addChild('exampleSignature'));
        if (null !== $this->exampleTiming) $this->exampleTiming->xmlSerialize(true, $sxe->addChild('exampleTiming'));
        if (null !== $this->exampleMeta) $this->exampleMeta->xmlSerialize(true, $sxe->addChild('exampleMeta'));
        if (null !== $this->minValueDate) $this->minValueDate->xmlSerialize(true, $sxe->addChild('minValueDate'));
        if (null !== $this->minValueDateTime) $this->minValueDateTime->xmlSerialize(true, $sxe->addChild('minValueDateTime'));
        if (null !== $this->minValueInstant) $this->minValueInstant->xmlSerialize(true, $sxe->addChild('minValueInstant'));
        if (null !== $this->minValueTime) $this->minValueTime->xmlSerialize(true, $sxe->addChild('minValueTime'));
        if (null !== $this->minValueDecimal) $this->minValueDecimal->xmlSerialize(true, $sxe->addChild('minValueDecimal'));
        if (null !== $this->minValueInteger) $this->minValueInteger->xmlSerialize(true, $sxe->addChild('minValueInteger'));
        if (null !== $this->minValuePositiveInt) $this->minValuePositiveInt->xmlSerialize(true, $sxe->addChild('minValuePositiveInt'));
        if (null !== $this->minValueUnsignedInt) $this->minValueUnsignedInt->xmlSerialize(true, $sxe->addChild('minValueUnsignedInt'));
        if (null !== $this->minValueQuantity) $this->minValueQuantity->xmlSerialize(true, $sxe->addChild('minValueQuantity'));
        if (null !== $this->maxValueDate) $this->maxValueDate->xmlSerialize(true, $sxe->addChild('maxValueDate'));
        if (null !== $this->maxValueDateTime) $this->maxValueDateTime->xmlSerialize(true, $sxe->addChild('maxValueDateTime'));
        if (null !== $this->maxValueInstant) $this->maxValueInstant->xmlSerialize(true, $sxe->addChild('maxValueInstant'));
        if (null !== $this->maxValueTime) $this->maxValueTime->xmlSerialize(true, $sxe->addChild('maxValueTime'));
        if (null !== $this->maxValueDecimal) $this->maxValueDecimal->xmlSerialize(true, $sxe->addChild('maxValueDecimal'));
        if (null !== $this->maxValueInteger) $this->maxValueInteger->xmlSerialize(true, $sxe->addChild('maxValueInteger'));
        if (null !== $this->maxValuePositiveInt) $this->maxValuePositiveInt->xmlSerialize(true, $sxe->addChild('maxValuePositiveInt'));
        if (null !== $this->maxValueUnsignedInt) $this->maxValueUnsignedInt->xmlSerialize(true, $sxe->addChild('maxValueUnsignedInt'));
        if (null !== $this->maxValueQuantity) $this->maxValueQuantity->xmlSerialize(true, $sxe->addChild('maxValueQuantity'));
        if (null !== $this->maxLength) $this->maxLength->xmlSerialize(true, $sxe->addChild('maxLength'));
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
        if (null !== $this->mustSupport) $this->mustSupport->xmlSerialize(true, $sxe->addChild('mustSupport'));
        if (null !== $this->isModifier) $this->isModifier->xmlSerialize(true, $sxe->addChild('isModifier'));
        if (null !== $this->isSummary) $this->isSummary->xmlSerialize(true, $sxe->addChild('isSummary'));
        if (null !== $this->binding) $this->binding->xmlSerialize(true, $sxe->addChild('binding'));
        if (0 < count($this->mapping)) {
            foreach($this->mapping as $mapping) {
                $mapping->xmlSerialize(true, $sxe->addChild('mapping'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}