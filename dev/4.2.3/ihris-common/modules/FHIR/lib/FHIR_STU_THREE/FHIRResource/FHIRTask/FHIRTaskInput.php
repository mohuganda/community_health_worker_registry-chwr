<?php namespace FHIR_STU_THREE\FHIRResource\FHIRTask;

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

use FHIR_STU_THREE\FHIRElement\FHIRBackboneElement;
use FHIR_STU_THREE\JsonSerializable;

/**
 * A task to be performed.
 */
class FHIRTaskInput extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * A code or description indicating how the input is intended to be used as part of the task execution.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public $valueBase64Binary = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public $valueId = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $valueMarkdown = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public $valueOid = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public $valuePositiveInt = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public $valueUnsignedInt = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public $valueAddress = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRAge
     */
    public $valueAge = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public $valueAnnotation = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public $valueContactPoint = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRCount
     */
    public $valueCount = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRDistance
     */
    public $valueDistance = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRDuration
     */
    public $valueDuration = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public $valueHumanName = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public $valueIdentifier = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRMoney
     */
    public $valueMoney = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public $valueSignature = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public $valueTiming = null;

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public $valueMeta = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Task.Input';

    /**
     * A code or description indicating how the input is intended to be used as part of the task execution.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A code or description indicating how the input is intended to be used as part of the task execution.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return $this
     */
    public function setValueBase64Binary($valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCode $valueCode
     * @return $this
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDate $valueDate
     * @return $this
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDecimal $valueDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRId $valueId
     * @return $this
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInstant $valueInstant
     * @return $this
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $valueMarkdown
     * @return $this
     */
    public function setValueMarkdown($valueMarkdown)
    {
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIROid $valueOid
     * @return $this
     */
    public function setValueOid($valueOid)
    {
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @return $this
     */
    public function setValuePositiveInt($valuePositiveInt)
    {
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @return $this
     */
    public function setValueUnsignedInt($valueUnsignedInt)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUri $valueUri
     * @return $this
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAddress $valueAddress
     * @return $this
     */
    public function setValueAddress($valueAddress)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRAge
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRAge $valueAge
     * @return $this
     */
    public function setValueAge($valueAge)
    {
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAnnotation $valueAnnotation
     * @return $this
     */
    public function setValueAnnotation($valueAnnotation)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding $valueCoding
     * @return $this
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRContactPoint $valueContactPoint
     * @return $this
     */
    public function setValueContactPoint($valueContactPoint)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRCount
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRCount $valueCount
     * @return $this
     */
    public function setValueCount($valueCount)
    {
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRDistance
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRDistance $valueDistance
     * @return $this
     */
    public function setValueDistance($valueDistance)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRDuration $valueDuration
     * @return $this
     */
    public function setValueDuration($valueDuration)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRHumanName $valueHumanName
     * @return $this
     */
    public function setValueHumanName($valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return $this
     */
    public function setValueIdentifier($valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRMoney
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRMoney $valueMoney
     * @return $this
     */
    public function setValueMoney($valueMoney)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $valueReference
     * @return $this
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRSignature $valueSignature
     * @return $this
     */
    public function setValueSignature($valueSignature)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRTiming $valueTiming
     * @return $this
     */
    public function setValueTiming($valueTiming)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * The value of the input parameter as a basic type. (choose any one of value*, but only one)
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMeta $valueMeta
     * @return $this
     */
    public function setValueMeta($valueMeta)
    {
        $this->valueMeta = $valueMeta;
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
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->valueBase64Binary) $json['valueBase64Binary'] = $this->valueBase64Binary->jsonSerialize();
        if (null !== $this->valueBoolean) $json['valueBoolean'] = $this->valueBoolean->jsonSerialize();
        if (null !== $this->valueCode) $json['valueCode'] = $this->valueCode->jsonSerialize();
        if (null !== $this->valueDate) $json['valueDate'] = $this->valueDate->jsonSerialize();
        if (null !== $this->valueDateTime) $json['valueDateTime'] = $this->valueDateTime->jsonSerialize();
        if (null !== $this->valueDecimal) $json['valueDecimal'] = $this->valueDecimal->jsonSerialize();
        if (null !== $this->valueId) $json['valueId'] = $this->valueId->jsonSerialize();
        if (null !== $this->valueInstant) $json['valueInstant'] = $this->valueInstant->jsonSerialize();
        if (null !== $this->valueInteger) $json['valueInteger'] = $this->valueInteger->jsonSerialize();
        if (null !== $this->valueMarkdown) $json['valueMarkdown'] = $this->valueMarkdown->jsonSerialize();
        if (null !== $this->valueOid) $json['valueOid'] = $this->valueOid->jsonSerialize();
        if (null !== $this->valuePositiveInt) $json['valuePositiveInt'] = $this->valuePositiveInt->jsonSerialize();
        if (null !== $this->valueString) $json['valueString'] = $this->valueString->jsonSerialize();
        if (null !== $this->valueTime) $json['valueTime'] = $this->valueTime->jsonSerialize();
        if (null !== $this->valueUnsignedInt) $json['valueUnsignedInt'] = $this->valueUnsignedInt->jsonSerialize();
        if (null !== $this->valueUri) $json['valueUri'] = $this->valueUri->jsonSerialize();
        if (null !== $this->valueAddress) $json['valueAddress'] = $this->valueAddress->jsonSerialize();
        if (null !== $this->valueAge) $json['valueAge'] = $this->valueAge->jsonSerialize();
        if (null !== $this->valueAnnotation) $json['valueAnnotation'] = $this->valueAnnotation->jsonSerialize();
        if (null !== $this->valueAttachment) $json['valueAttachment'] = $this->valueAttachment->jsonSerialize();
        if (null !== $this->valueCodeableConcept) $json['valueCodeableConcept'] = $this->valueCodeableConcept->jsonSerialize();
        if (null !== $this->valueCoding) $json['valueCoding'] = $this->valueCoding->jsonSerialize();
        if (null !== $this->valueContactPoint) $json['valueContactPoint'] = $this->valueContactPoint->jsonSerialize();
        if (null !== $this->valueCount) $json['valueCount'] = $this->valueCount->jsonSerialize();
        if (null !== $this->valueDistance) $json['valueDistance'] = $this->valueDistance->jsonSerialize();
        if (null !== $this->valueDuration) $json['valueDuration'] = $this->valueDuration->jsonSerialize();
        if (null !== $this->valueHumanName) $json['valueHumanName'] = $this->valueHumanName->jsonSerialize();
        if (null !== $this->valueIdentifier) $json['valueIdentifier'] = $this->valueIdentifier->jsonSerialize();
        if (null !== $this->valueMoney) $json['valueMoney'] = $this->valueMoney->jsonSerialize();
        if (null !== $this->valuePeriod) $json['valuePeriod'] = $this->valuePeriod->jsonSerialize();
        if (null !== $this->valueQuantity) $json['valueQuantity'] = $this->valueQuantity->jsonSerialize();
        if (null !== $this->valueRange) $json['valueRange'] = $this->valueRange->jsonSerialize();
        if (null !== $this->valueRatio) $json['valueRatio'] = $this->valueRatio->jsonSerialize();
        if (null !== $this->valueReference) $json['valueReference'] = $this->valueReference->jsonSerialize();
        if (null !== $this->valueSampledData) $json['valueSampledData'] = $this->valueSampledData->jsonSerialize();
        if (null !== $this->valueSignature) $json['valueSignature'] = $this->valueSignature->jsonSerialize();
        if (null !== $this->valueTiming) $json['valueTiming'] = $this->valueTiming->jsonSerialize();
        if (null !== $this->valueMeta) $json['valueMeta'] = $this->valueMeta->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TaskInput xmlns="http://hl7.org/fhir"></TaskInput>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->valueBase64Binary) $this->valueBase64Binary->xmlSerialize(true, $sxe->addChild('valueBase64Binary'));
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueCode) $this->valueCode->xmlSerialize(true, $sxe->addChild('valueCode'));
        if (null !== $this->valueDate) $this->valueDate->xmlSerialize(true, $sxe->addChild('valueDate'));
        if (null !== $this->valueDateTime) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (null !== $this->valueDecimal) $this->valueDecimal->xmlSerialize(true, $sxe->addChild('valueDecimal'));
        if (null !== $this->valueId) $this->valueId->xmlSerialize(true, $sxe->addChild('valueId'));
        if (null !== $this->valueInstant) $this->valueInstant->xmlSerialize(true, $sxe->addChild('valueInstant'));
        if (null !== $this->valueInteger) $this->valueInteger->xmlSerialize(true, $sxe->addChild('valueInteger'));
        if (null !== $this->valueMarkdown) $this->valueMarkdown->xmlSerialize(true, $sxe->addChild('valueMarkdown'));
        if (null !== $this->valueOid) $this->valueOid->xmlSerialize(true, $sxe->addChild('valueOid'));
        if (null !== $this->valuePositiveInt) $this->valuePositiveInt->xmlSerialize(true, $sxe->addChild('valuePositiveInt'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->valueTime) $this->valueTime->xmlSerialize(true, $sxe->addChild('valueTime'));
        if (null !== $this->valueUnsignedInt) $this->valueUnsignedInt->xmlSerialize(true, $sxe->addChild('valueUnsignedInt'));
        if (null !== $this->valueUri) $this->valueUri->xmlSerialize(true, $sxe->addChild('valueUri'));
        if (null !== $this->valueAddress) $this->valueAddress->xmlSerialize(true, $sxe->addChild('valueAddress'));
        if (null !== $this->valueAge) $this->valueAge->xmlSerialize(true, $sxe->addChild('valueAge'));
        if (null !== $this->valueAnnotation) $this->valueAnnotation->xmlSerialize(true, $sxe->addChild('valueAnnotation'));
        if (null !== $this->valueAttachment) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (null !== $this->valueCodeableConcept) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (null !== $this->valueCoding) $this->valueCoding->xmlSerialize(true, $sxe->addChild('valueCoding'));
        if (null !== $this->valueContactPoint) $this->valueContactPoint->xmlSerialize(true, $sxe->addChild('valueContactPoint'));
        if (null !== $this->valueCount) $this->valueCount->xmlSerialize(true, $sxe->addChild('valueCount'));
        if (null !== $this->valueDistance) $this->valueDistance->xmlSerialize(true, $sxe->addChild('valueDistance'));
        if (null !== $this->valueDuration) $this->valueDuration->xmlSerialize(true, $sxe->addChild('valueDuration'));
        if (null !== $this->valueHumanName) $this->valueHumanName->xmlSerialize(true, $sxe->addChild('valueHumanName'));
        if (null !== $this->valueIdentifier) $this->valueIdentifier->xmlSerialize(true, $sxe->addChild('valueIdentifier'));
        if (null !== $this->valueMoney) $this->valueMoney->xmlSerialize(true, $sxe->addChild('valueMoney'));
        if (null !== $this->valuePeriod) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (null !== $this->valueQuantity) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (null !== $this->valueRange) $this->valueRange->xmlSerialize(true, $sxe->addChild('valueRange'));
        if (null !== $this->valueRatio) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (null !== $this->valueReference) $this->valueReference->xmlSerialize(true, $sxe->addChild('valueReference'));
        if (null !== $this->valueSampledData) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (null !== $this->valueSignature) $this->valueSignature->xmlSerialize(true, $sxe->addChild('valueSignature'));
        if (null !== $this->valueTiming) $this->valueTiming->xmlSerialize(true, $sxe->addChild('valueTiming'));
        if (null !== $this->valueMeta) $this->valueMeta->xmlSerialize(true, $sxe->addChild('valueMeta'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}