<?php namespace FHIR_STU_THREE\FHIRResource\FHIRAppointment;

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
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 */
class FHIRAppointmentParticipant extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Role of participant in the appointment.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = array();

    /**
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $actor = null;

    /**
     * Is this participant required to be present at the meeting. This covers a use-case where 2 doctors need to meet to discuss the results for a specific patient, and the patient is not required to be present.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRParticipantRequired
     */
    public $required = null;

    /**
     * Participation status of the Patient.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRParticipationStatus
     */
    public $status = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Appointment.Participant';

    /**
     * Role of participant in the appointment.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Role of participant in the appointment.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept[] $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $actor
     * @return $this
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Is this participant required to be present at the meeting. This covers a use-case where 2 doctors need to meet to discuss the results for a specific patient, and the patient is not required to be present.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRParticipantRequired
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Is this participant required to be present at the meeting. This covers a use-case where 2 doctors need to meet to discuss the results for a specific patient, and the patient is not required to be present.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRParticipantRequired $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Participation status of the Patient.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRParticipationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Participation status of the Patient.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRParticipationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
        if (0 < count($this->type)) {
            $json['type'] = array();
            foreach($this->type as $type) {
                $json['type'][] = $type->jsonSerialize();
            }
        }
        if (null !== $this->actor) $json['actor'] = $this->actor->jsonSerialize();
        if (null !== $this->required) $json['required'] = $this->required->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AppointmentParticipant xmlns="http://hl7.org/fhir"></AppointmentParticipant>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->actor) $this->actor->xmlSerialize(true, $sxe->addChild('actor'));
        if (null !== $this->required) $this->required->xmlSerialize(true, $sxe->addChild('required'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}