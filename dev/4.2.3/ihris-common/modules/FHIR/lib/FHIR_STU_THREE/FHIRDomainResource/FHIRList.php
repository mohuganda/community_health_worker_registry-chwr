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
 * A set of information summarized from a list of other resources.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRList extends FHIRDomainResource implements JsonSerializable
{
    /**
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Indicates the current state of this list.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRListStatus
     */
    public $status = null;

    /**
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRListMode
     */
    public $mode = null;

    /**
     * A label for the list assigned by the author.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * This code defines the purpose of the list - why it was created.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The common subject (or patient) of the resources that are in the list, if there is one.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter that is the context in which this list was created.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The date that the list was prepared.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * What order applies to the items in the list.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $orderedBy = null;

    /**
     * Comments that apply to the overall list.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Entries in this list.
     * @var \FHIR_STU_THREE\FHIRResource\FHIRList\FHIRListEntry[]
     */
    public $entry = array();

    /**
     * If the list is empty, why the list is empty.
     * @var \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public $emptyReason = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'List';

    /**
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates the current state of this list.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRListStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the current state of this list.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRListStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRListMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRListMode $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * A label for the list assigned by the author.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A label for the list assigned by the author.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * This code defines the purpose of the list - why it was created.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * This code defines the purpose of the list - why it was created.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The common subject (or patient) of the resources that are in the list, if there is one.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The common subject (or patient) of the resources that are in the list, if there is one.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter that is the context in which this list was created.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The encounter that is the context in which this list was created.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The date that the list was prepared.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date that the list was prepared.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * What order applies to the items in the list.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * What order applies to the items in the list.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $orderedBy
     * @return $this
     */
    public function setOrderedBy($orderedBy)
    {
        $this->orderedBy = $orderedBy;
        return $this;
    }

    /**
     * Comments that apply to the overall list.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Comments that apply to the overall list.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRAnnotation[] $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Entries in this list.
     * @return \FHIR_STU_THREE\FHIRResource\FHIRList\FHIRListEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Entries in this list.
     * @param \FHIR_STU_THREE\FHIRResource\FHIRList\FHIRListEntry[] $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * If the list is empty, why the list is empty.
     * @return \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }

    /**
     * If the list is empty, why the list is empty.
     * @param \FHIR_STU_THREE\FHIRElement\FHIRCodeableConcept $emptyReason
     * @return $this
     */
    public function setEmptyReason($emptyReason)
    {
        $this->emptyReason = $emptyReason;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->mode) $json['mode'] = $this->mode->jsonSerialize();
        if (null !== $this->title) $json['title'] = $this->title->jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (null !== $this->subject) $json['subject'] = $this->subject->jsonSerialize();
        if (null !== $this->encounter) $json['encounter'] = $this->encounter->jsonSerialize();
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->source) $json['source'] = $this->source->jsonSerialize();
        if (null !== $this->orderedBy) $json['orderedBy'] = $this->orderedBy->jsonSerialize();
        if (0 < count($this->note)) {
            $json['note'] = array();
            foreach($this->note as $note) {
                $json['note'][] = $note->jsonSerialize();
            }
        }
        if (0 < count($this->entry)) {
            $json['entry'] = array();
            foreach($this->entry as $entry) {
                $json['entry'][] = $entry->jsonSerialize();
            }
        }
        if (null !== $this->emptyReason) $json['emptyReason'] = $this->emptyReason->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<List xmlns="http://hl7.org/fhir"></List>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->mode) $this->mode->xmlSerialize(true, $sxe->addChild('mode'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->orderedBy) $this->orderedBy->xmlSerialize(true, $sxe->addChild('orderedBy'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->entry)) {
            foreach($this->entry as $entry) {
                $entry->xmlSerialize(true, $sxe->addChild('entry'));
            }
        }
        if (null !== $this->emptyReason) $this->emptyReason->xmlSerialize(true, $sxe->addChild('emptyReason'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}