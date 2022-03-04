<?php namespace FHIR_STU_THREE\FHIRResource\FHIRPractitioner;

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
 * A person who is directly or indirectly involved in the provisioning of healthcare.
 */
class FHIRPractitionerRole extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The organization where the Practitioner performs the roles associated.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Specific specialty of the practitioner.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialty = array();

    /**
     * Business Identifiers that are specific to a role/location.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Contact details that are specific to the role/location/service.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The location(s) at which this practitioner provides care.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference[]
     */
    public $location = array();

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference[]
     */
    public $healthcareService = array();

    /**
     * Technical endpoints providing access to services operated for the PractitonerRole.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference[]
     */
    public $endpoint = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Practitioner.Role';

    /**
     * The organization where the Practitioner performs the roles associated.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The organization where the Practitioner performs the roles associated.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Specific specialty of the practitioner.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Specific specialty of the practitioner.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept[] $specialty
     * @return $this
     */
    public function addSpecialty($specialty)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * Business Identifiers that are specific to a role/location.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Business Identifiers that are specific to a role/location.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Contact details that are specific to the role/location/service.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Contact details that are specific to the role/location/service.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRContactPoint[] $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The location(s) at which this practitioner provides care.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location(s) at which this practitioner provides care.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference[] $location
     * @return $this
     */
    public function addLocation($location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference[]
     */
    public function getHealthcareService()
    {
        return $this->healthcareService;
    }

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference[] $healthcareService
     * @return $this
     */
    public function addHealthcareService($healthcareService)
    {
        $this->healthcareService[] = $healthcareService;
        return $this;
    }

    /**
     * Technical endpoints providing access to services operated for the PractitonerRole.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Technical endpoints providing access to services operated for the PractitonerRole.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference[] $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint)
    {
        $this->endpoint[] = $endpoint;
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
        if (null !== $this->organization) $json['organization'] = $this->organization->jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (0 < count($this->specialty)) {
            $json['specialty'] = array();
            foreach($this->specialty as $specialty) {
                $json['specialty'][] = $specialty->jsonSerialize();
            }
        }
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (0 < count($this->telecom)) {
            $json['telecom'] = array();
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = $telecom->jsonSerialize();
            }
        }
        if (null !== $this->period) $json['period'] = $this->period->jsonSerialize();
        if (0 < count($this->location)) {
            $json['location'] = array();
            foreach($this->location as $location) {
                $json['location'][] = $location->jsonSerialize();
            }
        }
        if (0 < count($this->healthcareService)) {
            $json['healthcareService'] = array();
            foreach($this->healthcareService as $healthcareService) {
                $json['healthcareService'][] = $healthcareService->jsonSerialize();
            }
        }
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = array();
            foreach($this->endpoint as $endpoint) {
                $json['endpoint'][] = $endpoint->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PractitionerRole xmlns="http://hl7.org/fhir"></PractitionerRole>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->organization) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (0 < count($this->specialty)) {
            foreach($this->specialty as $specialty) {
                $specialty->xmlSerialize(true, $sxe->addChild('specialty'));
            }
        }
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
        if (0 < count($this->healthcareService)) {
            foreach($this->healthcareService as $healthcareService) {
                $healthcareService->xmlSerialize(true, $sxe->addChild('healthcareService'));
            }
        }
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}