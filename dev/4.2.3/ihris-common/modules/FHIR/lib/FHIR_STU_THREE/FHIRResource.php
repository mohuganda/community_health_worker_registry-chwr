<?php namespace FHIR_STU_THREE;

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

use FHIR_STU_THREE\JsonSerializable;

/**
 * This is the base resource type for everything.
 */
class FHIRResource implements JsonSerializable
{
    /**
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public $id = null;

    /**
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content may not always be associated with version changes to the resource.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public $meta = null;

    /**
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public $implicitRules = null;

    /**
     * The base language in which the resource is written.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public $language = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Resource';

    /**
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRId $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content may not always be associated with version changes to the resource.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMeta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content may not always be associated with version changes to the resource.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMeta $meta
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public function getImplicitRules()
    {
        return $this->implicitRules;
    }

    /**
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUri $implicitRules
     * @return $this
     */
    public function setImplicitRules($implicitRules)
    {
        $this->implicitRules = $implicitRules;
        return $this;
    }

    /**
     * The base language in which the resource is written.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The base language in which the resource is written.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCode $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
        return (string)$this->getId();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = array();
        if (null !== $this->id) $json['id'] = $this->id->jsonSerialize();
        if (null !== $this->meta) $json['meta'] = $this->meta->jsonSerialize();
        if (null !== $this->implicitRules) $json['implicitRules'] = $this->implicitRules->jsonSerialize();
        if (null !== $this->language) $json['language'] = $this->language->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Resource xmlns="http://hl7.org/fhir"></Resource>');
        if (null !== $this->id) $this->id->xmlSerialize(true, $sxe->addChild('id'));
        if (null !== $this->meta) $this->meta->xmlSerialize(true, $sxe->addChild('meta'));
        if (null !== $this->implicitRules) $this->implicitRules->xmlSerialize(true, $sxe->addChild('implicitRules'));
        if (null !== $this->language) $this->language->xmlSerialize(true, $sxe->addChild('language'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}