<?php namespace FHIR_STU_THREE\FHIRDomainResource;

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

use FHIR_STU_THREE\FHIRResource\FHIRDomainResource;
use FHIR_STU_THREE\JsonSerializable;

/**
 * A compartment definition that defines how resources are accessed on a server.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCompartmentDefinition extends FHIRDomainResource implements JsonSerializable
{
    /**
     * An absolute URL that is used to identify this compartment definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this compartment definition is (or will be) published.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A free text natural language name identifying the compartment definition.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of this compartment definition definition.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRConformanceResourceStatus
     */
    public $status = null;

    /**
     * A flag to indicate that this compartment definition definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the compartment definition.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRCompartmentDefinition\FHIRCompartmentDefinitionContact[]
     */
    public $contact = array();

    /**
     * The date  (and optionally time) when the compartment definition definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the compartment definition changes.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the CompartmentDefinition and its use.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The Scope and Usage that this compartment definition was created to meet.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public $requirements = null;

    /**
     * Which compartment this definition describes.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCompartmentType
     */
    public $code = null;

    /**
     * Whether the search syntax is supported.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public $search = null;

    /**
     * Information about how a resource it related to the compartment.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource[]
     */
    public $resource = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'CompartmentDefinition';

    /**
     * An absolute URL that is used to identify this compartment definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this compartment definition is (or will be) published.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this compartment definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this compartment definition is (or will be) published.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A free text natural language name identifying the compartment definition.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the compartment definition.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of this compartment definition definition.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRConformanceResourceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this compartment definition definition.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRConformanceResourceStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A flag to indicate that this compartment definition definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A flag to indicate that this compartment definition definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the compartment definition.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the compartment definition.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRCompartmentDefinition\FHIRCompartmentDefinitionContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRCompartmentDefinition\FHIRCompartmentDefinitionContact[] $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date  (and optionally time) when the compartment definition definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the compartment definition changes.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the compartment definition definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the compartment definition changes.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A free text natural language description of the CompartmentDefinition and its use.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the CompartmentDefinition and its use.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The Scope and Usage that this compartment definition was created to meet.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRMarkdown
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * The Scope and Usage that this compartment definition was created to meet.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRMarkdown $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Which compartment this definition describes.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCompartmentType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Which compartment this definition describes.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCompartmentType $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Whether the search syntax is supported.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRBoolean
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Whether the search syntax is supported.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRBoolean $search
     * @return $this
     */
    public function setSearch($search)
    {
        $this->search = $search;
        return $this;
    }

    /**
     * Information about how a resource it related to the compartment.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Information about how a resource it related to the compartment.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource[] $resource
     * @return $this
     */
    public function addResource($resource)
    {
        $this->resource[] = $resource;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->url) $json['url'] = $this->url->jsonSerialize();
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->experimental) $json['experimental'] = $this->experimental->jsonSerialize();
        if (null !== $this->publisher) $json['publisher'] = $this->publisher->jsonSerialize();
        if (0 < count($this->contact)) {
            $json['contact'] = array();
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact->jsonSerialize();
            }
        }
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->description) $json['description'] = $this->description->jsonSerialize();
        if (null !== $this->requirements) $json['requirements'] = $this->requirements->jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (null !== $this->search) $json['search'] = $this->search->jsonSerialize();
        if (0 < count($this->resource)) {
            $json['resource'] = array();
            foreach($this->resource as $resource) {
                $json['resource'][] = $resource->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CompartmentDefinition xmlns="http://hl7.org/fhir"></CompartmentDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->search) $this->search->xmlSerialize(true, $sxe->addChild('search'));
        if (0 < count($this->resource)) {
            foreach($this->resource as $resource) {
                $resource->xmlSerialize(true, $sxe->addChild('resource'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}