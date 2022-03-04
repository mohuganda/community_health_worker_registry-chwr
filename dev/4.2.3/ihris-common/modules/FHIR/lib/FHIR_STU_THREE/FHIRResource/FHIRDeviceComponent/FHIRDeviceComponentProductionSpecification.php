<?php namespace FHIR_STU_THREE\FHIRResource\FHIRDeviceComponent;

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
 * Describes the characteristics, operational status and capabilities of a medical-related component of a medical device.
 */
class FHIRDeviceComponentProductionSpecification extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Describes the specification type, such as, serial number, part number, hardware revision, software revision, etc.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $specType = null;

    /**
     * Describes the internal component unique identification. This is a provision for manufacture specific standard components using a private OID. 11073-10101 has a partition for private OID semantic that the manufacture can make use of.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public $componentId = null;

    /**
     * Describes the printable string defining the component.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $productionSpec = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceComponent.ProductionSpecification';

    /**
     * Describes the specification type, such as, serial number, part number, hardware revision, software revision, etc.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecType()
    {
        return $this->specType;
    }

    /**
     * Describes the specification type, such as, serial number, part number, hardware revision, software revision, etc.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $specType
     * @return $this
     */
    public function setSpecType($specType)
    {
        $this->specType = $specType;
        return $this;
    }

    /**
     * Describes the internal component unique identification. This is a provision for manufacture specific standard components using a private OID. 11073-10101 has a partition for private OID semantic that the manufacture can make use of.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRIdentifier
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * Describes the internal component unique identification. This is a provision for manufacture specific standard components using a private OID. 11073-10101 has a partition for private OID semantic that the manufacture can make use of.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRIdentifier $componentId
     * @return $this
     */
    public function setComponentId($componentId)
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * Describes the printable string defining the component.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getProductionSpec()
    {
        return $this->productionSpec;
    }

    /**
     * Describes the printable string defining the component.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $productionSpec
     * @return $this
     */
    public function setProductionSpec($productionSpec)
    {
        $this->productionSpec = $productionSpec;
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
        if (null !== $this->specType) $json['specType'] = $this->specType->jsonSerialize();
        if (null !== $this->componentId) $json['componentId'] = $this->componentId->jsonSerialize();
        if (null !== $this->productionSpec) $json['productionSpec'] = $this->productionSpec->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceComponentProductionSpecification xmlns="http://hl7.org/fhir"></DeviceComponentProductionSpecification>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->specType) $this->specType->xmlSerialize(true, $sxe->addChild('specType'));
        if (null !== $this->componentId) $this->componentId->xmlSerialize(true, $sxe->addChild('componentId'));
        if (null !== $this->productionSpec) $this->productionSpec->xmlSerialize(true, $sxe->addChild('productionSpec'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}