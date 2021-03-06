<?php namespace DSTU_TWO\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 13th, 2016
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DSTU_TWO\FHIRResource\FHIRDomainResource;
use DSTU_TWO\JsonSerializable;

/**
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRQuestionnaireResponse extends FHIRDomainResource implements JsonSerializable
{
    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @var \DSTU_TWO\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Indicates the Questionnaire resource that defines the form for which answers are being provided.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $questionnaire = null;

    /**
     * The lifecycle status of the questionnaire response as a whole.
     * @var \DSTU_TWO\FHIRElement\FHIRQuestionnaireResponseStatus
     */
    public $status = null;

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * The date and/or time that this version of the questionnaire response was authored.
     * @var \DSTU_TWO\FHIRElement\FHIRDateTime
     */
    public $authored = null;

    /**
     * The person who answered the questions about the subject.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * Encounter during which this set of questionnaire response were collected. When there were multiple encounters, this is the one considered most relevant to the context of the answers.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * A group of questions to a possibly similarly grouped set of questions in the questionnaire response.
     * @var \DSTU_TWO\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup
     */
    public $group = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'QuestionnaireResponse';

    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @return \DSTU_TWO\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @param \DSTU_TWO\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Indicates the Questionnaire resource that defines the form for which answers are being provided.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Indicates the Questionnaire resource that defines the form for which answers are being provided.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $questionnaire
     * @return $this
     */
    public function setQuestionnaire($questionnaire)
    {
        $this->questionnaire = $questionnaire;
        return $this;
    }

    /**
     * The lifecycle status of the questionnaire response as a whole.
     * @return \DSTU_TWO\FHIRElement\FHIRQuestionnaireResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The lifecycle status of the questionnaire response as a whole.
     * @param \DSTU_TWO\FHIRElement\FHIRQuestionnaireResponseStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * The date and/or time that this version of the questionnaire response was authored.
     * @return \DSTU_TWO\FHIRElement\FHIRDateTime
     */
    public function getAuthored()
    {
        return $this->authored;
    }

    /**
     * The date and/or time that this version of the questionnaire response was authored.
     * @param \DSTU_TWO\FHIRElement\FHIRDateTime $authored
     * @return $this
     */
    public function setAuthored($authored)
    {
        $this->authored = $authored;
        return $this;
    }

    /**
     * The person who answered the questions about the subject.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The person who answered the questions about the subject.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Encounter during which this set of questionnaire response were collected. When there were multiple encounters, this is the one considered most relevant to the context of the answers.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Encounter during which this set of questionnaire response were collected. When there were multiple encounters, this is the one considered most relevant to the context of the answers.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A group of questions to a possibly similarly grouped set of questions in the questionnaire response.
     * @return \DSTU_TWO\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A group of questions to a possibly similarly grouped set of questions in the questionnaire response.
     * @param \DSTU_TWO\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier->jsonSerialize();
        if (null !== $this->questionnaire) $json['questionnaire'] = $this->questionnaire->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->subject) $json['subject'] = $this->subject->jsonSerialize();
        if (null !== $this->author) $json['author'] = $this->author->jsonSerialize();
        if (null !== $this->authored) $json['authored'] = $this->authored->jsonSerialize();
        if (null !== $this->source) $json['source'] = $this->source->jsonSerialize();
        if (null !== $this->encounter) $json['encounter'] = $this->encounter->jsonSerialize();
        if (null !== $this->group) $json['group'] = $this->group->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireResponse xmlns="http://hl7.org/fhir"></QuestionnaireResponse>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->questionnaire) $this->questionnaire->xmlSerialize(true, $sxe->addChild('questionnaire'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->author) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (null !== $this->authored) $this->authored->xmlSerialize(true, $sxe->addChild('authored'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->group) $this->group->xmlSerialize(true, $sxe->addChild('group'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}