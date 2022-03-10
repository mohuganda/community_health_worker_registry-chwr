<?php namespace FHIR_STU_THREE\FHIRResource\FHIRClaimResponse;

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
 * This resource provides the adjudication details from the processing of a Claim resource.
 */
class FHIRClaimResponseAddItem extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * List of input service items which this service line is intended to replace.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt[]
     */
    public $sequenceLinkId = array();

    /**
     * The type of reveneu or cost center providing the product and/or service.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public $revenue = null;

    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public $category = null;

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public $service = null;

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCoding[]
     */
    public $modifier = array();

    /**
     * The fee charged for the professional service or product..
     * @var \FHIR_STU_THREE\FHIRMoney
     */
    public $fee = null;

    /**
     * A list of note references to the notes provided below.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt[]
     */
    public $noteNumber = array();

    /**
     * The adjudications results.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public $adjudication = array();

    /**
     * The second tier service adjudications for payor added services.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    public $detail = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ClaimResponse.AddItem';

    /**
     * List of input service items which this service line is intended to replace.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt[]
     */
    public function getSequenceLinkId()
    {
        return $this->sequenceLinkId;
    }

    /**
     * List of input service items which this service line is intended to replace.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt[] $sequenceLinkId
     * @return $this
     */
    public function addSequenceLinkId($sequenceLinkId)
    {
        $this->sequenceLinkId[] = $sequenceLinkId;
        return $this;
    }

    /**
     * The type of reveneu or cost center providing the product and/or service.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * The type of reveneu or cost center providing the product and/or service.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding $revenue
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Health Care Service Type Codes  to identify the classification of service or benefits.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A code to indicate the Professional Service or Product supplied.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding $service
     * @return $this
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCoding[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCoding[] $modifier
     * @return $this
     */
    public function addModifier($modifier)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * The fee charged for the professional service or product..
     * @return \FHIR_STU_THREE\FHIRMoney
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * The fee charged for the professional service or product..
     * @param \FHIR_STU_THREE\FHIRMoney $fee
     * @return $this
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * A list of note references to the notes provided below.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
    }

    /**
     * A list of note references to the notes provided below.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPositiveInt[] $noteNumber
     * @return $this
     */
    public function addNoteNumber($noteNumber)
    {
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * The adjudications results.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * The adjudications results.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAdjudication[] $adjudication
     * @return $this
     */
    public function addAdjudication($adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * The second tier service adjudications for payor added services.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * The second tier service adjudications for payor added services.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRClaimResponse\FHIRClaimResponseDetail1[] $detail
     * @return $this
     */
    public function addDetail($detail)
    {
        $this->detail[] = $detail;
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
        if (0 < count($this->sequenceLinkId)) {
            $json['sequenceLinkId'] = array();
            foreach($this->sequenceLinkId as $sequenceLinkId) {
                $json['sequenceLinkId'][] = $sequenceLinkId->jsonSerialize();
            }
        }
        if (null !== $this->revenue) $json['revenue'] = $this->revenue->jsonSerialize();
        if (null !== $this->category) $json['category'] = $this->category->jsonSerialize();
        if (null !== $this->service) $json['service'] = $this->service->jsonSerialize();
        if (0 < count($this->modifier)) {
            $json['modifier'] = array();
            foreach($this->modifier as $modifier) {
                $json['modifier'][] = $modifier->jsonSerialize();
            }
        }
        if (null !== $this->fee) $json['fee'] = $this->fee->jsonSerialize();
        if (0 < count($this->noteNumber)) {
            $json['noteNumber'] = array();
            foreach($this->noteNumber as $noteNumber) {
                $json['noteNumber'][] = $noteNumber->jsonSerialize();
            }
        }
        if (0 < count($this->adjudication)) {
            $json['adjudication'] = array();
            foreach($this->adjudication as $adjudication) {
                $json['adjudication'][] = $adjudication->jsonSerialize();
            }
        }
        if (0 < count($this->detail)) {
            $json['detail'] = array();
            foreach($this->detail as $detail) {
                $json['detail'][] = $detail->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimResponseAddItem xmlns="http://hl7.org/fhir"></ClaimResponseAddItem>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->sequenceLinkId)) {
            foreach($this->sequenceLinkId as $sequenceLinkId) {
                $sequenceLinkId->xmlSerialize(true, $sxe->addChild('sequenceLinkId'));
            }
        }
        if (null !== $this->revenue) $this->revenue->xmlSerialize(true, $sxe->addChild('revenue'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->service) $this->service->xmlSerialize(true, $sxe->addChild('service'));
        if (0 < count($this->modifier)) {
            foreach($this->modifier as $modifier) {
                $modifier->xmlSerialize(true, $sxe->addChild('modifier'));
            }
        }
        if (null !== $this->fee) $this->fee->xmlSerialize(true, $sxe->addChild('fee'));
        if (0 < count($this->noteNumber)) {
            foreach($this->noteNumber as $noteNumber) {
                $noteNumber->xmlSerialize(true, $sxe->addChild('noteNumber'));
            }
        }
        if (0 < count($this->adjudication)) {
            foreach($this->adjudication as $adjudication) {
                $adjudication->xmlSerialize(true, $sxe->addChild('adjudication'));
            }
        }
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}