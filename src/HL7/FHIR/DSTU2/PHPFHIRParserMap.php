<?php namespace App\HL7\FHIR\DSTU2;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 8th, 2019
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 */

class PHPFHIRParserMap implements \ArrayAccess, \Iterator
{
    /** @var array */
    private $_bigDumbMap = array (
  'markdown' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'markdown-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'integer' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'integer-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'dateTime' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'dateTime-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'unsignedInt' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'unsignedInt-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'code' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'code-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'date' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'date-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'decimal' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'uri' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'uri-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'id' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'base64Binary' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'base64Binary-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'time' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'time-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'oid' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'oid-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'positiveInt' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'positiveInt-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'string' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'boolean' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'boolean-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'uuid' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'uuid-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'instant' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'instant-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'ResourceContainer' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
    'extendedElementName' => NULL,
    'properties' => 
    array (
      'Account' => 
      array (
        'setter' => 'setAccount',
        'element' => 'Account',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAccount',
      ),
      'AllergyIntolerance' => 
      array (
        'setter' => 'setAllergyIntolerance',
        'element' => 'AllergyIntolerance',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAllergyIntolerance',
      ),
      'Appointment' => 
      array (
        'setter' => 'setAppointment',
        'element' => 'Appointment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAppointment',
      ),
      'AppointmentResponse' => 
      array (
        'setter' => 'setAppointmentResponse',
        'element' => 'AppointmentResponse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAppointmentResponse',
      ),
      'AuditEvent' => 
      array (
        'setter' => 'setAuditEvent',
        'element' => 'AuditEvent',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAuditEvent',
      ),
      'Basic' => 
      array (
        'setter' => 'setBasic',
        'element' => 'Basic',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRBasic',
      ),
      'Binary' => 
      array (
        'setter' => 'setBinary',
        'element' => 'Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBinary',
      ),
      'BodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'BodySite',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRBodySite',
      ),
      'Bundle' => 
      array (
        'setter' => 'setBundle',
        'element' => 'Bundle',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle',
      ),
      'CarePlan' => 
      array (
        'setter' => 'setCarePlan',
        'element' => 'CarePlan',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCarePlan',
      ),
      'Claim' => 
      array (
        'setter' => 'setClaim',
        'element' => 'Claim',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRClaim',
      ),
      'ClaimResponse' => 
      array (
        'setter' => 'setClaimResponse',
        'element' => 'ClaimResponse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRClaimResponse',
      ),
      'ClinicalImpression' => 
      array (
        'setter' => 'setClinicalImpression',
        'element' => 'ClinicalImpression',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRClinicalImpression',
      ),
      'Communication' => 
      array (
        'setter' => 'setCommunication',
        'element' => 'Communication',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCommunication',
      ),
      'CommunicationRequest' => 
      array (
        'setter' => 'setCommunicationRequest',
        'element' => 'CommunicationRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCommunicationRequest',
      ),
      'Composition' => 
      array (
        'setter' => 'setComposition',
        'element' => 'Composition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRComposition',
      ),
      'ConceptMap' => 
      array (
        'setter' => 'setConceptMap',
        'element' => 'ConceptMap',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRConceptMap',
      ),
      'Condition' => 
      array (
        'setter' => 'setCondition',
        'element' => 'Condition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCondition',
      ),
      'Conformance' => 
      array (
        'setter' => 'setConformance',
        'element' => 'Conformance',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRConformance',
      ),
      'Contract' => 
      array (
        'setter' => 'setContract',
        'element' => 'Contract',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRContract',
      ),
      'Coverage' => 
      array (
        'setter' => 'setCoverage',
        'element' => 'Coverage',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCoverage',
      ),
      'DataElement' => 
      array (
        'setter' => 'setDataElement',
        'element' => 'DataElement',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDataElement',
      ),
      'DetectedIssue' => 
      array (
        'setter' => 'setDetectedIssue',
        'element' => 'DetectedIssue',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDetectedIssue',
      ),
      'Device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Device',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDevice',
      ),
      'DeviceComponent' => 
      array (
        'setter' => 'setDeviceComponent',
        'element' => 'DeviceComponent',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDeviceComponent',
      ),
      'DeviceMetric' => 
      array (
        'setter' => 'setDeviceMetric',
        'element' => 'DeviceMetric',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDeviceMetric',
      ),
      'DeviceUseRequest' => 
      array (
        'setter' => 'setDeviceUseRequest',
        'element' => 'DeviceUseRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDeviceUseRequest',
      ),
      'DeviceUseStatement' => 
      array (
        'setter' => 'setDeviceUseStatement',
        'element' => 'DeviceUseStatement',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDeviceUseStatement',
      ),
      'DiagnosticOrder' => 
      array (
        'setter' => 'setDiagnosticOrder',
        'element' => 'DiagnosticOrder',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDiagnosticOrder',
      ),
      'DiagnosticReport' => 
      array (
        'setter' => 'setDiagnosticReport',
        'element' => 'DiagnosticReport',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDiagnosticReport',
      ),
      'DocumentManifest' => 
      array (
        'setter' => 'setDocumentManifest',
        'element' => 'DocumentManifest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDocumentManifest',
      ),
      'DocumentReference' => 
      array (
        'setter' => 'setDocumentReference',
        'element' => 'DocumentReference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDocumentReference',
      ),
      'EligibilityRequest' => 
      array (
        'setter' => 'setEligibilityRequest',
        'element' => 'EligibilityRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREligibilityRequest',
      ),
      'EligibilityResponse' => 
      array (
        'setter' => 'setEligibilityResponse',
        'element' => 'EligibilityResponse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREligibilityResponse',
      ),
      'Encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Encounter',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREncounter',
      ),
      'EnrollmentRequest' => 
      array (
        'setter' => 'setEnrollmentRequest',
        'element' => 'EnrollmentRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREnrollmentRequest',
      ),
      'EnrollmentResponse' => 
      array (
        'setter' => 'setEnrollmentResponse',
        'element' => 'EnrollmentResponse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREnrollmentResponse',
      ),
      'EpisodeOfCare' => 
      array (
        'setter' => 'setEpisodeOfCare',
        'element' => 'EpisodeOfCare',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREpisodeOfCare',
      ),
      'ExplanationOfBenefit' => 
      array (
        'setter' => 'setExplanationOfBenefit',
        'element' => 'ExplanationOfBenefit',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRExplanationOfBenefit',
      ),
      'FamilyMemberHistory' => 
      array (
        'setter' => 'setFamilyMemberHistory',
        'element' => 'FamilyMemberHistory',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRFamilyMemberHistory',
      ),
      'Flag' => 
      array (
        'setter' => 'setFlag',
        'element' => 'Flag',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRFlag',
      ),
      'Goal' => 
      array (
        'setter' => 'setGoal',
        'element' => 'Goal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRGoal',
      ),
      'Group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'Group',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRGroup',
      ),
      'HealthcareService' => 
      array (
        'setter' => 'setHealthcareService',
        'element' => 'HealthcareService',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRHealthcareService',
      ),
      'ImagingObjectSelection' => 
      array (
        'setter' => 'setImagingObjectSelection',
        'element' => 'ImagingObjectSelection',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImagingObjectSelection',
      ),
      'ImagingStudy' => 
      array (
        'setter' => 'setImagingStudy',
        'element' => 'ImagingStudy',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImagingStudy',
      ),
      'Immunization' => 
      array (
        'setter' => 'setImmunization',
        'element' => 'Immunization',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImmunization',
      ),
      'ImmunizationRecommendation' => 
      array (
        'setter' => 'setImmunizationRecommendation',
        'element' => 'ImmunizationRecommendation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImmunizationRecommendation',
      ),
      'ImplementationGuide' => 
      array (
        'setter' => 'setImplementationGuide',
        'element' => 'ImplementationGuide',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImplementationGuide',
      ),
      'List' => 
      array (
        'setter' => 'setList',
        'element' => 'List',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRList',
      ),
      'Location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Location',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRLocation',
      ),
      'Media' => 
      array (
        'setter' => 'setMedia',
        'element' => 'Media',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedia',
      ),
      'Medication' => 
      array (
        'setter' => 'setMedication',
        'element' => 'Medication',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedication',
      ),
      'MedicationAdministration' => 
      array (
        'setter' => 'setMedicationAdministration',
        'element' => 'MedicationAdministration',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedicationAdministration',
      ),
      'MedicationDispense' => 
      array (
        'setter' => 'setMedicationDispense',
        'element' => 'MedicationDispense',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedicationDispense',
      ),
      'MedicationOrder' => 
      array (
        'setter' => 'setMedicationOrder',
        'element' => 'MedicationOrder',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedicationOrder',
      ),
      'MedicationStatement' => 
      array (
        'setter' => 'setMedicationStatement',
        'element' => 'MedicationStatement',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedicationStatement',
      ),
      'MessageHeader' => 
      array (
        'setter' => 'setMessageHeader',
        'element' => 'MessageHeader',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMessageHeader',
      ),
      'NamingSystem' => 
      array (
        'setter' => 'setNamingSystem',
        'element' => 'NamingSystem',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRNamingSystem',
      ),
      'NutritionOrder' => 
      array (
        'setter' => 'setNutritionOrder',
        'element' => 'NutritionOrder',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRNutritionOrder',
      ),
      'Observation' => 
      array (
        'setter' => 'setObservation',
        'element' => 'Observation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRObservation',
      ),
      'OperationDefinition' => 
      array (
        'setter' => 'setOperationDefinition',
        'element' => 'OperationDefinition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROperationDefinition',
      ),
      'OperationOutcome' => 
      array (
        'setter' => 'setOperationOutcome',
        'element' => 'OperationOutcome',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROperationOutcome',
      ),
      'Order' => 
      array (
        'setter' => 'setOrder',
        'element' => 'Order',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROrder',
      ),
      'OrderResponse' => 
      array (
        'setter' => 'setOrderResponse',
        'element' => 'OrderResponse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROrderResponse',
      ),
      'Organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Organization',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROrganization',
      ),
      'Patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Patient',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPatient',
      ),
      'PaymentNotice' => 
      array (
        'setter' => 'setPaymentNotice',
        'element' => 'PaymentNotice',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPaymentNotice',
      ),
      'PaymentReconciliation' => 
      array (
        'setter' => 'setPaymentReconciliation',
        'element' => 'PaymentReconciliation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPaymentReconciliation',
      ),
      'Person' => 
      array (
        'setter' => 'setPerson',
        'element' => 'Person',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPerson',
      ),
      'Practitioner' => 
      array (
        'setter' => 'setPractitioner',
        'element' => 'Practitioner',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPractitioner',
      ),
      'Procedure' => 
      array (
        'setter' => 'setProcedure',
        'element' => 'Procedure',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProcedure',
      ),
      'ProcedureRequest' => 
      array (
        'setter' => 'setProcedureRequest',
        'element' => 'ProcedureRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProcedureRequest',
      ),
      'ProcessRequest' => 
      array (
        'setter' => 'setProcessRequest',
        'element' => 'ProcessRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProcessRequest',
      ),
      'ProcessResponse' => 
      array (
        'setter' => 'setProcessResponse',
        'element' => 'ProcessResponse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProcessResponse',
      ),
      'Provenance' => 
      array (
        'setter' => 'setProvenance',
        'element' => 'Provenance',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProvenance',
      ),
      'Questionnaire' => 
      array (
        'setter' => 'setQuestionnaire',
        'element' => 'Questionnaire',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRQuestionnaire',
      ),
      'QuestionnaireResponse' => 
      array (
        'setter' => 'setQuestionnaireResponse',
        'element' => 'QuestionnaireResponse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRQuestionnaireResponse',
      ),
      'ReferralRequest' => 
      array (
        'setter' => 'setReferralRequest',
        'element' => 'ReferralRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRReferralRequest',
      ),
      'RelatedPerson' => 
      array (
        'setter' => 'setRelatedPerson',
        'element' => 'RelatedPerson',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRRelatedPerson',
      ),
      'RiskAssessment' => 
      array (
        'setter' => 'setRiskAssessment',
        'element' => 'RiskAssessment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRRiskAssessment',
      ),
      'Schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Schedule',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSchedule',
      ),
      'SearchParameter' => 
      array (
        'setter' => 'setSearchParameter',
        'element' => 'SearchParameter',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSearchParameter',
      ),
      'Slot' => 
      array (
        'setter' => 'setSlot',
        'element' => 'Slot',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSlot',
      ),
      'Specimen' => 
      array (
        'setter' => 'setSpecimen',
        'element' => 'Specimen',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSpecimen',
      ),
      'StructureDefinition' => 
      array (
        'setter' => 'setStructureDefinition',
        'element' => 'StructureDefinition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRStructureDefinition',
      ),
      'Subscription' => 
      array (
        'setter' => 'setSubscription',
        'element' => 'Subscription',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSubscription',
      ),
      'Substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'Substance',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSubstance',
      ),
      'SupplyDelivery' => 
      array (
        'setter' => 'setSupplyDelivery',
        'element' => 'SupplyDelivery',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSupplyDelivery',
      ),
      'SupplyRequest' => 
      array (
        'setter' => 'setSupplyRequest',
        'element' => 'SupplyRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSupplyRequest',
      ),
      'TestScript' => 
      array (
        'setter' => 'setTestScript',
        'element' => 'TestScript',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRTestScript',
      ),
      'ValueSet' => 
      array (
        'setter' => 'setValueSet',
        'element' => 'ValueSet',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRValueSet',
      ),
      'VisionPrescription' => 
      array (
        'setter' => 'setVisionPrescription',
        'element' => 'VisionPrescription',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRVisionPrescription',
      ),
      'Parameters' => 
      array (
        'setter' => 'setParameters',
        'element' => 'Parameters',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRParameters',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'valueBase64Binary' => 
      array (
        'setter' => 'setValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'valueInstant' => 
      array (
        'setter' => 'setValueInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'valueDate' => 
      array (
        'setter' => 'setValueDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'valueCode' => 
      array (
        'setter' => 'setValueCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'valueOid' => 
      array (
        'setter' => 'setValueOid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'valueUuid' => 
      array (
        'setter' => 'setValueUuid',
        'element' => 'uuid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
      ),
      'valueId' => 
      array (
        'setter' => 'setValueId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'valueUnsignedInt' => 
      array (
        'setter' => 'setValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'valuePositiveInt' => 
      array (
        'setter' => 'setValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'valueMarkdown' => 
      array (
        'setter' => 'setValueMarkdown',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'valueAnnotation' => 
      array (
        'setter' => 'setValueAnnotation',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'valueIdentifier' => 
      array (
        'setter' => 'setValueIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueCoding' => 
      array (
        'setter' => 'setValueCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'valueReference' => 
      array (
        'setter' => 'setValueReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'valueSignature' => 
      array (
        'setter' => 'setValueSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
      'valueHumanName' => 
      array (
        'setter' => 'setValueHumanName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'valueAddress' => 
      array (
        'setter' => 'setValueAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'valueContactPoint' => 
      array (
        'setter' => 'setValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'valueTiming' => 
      array (
        'setter' => 'setValueTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'valueMeta' => 
      array (
        'setter' => 'setValueMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'BackboneElement' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBackboneElement',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
    ),
  ),
  'Narrative' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'NarrativeStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrativeStatus',
      ),
      'div' => 
      array (
        'setter' => 'setDiv',
        'element' => 'html',
        'type' => 'string',
      ),
    ),
  ),
  'NarrativeStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrativeStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NarrativeStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Element' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement',
    'extendedElementName' => NULL,
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'Period' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'start' => 
      array (
        'setter' => 'setStart',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'Coding' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'userSelected' => 
      array (
        'setter' => 'setUserSelected',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'Range' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'low' => 
      array (
        'setter' => 'setLow',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'high' => 
      array (
        'setter' => 'setHigh',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
    ),
  ),
  'Quantity' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'QuantityComparator' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantityComparator',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'QuantityComparator-list',
        'type' => 'string',
      ),
    ),
  ),
  'Attachment' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'data' => 
      array (
        'setter' => 'setData',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'size' => 
      array (
        'setter' => 'setSize',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'hash' => 
      array (
        'setter' => 'setHash',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'creation' => 
      array (
        'setter' => 'setCreation',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'Ratio' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'numerator' => 
      array (
        'setter' => 'setNumerator',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'denominator' => 
      array (
        'setter' => 'setDenominator',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
    ),
  ),
  'Annotation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'authorReference' => 
      array (
        'setter' => 'setAuthorReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'authorString' => 
      array (
        'setter' => 'setAuthorString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'time' => 
      array (
        'setter' => 'setTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'SampledData' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'origin' => 
      array (
        'setter' => 'setOrigin',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'lowerLimit' => 
      array (
        'setter' => 'setLowerLimit',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'upperLimit' => 
      array (
        'setter' => 'setUpperLimit',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'dimensions' => 
      array (
        'setter' => 'setDimensions',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'data' => 
      array (
        'setter' => 'setData',
        'element' => 'SampledDataDataType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledDataDataType',
      ),
    ),
  ),
  'SampledDataDataType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledDataDataType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SampledDataDataType-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'Reference' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'CodeableConcept' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'coding' => 
      array (
        'setter' => 'addCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Identifier' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'IdentifierUse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifierUse',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'assigner' => 
      array (
        'setter' => 'setAssigner',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'IdentifierUse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifierUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'IdentifierUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'Signature' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'whoUri' => 
      array (
        'setter' => 'setWhoUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'whoReference' => 
      array (
        'setter' => 'setWhoReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'blob' => 
      array (
        'setter' => 'setBlob',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
    ),
  ),
  'Age' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRAge',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Count' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRCount',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Money' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Distance' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRDistance',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Duration' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRDuration',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'SimpleQuantity' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'ElementDefinition' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRElementDefinition',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'path' => 
      array (
        'setter' => 'setPath',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'representation' => 
      array (
        'setter' => 'addRepresentation',
        'element' => 'PropertyRepresentation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPropertyRepresentation',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'label' => 
      array (
        'setter' => 'setLabel',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'addCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'slicing' => 
      array (
        'setter' => 'setSlicing',
        'element' => 'ElementDefinition.Slicing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionSlicing',
      ),
      'short' => 
      array (
        'setter' => 'setShort',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'alias' => 
      array (
        'setter' => 'addAlias',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'min' => 
      array (
        'setter' => 'setMin',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'max' => 
      array (
        'setter' => 'setMax',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'ElementDefinition.Base',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionBase',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'ElementDefinition.Type',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionType',
      ),
      'nameReference' => 
      array (
        'setter' => 'setNameReference',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'defaultValueBoolean' => 
      array (
        'setter' => 'setDefaultValueBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'defaultValueInteger' => 
      array (
        'setter' => 'setDefaultValueInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'defaultValueDecimal' => 
      array (
        'setter' => 'setDefaultValueDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'defaultValueBase64Binary' => 
      array (
        'setter' => 'setDefaultValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'defaultValueInstant' => 
      array (
        'setter' => 'setDefaultValueInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'defaultValueString' => 
      array (
        'setter' => 'setDefaultValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'defaultValueUri' => 
      array (
        'setter' => 'setDefaultValueUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'defaultValueDate' => 
      array (
        'setter' => 'setDefaultValueDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'defaultValueDateTime' => 
      array (
        'setter' => 'setDefaultValueDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'defaultValueTime' => 
      array (
        'setter' => 'setDefaultValueTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'defaultValueCode' => 
      array (
        'setter' => 'setDefaultValueCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'defaultValueOid' => 
      array (
        'setter' => 'setDefaultValueOid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'defaultValueUuid' => 
      array (
        'setter' => 'setDefaultValueUuid',
        'element' => 'uuid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
      ),
      'defaultValueId' => 
      array (
        'setter' => 'setDefaultValueId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'defaultValueUnsignedInt' => 
      array (
        'setter' => 'setDefaultValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'defaultValuePositiveInt' => 
      array (
        'setter' => 'setDefaultValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'defaultValueMarkdown' => 
      array (
        'setter' => 'setDefaultValueMarkdown',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'defaultValueAnnotation' => 
      array (
        'setter' => 'setDefaultValueAnnotation',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'defaultValueAttachment' => 
      array (
        'setter' => 'setDefaultValueAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'defaultValueIdentifier' => 
      array (
        'setter' => 'setDefaultValueIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'defaultValueCodeableConcept' => 
      array (
        'setter' => 'setDefaultValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'defaultValueCoding' => 
      array (
        'setter' => 'setDefaultValueCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'defaultValueQuantity' => 
      array (
        'setter' => 'setDefaultValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'defaultValueRange' => 
      array (
        'setter' => 'setDefaultValueRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'defaultValuePeriod' => 
      array (
        'setter' => 'setDefaultValuePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'defaultValueRatio' => 
      array (
        'setter' => 'setDefaultValueRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'defaultValueReference' => 
      array (
        'setter' => 'setDefaultValueReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'defaultValueSampledData' => 
      array (
        'setter' => 'setDefaultValueSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'defaultValueSignature' => 
      array (
        'setter' => 'setDefaultValueSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
      'defaultValueHumanName' => 
      array (
        'setter' => 'setDefaultValueHumanName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'defaultValueAddress' => 
      array (
        'setter' => 'setDefaultValueAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'defaultValueContactPoint' => 
      array (
        'setter' => 'setDefaultValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'defaultValueTiming' => 
      array (
        'setter' => 'setDefaultValueTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'defaultValueMeta' => 
      array (
        'setter' => 'setDefaultValueMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'meaningWhenMissing' => 
      array (
        'setter' => 'setMeaningWhenMissing',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'fixedBoolean' => 
      array (
        'setter' => 'setFixedBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'fixedInteger' => 
      array (
        'setter' => 'setFixedInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'fixedDecimal' => 
      array (
        'setter' => 'setFixedDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'fixedBase64Binary' => 
      array (
        'setter' => 'setFixedBase64Binary',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'fixedInstant' => 
      array (
        'setter' => 'setFixedInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'fixedString' => 
      array (
        'setter' => 'setFixedString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'fixedUri' => 
      array (
        'setter' => 'setFixedUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'fixedDate' => 
      array (
        'setter' => 'setFixedDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'fixedDateTime' => 
      array (
        'setter' => 'setFixedDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'fixedTime' => 
      array (
        'setter' => 'setFixedTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'fixedCode' => 
      array (
        'setter' => 'setFixedCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'fixedOid' => 
      array (
        'setter' => 'setFixedOid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'fixedUuid' => 
      array (
        'setter' => 'setFixedUuid',
        'element' => 'uuid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
      ),
      'fixedId' => 
      array (
        'setter' => 'setFixedId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'fixedUnsignedInt' => 
      array (
        'setter' => 'setFixedUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'fixedPositiveInt' => 
      array (
        'setter' => 'setFixedPositiveInt',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'fixedMarkdown' => 
      array (
        'setter' => 'setFixedMarkdown',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'fixedAnnotation' => 
      array (
        'setter' => 'setFixedAnnotation',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'fixedAttachment' => 
      array (
        'setter' => 'setFixedAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'fixedIdentifier' => 
      array (
        'setter' => 'setFixedIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'fixedCodeableConcept' => 
      array (
        'setter' => 'setFixedCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'fixedCoding' => 
      array (
        'setter' => 'setFixedCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'fixedQuantity' => 
      array (
        'setter' => 'setFixedQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'fixedRange' => 
      array (
        'setter' => 'setFixedRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'fixedPeriod' => 
      array (
        'setter' => 'setFixedPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'fixedRatio' => 
      array (
        'setter' => 'setFixedRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'fixedReference' => 
      array (
        'setter' => 'setFixedReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'fixedSampledData' => 
      array (
        'setter' => 'setFixedSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'fixedSignature' => 
      array (
        'setter' => 'setFixedSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
      'fixedHumanName' => 
      array (
        'setter' => 'setFixedHumanName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'fixedAddress' => 
      array (
        'setter' => 'setFixedAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'fixedContactPoint' => 
      array (
        'setter' => 'setFixedContactPoint',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'fixedTiming' => 
      array (
        'setter' => 'setFixedTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'fixedMeta' => 
      array (
        'setter' => 'setFixedMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'patternBoolean' => 
      array (
        'setter' => 'setPatternBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'patternInteger' => 
      array (
        'setter' => 'setPatternInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'patternDecimal' => 
      array (
        'setter' => 'setPatternDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'patternBase64Binary' => 
      array (
        'setter' => 'setPatternBase64Binary',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'patternInstant' => 
      array (
        'setter' => 'setPatternInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'patternString' => 
      array (
        'setter' => 'setPatternString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'patternUri' => 
      array (
        'setter' => 'setPatternUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'patternDate' => 
      array (
        'setter' => 'setPatternDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'patternDateTime' => 
      array (
        'setter' => 'setPatternDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'patternTime' => 
      array (
        'setter' => 'setPatternTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'patternCode' => 
      array (
        'setter' => 'setPatternCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'patternOid' => 
      array (
        'setter' => 'setPatternOid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'patternUuid' => 
      array (
        'setter' => 'setPatternUuid',
        'element' => 'uuid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
      ),
      'patternId' => 
      array (
        'setter' => 'setPatternId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'patternUnsignedInt' => 
      array (
        'setter' => 'setPatternUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'patternPositiveInt' => 
      array (
        'setter' => 'setPatternPositiveInt',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'patternMarkdown' => 
      array (
        'setter' => 'setPatternMarkdown',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'patternAnnotation' => 
      array (
        'setter' => 'setPatternAnnotation',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'patternAttachment' => 
      array (
        'setter' => 'setPatternAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'patternIdentifier' => 
      array (
        'setter' => 'setPatternIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'patternCodeableConcept' => 
      array (
        'setter' => 'setPatternCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patternCoding' => 
      array (
        'setter' => 'setPatternCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'patternQuantity' => 
      array (
        'setter' => 'setPatternQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'patternRange' => 
      array (
        'setter' => 'setPatternRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'patternPeriod' => 
      array (
        'setter' => 'setPatternPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'patternRatio' => 
      array (
        'setter' => 'setPatternRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'patternReference' => 
      array (
        'setter' => 'setPatternReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'patternSampledData' => 
      array (
        'setter' => 'setPatternSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'patternSignature' => 
      array (
        'setter' => 'setPatternSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
      'patternHumanName' => 
      array (
        'setter' => 'setPatternHumanName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'patternAddress' => 
      array (
        'setter' => 'setPatternAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'patternContactPoint' => 
      array (
        'setter' => 'setPatternContactPoint',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'patternTiming' => 
      array (
        'setter' => 'setPatternTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'patternMeta' => 
      array (
        'setter' => 'setPatternMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'exampleBoolean' => 
      array (
        'setter' => 'setExampleBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'exampleInteger' => 
      array (
        'setter' => 'setExampleInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'exampleDecimal' => 
      array (
        'setter' => 'setExampleDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'exampleBase64Binary' => 
      array (
        'setter' => 'setExampleBase64Binary',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'exampleInstant' => 
      array (
        'setter' => 'setExampleInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'exampleString' => 
      array (
        'setter' => 'setExampleString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'exampleUri' => 
      array (
        'setter' => 'setExampleUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'exampleDate' => 
      array (
        'setter' => 'setExampleDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'exampleDateTime' => 
      array (
        'setter' => 'setExampleDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'exampleTime' => 
      array (
        'setter' => 'setExampleTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'exampleCode' => 
      array (
        'setter' => 'setExampleCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'exampleOid' => 
      array (
        'setter' => 'setExampleOid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'exampleUuid' => 
      array (
        'setter' => 'setExampleUuid',
        'element' => 'uuid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
      ),
      'exampleId' => 
      array (
        'setter' => 'setExampleId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'exampleUnsignedInt' => 
      array (
        'setter' => 'setExampleUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'examplePositiveInt' => 
      array (
        'setter' => 'setExamplePositiveInt',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'exampleMarkdown' => 
      array (
        'setter' => 'setExampleMarkdown',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'exampleAnnotation' => 
      array (
        'setter' => 'setExampleAnnotation',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'exampleAttachment' => 
      array (
        'setter' => 'setExampleAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'exampleIdentifier' => 
      array (
        'setter' => 'setExampleIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'exampleCodeableConcept' => 
      array (
        'setter' => 'setExampleCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'exampleCoding' => 
      array (
        'setter' => 'setExampleCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'exampleQuantity' => 
      array (
        'setter' => 'setExampleQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'exampleRange' => 
      array (
        'setter' => 'setExampleRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'examplePeriod' => 
      array (
        'setter' => 'setExamplePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'exampleRatio' => 
      array (
        'setter' => 'setExampleRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'exampleReference' => 
      array (
        'setter' => 'setExampleReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'exampleSampledData' => 
      array (
        'setter' => 'setExampleSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'exampleSignature' => 
      array (
        'setter' => 'setExampleSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
      'exampleHumanName' => 
      array (
        'setter' => 'setExampleHumanName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'exampleAddress' => 
      array (
        'setter' => 'setExampleAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'exampleContactPoint' => 
      array (
        'setter' => 'setExampleContactPoint',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'exampleTiming' => 
      array (
        'setter' => 'setExampleTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'exampleMeta' => 
      array (
        'setter' => 'setExampleMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'minValueBoolean' => 
      array (
        'setter' => 'setMinValueBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'minValueInteger' => 
      array (
        'setter' => 'setMinValueInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'minValueDecimal' => 
      array (
        'setter' => 'setMinValueDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'minValueBase64Binary' => 
      array (
        'setter' => 'setMinValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'minValueInstant' => 
      array (
        'setter' => 'setMinValueInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'minValueString' => 
      array (
        'setter' => 'setMinValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'minValueUri' => 
      array (
        'setter' => 'setMinValueUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'minValueDate' => 
      array (
        'setter' => 'setMinValueDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'minValueDateTime' => 
      array (
        'setter' => 'setMinValueDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'minValueTime' => 
      array (
        'setter' => 'setMinValueTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'minValueCode' => 
      array (
        'setter' => 'setMinValueCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'minValueOid' => 
      array (
        'setter' => 'setMinValueOid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'minValueUuid' => 
      array (
        'setter' => 'setMinValueUuid',
        'element' => 'uuid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
      ),
      'minValueId' => 
      array (
        'setter' => 'setMinValueId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'minValueUnsignedInt' => 
      array (
        'setter' => 'setMinValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'minValuePositiveInt' => 
      array (
        'setter' => 'setMinValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'minValueMarkdown' => 
      array (
        'setter' => 'setMinValueMarkdown',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'minValueAnnotation' => 
      array (
        'setter' => 'setMinValueAnnotation',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'minValueAttachment' => 
      array (
        'setter' => 'setMinValueAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'minValueIdentifier' => 
      array (
        'setter' => 'setMinValueIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'minValueCodeableConcept' => 
      array (
        'setter' => 'setMinValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'minValueCoding' => 
      array (
        'setter' => 'setMinValueCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'minValueQuantity' => 
      array (
        'setter' => 'setMinValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'minValueRange' => 
      array (
        'setter' => 'setMinValueRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'minValuePeriod' => 
      array (
        'setter' => 'setMinValuePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'minValueRatio' => 
      array (
        'setter' => 'setMinValueRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'minValueReference' => 
      array (
        'setter' => 'setMinValueReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'minValueSampledData' => 
      array (
        'setter' => 'setMinValueSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'minValueSignature' => 
      array (
        'setter' => 'setMinValueSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
      'minValueHumanName' => 
      array (
        'setter' => 'setMinValueHumanName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'minValueAddress' => 
      array (
        'setter' => 'setMinValueAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'minValueContactPoint' => 
      array (
        'setter' => 'setMinValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'minValueTiming' => 
      array (
        'setter' => 'setMinValueTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'minValueMeta' => 
      array (
        'setter' => 'setMinValueMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'maxValueBoolean' => 
      array (
        'setter' => 'setMaxValueBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'maxValueInteger' => 
      array (
        'setter' => 'setMaxValueInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'maxValueDecimal' => 
      array (
        'setter' => 'setMaxValueDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'maxValueBase64Binary' => 
      array (
        'setter' => 'setMaxValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'maxValueInstant' => 
      array (
        'setter' => 'setMaxValueInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'maxValueString' => 
      array (
        'setter' => 'setMaxValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'maxValueUri' => 
      array (
        'setter' => 'setMaxValueUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'maxValueDate' => 
      array (
        'setter' => 'setMaxValueDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'maxValueDateTime' => 
      array (
        'setter' => 'setMaxValueDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'maxValueTime' => 
      array (
        'setter' => 'setMaxValueTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'maxValueCode' => 
      array (
        'setter' => 'setMaxValueCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'maxValueOid' => 
      array (
        'setter' => 'setMaxValueOid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'maxValueUuid' => 
      array (
        'setter' => 'setMaxValueUuid',
        'element' => 'uuid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
      ),
      'maxValueId' => 
      array (
        'setter' => 'setMaxValueId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'maxValueUnsignedInt' => 
      array (
        'setter' => 'setMaxValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'maxValuePositiveInt' => 
      array (
        'setter' => 'setMaxValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'maxValueMarkdown' => 
      array (
        'setter' => 'setMaxValueMarkdown',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'maxValueAnnotation' => 
      array (
        'setter' => 'setMaxValueAnnotation',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'maxValueAttachment' => 
      array (
        'setter' => 'setMaxValueAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'maxValueIdentifier' => 
      array (
        'setter' => 'setMaxValueIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'maxValueCodeableConcept' => 
      array (
        'setter' => 'setMaxValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'maxValueCoding' => 
      array (
        'setter' => 'setMaxValueCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'maxValueQuantity' => 
      array (
        'setter' => 'setMaxValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'maxValueRange' => 
      array (
        'setter' => 'setMaxValueRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'maxValuePeriod' => 
      array (
        'setter' => 'setMaxValuePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'maxValueRatio' => 
      array (
        'setter' => 'setMaxValueRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'maxValueReference' => 
      array (
        'setter' => 'setMaxValueReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'maxValueSampledData' => 
      array (
        'setter' => 'setMaxValueSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'maxValueSignature' => 
      array (
        'setter' => 'setMaxValueSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
      'maxValueHumanName' => 
      array (
        'setter' => 'setMaxValueHumanName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'maxValueAddress' => 
      array (
        'setter' => 'setMaxValueAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'maxValueContactPoint' => 
      array (
        'setter' => 'setMaxValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'maxValueTiming' => 
      array (
        'setter' => 'setMaxValueTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'maxValueMeta' => 
      array (
        'setter' => 'setMaxValueMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'maxLength' => 
      array (
        'setter' => 'setMaxLength',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'constraint' => 
      array (
        'setter' => 'addConstraint',
        'element' => 'ElementDefinition.Constraint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionConstraint',
      ),
      'mustSupport' => 
      array (
        'setter' => 'setMustSupport',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'isModifier' => 
      array (
        'setter' => 'setIsModifier',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'isSummary' => 
      array (
        'setter' => 'setIsSummary',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'binding' => 
      array (
        'setter' => 'setBinding',
        'element' => 'ElementDefinition.Binding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionBinding',
      ),
      'mapping' => 
      array (
        'setter' => 'addMapping',
        'element' => 'ElementDefinition.Mapping',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionMapping',
      ),
    ),
  ),
  'ElementDefinition.Mapping' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionMapping',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'identity' => 
      array (
        'setter' => 'setIdentity',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'map' => 
      array (
        'setter' => 'setMap',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ElementDefinition.Slicing' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionSlicing',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'discriminator' => 
      array (
        'setter' => 'addDiscriminator',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ordered' => 
      array (
        'setter' => 'setOrdered',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'rules' => 
      array (
        'setter' => 'setRules',
        'element' => 'SlicingRules',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSlicingRules',
      ),
    ),
  ),
  'ElementDefinition.Binding' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionBinding',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'strength' => 
      array (
        'setter' => 'setStrength',
        'element' => 'BindingStrength',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBindingStrength',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueSetUri' => 
      array (
        'setter' => 'setValueSetUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'valueSetReference' => 
      array (
        'setter' => 'setValueSetReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ElementDefinition.Type' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'addProfile',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'aggregation' => 
      array (
        'setter' => 'addAggregation',
        'element' => 'AggregationMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAggregationMode',
      ),
    ),
  ),
  'ElementDefinition.Base' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionBase',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'path' => 
      array (
        'setter' => 'setPath',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'min' => 
      array (
        'setter' => 'setMin',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'max' => 
      array (
        'setter' => 'setMax',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ElementDefinition.Constraint' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionConstraint',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'key' => 
      array (
        'setter' => 'setKey',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'ConstraintSeverity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConstraintSeverity',
      ),
      'human' => 
      array (
        'setter' => 'setHuman',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'xpath' => 
      array (
        'setter' => 'setXpath',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'PropertyRepresentation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPropertyRepresentation',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'PropertyRepresentation-list',
        'type' => 'string',
      ),
    ),
  ),
  'SlicingRules' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSlicingRules',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SlicingRules-list',
        'type' => 'string',
      ),
    ),
  ),
  'BindingStrength' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBindingStrength',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'BindingStrength-list',
        'type' => 'string',
      ),
    ),
  ),
  'AggregationMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAggregationMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AggregationMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConstraintSeverity' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConstraintSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConstraintSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'Timing' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'repeat' => 
      array (
        'setter' => 'setRepeat',
        'element' => 'Timing.Repeat',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTiming\\FHIRTimingRepeat',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Timing.Repeat' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTiming\\FHIRTimingRepeat',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'boundsQuantity' => 
      array (
        'setter' => 'setBoundsQuantity',
        'element' => 'Duration',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRDuration',
      ),
      'boundsRange' => 
      array (
        'setter' => 'setBoundsRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'boundsPeriod' => 
      array (
        'setter' => 'setBoundsPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'count' => 
      array (
        'setter' => 'setCount',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'duration' => 
      array (
        'setter' => 'setDuration',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'durationMax' => 
      array (
        'setter' => 'setDurationMax',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'durationUnits' => 
      array (
        'setter' => 'setDurationUnits',
        'element' => 'UnitsOfTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnitsOfTime',
      ),
      'frequency' => 
      array (
        'setter' => 'setFrequency',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'frequencyMax' => 
      array (
        'setter' => 'setFrequencyMax',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'periodMax' => 
      array (
        'setter' => 'setPeriodMax',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'periodUnits' => 
      array (
        'setter' => 'setPeriodUnits',
        'element' => 'UnitsOfTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnitsOfTime',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'EventTiming',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREventTiming',
      ),
    ),
  ),
  'UnitsOfTime' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnitsOfTime',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'UnitsOfTime-list',
        'type' => 'string',
      ),
    ),
  ),
  'EventTiming' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREventTiming',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EventTiming-list',
        'type' => 'string',
      ),
    ),
  ),
  'Address' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'AddressUse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddressUse',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'AddressType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddressType',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'line' => 
      array (
        'setter' => 'addLine',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'city' => 
      array (
        'setter' => 'setCity',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'district' => 
      array (
        'setter' => 'setDistrict',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'state' => 
      array (
        'setter' => 'setState',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'postalCode' => 
      array (
        'setter' => 'setPostalCode',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'country' => 
      array (
        'setter' => 'setCountry',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'AddressUse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddressUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AddressUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'AddressType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddressType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AddressType-list',
        'type' => 'string',
      ),
    ),
  ),
  'HumanName' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'NameUse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNameUse',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'family' => 
      array (
        'setter' => 'addFamily',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'given' => 
      array (
        'setter' => 'addGiven',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'prefix' => 
      array (
        'setter' => 'addPrefix',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'suffix' => 
      array (
        'setter' => 'addSuffix',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'NameUse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNameUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NameUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'Meta' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'versionId' => 
      array (
        'setter' => 'setVersionId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'lastUpdated' => 
      array (
        'setter' => 'setLastUpdated',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'profile' => 
      array (
        'setter' => 'addProfile',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'security' => 
      array (
        'setter' => 'addSecurity',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'tag' => 
      array (
        'setter' => 'addTag',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'ContactPoint' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'ContactPointSystem',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPointSystem',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'ContactPointUse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPointUse',
      ),
      'rank' => 
      array (
        'setter' => 'setRank',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'ContactPointSystem' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPointSystem',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ContactPointSystem-list',
        'type' => 'string',
      ),
    ),
  ),
  'ContactPointUse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPointUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ContactPointUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'Resource' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource',
    'extendedElementName' => NULL,
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'DomainResource' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDomainResource',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
    ),
  ),
  'NoteType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNoteType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NoteType-list',
        'type' => 'string',
      ),
    ),
  ),
  'DocumentReferenceStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDocumentReferenceStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DocumentReferenceStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConceptMapEquivalence' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConceptMapEquivalence',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConceptMapEquivalence-list',
        'type' => 'string',
      ),
    ),
  ),
  'RemittanceOutcome' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRemittanceOutcome',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'RemittanceOutcome-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConformanceResourceStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConformanceResourceStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConformanceResourceStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AdministrativeGender' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAdministrativeGender',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AdministrativeGender-list',
        'type' => 'string',
      ),
    ),
  ),
  'SearchParamType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSearchParamType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SearchParamType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Binary' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBinary',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'content' => 
      array (
        'setter' => 'setContent',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
    ),
  ),
  'Location' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRLocation',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'LocationStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRLocationStatus',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'LocationMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRLocationMode',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'physicalType' => 
      array (
        'setter' => 'setPhysicalType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'position' => 
      array (
        'setter' => 'setPosition',
        'element' => 'Location.Position',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRLocation\\FHIRLocationPosition',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'partOf' => 
      array (
        'setter' => 'setPartOf',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Location.Position' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRLocation\\FHIRLocationPosition',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'longitude' => 
      array (
        'setter' => 'setLongitude',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'latitude' => 
      array (
        'setter' => 'setLatitude',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'altitude' => 
      array (
        'setter' => 'setAltitude',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'LocationStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRLocationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'LocationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'LocationMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRLocationMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'LocationMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'NutritionOrder' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRNutritionOrder',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'orderer' => 
      array (
        'setter' => 'setOrderer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'NutritionOrderStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNutritionOrderStatus',
      ),
      'allergyIntolerance' => 
      array (
        'setter' => 'addAllergyIntolerance',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'foodPreferenceModifier' => 
      array (
        'setter' => 'addFoodPreferenceModifier',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'excludeFoodModifier' => 
      array (
        'setter' => 'addExcludeFoodModifier',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'oralDiet' => 
      array (
        'setter' => 'setOralDiet',
        'element' => 'NutritionOrder.OralDiet',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderOralDiet',
      ),
      'supplement' => 
      array (
        'setter' => 'addSupplement',
        'element' => 'NutritionOrder.Supplement',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderSupplement',
      ),
      'enteralFormula' => 
      array (
        'setter' => 'setEnteralFormula',
        'element' => 'NutritionOrder.EnteralFormula',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderEnteralFormula',
      ),
    ),
  ),
  'NutritionOrder.OralDiet' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderOralDiet',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'schedule' => 
      array (
        'setter' => 'addSchedule',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'nutrient' => 
      array (
        'setter' => 'addNutrient',
        'element' => 'NutritionOrder.Nutrient',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderNutrient',
      ),
      'texture' => 
      array (
        'setter' => 'addTexture',
        'element' => 'NutritionOrder.Texture',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderTexture',
      ),
      'fluidConsistencyType' => 
      array (
        'setter' => 'addFluidConsistencyType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'instruction' => 
      array (
        'setter' => 'setInstruction',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'NutritionOrder.Nutrient' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderNutrient',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifier' => 
      array (
        'setter' => 'setModifier',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
    ),
  ),
  'NutritionOrder.Texture' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderTexture',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifier' => 
      array (
        'setter' => 'setModifier',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'foodType' => 
      array (
        'setter' => 'setFoodType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'NutritionOrder.Supplement' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderSupplement',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'productName' => 
      array (
        'setter' => 'setProductName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'schedule' => 
      array (
        'setter' => 'addSchedule',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'instruction' => 
      array (
        'setter' => 'setInstruction',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'NutritionOrder.EnteralFormula' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderEnteralFormula',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'baseFormulaType' => 
      array (
        'setter' => 'setBaseFormulaType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'baseFormulaProductName' => 
      array (
        'setter' => 'setBaseFormulaProductName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'additiveType' => 
      array (
        'setter' => 'setAdditiveType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'additiveProductName' => 
      array (
        'setter' => 'setAdditiveProductName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'caloricDensity' => 
      array (
        'setter' => 'setCaloricDensity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'routeofAdministration' => 
      array (
        'setter' => 'setRouteofAdministration',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'administration' => 
      array (
        'setter' => 'addAdministration',
        'element' => 'NutritionOrder.Administration',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderAdministration',
      ),
      'maxVolumeToDeliver' => 
      array (
        'setter' => 'setMaxVolumeToDeliver',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'administrationInstruction' => 
      array (
        'setter' => 'setAdministrationInstruction',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'NutritionOrder.Administration' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderAdministration',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'rateQuantity' => 
      array (
        'setter' => 'setRateQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'NutritionOrderStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNutritionOrderStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NutritionOrderStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Device' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDevice',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DeviceStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceStatus',
      ),
      'manufacturer' => 
      array (
        'setter' => 'setManufacturer',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'model' => 
      array (
        'setter' => 'setModel',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'manufactureDate' => 
      array (
        'setter' => 'setManufactureDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'expiry' => 
      array (
        'setter' => 'setExpiry',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'udi' => 
      array (
        'setter' => 'setUdi',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'lotNumber' => 
      array (
        'setter' => 'setLotNumber',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'owner' => 
      array (
        'setter' => 'setOwner',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'DeviceStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'PaymentNotice' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPaymentNotice',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'paymentStatus' => 
      array (
        'setter' => 'setPaymentStatus',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Composition' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRComposition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'class' => 
      array (
        'setter' => 'setClass',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CompositionStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCompositionStatus',
      ),
      'confidentiality' => 
      array (
        'setter' => 'setConfidentiality',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'attester' => 
      array (
        'setter' => 'addAttester',
        'element' => 'Composition.Attester',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRComposition\\FHIRCompositionAttester',
      ),
      'custodian' => 
      array (
        'setter' => 'setCustodian',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'Composition.Event',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRComposition\\FHIRCompositionEvent',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'section' => 
      array (
        'setter' => 'addSection',
        'element' => 'Composition.Section',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRComposition\\FHIRCompositionSection',
      ),
    ),
  ),
  'Composition.Attester' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRComposition\\FHIRCompositionAttester',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'mode' => 
      array (
        'setter' => 'addMode',
        'element' => 'CompositionAttestationMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCompositionAttestationMode',
      ),
      'time' => 
      array (
        'setter' => 'setTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'party' => 
      array (
        'setter' => 'setParty',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Composition.Event' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRComposition\\FHIRCompositionEvent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'addCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Composition.Section' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRComposition\\FHIRCompositionSection',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'orderedBy' => 
      array (
        'setter' => 'setOrderedBy',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'entry' => 
      array (
        'setter' => 'addEntry',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'emptyReason' => 
      array (
        'setter' => 'setEmptyReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'section' => 
      array (
        'setter' => 'addSection',
        'element' => 'Composition.Section',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRComposition\\FHIRCompositionSection',
      ),
    ),
  ),
  'CompositionStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCompositionStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CompositionStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'CompositionAttestationMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCompositionAttestationMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CompositionAttestationMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'Communication' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCommunication',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'sender' => 
      array (
        'setter' => 'setSender',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'payload' => 
      array (
        'setter' => 'addPayload',
        'element' => 'Communication.Payload',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCommunication\\FHIRCommunicationPayload',
      ),
      'medium' => 
      array (
        'setter' => 'addMedium',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CommunicationStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCommunicationStatus',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'sent' => 
      array (
        'setter' => 'setSent',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'received' => 
      array (
        'setter' => 'setReceived',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestDetail' => 
      array (
        'setter' => 'setRequestDetail',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Communication.Payload' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCommunication\\FHIRCommunicationPayload',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'contentString' => 
      array (
        'setter' => 'setContentString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'CommunicationStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCommunicationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CommunicationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Encounter' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREncounter',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EncounterState',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREncounterState',
      ),
      'statusHistory' => 
      array (
        'setter' => 'addStatusHistory',
        'element' => 'Encounter.StatusHistory',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREncounter\\FHIREncounterStatusHistory',
      ),
      'class' => 
      array (
        'setter' => 'setClass',
        'element' => 'EncounterClass',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREncounterClass',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'episodeOfCare' => 
      array (
        'setter' => 'addEpisodeOfCare',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'incomingReferral' => 
      array (
        'setter' => 'addIncomingReferral',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'Encounter.Participant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREncounter\\FHIREncounterParticipant',
      ),
      'appointment' => 
      array (
        'setter' => 'setAppointment',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'length' => 
      array (
        'setter' => 'setLength',
        'element' => 'Duration',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRDuration',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'indication' => 
      array (
        'setter' => 'addIndication',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'hospitalization' => 
      array (
        'setter' => 'setHospitalization',
        'element' => 'Encounter.Hospitalization',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREncounter\\FHIREncounterHospitalization',
      ),
      'location' => 
      array (
        'setter' => 'addLocation',
        'element' => 'Encounter.Location',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREncounter\\FHIREncounterLocation',
      ),
      'serviceProvider' => 
      array (
        'setter' => 'setServiceProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'partOf' => 
      array (
        'setter' => 'setPartOf',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Encounter.StatusHistory' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREncounter\\FHIREncounterStatusHistory',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EncounterState',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREncounterState',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'Encounter.Participant' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREncounter\\FHIREncounterParticipant',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'individual' => 
      array (
        'setter' => 'setIndividual',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Encounter.Hospitalization' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREncounter\\FHIREncounterHospitalization',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'preAdmissionIdentifier' => 
      array (
        'setter' => 'setPreAdmissionIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'origin' => 
      array (
        'setter' => 'setOrigin',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'admitSource' => 
      array (
        'setter' => 'setAdmitSource',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'admittingDiagnosis' => 
      array (
        'setter' => 'addAdmittingDiagnosis',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reAdmission' => 
      array (
        'setter' => 'setReAdmission',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dietPreference' => 
      array (
        'setter' => 'addDietPreference',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialCourtesy' => 
      array (
        'setter' => 'addSpecialCourtesy',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialArrangement' => 
      array (
        'setter' => 'addSpecialArrangement',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dischargeDisposition' => 
      array (
        'setter' => 'setDischargeDisposition',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dischargeDiagnosis' => 
      array (
        'setter' => 'addDischargeDiagnosis',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Encounter.Location' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREncounter\\FHIREncounterLocation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EncounterLocationStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREncounterLocationStatus',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'EncounterLocationStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREncounterLocationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EncounterLocationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'EncounterClass' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREncounterClass',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EncounterClass-list',
        'type' => 'string',
      ),
    ),
  ),
  'EncounterState' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREncounterState',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EncounterState-list',
        'type' => 'string',
      ),
    ),
  ),
  'EpisodeOfCare' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREpisodeOfCare',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EpisodeOfCareStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREpisodeOfCareStatus',
      ),
      'statusHistory' => 
      array (
        'setter' => 'addStatusHistory',
        'element' => 'EpisodeOfCare.StatusHistory',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREpisodeOfCare\\FHIREpisodeOfCareStatusHistory',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'referralRequest' => 
      array (
        'setter' => 'addReferralRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'careManager' => 
      array (
        'setter' => 'setCareManager',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'careTeam' => 
      array (
        'setter' => 'addCareTeam',
        'element' => 'EpisodeOfCare.CareTeam',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREpisodeOfCare\\FHIREpisodeOfCareCareTeam',
      ),
    ),
  ),
  'EpisodeOfCare.StatusHistory' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREpisodeOfCare\\FHIREpisodeOfCareStatusHistory',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EpisodeOfCareStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREpisodeOfCareStatus',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'EpisodeOfCare.CareTeam' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIREpisodeOfCare\\FHIREpisodeOfCareCareTeam',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'member' => 
      array (
        'setter' => 'setMember',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'EpisodeOfCareStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIREpisodeOfCareStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EpisodeOfCareStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'CommunicationRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCommunicationRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'sender' => 
      array (
        'setter' => 'setSender',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'payload' => 
      array (
        'setter' => 'addPayload',
        'element' => 'CommunicationRequest.Payload',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCommunicationRequest\\FHIRCommunicationRequestPayload',
      ),
      'medium' => 
      array (
        'setter' => 'addMedium',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requester' => 
      array (
        'setter' => 'setRequester',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CommunicationRequestStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCommunicationRequestStatus',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'scheduledDateTime' => 
      array (
        'setter' => 'setScheduledDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'scheduledPeriod' => 
      array (
        'setter' => 'setScheduledPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requestedOn' => 
      array (
        'setter' => 'setRequestedOn',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'CommunicationRequest.Payload' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCommunicationRequest\\FHIRCommunicationRequestPayload',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'contentString' => 
      array (
        'setter' => 'setContentString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'CommunicationRequestStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCommunicationRequestStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CommunicationRequestStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Schedule' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSchedule',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'planningHorizon' => 
      array (
        'setter' => 'setPlanningHorizon',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'EligibilityRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREligibilityRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Procedure' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProcedure',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ProcedureStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRProcedureStatus',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'notPerformed' => 
      array (
        'setter' => 'setNotPerformed',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'reasonNotPerformed' => 
      array (
        'setter' => 'addReasonNotPerformed',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySite' => 
      array (
        'setter' => 'addBodySite',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'Procedure.Performer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProcedure\\FHIRProcedurePerformer',
      ),
      'performedDateTime' => 
      array (
        'setter' => 'setPerformedDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'performedPeriod' => 
      array (
        'setter' => 'setPerformedPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'report' => 
      array (
        'setter' => 'addReport',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'complication' => 
      array (
        'setter' => 'addComplication',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'followUp' => 
      array (
        'setter' => 'addFollowUp',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'focalDevice' => 
      array (
        'setter' => 'addFocalDevice',
        'element' => 'Procedure.FocalDevice',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProcedure\\FHIRProcedureFocalDevice',
      ),
      'used' => 
      array (
        'setter' => 'addUsed',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Procedure.Performer' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProcedure\\FHIRProcedurePerformer',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Procedure.FocalDevice' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProcedure\\FHIRProcedureFocalDevice',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'manipulated' => 
      array (
        'setter' => 'setManipulated',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ProcedureStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRProcedureStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ProcedureStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AppointmentResponse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAppointmentResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'appointment' => 
      array (
        'setter' => 'setAppointment',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'start' => 
      array (
        'setter' => 'setStart',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'participantType' => 
      array (
        'setter' => 'addParticipantType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'participantStatus' => 
      array (
        'setter' => 'setParticipantStatus',
        'element' => 'ParticipantStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRParticipantStatus',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ParticipantStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRParticipantStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ParticipantStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'SupplyDelivery' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSupplyDelivery',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SupplyDeliveryStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSupplyDeliveryStatus',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'suppliedItem' => 
      array (
        'setter' => 'setSuppliedItem',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'supplier' => 
      array (
        'setter' => 'setSupplier',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'whenPrepared' => 
      array (
        'setter' => 'setWhenPrepared',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'time' => 
      array (
        'setter' => 'setTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'receiver' => 
      array (
        'setter' => 'addReceiver',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'SupplyDeliveryStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSupplyDeliveryStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SupplyDeliveryStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationStatement' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedicationStatement',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'informationSource' => 
      array (
        'setter' => 'setInformationSource',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dateAsserted' => 
      array (
        'setter' => 'setDateAsserted',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationStatementStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMedicationStatementStatus',
      ),
      'wasNotTaken' => 
      array (
        'setter' => 'setWasNotTaken',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'reasonNotTaken' => 
      array (
        'setter' => 'addReasonNotTaken',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonForUseCodeableConcept' => 
      array (
        'setter' => 'setReasonForUseCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonForUseReference' => 
      array (
        'setter' => 'setReasonForUseReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'effectiveDateTime' => 
      array (
        'setter' => 'setEffectiveDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'effectivePeriod' => 
      array (
        'setter' => 'setEffectivePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'supportingInformation' => 
      array (
        'setter' => 'addSupportingInformation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dosage' => 
      array (
        'setter' => 'addDosage',
        'element' => 'MedicationStatement.Dosage',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationStatement\\FHIRMedicationStatementDosage',
      ),
    ),
  ),
  'MedicationStatement.Dosage' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationStatement\\FHIRMedicationStatementDosage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'timing' => 
      array (
        'setter' => 'setTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteCodeableConcept' => 
      array (
        'setter' => 'setSiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteReference' => 
      array (
        'setter' => 'setSiteReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantityQuantity' => 
      array (
        'setter' => 'setQuantityQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'quantityRange' => 
      array (
        'setter' => 'setQuantityRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'MedicationStatementStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMedicationStatementStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationStatementStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConceptMap' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRConceptMap',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ConceptMap.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'sourceUri' => 
      array (
        'setter' => 'setSourceUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'sourceReference' => 
      array (
        'setter' => 'setSourceReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'targetUri' => 
      array (
        'setter' => 'setTargetUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'targetReference' => 
      array (
        'setter' => 'setTargetReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'ConceptMap.Element',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapElement',
      ),
    ),
  ),
  'ConceptMap.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'ConceptMap.Element' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapElement',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'codeSystem' => 
      array (
        'setter' => 'setCodeSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'ConceptMap.Target',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapTarget',
      ),
    ),
  ),
  'ConceptMap.Target' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapTarget',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'codeSystem' => 
      array (
        'setter' => 'setCodeSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'equivalence' => 
      array (
        'setter' => 'setEquivalence',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'dependsOn' => 
      array (
        'setter' => 'addDependsOn',
        'element' => 'ConceptMap.DependsOn',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn',
      ),
      'product' => 
      array (
        'setter' => 'addProduct',
        'element' => 'ConceptMap.DependsOn',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn',
      ),
    ),
  ),
  'ConceptMap.DependsOn' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'element' => 
      array (
        'setter' => 'setElement',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'codeSystem' => 
      array (
        'setter' => 'setCodeSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'EnrollmentRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREnrollmentRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'coverage' => 
      array (
        'setter' => 'setCoverage',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Practitioner' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPractitioner',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'photo' => 
      array (
        'setter' => 'addPhoto',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'practitionerRole' => 
      array (
        'setter' => 'addPractitionerRole',
        'element' => 'Practitioner.PractitionerRole',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerPractitionerRole',
      ),
      'qualification' => 
      array (
        'setter' => 'addQualification',
        'element' => 'Practitioner.Qualification',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerQualification',
      ),
      'communication' => 
      array (
        'setter' => 'addCommunication',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Practitioner.PractitionerRole' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerPractitionerRole',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialty' => 
      array (
        'setter' => 'addSpecialty',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'location' => 
      array (
        'setter' => 'addLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'healthcareService' => 
      array (
        'setter' => 'addHealthcareService',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Practitioner.Qualification' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerQualification',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'issuer' => 
      array (
        'setter' => 'setIssuer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'FamilyMemberHistory' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRFamilyMemberHistory',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'FamilyHistoryStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRFamilyHistoryStatus',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'bornPeriod' => 
      array (
        'setter' => 'setBornPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'bornDate' => 
      array (
        'setter' => 'setBornDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'bornString' => 
      array (
        'setter' => 'setBornString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ageQuantity' => 
      array (
        'setter' => 'setAgeQuantity',
        'element' => 'Age',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRAge',
      ),
      'ageRange' => 
      array (
        'setter' => 'setAgeRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'ageString' => 
      array (
        'setter' => 'setAgeString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'deceasedBoolean' => 
      array (
        'setter' => 'setDeceasedBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'deceasedQuantity' => 
      array (
        'setter' => 'setDeceasedQuantity',
        'element' => 'Age',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRAge',
      ),
      'deceasedRange' => 
      array (
        'setter' => 'setDeceasedRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'deceasedDate' => 
      array (
        'setter' => 'setDeceasedDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'deceasedString' => 
      array (
        'setter' => 'setDeceasedString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'FamilyMemberHistory.Condition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRFamilyMemberHistory\\FHIRFamilyMemberHistoryCondition',
      ),
    ),
  ),
  'FamilyMemberHistory.Condition' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRFamilyMemberHistory\\FHIRFamilyMemberHistoryCondition',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'onsetQuantity' => 
      array (
        'setter' => 'setOnsetQuantity',
        'element' => 'Age',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRAge',
      ),
      'onsetRange' => 
      array (
        'setter' => 'setOnsetRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'onsetPeriod' => 
      array (
        'setter' => 'setOnsetPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'onsetString' => 
      array (
        'setter' => 'setOnsetString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
    ),
  ),
  'FamilyHistoryStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRFamilyHistoryStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'FamilyHistoryStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AuditEvent' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAuditEvent',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'event' => 
      array (
        'setter' => 'setEvent',
        'element' => 'AuditEvent.Event',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventEvent',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'AuditEvent.Participant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventParticipant',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'AuditEvent.Source',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventSource',
      ),
      'object' => 
      array (
        'setter' => 'addObject',
        'element' => 'AuditEvent.Object',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventObject',
      ),
    ),
  ),
  'AuditEvent.Event' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventEvent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'subtype' => 
      array (
        'setter' => 'addSubtype',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'AuditEventAction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAuditEventAction',
      ),
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'AuditEventOutcome',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAuditEventOutcome',
      ),
      'outcomeDesc' => 
      array (
        'setter' => 'setOutcomeDesc',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'purposeOfEvent' => 
      array (
        'setter' => 'addPurposeOfEvent',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'AuditEvent.Participant' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventParticipant',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'userId' => 
      array (
        'setter' => 'setUserId',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'altId' => 
      array (
        'setter' => 'setAltId',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'requestor' => 
      array (
        'setter' => 'setRequestor',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'policy' => 
      array (
        'setter' => 'addPolicy',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'media' => 
      array (
        'setter' => 'setMedia',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'network' => 
      array (
        'setter' => 'setNetwork',
        'element' => 'AuditEvent.Network',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventNetwork',
      ),
      'purposeOfUse' => 
      array (
        'setter' => 'addPurposeOfUse',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'AuditEvent.Network' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventNetwork',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'AuditEventParticipantNetworkType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAuditEventParticipantNetworkType',
      ),
    ),
  ),
  'AuditEvent.Source' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventSource',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'site' => 
      array (
        'setter' => 'setSite',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'AuditEvent.Object' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventObject',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'lifecycle' => 
      array (
        'setter' => 'setLifecycle',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'securityLabel' => 
      array (
        'setter' => 'addSecurityLabel',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'query' => 
      array (
        'setter' => 'setQuery',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'AuditEvent.Detail',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventDetail',
      ),
    ),
  ),
  'AuditEvent.Detail' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
    ),
  ),
  'AuditEventAction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAuditEventAction',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AuditEventAction-list',
        'type' => 'string',
      ),
    ),
  ),
  'AuditEventOutcome' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAuditEventOutcome',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AuditEventOutcome-list',
        'type' => 'string',
      ),
    ),
  ),
  'AuditEventParticipantNetworkType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAuditEventParticipantNetworkType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AuditEventParticipantNetworkType-list',
        'type' => 'string',
      ),
    ),
  ),
  'ClinicalImpression' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRClinicalImpression',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'assessor' => 
      array (
        'setter' => 'setAssessor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ClinicalImpressionStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRClinicalImpressionStatus',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'previous' => 
      array (
        'setter' => 'setPrevious',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'problem' => 
      array (
        'setter' => 'addProblem',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'triggerCodeableConcept' => 
      array (
        'setter' => 'setTriggerCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'triggerReference' => 
      array (
        'setter' => 'setTriggerReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'investigations' => 
      array (
        'setter' => 'addInvestigations',
        'element' => 'ClinicalImpression.Investigations',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionInvestigations',
      ),
      'protocol' => 
      array (
        'setter' => 'setProtocol',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'summary' => 
      array (
        'setter' => 'setSummary',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'finding' => 
      array (
        'setter' => 'addFinding',
        'element' => 'ClinicalImpression.Finding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionFinding',
      ),
      'resolved' => 
      array (
        'setter' => 'addResolved',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'ruledOut' => 
      array (
        'setter' => 'addRuledOut',
        'element' => 'ClinicalImpression.RuledOut',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionRuledOut',
      ),
      'prognosis' => 
      array (
        'setter' => 'setPrognosis',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'plan' => 
      array (
        'setter' => 'addPlan',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ClinicalImpression.Investigations' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionInvestigations',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ClinicalImpression.Finding' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionFinding',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'cause' => 
      array (
        'setter' => 'setCause',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ClinicalImpression.RuledOut' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionRuledOut',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ClinicalImpressionStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRClinicalImpressionStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ClinicalImpressionStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Organization' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROrganization',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'partOf' => 
      array (
        'setter' => 'setPartOf',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'Organization.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROrganization\\FHIROrganizationContact',
      ),
    ),
  ),
  'Organization.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROrganization\\FHIROrganizationContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'purpose' => 
      array (
        'setter' => 'setPurpose',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
    ),
  ),
  'VisionPrescription' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRVisionPrescription',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'dateWritten' => 
      array (
        'setter' => 'setDateWritten',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'prescriber' => 
      array (
        'setter' => 'setPrescriber',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dispense' => 
      array (
        'setter' => 'addDispense',
        'element' => 'VisionPrescription.Dispense',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRVisionPrescription\\FHIRVisionPrescriptionDispense',
      ),
    ),
  ),
  'VisionPrescription.Dispense' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRVisionPrescription\\FHIRVisionPrescriptionDispense',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'product' => 
      array (
        'setter' => 'setProduct',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'eye' => 
      array (
        'setter' => 'setEye',
        'element' => 'VisionEyes',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRVisionEyes',
      ),
      'sphere' => 
      array (
        'setter' => 'setSphere',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'cylinder' => 
      array (
        'setter' => 'setCylinder',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'axis' => 
      array (
        'setter' => 'setAxis',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'prism' => 
      array (
        'setter' => 'setPrism',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'VisionBase',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRVisionBase',
      ),
      'add' => 
      array (
        'setter' => 'setAdd',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'power' => 
      array (
        'setter' => 'setPower',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'backCurve' => 
      array (
        'setter' => 'setBackCurve',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'diameter' => 
      array (
        'setter' => 'setDiameter',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'duration' => 
      array (
        'setter' => 'setDuration',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'color' => 
      array (
        'setter' => 'setColor',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'brand' => 
      array (
        'setter' => 'setBrand',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'VisionBase' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRVisionBase',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'VisionBase-list',
        'type' => 'string',
      ),
    ),
  ),
  'VisionEyes' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRVisionEyes',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'VisionEyes-list',
        'type' => 'string',
      ),
    ),
  ),
  'DetectedIssue' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDetectedIssue',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'DetectedIssueSeverity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDetectedIssueSeverity',
      ),
      'implicated' => 
      array (
        'setter' => 'addImplicated',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'detail' => 
      array (
        'setter' => 'setDetail',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'mitigation' => 
      array (
        'setter' => 'addMitigation',
        'element' => 'DetectedIssue.Mitigation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDetectedIssue\\FHIRDetectedIssueMitigation',
      ),
    ),
  ),
  'DetectedIssue.Mitigation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDetectedIssue\\FHIRDetectedIssueMitigation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DetectedIssueSeverity' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDetectedIssueSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DetectedIssueSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'ClaimResponse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRClaimResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'payeeType' => 
      array (
        'setter' => 'setPayeeType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'ClaimResponse.Item',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseItem',
      ),
      'addItem' => 
      array (
        'setter' => 'addAddItem',
        'element' => 'ClaimResponse.AddItem',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAddItem',
      ),
      'error' => 
      array (
        'setter' => 'addError',
        'element' => 'ClaimResponse.Error',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseError',
      ),
      'totalCost' => 
      array (
        'setter' => 'setTotalCost',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'unallocDeductable' => 
      array (
        'setter' => 'setUnallocDeductable',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'totalBenefit' => 
      array (
        'setter' => 'setTotalBenefit',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'paymentAdjustment' => 
      array (
        'setter' => 'setPaymentAdjustment',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'paymentAdjustmentReason' => 
      array (
        'setter' => 'setPaymentAdjustmentReason',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'paymentDate' => 
      array (
        'setter' => 'setPaymentDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'paymentAmount' => 
      array (
        'setter' => 'setPaymentAmount',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'paymentRef' => 
      array (
        'setter' => 'setPaymentRef',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'reserved' => 
      array (
        'setter' => 'setReserved',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'form' => 
      array (
        'setter' => 'setForm',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'ClaimResponse.Note',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseNote',
      ),
      'coverage' => 
      array (
        'setter' => 'addCoverage',
        'element' => 'ClaimResponse.Coverage',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseCoverage',
      ),
    ),
  ),
  'ClaimResponse.Item' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'noteNumber' => 
      array (
        'setter' => 'addNoteNumber',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'ClaimResponse.Detail',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseDetail',
      ),
    ),
  ),
  'ClaimResponse.Adjudication' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.Detail' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication1',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication1',
      ),
      'subDetail' => 
      array (
        'setter' => 'addSubDetail',
        'element' => 'ClaimResponse.SubDetail',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseSubDetail',
      ),
    ),
  ),
  'ClaimResponse.Adjudication1' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.SubDetail' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseSubDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication2',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication2',
      ),
    ),
  ),
  'ClaimResponse.Adjudication2' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication2',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.AddItem' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAddItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'addSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'fee' => 
      array (
        'setter' => 'setFee',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'noteNumberLinkId' => 
      array (
        'setter' => 'addNoteNumberLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication3',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication3',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'ClaimResponse.Detail1',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseDetail1',
      ),
    ),
  ),
  'ClaimResponse.Adjudication3' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication3',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.Detail1' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseDetail1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'fee' => 
      array (
        'setter' => 'setFee',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication4',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication4',
      ),
    ),
  ),
  'ClaimResponse.Adjudication4' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication4',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.Error' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseError',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'detailSequenceLinkId' => 
      array (
        'setter' => 'setDetailSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'subdetailSequenceLinkId' => 
      array (
        'setter' => 'setSubdetailSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'ClaimResponse.Note' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseNote',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'number' => 
      array (
        'setter' => 'setNumber',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ClaimResponse.Coverage' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseCoverage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'focal' => 
      array (
        'setter' => 'setFocal',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'coverage' => 
      array (
        'setter' => 'setCoverage',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'businessArrangement' => 
      array (
        'setter' => 'setBusinessArrangement',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'preAuthRef' => 
      array (
        'setter' => 'addPreAuthRef',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'claimResponse' => 
      array (
        'setter' => 'setClaimResponse',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'TestScript' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRTestScript',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'TestScript.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'metadata' => 
      array (
        'setter' => 'setMetadata',
        'element' => 'TestScript.Metadata',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptMetadata',
      ),
      'multiserver' => 
      array (
        'setter' => 'setMultiserver',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'fixture' => 
      array (
        'setter' => 'addFixture',
        'element' => 'TestScript.Fixture',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptFixture',
      ),
      'profile' => 
      array (
        'setter' => 'addProfile',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'variable' => 
      array (
        'setter' => 'addVariable',
        'element' => 'TestScript.Variable',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptVariable',
      ),
      'setup' => 
      array (
        'setter' => 'setSetup',
        'element' => 'TestScript.Setup',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptSetup',
      ),
      'test' => 
      array (
        'setter' => 'addTest',
        'element' => 'TestScript.Test',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptTest',
      ),
      'teardown' => 
      array (
        'setter' => 'setTeardown',
        'element' => 'TestScript.Teardown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptTeardown',
      ),
    ),
  ),
  'TestScript.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'TestScript.Metadata' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptMetadata',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'TestScript.Link',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptLink',
      ),
      'capability' => 
      array (
        'setter' => 'addCapability',
        'element' => 'TestScript.Capability',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptCapability',
      ),
    ),
  ),
  'TestScript.Link' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptLink',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'TestScript.Capability' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptCapability',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'required' => 
      array (
        'setter' => 'setRequired',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'validated' => 
      array (
        'setter' => 'setValidated',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'conformance' => 
      array (
        'setter' => 'setConformance',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'TestScript.Fixture' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptFixture',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'autocreate' => 
      array (
        'setter' => 'setAutocreate',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'autodelete' => 
      array (
        'setter' => 'setAutodelete',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'TestScript.Variable' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptVariable',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'headerField' => 
      array (
        'setter' => 'setHeaderField',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'path' => 
      array (
        'setter' => 'setPath',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'sourceId' => 
      array (
        'setter' => 'setSourceId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
    ),
  ),
  'TestScript.Setup' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptSetup',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'metadata' => 
      array (
        'setter' => 'setMetadata',
        'element' => 'TestScript.Metadata',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptMetadata',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'TestScript.Action',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction',
      ),
    ),
  ),
  'TestScript.Action' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'operation' => 
      array (
        'setter' => 'setOperation',
        'element' => 'TestScript.Operation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptOperation',
      ),
      'assert' => 
      array (
        'setter' => 'setAssert',
        'element' => 'TestScript.Assert',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAssert',
      ),
    ),
  ),
  'TestScript.Operation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptOperation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'label' => 
      array (
        'setter' => 'setLabel',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'accept' => 
      array (
        'setter' => 'setAccept',
        'element' => 'ContentType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContentType',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'ContentType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContentType',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'encodeRequestUrl' => 
      array (
        'setter' => 'setEncodeRequestUrl',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'params' => 
      array (
        'setter' => 'setParams',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'requestHeader' => 
      array (
        'setter' => 'addRequestHeader',
        'element' => 'TestScript.RequestHeader',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptRequestHeader',
      ),
      'responseId' => 
      array (
        'setter' => 'setResponseId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'sourceId' => 
      array (
        'setter' => 'setSourceId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'targetId' => 
      array (
        'setter' => 'setTargetId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'TestScript.RequestHeader' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptRequestHeader',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'field' => 
      array (
        'setter' => 'setField',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'TestScript.Assert' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAssert',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'label' => 
      array (
        'setter' => 'setLabel',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'direction' => 
      array (
        'setter' => 'setDirection',
        'element' => 'AssertionDirectionType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAssertionDirectionType',
      ),
      'compareToSourceId' => 
      array (
        'setter' => 'setCompareToSourceId',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'compareToSourcePath' => 
      array (
        'setter' => 'setCompareToSourcePath',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'ContentType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContentType',
      ),
      'headerField' => 
      array (
        'setter' => 'setHeaderField',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'minimumId' => 
      array (
        'setter' => 'setMinimumId',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'navigationLinks' => 
      array (
        'setter' => 'setNavigationLinks',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'operator' => 
      array (
        'setter' => 'setOperator',
        'element' => 'AssertionOperatorType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAssertionOperatorType',
      ),
      'path' => 
      array (
        'setter' => 'setPath',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'AssertionResponseTypes',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAssertionResponseTypes',
      ),
      'responseCode' => 
      array (
        'setter' => 'setResponseCode',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'sourceId' => 
      array (
        'setter' => 'setSourceId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'validateProfileId' => 
      array (
        'setter' => 'setValidateProfileId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'warningOnly' => 
      array (
        'setter' => 'setWarningOnly',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'TestScript.Test' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptTest',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'metadata' => 
      array (
        'setter' => 'setMetadata',
        'element' => 'TestScript.Metadata',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptMetadata',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'TestScript.Action1',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction1',
      ),
    ),
  ),
  'TestScript.Action1' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'operation' => 
      array (
        'setter' => 'setOperation',
        'element' => 'TestScript.Operation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptOperation',
      ),
      'assert' => 
      array (
        'setter' => 'setAssert',
        'element' => 'TestScript.Assert',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAssert',
      ),
    ),
  ),
  'TestScript.Teardown' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptTeardown',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'TestScript.Action2',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction2',
      ),
    ),
  ),
  'TestScript.Action2' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction2',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'operation' => 
      array (
        'setter' => 'setOperation',
        'element' => 'TestScript.Operation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRTestScript\\FHIRTestScriptOperation',
      ),
    ),
  ),
  'AssertionDirectionType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAssertionDirectionType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AssertionDirectionType-list',
        'type' => 'string',
      ),
    ),
  ),
  'AssertionResponseTypes' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAssertionResponseTypes',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AssertionResponseTypes-list',
        'type' => 'string',
      ),
    ),
  ),
  'AssertionOperatorType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAssertionOperatorType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AssertionOperatorType-list',
        'type' => 'string',
      ),
    ),
  ),
  'ContentType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContentType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ContentType-list',
        'type' => 'string',
      ),
    ),
  ),
  'EnrollmentResponse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREnrollmentResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Contract' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRContract',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'applies' => 
      array (
        'setter' => 'setApplies',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'subject' => 
      array (
        'setter' => 'addSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'authority' => 
      array (
        'setter' => 'addAuthority',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'domain' => 
      array (
        'setter' => 'addDomain',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subType' => 
      array (
        'setter' => 'addSubType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actionReason' => 
      array (
        'setter' => 'addActionReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'addActor',
        'element' => 'Contract.Actor',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractActor',
      ),
      'valuedItem' => 
      array (
        'setter' => 'addValuedItem',
        'element' => 'Contract.ValuedItem',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractValuedItem',
      ),
      'signer' => 
      array (
        'setter' => 'addSigner',
        'element' => 'Contract.Signer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractSigner',
      ),
      'term' => 
      array (
        'setter' => 'addTerm',
        'element' => 'Contract.Term',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractTerm',
      ),
      'bindingAttachment' => 
      array (
        'setter' => 'setBindingAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'bindingReference' => 
      array (
        'setter' => 'setBindingReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'friendly' => 
      array (
        'setter' => 'addFriendly',
        'element' => 'Contract.Friendly',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractFriendly',
      ),
      'legal' => 
      array (
        'setter' => 'addLegal',
        'element' => 'Contract.Legal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractLegal',
      ),
      'rule' => 
      array (
        'setter' => 'addRule',
        'element' => 'Contract.Rule',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractRule',
      ),
    ),
  ),
  'Contract.Actor' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractActor',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'entity' => 
      array (
        'setter' => 'setEntity',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Contract.ValuedItem' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractValuedItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'entityCodeableConcept' => 
      array (
        'setter' => 'setEntityCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'entityReference' => 
      array (
        'setter' => 'setEntityReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'effectiveTime' => 
      array (
        'setter' => 'setEffectiveTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
    ),
  ),
  'Contract.Signer' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractSigner',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'party' => 
      array (
        'setter' => 'setParty',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'signature' => 
      array (
        'setter' => 'setSignature',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Contract.Term' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractTerm',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'applies' => 
      array (
        'setter' => 'setApplies',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subType' => 
      array (
        'setter' => 'setSubType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actionReason' => 
      array (
        'setter' => 'addActionReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'addActor',
        'element' => 'Contract.Actor1',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractActor1',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valuedItem' => 
      array (
        'setter' => 'addValuedItem',
        'element' => 'Contract.ValuedItem1',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractValuedItem1',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'Contract.Term',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractTerm',
      ),
    ),
  ),
  'Contract.Actor1' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractActor1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'entity' => 
      array (
        'setter' => 'setEntity',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Contract.ValuedItem1' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractValuedItem1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'entityCodeableConcept' => 
      array (
        'setter' => 'setEntityCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'entityReference' => 
      array (
        'setter' => 'setEntityReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'effectiveTime' => 
      array (
        'setter' => 'setEffectiveTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
    ),
  ),
  'Contract.Friendly' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractFriendly',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Contract.Legal' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractLegal',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Contract.Rule' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRContract\\FHIRContractRule',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DiagnosticReport' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDiagnosticReport',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticReportStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDiagnosticReportStatus',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'effectiveDateTime' => 
      array (
        'setter' => 'setEffectiveDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'effectivePeriod' => 
      array (
        'setter' => 'setEffectivePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'request' => 
      array (
        'setter' => 'addRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'specimen' => 
      array (
        'setter' => 'addSpecimen',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'result' => 
      array (
        'setter' => 'addResult',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'imagingStudy' => 
      array (
        'setter' => 'addImagingStudy',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'image' => 
      array (
        'setter' => 'addImage',
        'element' => 'DiagnosticReport.Image',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDiagnosticReport\\FHIRDiagnosticReportImage',
      ),
      'conclusion' => 
      array (
        'setter' => 'setConclusion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'codedDiagnosis' => 
      array (
        'setter' => 'addCodedDiagnosis',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'presentedForm' => 
      array (
        'setter' => 'addPresentedForm',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'DiagnosticReport.Image' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDiagnosticReport\\FHIRDiagnosticReportImage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'link' => 
      array (
        'setter' => 'setLink',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DiagnosticReportStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDiagnosticReportStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DiagnosticReportStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ImmunizationRecommendation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImmunizationRecommendation',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'recommendation' => 
      array (
        'setter' => 'addRecommendation',
        'element' => 'ImmunizationRecommendation.Recommendation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationRecommendation',
      ),
    ),
  ),
  'ImmunizationRecommendation.Recommendation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationRecommendation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'vaccineCode' => 
      array (
        'setter' => 'setVaccineCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseNumber' => 
      array (
        'setter' => 'setDoseNumber',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'forecastStatus' => 
      array (
        'setter' => 'setForecastStatus',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dateCriterion' => 
      array (
        'setter' => 'addDateCriterion',
        'element' => 'ImmunizationRecommendation.DateCriterion',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationDateCriterion',
      ),
      'protocol' => 
      array (
        'setter' => 'setProtocol',
        'element' => 'ImmunizationRecommendation.Protocol',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationProtocol',
      ),
      'supportingImmunization' => 
      array (
        'setter' => 'addSupportingImmunization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'supportingPatientInformation' => 
      array (
        'setter' => 'addSupportingPatientInformation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ImmunizationRecommendation.DateCriterion' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationDateCriterion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'ImmunizationRecommendation.Protocol' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationProtocol',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'doseSequence' => 
      array (
        'setter' => 'setDoseSequence',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'authority' => 
      array (
        'setter' => 'setAuthority',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'series' => 
      array (
        'setter' => 'setSeries',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Specimen' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSpecimen',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SpecimenStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSpecimenStatus',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'parent' => 
      array (
        'setter' => 'addParent',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'accessionIdentifier' => 
      array (
        'setter' => 'setAccessionIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'receivedTime' => 
      array (
        'setter' => 'setReceivedTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'collection' => 
      array (
        'setter' => 'setCollection',
        'element' => 'Specimen.Collection',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenCollection',
      ),
      'treatment' => 
      array (
        'setter' => 'addTreatment',
        'element' => 'Specimen.Treatment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenTreatment',
      ),
      'container' => 
      array (
        'setter' => 'addContainer',
        'element' => 'Specimen.Container',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenContainer',
      ),
    ),
  ),
  'Specimen.Collection' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenCollection',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'collector' => 
      array (
        'setter' => 'setCollector',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'comment' => 
      array (
        'setter' => 'addComment',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'collectedDateTime' => 
      array (
        'setter' => 'setCollectedDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'collectedPeriod' => 
      array (
        'setter' => 'setCollectedPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Specimen.Treatment' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenTreatment',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'procedure' => 
      array (
        'setter' => 'setProcedure',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'additive' => 
      array (
        'setter' => 'addAdditive',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Specimen.Container' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenContainer',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'capacity' => 
      array (
        'setter' => 'setCapacity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'specimenQuantity' => 
      array (
        'setter' => 'setSpecimenQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'additiveCodeableConcept' => 
      array (
        'setter' => 'setAdditiveCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'additiveReference' => 
      array (
        'setter' => 'setAdditiveReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'SpecimenStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSpecimenStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SpecimenStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Basic' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRBasic',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
    ),
  ),
  'ImagingStudy' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImagingStudy',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'started' => 
      array (
        'setter' => 'setStarted',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'accession' => 
      array (
        'setter' => 'setAccession',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'order' => 
      array (
        'setter' => 'addOrder',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'modalityList' => 
      array (
        'setter' => 'addModalityList',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'referrer' => 
      array (
        'setter' => 'setReferrer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'availability' => 
      array (
        'setter' => 'setAvailability',
        'element' => 'InstanceAvailability',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstanceAvailability',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'numberOfSeries' => 
      array (
        'setter' => 'setNumberOfSeries',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'numberOfInstances' => 
      array (
        'setter' => 'setNumberOfInstances',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'procedure' => 
      array (
        'setter' => 'addProcedure',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'interpreter' => 
      array (
        'setter' => 'setInterpreter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'series' => 
      array (
        'setter' => 'addSeries',
        'element' => 'ImagingStudy.Series',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudySeries',
      ),
    ),
  ),
  'ImagingStudy.Series' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudySeries',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'number' => 
      array (
        'setter' => 'setNumber',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'modality' => 
      array (
        'setter' => 'setModality',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'numberOfInstances' => 
      array (
        'setter' => 'setNumberOfInstances',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'availability' => 
      array (
        'setter' => 'setAvailability',
        'element' => 'InstanceAvailability',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstanceAvailability',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'laterality' => 
      array (
        'setter' => 'setLaterality',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'started' => 
      array (
        'setter' => 'setStarted',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'instance' => 
      array (
        'setter' => 'addInstance',
        'element' => 'ImagingStudy.Instance',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudyInstance',
      ),
    ),
  ),
  'ImagingStudy.Instance' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudyInstance',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'number' => 
      array (
        'setter' => 'setNumber',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'sopClass' => 
      array (
        'setter' => 'setSopClass',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'InstanceAvailability' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstanceAvailability',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'InstanceAvailability-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceComponent' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDeviceComponent',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'lastSystemChange' => 
      array (
        'setter' => 'setLastSystemChange',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'parent' => 
      array (
        'setter' => 'setParent',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'operationalStatus' => 
      array (
        'setter' => 'addOperationalStatus',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'parameterGroup' => 
      array (
        'setter' => 'setParameterGroup',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'measurementPrinciple' => 
      array (
        'setter' => 'setMeasurementPrinciple',
        'element' => 'Measmnt-Principle',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeasmnt_Principle',
      ),
      'productionSpecification' => 
      array (
        'setter' => 'addProductionSpecification',
        'element' => 'DeviceComponent.ProductionSpecification',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDeviceComponent\\FHIRDeviceComponentProductionSpecification',
      ),
      'languageCode' => 
      array (
        'setter' => 'setLanguageCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'DeviceComponent.ProductionSpecification' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDeviceComponent\\FHIRDeviceComponentProductionSpecification',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'specType' => 
      array (
        'setter' => 'setSpecType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'componentId' => 
      array (
        'setter' => 'setComponentId',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'productionSpec' => 
      array (
        'setter' => 'setProductionSpec',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Measmnt-Principle' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeasmnt_Principle',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'Measmnt-Principle-list',
        'type' => 'string',
      ),
    ),
  ),
  'Substance' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSubstance',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'category' => 
      array (
        'setter' => 'addCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'instance' => 
      array (
        'setter' => 'addInstance',
        'element' => 'Substance.Instance',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSubstance\\FHIRSubstanceInstance',
      ),
      'ingredient' => 
      array (
        'setter' => 'addIngredient',
        'element' => 'Substance.Ingredient',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSubstance\\FHIRSubstanceIngredient',
      ),
    ),
  ),
  'Substance.Instance' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSubstance\\FHIRSubstanceInstance',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'expiry' => 
      array (
        'setter' => 'setExpiry',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
    ),
  ),
  'Substance.Ingredient' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSubstance\\FHIRSubstanceIngredient',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'OperationOutcome' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROperationOutcome',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'issue' => 
      array (
        'setter' => 'addIssue',
        'element' => 'OperationOutcome.Issue',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationOutcome\\FHIROperationOutcomeIssue',
      ),
    ),
  ),
  'OperationOutcome.Issue' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationOutcome\\FHIROperationOutcomeIssue',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'IssueSeverity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIssueSeverity',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'IssueType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIssueType',
      ),
      'details' => 
      array (
        'setter' => 'setDetails',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'diagnostics' => 
      array (
        'setter' => 'setDiagnostics',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'location' => 
      array (
        'setter' => 'addLocation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'IssueType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIssueType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'IssueType-list',
        'type' => 'string',
      ),
    ),
  ),
  'IssueSeverity' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIssueSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'IssueSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'Media' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedia',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'DigitalMediaType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDigitalMediaType',
      ),
      'subtype' => 
      array (
        'setter' => 'setSubtype',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'operator' => 
      array (
        'setter' => 'setOperator',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'view' => 
      array (
        'setter' => 'setView',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'deviceName' => 
      array (
        'setter' => 'setDeviceName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'height' => 
      array (
        'setter' => 'setHeight',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'width' => 
      array (
        'setter' => 'setWidth',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'frames' => 
      array (
        'setter' => 'setFrames',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'duration' => 
      array (
        'setter' => 'setDuration',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'content' => 
      array (
        'setter' => 'setContent',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'DigitalMediaType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDigitalMediaType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DigitalMediaType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Parameters' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRParameters',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'Parameters.Parameter',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRParameters\\FHIRParametersParameter',
      ),
    ),
  ),
  'Parameters.Parameter' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRParameters\\FHIRParametersParameter',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'valueBase64Binary' => 
      array (
        'setter' => 'setValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
      'valueInstant' => 
      array (
        'setter' => 'setValueInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'valueDate' => 
      array (
        'setter' => 'setValueDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'valueCode' => 
      array (
        'setter' => 'setValueCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'valueOid' => 
      array (
        'setter' => 'setValueOid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'valueUuid' => 
      array (
        'setter' => 'setValueUuid',
        'element' => 'uuid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUuid',
      ),
      'valueId' => 
      array (
        'setter' => 'setValueId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'valueUnsignedInt' => 
      array (
        'setter' => 'setValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'valuePositiveInt' => 
      array (
        'setter' => 'setValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'valueMarkdown' => 
      array (
        'setter' => 'setValueMarkdown',
        'element' => 'markdown',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMarkdown',
      ),
      'valueAnnotation' => 
      array (
        'setter' => 'setValueAnnotation',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'valueIdentifier' => 
      array (
        'setter' => 'setValueIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueCoding' => 
      array (
        'setter' => 'setValueCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'valueReference' => 
      array (
        'setter' => 'setValueReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'valueSignature' => 
      array (
        'setter' => 'setValueSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
      'valueHumanName' => 
      array (
        'setter' => 'setValueHumanName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'valueAddress' => 
      array (
        'setter' => 'setValueAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'valueContactPoint' => 
      array (
        'setter' => 'setValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'valueTiming' => 
      array (
        'setter' => 'setValueTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'valueMeta' => 
      array (
        'setter' => 'setValueMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'valueElementDefinition' => 
      array (
        'setter' => 'setValueElementDefinition',
        'element' => 'ElementDefinition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRElementDefinition',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'part' => 
      array (
        'setter' => 'addPart',
        'element' => 'Parameters.Parameter',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRParameters\\FHIRParametersParameter',
      ),
    ),
  ),
  'Condition' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCondition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'asserter' => 
      array (
        'setter' => 'setAsserter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dateRecorded' => 
      array (
        'setter' => 'setDateRecorded',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'clinicalStatus' => 
      array (
        'setter' => 'setClinicalStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'verificationStatus' => 
      array (
        'setter' => 'setVerificationStatus',
        'element' => 'ConditionVerificationStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConditionVerificationStatus',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'onsetDateTime' => 
      array (
        'setter' => 'setOnsetDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'onsetQuantity' => 
      array (
        'setter' => 'setOnsetQuantity',
        'element' => 'Age',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRAge',
      ),
      'onsetPeriod' => 
      array (
        'setter' => 'setOnsetPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'onsetRange' => 
      array (
        'setter' => 'setOnsetRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'onsetString' => 
      array (
        'setter' => 'setOnsetString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'abatementDateTime' => 
      array (
        'setter' => 'setAbatementDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'abatementQuantity' => 
      array (
        'setter' => 'setAbatementQuantity',
        'element' => 'Age',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRAge',
      ),
      'abatementBoolean' => 
      array (
        'setter' => 'setAbatementBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'abatementPeriod' => 
      array (
        'setter' => 'setAbatementPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'abatementRange' => 
      array (
        'setter' => 'setAbatementRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'abatementString' => 
      array (
        'setter' => 'setAbatementString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'stage' => 
      array (
        'setter' => 'setStage',
        'element' => 'Condition.Stage',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCondition\\FHIRConditionStage',
      ),
      'evidence' => 
      array (
        'setter' => 'addEvidence',
        'element' => 'Condition.Evidence',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCondition\\FHIRConditionEvidence',
      ),
      'bodySite' => 
      array (
        'setter' => 'addBodySite',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Condition.Stage' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCondition\\FHIRConditionStage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'summary' => 
      array (
        'setter' => 'setSummary',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'assessment' => 
      array (
        'setter' => 'addAssessment',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Condition.Evidence' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCondition\\FHIRConditionEvidence',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ConditionVerificationStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConditionVerificationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConditionVerificationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'CarePlan' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCarePlan',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CarePlanStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCarePlanStatus',
      ),
      'context' => 
      array (
        'setter' => 'setContext',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'modified' => 
      array (
        'setter' => 'setModified',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'category' => 
      array (
        'setter' => 'addCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'addresses' => 
      array (
        'setter' => 'addAddresses',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'support' => 
      array (
        'setter' => 'addSupport',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'relatedPlan' => 
      array (
        'setter' => 'addRelatedPlan',
        'element' => 'CarePlan.RelatedPlan',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanRelatedPlan',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'CarePlan.Participant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanParticipant',
      ),
      'goal' => 
      array (
        'setter' => 'addGoal',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'activity' => 
      array (
        'setter' => 'addActivity',
        'element' => 'CarePlan.Activity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanActivity',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
    ),
  ),
  'CarePlan.RelatedPlan' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanRelatedPlan',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CarePlanRelationship',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCarePlanRelationship',
      ),
      'plan' => 
      array (
        'setter' => 'setPlan',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'CarePlan.Participant' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanParticipant',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'member' => 
      array (
        'setter' => 'setMember',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'CarePlan.Activity' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanActivity',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'actionResulting' => 
      array (
        'setter' => 'addActionResulting',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'progress' => 
      array (
        'setter' => 'addProgress',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'detail' => 
      array (
        'setter' => 'setDetail',
        'element' => 'CarePlan.Detail',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanDetail',
      ),
    ),
  ),
  'CarePlan.Detail' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonCode' => 
      array (
        'setter' => 'addReasonCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'addReasonReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'goal' => 
      array (
        'setter' => 'addGoal',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CarePlanActivityStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCarePlanActivityStatus',
      ),
      'statusReason' => 
      array (
        'setter' => 'setStatusReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'prohibited' => 
      array (
        'setter' => 'setProhibited',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'scheduledTiming' => 
      array (
        'setter' => 'setScheduledTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'scheduledPeriod' => 
      array (
        'setter' => 'setScheduledPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'scheduledString' => 
      array (
        'setter' => 'setScheduledString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'productCodeableConcept' => 
      array (
        'setter' => 'setProductCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'productReference' => 
      array (
        'setter' => 'setProductReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dailyAmount' => 
      array (
        'setter' => 'setDailyAmount',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'CarePlanStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCarePlanStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CarePlanStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'CarePlanRelationship' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCarePlanRelationship',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CarePlanRelationship-list',
        'type' => 'string',
      ),
    ),
  ),
  'CarePlanActivityStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCarePlanActivityStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CarePlanActivityStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Medication' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedication',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'isBrand' => 
      array (
        'setter' => 'setIsBrand',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'manufacturer' => 
      array (
        'setter' => 'setManufacturer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'product' => 
      array (
        'setter' => 'setProduct',
        'element' => 'Medication.Product',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationProduct',
      ),
      'package' => 
      array (
        'setter' => 'setPackage',
        'element' => 'Medication.Package',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationPackage',
      ),
    ),
  ),
  'Medication.Product' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationProduct',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'form' => 
      array (
        'setter' => 'setForm',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'ingredient' => 
      array (
        'setter' => 'addIngredient',
        'element' => 'Medication.Ingredient',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationIngredient',
      ),
      'batch' => 
      array (
        'setter' => 'addBatch',
        'element' => 'Medication.Batch',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationBatch',
      ),
    ),
  ),
  'Medication.Ingredient' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationIngredient',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'Medication.Batch' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationBatch',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'lotNumber' => 
      array (
        'setter' => 'setLotNumber',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'expirationDate' => 
      array (
        'setter' => 'setExpirationDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'Medication.Package' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationPackage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'container' => 
      array (
        'setter' => 'setContainer',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'Medication.Content',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationContent',
      ),
    ),
  ),
  'Medication.Content' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedication\\FHIRMedicationContent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
    ),
  ),
  'DeviceMetric' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDeviceMetric',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'parent' => 
      array (
        'setter' => 'setParent',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'operationalStatus' => 
      array (
        'setter' => 'setOperationalStatus',
        'element' => 'DeviceMetricOperationalStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricOperationalStatus',
      ),
      'color' => 
      array (
        'setter' => 'setColor',
        'element' => 'DeviceMetricColor',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricColor',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'DeviceMetricCategory',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricCategory',
      ),
      'measurementPeriod' => 
      array (
        'setter' => 'setMeasurementPeriod',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'calibration' => 
      array (
        'setter' => 'addCalibration',
        'element' => 'DeviceMetric.Calibration',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDeviceMetric\\FHIRDeviceMetricCalibration',
      ),
    ),
  ),
  'DeviceMetric.Calibration' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDeviceMetric\\FHIRDeviceMetricCalibration',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'DeviceMetricCalibrationType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricCalibrationType',
      ),
      'state' => 
      array (
        'setter' => 'setState',
        'element' => 'DeviceMetricCalibrationState',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricCalibrationState',
      ),
      'time' => 
      array (
        'setter' => 'setTime',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
    ),
  ),
  'DeviceMetricColor' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricColor',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricColor-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetricCalibrationState' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricCalibrationState',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricCalibrationState-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetricCalibrationType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricCalibrationType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricCalibrationType-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetricCategory' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricCategory',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricCategory-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetricOperationalStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceMetricOperationalStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricOperationalStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ProcessRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProcessRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'ActionList',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRActionList',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'nullify' => 
      array (
        'setter' => 'setNullify',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'ProcessRequest.Item',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProcessRequest\\FHIRProcessRequestItem',
      ),
      'include' => 
      array (
        'setter' => 'addInclude',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'exclude' => 
      array (
        'setter' => 'addExclude',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'ProcessRequest.Item' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProcessRequest\\FHIRProcessRequestItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
    ),
  ),
  'ActionList' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRActionList',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ActionList-list',
        'type' => 'string',
      ),
    ),
  ),
  'Coverage' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRCoverage',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'issuer' => 
      array (
        'setter' => 'setIssuer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'bin' => 
      array (
        'setter' => 'setBin',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'subscriberId' => 
      array (
        'setter' => 'setSubscriberId',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'plan' => 
      array (
        'setter' => 'setPlan',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'subPlan' => 
      array (
        'setter' => 'setSubPlan',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'dependent' => 
      array (
        'setter' => 'setDependent',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'subscriber' => 
      array (
        'setter' => 'setSubscriber',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'network' => 
      array (
        'setter' => 'setNetwork',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'contract' => 
      array (
        'setter' => 'addContract',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Provenance' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProvenance',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'recorded' => 
      array (
        'setter' => 'setRecorded',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'activity' => 
      array (
        'setter' => 'setActivity',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'policy' => 
      array (
        'setter' => 'addPolicy',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'agent' => 
      array (
        'setter' => 'addAgent',
        'element' => 'Provenance.Agent',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProvenance\\FHIRProvenanceAgent',
      ),
      'entity' => 
      array (
        'setter' => 'addEntity',
        'element' => 'Provenance.Entity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProvenance\\FHIRProvenanceEntity',
      ),
      'signature' => 
      array (
        'setter' => 'addSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
    ),
  ),
  'Provenance.Agent' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProvenance\\FHIRProvenanceAgent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'userId' => 
      array (
        'setter' => 'setUserId',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'relatedAgent' => 
      array (
        'setter' => 'addRelatedAgent',
        'element' => 'Provenance.RelatedAgent',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProvenance\\FHIRProvenanceRelatedAgent',
      ),
    ),
  ),
  'Provenance.RelatedAgent' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProvenance\\FHIRProvenanceRelatedAgent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Provenance.Entity' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProvenance\\FHIRProvenanceEntity',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'ProvenanceEntityRole',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRProvenanceEntityRole',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'agent' => 
      array (
        'setter' => 'setAgent',
        'element' => 'Provenance.Agent',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProvenance\\FHIRProvenanceAgent',
      ),
    ),
  ),
  'ProvenanceEntityRole' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRProvenanceEntityRole',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ProvenanceEntityRole-list',
        'type' => 'string',
      ),
    ),
  ),
  'NamingSystem' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRNamingSystem',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'NamingSystemType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNamingSystemType',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'NamingSystem.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNamingSystem\\FHIRNamingSystemContact',
      ),
      'responsible' => 
      array (
        'setter' => 'setResponsible',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'usage' => 
      array (
        'setter' => 'setUsage',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'uniqueId' => 
      array (
        'setter' => 'addUniqueId',
        'element' => 'NamingSystem.UniqueId',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNamingSystem\\FHIRNamingSystemUniqueId',
      ),
      'replacedBy' => 
      array (
        'setter' => 'setReplacedBy',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'NamingSystem.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNamingSystem\\FHIRNamingSystemContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'NamingSystem.UniqueId' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRNamingSystem\\FHIRNamingSystemUniqueId',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'NamingSystemIdentifierType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNamingSystemIdentifierType',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'preferred' => 
      array (
        'setter' => 'setPreferred',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'NamingSystemType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNamingSystemType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NamingSystemType-list',
        'type' => 'string',
      ),
    ),
  ),
  'NamingSystemIdentifierType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNamingSystemIdentifierType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NamingSystemIdentifierType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Patient' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPatient',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'name' => 
      array (
        'setter' => 'addName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'deceasedBoolean' => 
      array (
        'setter' => 'setDeceasedBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'deceasedDateTime' => 
      array (
        'setter' => 'setDeceasedDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'maritalStatus' => 
      array (
        'setter' => 'setMaritalStatus',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'multipleBirthBoolean' => 
      array (
        'setter' => 'setMultipleBirthBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'multipleBirthInteger' => 
      array (
        'setter' => 'setMultipleBirthInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'photo' => 
      array (
        'setter' => 'addPhoto',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'Patient.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPatient\\FHIRPatientContact',
      ),
      'animal' => 
      array (
        'setter' => 'setAnimal',
        'element' => 'Patient.Animal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPatient\\FHIRPatientAnimal',
      ),
      'communication' => 
      array (
        'setter' => 'addCommunication',
        'element' => 'Patient.Communication',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPatient\\FHIRPatientCommunication',
      ),
      'careProvider' => 
      array (
        'setter' => 'addCareProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Patient.Link',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPatient\\FHIRPatientLink',
      ),
    ),
  ),
  'Patient.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPatient\\FHIRPatientContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'relationship' => 
      array (
        'setter' => 'addRelationship',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'Patient.Animal' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPatient\\FHIRPatientAnimal',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'species' => 
      array (
        'setter' => 'setSpecies',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'breed' => 
      array (
        'setter' => 'setBreed',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'genderStatus' => 
      array (
        'setter' => 'setGenderStatus',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Patient.Communication' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPatient\\FHIRPatientCommunication',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'preferred' => 
      array (
        'setter' => 'setPreferred',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'Patient.Link' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPatient\\FHIRPatientLink',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'other' => 
      array (
        'setter' => 'setOther',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'LinkType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRLinkType',
      ),
    ),
  ),
  'LinkType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRLinkType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'LinkType-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceUseRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDeviceUseRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'bodySiteCodeableConcept' => 
      array (
        'setter' => 'setBodySiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySiteReference' => 
      array (
        'setter' => 'setBodySiteReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DeviceUseRequestStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceUseRequestStatus',
      ),
      'device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'indication' => 
      array (
        'setter' => 'addIndication',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'prnReason' => 
      array (
        'setter' => 'addPrnReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'orderedOn' => 
      array (
        'setter' => 'setOrderedOn',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'recordedOn' => 
      array (
        'setter' => 'setRecordedOn',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'timingTiming' => 
      array (
        'setter' => 'setTimingTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'timingPeriod' => 
      array (
        'setter' => 'setTimingPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'timingDateTime' => 
      array (
        'setter' => 'setTimingDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'DeviceUseRequestPriority',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceUseRequestPriority',
      ),
    ),
  ),
  'DeviceUseRequestStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceUseRequestStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceUseRequestStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceUseRequestPriority' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDeviceUseRequestPriority',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceUseRequestPriority-list',
        'type' => 'string',
      ),
    ),
  ),
  'Questionnaire' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRQuestionnaire',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'QuestionnaireStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuestionnaireStatus',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'subjectType' => 
      array (
        'setter' => 'addSubjectType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'Questionnaire.Group',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup',
      ),
    ),
  ),
  'Questionnaire.Group' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'required' => 
      array (
        'setter' => 'setRequired',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'repeats' => 
      array (
        'setter' => 'setRepeats',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'Questionnaire.Group',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup',
      ),
      'question' => 
      array (
        'setter' => 'addQuestion',
        'element' => 'Questionnaire.Question',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireQuestion',
      ),
    ),
  ),
  'Questionnaire.Question' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireQuestion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'AnswerFormat',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnswerFormat',
      ),
      'required' => 
      array (
        'setter' => 'setRequired',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'repeats' => 
      array (
        'setter' => 'setRepeats',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'options' => 
      array (
        'setter' => 'setOptions',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'option' => 
      array (
        'setter' => 'addOption',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'Questionnaire.Group',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup',
      ),
    ),
  ),
  'QuestionnaireStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuestionnaireStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'QuestionnaireStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AnswerFormat' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnswerFormat',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AnswerFormat-list',
        'type' => 'string',
      ),
    ),
  ),
  'ImplementationGuide' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImplementationGuide',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ImplementationGuide.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'fhirVersion' => 
      array (
        'setter' => 'setFhirVersion',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'dependency' => 
      array (
        'setter' => 'addDependency',
        'element' => 'ImplementationGuide.Dependency',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideDependency',
      ),
      'package' => 
      array (
        'setter' => 'addPackage',
        'element' => 'ImplementationGuide.Package',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePackage',
      ),
      'global' => 
      array (
        'setter' => 'addGlobal',
        'element' => 'ImplementationGuide.Global',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideGlobal',
      ),
      'binary' => 
      array (
        'setter' => 'addBinary',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'page' => 
      array (
        'setter' => 'setPage',
        'element' => 'ImplementationGuide.Page',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePage',
      ),
    ),
  ),
  'ImplementationGuide.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'ImplementationGuide.Dependency' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideDependency',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'GuideDependencyType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGuideDependencyType',
      ),
      'uri' => 
      array (
        'setter' => 'setUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'ImplementationGuide.Package' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePackage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'resource' => 
      array (
        'setter' => 'addResource',
        'element' => 'ImplementationGuide.Resource',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideResource',
      ),
    ),
  ),
  'ImplementationGuide.Resource' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideResource',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'purpose' => 
      array (
        'setter' => 'setPurpose',
        'element' => 'GuideResourcePurpose',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGuideResourcePurpose',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'acronym' => 
      array (
        'setter' => 'setAcronym',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'sourceUri' => 
      array (
        'setter' => 'setSourceUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'sourceReference' => 
      array (
        'setter' => 'setSourceReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'exampleFor' => 
      array (
        'setter' => 'setExampleFor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ImplementationGuide.Global' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideGlobal',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ImplementationGuide.Page' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'GuidePageKind',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGuidePageKind',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'package' => 
      array (
        'setter' => 'addPackage',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'format' => 
      array (
        'setter' => 'setFormat',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'page' => 
      array (
        'setter' => 'addPage',
        'element' => 'ImplementationGuide.Page',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePage',
      ),
    ),
  ),
  'GuideDependencyType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGuideDependencyType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GuideDependencyType-list',
        'type' => 'string',
      ),
    ),
  ),
  'GuideResourcePurpose' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGuideResourcePurpose',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GuideResourcePurpose-list',
        'type' => 'string',
      ),
    ),
  ),
  'GuidePageKind' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGuidePageKind',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GuidePageKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'Order' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROrder',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'Order.When',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROrder\\FHIROrderWhen',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Order.When' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROrder\\FHIROrderWhen',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
    ),
  ),
  'Appointment' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAppointment',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'AppointmentStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAppointmentStatus',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'start' => 
      array (
        'setter' => 'setStart',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'minutesDuration' => 
      array (
        'setter' => 'setMinutesDuration',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'slot' => 
      array (
        'setter' => 'addSlot',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'Appointment.Participant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAppointment\\FHIRAppointmentParticipant',
      ),
    ),
  ),
  'Appointment.Participant' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAppointment\\FHIRAppointmentParticipant',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'required' => 
      array (
        'setter' => 'setRequired',
        'element' => 'ParticipantRequired',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRParticipantRequired',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ParticipationStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRParticipationStatus',
      ),
    ),
  ),
  'ParticipantRequired' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRParticipantRequired',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ParticipantRequired-list',
        'type' => 'string',
      ),
    ),
  ),
  'AppointmentStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAppointmentStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AppointmentStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ParticipationStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRParticipationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ParticipationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'BodySite' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRBodySite',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'modifier' => 
      array (
        'setter' => 'addModifier',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'image' => 
      array (
        'setter' => 'addImage',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'Claim' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRClaim',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'ClaimType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRClaimType',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'Use',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUse',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'fundsReserve' => 
      array (
        'setter' => 'setFundsReserve',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'enterer' => 
      array (
        'setter' => 'setEnterer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'facility' => 
      array (
        'setter' => 'setFacility',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'prescription' => 
      array (
        'setter' => 'setPrescription',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'originalPrescription' => 
      array (
        'setter' => 'setOriginalPrescription',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'payee' => 
      array (
        'setter' => 'setPayee',
        'element' => 'Claim.Payee',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimPayee',
      ),
      'referral' => 
      array (
        'setter' => 'setReferral',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'diagnosis' => 
      array (
        'setter' => 'addDiagnosis',
        'element' => 'Claim.Diagnosis',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimDiagnosis',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'coverage' => 
      array (
        'setter' => 'addCoverage',
        'element' => 'Claim.Coverage',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimCoverage',
      ),
      'exception' => 
      array (
        'setter' => 'addException',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'school' => 
      array (
        'setter' => 'setSchool',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'accident' => 
      array (
        'setter' => 'setAccident',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'accidentType' => 
      array (
        'setter' => 'setAccidentType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'interventionException' => 
      array (
        'setter' => 'addInterventionException',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'Claim.Item',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimItem',
      ),
      'additionalMaterials' => 
      array (
        'setter' => 'addAdditionalMaterials',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'missingTeeth' => 
      array (
        'setter' => 'addMissingTeeth',
        'element' => 'Claim.MissingTeeth',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimMissingTeeth',
      ),
    ),
  ),
  'Claim.Payee' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimPayee',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'person' => 
      array (
        'setter' => 'setPerson',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Claim.Diagnosis' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimDiagnosis',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'diagnosis' => 
      array (
        'setter' => 'setDiagnosis',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Claim.Coverage' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimCoverage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'focal' => 
      array (
        'setter' => 'setFocal',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'coverage' => 
      array (
        'setter' => 'setCoverage',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'businessArrangement' => 
      array (
        'setter' => 'setBusinessArrangement',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'preAuthRef' => 
      array (
        'setter' => 'addPreAuthRef',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'claimResponse' => 
      array (
        'setter' => 'setClaimResponse',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Claim.Item' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'diagnosisLinkId' => 
      array (
        'setter' => 'addDiagnosisLinkId',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'serviceDate' => 
      array (
        'setter' => 'setServiceDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'udi' => 
      array (
        'setter' => 'setUdi',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'subSite' => 
      array (
        'setter' => 'addSubSite',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'modifier' => 
      array (
        'setter' => 'addModifier',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'Claim.Detail',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimDetail',
      ),
      'prosthesis' => 
      array (
        'setter' => 'setProsthesis',
        'element' => 'Claim.Prosthesis',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimProsthesis',
      ),
    ),
  ),
  'Claim.Detail' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'udi' => 
      array (
        'setter' => 'setUdi',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'subDetail' => 
      array (
        'setter' => 'addSubDetail',
        'element' => 'Claim.SubDetail',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimSubDetail',
      ),
    ),
  ),
  'Claim.SubDetail' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimSubDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'udi' => 
      array (
        'setter' => 'setUdi',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Claim.Prosthesis' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimProsthesis',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'initial' => 
      array (
        'setter' => 'setInitial',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'priorDate' => 
      array (
        'setter' => 'setPriorDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'priorMaterial' => 
      array (
        'setter' => 'setPriorMaterial',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Claim.MissingTeeth' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRClaim\\FHIRClaimMissingTeeth',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'tooth' => 
      array (
        'setter' => 'setTooth',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'extractionDate' => 
      array (
        'setter' => 'setExtractionDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
    ),
  ),
  'ClaimType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRClaimType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ClaimType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Use' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'Use-list',
        'type' => 'string',
      ),
    ),
  ),
  'StructureDefinition' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRStructureDefinition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'StructureDefinition.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'addCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'fhirVersion' => 
      array (
        'setter' => 'setFhirVersion',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'mapping' => 
      array (
        'setter' => 'addMapping',
        'element' => 'StructureDefinition.Mapping',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionMapping',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'StructureDefinitionKind',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRStructureDefinitionKind',
      ),
      'constrainedType' => 
      array (
        'setter' => 'setConstrainedType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'abstract' => 
      array (
        'setter' => 'setAbstract',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'contextType' => 
      array (
        'setter' => 'setContextType',
        'element' => 'ExtensionContext',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtensionContext',
      ),
      'context' => 
      array (
        'setter' => 'addContext',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'snapshot' => 
      array (
        'setter' => 'setSnapshot',
        'element' => 'StructureDefinition.Snapshot',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionSnapshot',
      ),
      'differential' => 
      array (
        'setter' => 'setDifferential',
        'element' => 'StructureDefinition.Differential',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionDifferential',
      ),
    ),
  ),
  'StructureDefinition.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'StructureDefinition.Mapping' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionMapping',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identity' => 
      array (
        'setter' => 'setIdentity',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'uri' => 
      array (
        'setter' => 'setUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'StructureDefinition.Snapshot' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionSnapshot',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'ElementDefinition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRElementDefinition',
      ),
    ),
  ),
  'StructureDefinition.Differential' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionDifferential',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'ElementDefinition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRElementDefinition',
      ),
    ),
  ),
  'StructureDefinitionKind' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRStructureDefinitionKind',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'StructureDefinitionKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'ExtensionContext' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtensionContext',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ExtensionContext-list',
        'type' => 'string',
      ),
    ),
  ),
  'DataElement' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDataElement',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'DataElement.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDataElement\\FHIRDataElementContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'stringency' => 
      array (
        'setter' => 'setStringency',
        'element' => 'DataElementStringency',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDataElementStringency',
      ),
      'mapping' => 
      array (
        'setter' => 'addMapping',
        'element' => 'DataElement.Mapping',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDataElement\\FHIRDataElementMapping',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'ElementDefinition',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRElementDefinition',
      ),
    ),
  ),
  'DataElement.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDataElement\\FHIRDataElementContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'DataElement.Mapping' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDataElement\\FHIRDataElementMapping',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identity' => 
      array (
        'setter' => 'setIdentity',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'uri' => 
      array (
        'setter' => 'setUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'DataElementStringency' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDataElementStringency',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DataElementStringency-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntolerance' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAllergyIntolerance',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'onset' => 
      array (
        'setter' => 'setOnset',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'recordedDate' => 
      array (
        'setter' => 'setRecordedDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'recorder' => 
      array (
        'setter' => 'setRecorder',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reporter' => 
      array (
        'setter' => 'setReporter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'AllergyIntoleranceStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceStatus',
      ),
      'criticality' => 
      array (
        'setter' => 'setCriticality',
        'element' => 'AllergyIntoleranceCriticality',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceCriticality',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'AllergyIntoleranceType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceType',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'AllergyIntoleranceCategory',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceCategory',
      ),
      'lastOccurence' => 
      array (
        'setter' => 'setLastOccurence',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'reaction' => 
      array (
        'setter' => 'addReaction',
        'element' => 'AllergyIntolerance.Reaction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAllergyIntolerance\\FHIRAllergyIntoleranceReaction',
      ),
    ),
  ),
  'AllergyIntolerance.Reaction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRAllergyIntolerance\\FHIRAllergyIntoleranceReaction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'certainty' => 
      array (
        'setter' => 'setCertainty',
        'element' => 'AllergyIntoleranceCertainty',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceCertainty',
      ),
      'manifestation' => 
      array (
        'setter' => 'addManifestation',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'onset' => 
      array (
        'setter' => 'setOnset',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'AllergyIntoleranceSeverity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceSeverity',
      ),
      'exposureRoute' => 
      array (
        'setter' => 'setExposureRoute',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
    ),
  ),
  'AllergyIntoleranceCertainty' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceCertainty',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceCertainty-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceType-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceSeverity' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceCriticality' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceCriticality',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceCriticality-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceCategory' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceCategory',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceCategory-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAllergyIntoleranceStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Group' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRGroup',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'GroupType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGroupType',
      ),
      'actual' => 
      array (
        'setter' => 'setActual',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'characteristic' => 
      array (
        'setter' => 'addCharacteristic',
        'element' => 'Group.Characteristic',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRGroup\\FHIRGroupCharacteristic',
      ),
      'member' => 
      array (
        'setter' => 'addMember',
        'element' => 'Group.Member',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRGroup\\FHIRGroupMember',
      ),
    ),
  ),
  'Group.Characteristic' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRGroup\\FHIRGroupCharacteristic',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'exclude' => 
      array (
        'setter' => 'setExclude',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'Group.Member' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRGroup\\FHIRGroupMember',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'entity' => 
      array (
        'setter' => 'setEntity',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'inactive' => 
      array (
        'setter' => 'setInactive',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'GroupType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGroupType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GroupType-list',
        'type' => 'string',
      ),
    ),
  ),
  'ProcessResponse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProcessResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'form' => 
      array (
        'setter' => 'setForm',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'ProcessResponse.Notes',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProcessResponse\\FHIRProcessResponseNotes',
      ),
      'error' => 
      array (
        'setter' => 'addError',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'ProcessResponse.Notes' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRProcessResponse\\FHIRProcessResponseNotes',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ProcedureRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRProcedureRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySite' => 
      array (
        'setter' => 'addBodySite',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'scheduledDateTime' => 
      array (
        'setter' => 'setScheduledDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'scheduledPeriod' => 
      array (
        'setter' => 'setScheduledPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'scheduledTiming' => 
      array (
        'setter' => 'setScheduledTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ProcedureRequestStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRProcedureRequestStatus',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'orderedOn' => 
      array (
        'setter' => 'setOrderedOn',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'orderer' => 
      array (
        'setter' => 'setOrderer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'ProcedureRequestPriority',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRProcedureRequestPriority',
      ),
    ),
  ),
  'ProcedureRequestPriority' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRProcedureRequestPriority',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ProcedureRequestPriority-list',
        'type' => 'string',
      ),
    ),
  ),
  'ProcedureRequestStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRProcedureRequestStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ProcedureRequestStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ValueSet' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRValueSet',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ValueSet.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'lockedDate' => 
      array (
        'setter' => 'setLockedDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'immutable' => 
      array (
        'setter' => 'setImmutable',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'extensible' => 
      array (
        'setter' => 'setExtensible',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'codeSystem' => 
      array (
        'setter' => 'setCodeSystem',
        'element' => 'ValueSet.CodeSystem',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetCodeSystem',
      ),
      'compose' => 
      array (
        'setter' => 'setCompose',
        'element' => 'ValueSet.Compose',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetCompose',
      ),
      'expansion' => 
      array (
        'setter' => 'setExpansion',
        'element' => 'ValueSet.Expansion',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetExpansion',
      ),
    ),
  ),
  'ValueSet.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'ValueSet.CodeSystem' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetCodeSystem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'caseSensitive' => 
      array (
        'setter' => 'setCaseSensitive',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'ValueSet.Concept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept',
      ),
    ),
  ),
  'ValueSet.Concept' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'abstract' => 
      array (
        'setter' => 'setAbstract',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'designation' => 
      array (
        'setter' => 'addDesignation',
        'element' => 'ValueSet.Designation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetDesignation',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'ValueSet.Concept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept',
      ),
    ),
  ),
  'ValueSet.Designation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetDesignation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ValueSet.Compose' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetCompose',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'import' => 
      array (
        'setter' => 'addImport',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'include' => 
      array (
        'setter' => 'addInclude',
        'element' => 'ValueSet.Include',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetInclude',
      ),
      'exclude' => 
      array (
        'setter' => 'addExclude',
        'element' => 'ValueSet.Include',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetInclude',
      ),
    ),
  ),
  'ValueSet.Include' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetInclude',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'ValueSet.Concept1',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept1',
      ),
      'filter' => 
      array (
        'setter' => 'addFilter',
        'element' => 'ValueSet.Filter',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetFilter',
      ),
    ),
  ),
  'ValueSet.Concept1' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'designation' => 
      array (
        'setter' => 'addDesignation',
        'element' => 'ValueSet.Designation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetDesignation',
      ),
    ),
  ),
  'ValueSet.Filter' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetFilter',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'property' => 
      array (
        'setter' => 'setProperty',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'op' => 
      array (
        'setter' => 'setOp',
        'element' => 'FilterOperator',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRFilterOperator',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'ValueSet.Expansion' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetExpansion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'timestamp' => 
      array (
        'setter' => 'setTimestamp',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'total' => 
      array (
        'setter' => 'setTotal',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'offset' => 
      array (
        'setter' => 'setOffset',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'ValueSet.Parameter',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetParameter',
      ),
      'contains' => 
      array (
        'setter' => 'addContains',
        'element' => 'ValueSet.Contains',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetContains',
      ),
    ),
  ),
  'ValueSet.Parameter' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetParameter',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'valueCode' => 
      array (
        'setter' => 'setValueCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'ValueSet.Contains' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetContains',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'abstract' => 
      array (
        'setter' => 'setAbstract',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contains' => 
      array (
        'setter' => 'addContains',
        'element' => 'ValueSet.Contains',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRValueSet\\FHIRValueSetContains',
      ),
    ),
  ),
  'FilterOperator' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRFilterOperator',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'FilterOperator-list',
        'type' => 'string',
      ),
    ),
  ),
  'Observation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRObservation',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ObservationStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRObservationStatus',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'effectiveDateTime' => 
      array (
        'setter' => 'setEffectiveDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'effectivePeriod' => 
      array (
        'setter' => 'setEffectivePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'dataAbsentReason' => 
      array (
        'setter' => 'setDataAbsentReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'interpretation' => 
      array (
        'setter' => 'setInterpretation',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specimen' => 
      array (
        'setter' => 'setSpecimen',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'referenceRange' => 
      array (
        'setter' => 'addReferenceRange',
        'element' => 'Observation.ReferenceRange',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRObservation\\FHIRObservationReferenceRange',
      ),
      'related' => 
      array (
        'setter' => 'addRelated',
        'element' => 'Observation.Related',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRObservation\\FHIRObservationRelated',
      ),
      'component' => 
      array (
        'setter' => 'addComponent',
        'element' => 'Observation.Component',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRObservation\\FHIRObservationComponent',
      ),
    ),
  ),
  'Observation.ReferenceRange' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRObservation\\FHIRObservationReferenceRange',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'low' => 
      array (
        'setter' => 'setLow',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'high' => 
      array (
        'setter' => 'setHigh',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'meaning' => 
      array (
        'setter' => 'setMeaning',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'age' => 
      array (
        'setter' => 'setAge',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Observation.Related' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRObservation\\FHIRObservationRelated',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'ObservationRelationshipType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRObservationRelationshipType',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Observation.Component' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRObservation\\FHIRObservationComponent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSampledData',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'dataAbsentReason' => 
      array (
        'setter' => 'setDataAbsentReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'referenceRange' => 
      array (
        'setter' => 'addReferenceRange',
        'element' => 'Observation.ReferenceRange',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRObservation\\FHIRObservationReferenceRange',
      ),
    ),
  ),
  'ObservationStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRObservationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ObservationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ObservationRelationshipType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRObservationRelationshipType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ObservationRelationshipType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Flag' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRFlag',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'FlagStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRFlagStatus',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'FlagStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRFlagStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'FlagStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'RelatedPerson' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRRelatedPerson',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'photo' => 
      array (
        'setter' => 'addPhoto',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'DiagnosticOrder' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDiagnosticOrder',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'orderer' => 
      array (
        'setter' => 'setOrderer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'supportingInformation' => 
      array (
        'setter' => 'addSupportingInformation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'specimen' => 
      array (
        'setter' => 'addSpecimen',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticOrderStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDiagnosticOrderStatus',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'DiagnosticOrderPriority',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDiagnosticOrderPriority',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'DiagnosticOrder.Event',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderEvent',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'DiagnosticOrder.Item',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderItem',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
    ),
  ),
  'DiagnosticOrder.Event' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderEvent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticOrderStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDiagnosticOrderStatus',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DiagnosticOrder.Item' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specimen' => 
      array (
        'setter' => 'addSpecimen',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticOrderStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDiagnosticOrderStatus',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'DiagnosticOrder.Event',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderEvent',
      ),
    ),
  ),
  'DiagnosticOrderStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDiagnosticOrderStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DiagnosticOrderStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'DiagnosticOrderPriority' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDiagnosticOrderPriority',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DiagnosticOrderPriority-list',
        'type' => 'string',
      ),
    ),
  ),
  'Immunization' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImmunization',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'vaccineCode' => 
      array (
        'setter' => 'setVaccineCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'wasNotGiven' => 
      array (
        'setter' => 'setWasNotGiven',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'reported' => 
      array (
        'setter' => 'setReported',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requester' => 
      array (
        'setter' => 'setRequester',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'manufacturer' => 
      array (
        'setter' => 'setManufacturer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'lotNumber' => 
      array (
        'setter' => 'setLotNumber',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'expirationDate' => 
      array (
        'setter' => 'setExpirationDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'site' => 
      array (
        'setter' => 'setSite',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseQuantity' => 
      array (
        'setter' => 'setDoseQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'explanation' => 
      array (
        'setter' => 'setExplanation',
        'element' => 'Immunization.Explanation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunization\\FHIRImmunizationExplanation',
      ),
      'reaction' => 
      array (
        'setter' => 'addReaction',
        'element' => 'Immunization.Reaction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunization\\FHIRImmunizationReaction',
      ),
      'vaccinationProtocol' => 
      array (
        'setter' => 'addVaccinationProtocol',
        'element' => 'Immunization.VaccinationProtocol',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunization\\FHIRImmunizationVaccinationProtocol',
      ),
    ),
  ),
  'Immunization.Explanation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunization\\FHIRImmunizationExplanation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonNotGiven' => 
      array (
        'setter' => 'addReasonNotGiven',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Immunization.Reaction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunization\\FHIRImmunizationReaction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'detail' => 
      array (
        'setter' => 'setDetail',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reported' => 
      array (
        'setter' => 'setReported',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'Immunization.VaccinationProtocol' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImmunization\\FHIRImmunizationVaccinationProtocol',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'doseSequence' => 
      array (
        'setter' => 'setDoseSequence',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'authority' => 
      array (
        'setter' => 'setAuthority',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'series' => 
      array (
        'setter' => 'setSeries',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'seriesDoses' => 
      array (
        'setter' => 'setSeriesDoses',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'targetDisease' => 
      array (
        'setter' => 'addTargetDisease',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseStatus' => 
      array (
        'setter' => 'setDoseStatus',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseStatusReason' => 
      array (
        'setter' => 'setDoseStatusReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Goal' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRGoal',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'startDate' => 
      array (
        'setter' => 'setStartDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'startCodeableConcept' => 
      array (
        'setter' => 'setStartCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'targetDate' => 
      array (
        'setter' => 'setTargetDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'targetQuantity' => 
      array (
        'setter' => 'setTargetQuantity',
        'element' => 'Duration',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRDuration',
      ),
      'category' => 
      array (
        'setter' => 'addCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'GoalStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGoalStatus',
      ),
      'statusDate' => 
      array (
        'setter' => 'setStatusDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'statusReason' => 
      array (
        'setter' => 'setStatusReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'addresses' => 
      array (
        'setter' => 'addAddresses',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'Annotation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAnnotation',
      ),
      'outcome' => 
      array (
        'setter' => 'addOutcome',
        'element' => 'Goal.Outcome',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRGoal\\FHIRGoalOutcome',
      ),
    ),
  ),
  'Goal.Outcome' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRGoal\\FHIRGoalOutcome',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'resultCodeableConcept' => 
      array (
        'setter' => 'setResultCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'resultReference' => 
      array (
        'setter' => 'setResultReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'GoalStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRGoalStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GoalStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ReferralRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRReferralRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ReferralStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReferralStatus',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialty' => 
      array (
        'setter' => 'setSpecialty',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requester' => 
      array (
        'setter' => 'setRequester',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dateSent' => 
      array (
        'setter' => 'setDateSent',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'serviceRequested' => 
      array (
        'setter' => 'addServiceRequested',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'supportingInformation' => 
      array (
        'setter' => 'addSupportingInformation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'fulfillmentTime' => 
      array (
        'setter' => 'setFulfillmentTime',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'ReferralStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReferralStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ReferralStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Subscription' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSubscription',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'criteria' => 
      array (
        'setter' => 'setCriteria',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SubscriptionStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSubscriptionStatus',
      ),
      'error' => 
      array (
        'setter' => 'setError',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'channel' => 
      array (
        'setter' => 'setChannel',
        'element' => 'Subscription.Channel',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSubscription\\FHIRSubscriptionChannel',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'tag' => 
      array (
        'setter' => 'addTag',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Subscription.Channel' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSubscription\\FHIRSubscriptionChannel',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'SubscriptionChannelType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSubscriptionChannelType',
      ),
      'endpoint' => 
      array (
        'setter' => 'setEndpoint',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'payload' => 
      array (
        'setter' => 'setPayload',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'header' => 
      array (
        'setter' => 'setHeader',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'SubscriptionStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSubscriptionStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SubscriptionStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'SubscriptionChannelType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSubscriptionChannelType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SubscriptionChannelType-list',
        'type' => 'string',
      ),
    ),
  ),
  'SearchParameter' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSearchParameter',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'SearchParameter.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSearchParameter\\FHIRSearchParameterContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'xpath' => 
      array (
        'setter' => 'setXpath',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'xpathUsage' => 
      array (
        'setter' => 'setXpathUsage',
        'element' => 'XPathUsageType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRXPathUsageType',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'SearchParameter.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSearchParameter\\FHIRSearchParameterContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'XPathUsageType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRXPathUsageType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'XPathUsageType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Conformance' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRConformance',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'Conformance.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'ConformanceStatementKind',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConformanceStatementKind',
      ),
      'software' => 
      array (
        'setter' => 'setSoftware',
        'element' => 'Conformance.Software',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceSoftware',
      ),
      'implementation' => 
      array (
        'setter' => 'setImplementation',
        'element' => 'Conformance.Implementation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceImplementation',
      ),
      'fhirVersion' => 
      array (
        'setter' => 'setFhirVersion',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'acceptUnknown' => 
      array (
        'setter' => 'setAcceptUnknown',
        'element' => 'UnknownContentCode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnknownContentCode',
      ),
      'format' => 
      array (
        'setter' => 'addFormat',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'addProfile',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'rest' => 
      array (
        'setter' => 'addRest',
        'element' => 'Conformance.Rest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceRest',
      ),
      'messaging' => 
      array (
        'setter' => 'addMessaging',
        'element' => 'Conformance.Messaging',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceMessaging',
      ),
      'document' => 
      array (
        'setter' => 'addDocument',
        'element' => 'Conformance.Document',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceDocument',
      ),
    ),
  ),
  'Conformance.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'Conformance.Software' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceSoftware',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'releaseDate' => 
      array (
        'setter' => 'setReleaseDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'Conformance.Implementation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceImplementation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Conformance.Rest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceRest',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'RestfulConformanceMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRestfulConformanceMode',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'security' => 
      array (
        'setter' => 'setSecurity',
        'element' => 'Conformance.Security',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceSecurity',
      ),
      'resource' => 
      array (
        'setter' => 'addResource',
        'element' => 'Conformance.Resource',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceResource',
      ),
      'interaction' => 
      array (
        'setter' => 'addInteraction',
        'element' => 'Conformance.Interaction1',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceInteraction1',
      ),
      'transactionMode' => 
      array (
        'setter' => 'setTransactionMode',
        'element' => 'TransactionMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTransactionMode',
      ),
      'searchParam' => 
      array (
        'setter' => 'addSearchParam',
        'element' => 'Conformance.SearchParam',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceSearchParam',
      ),
      'operation' => 
      array (
        'setter' => 'addOperation',
        'element' => 'Conformance.Operation',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation',
      ),
      'compartment' => 
      array (
        'setter' => 'addCompartment',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Conformance.Security' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceSecurity',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'cors' => 
      array (
        'setter' => 'setCors',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'service' => 
      array (
        'setter' => 'addService',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'certificate' => 
      array (
        'setter' => 'addCertificate',
        'element' => 'Conformance.Certificate',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceCertificate',
      ),
    ),
  ),
  'Conformance.Certificate' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceCertificate',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'blob' => 
      array (
        'setter' => 'setBlob',
        'element' => 'base64Binary',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBase64Binary',
      ),
    ),
  ),
  'Conformance.Resource' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceResource',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'interaction' => 
      array (
        'setter' => 'addInteraction',
        'element' => 'Conformance.Interaction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceInteraction',
      ),
      'versioning' => 
      array (
        'setter' => 'setVersioning',
        'element' => 'ResourceVersionPolicy',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRResourceVersionPolicy',
      ),
      'readHistory' => 
      array (
        'setter' => 'setReadHistory',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'updateCreate' => 
      array (
        'setter' => 'setUpdateCreate',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'conditionalCreate' => 
      array (
        'setter' => 'setConditionalCreate',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'conditionalUpdate' => 
      array (
        'setter' => 'setConditionalUpdate',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'conditionalDelete' => 
      array (
        'setter' => 'setConditionalDelete',
        'element' => 'ConditionalDeleteStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConditionalDeleteStatus',
      ),
      'searchInclude' => 
      array (
        'setter' => 'addSearchInclude',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'searchRevInclude' => 
      array (
        'setter' => 'addSearchRevInclude',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'searchParam' => 
      array (
        'setter' => 'addSearchParam',
        'element' => 'Conformance.SearchParam',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceSearchParam',
      ),
    ),
  ),
  'Conformance.Interaction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceInteraction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'TypeRestfulInteraction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTypeRestfulInteraction',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.SearchParam' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceSearchParam',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'modifier' => 
      array (
        'setter' => 'addModifier',
        'element' => 'SearchModifierCode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSearchModifierCode',
      ),
      'chain' => 
      array (
        'setter' => 'addChain',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.Interaction1' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceInteraction1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'SystemRestfulInteraction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSystemRestfulInteraction',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.Operation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Conformance.Messaging' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceMessaging',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'endpoint' => 
      array (
        'setter' => 'addEndpoint',
        'element' => 'Conformance.Endpoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceEndpoint',
      ),
      'reliableCache' => 
      array (
        'setter' => 'setReliableCache',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'Conformance.Event',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceEvent',
      ),
    ),
  ),
  'Conformance.Endpoint' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceEndpoint',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'protocol' => 
      array (
        'setter' => 'setProtocol',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Conformance.Event' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceEvent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'MessageSignificanceCategory',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMessageSignificanceCategory',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'ConformanceEventMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConformanceEventMode',
      ),
      'focus' => 
      array (
        'setter' => 'setFocus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.Document' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRConformance\\FHIRConformanceDocument',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'DocumentMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDocumentMode',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDocumentMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DocumentMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'SystemRestfulInteraction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSystemRestfulInteraction',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SystemRestfulInteraction-list',
        'type' => 'string',
      ),
    ),
  ),
  'ResourceVersionPolicy' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRResourceVersionPolicy',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ResourceVersionPolicy-list',
        'type' => 'string',
      ),
    ),
  ),
  'RestfulConformanceMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRestfulConformanceMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'RestfulConformanceMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'TypeRestfulInteraction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTypeRestfulInteraction',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'TypeRestfulInteraction-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConditionalDeleteStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConditionalDeleteStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConditionalDeleteStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConformanceStatementKind' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConformanceStatementKind',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConformanceStatementKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'SearchModifierCode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSearchModifierCode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SearchModifierCode-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConformanceEventMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRConformanceEventMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConformanceEventMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'MessageSignificanceCategory' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMessageSignificanceCategory',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MessageSignificanceCategory-list',
        'type' => 'string',
      ),
    ),
  ),
  'UnknownContentCode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnknownContentCode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'UnknownContentCode-list',
        'type' => 'string',
      ),
    ),
  ),
  'TransactionMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTransactionMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'TransactionMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'DocumentReference' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDocumentReference',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'masterIdentifier' => 
      array (
        'setter' => 'setMasterIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'class' => 
      array (
        'setter' => 'setClass',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'custodian' => 
      array (
        'setter' => 'setCustodian',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'authenticator' => 
      array (
        'setter' => 'setAuthenticator',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'indexed' => 
      array (
        'setter' => 'setIndexed',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'docStatus' => 
      array (
        'setter' => 'setDocStatus',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'relatesTo' => 
      array (
        'setter' => 'addRelatesTo',
        'element' => 'DocumentReference.RelatesTo',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelatesTo',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'securityLabel' => 
      array (
        'setter' => 'addSecurityLabel',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'DocumentReference.Content',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContent',
      ),
      'context' => 
      array (
        'setter' => 'setContext',
        'element' => 'DocumentReference.Context',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContext',
      ),
    ),
  ),
  'DocumentReference.RelatesTo' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelatesTo',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'DocumentRelationshipType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDocumentRelationshipType',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentReference.Content' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'attachment' => 
      array (
        'setter' => 'setAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'format' => 
      array (
        'setter' => 'addFormat',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'DocumentReference.Context' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContext',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'facilityType' => 
      array (
        'setter' => 'setFacilityType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'practiceSetting' => 
      array (
        'setter' => 'setPracticeSetting',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'sourcePatientInfo' => 
      array (
        'setter' => 'setSourcePatientInfo',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'related' => 
      array (
        'setter' => 'addRelated',
        'element' => 'DocumentReference.Related',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelated',
      ),
    ),
  ),
  'DocumentReference.Related' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelated',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'ref' => 
      array (
        'setter' => 'setRef',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentRelationshipType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDocumentRelationshipType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DocumentRelationshipType-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationDispense' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedicationDispense',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationDispenseStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMedicationDispenseStatus',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dispenser' => 
      array (
        'setter' => 'setDispenser',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'authorizingPrescription' => 
      array (
        'setter' => 'addAuthorizingPrescription',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'daysSupply' => 
      array (
        'setter' => 'setDaysSupply',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'whenPrepared' => 
      array (
        'setter' => 'setWhenPrepared',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'whenHandedOver' => 
      array (
        'setter' => 'setWhenHandedOver',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'receiver' => 
      array (
        'setter' => 'addReceiver',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'dosageInstruction' => 
      array (
        'setter' => 'addDosageInstruction',
        'element' => 'MedicationDispense.DosageInstruction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDosageInstruction',
      ),
      'substitution' => 
      array (
        'setter' => 'setSubstitution',
        'element' => 'MedicationDispense.Substitution',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseSubstitution',
      ),
    ),
  ),
  'MedicationDispense.DosageInstruction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDosageInstruction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'additionalInstructions' => 
      array (
        'setter' => 'setAdditionalInstructions',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'timing' => 
      array (
        'setter' => 'setTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteCodeableConcept' => 
      array (
        'setter' => 'setSiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteReference' => 
      array (
        'setter' => 'setSiteReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseRange' => 
      array (
        'setter' => 'setDoseRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'doseQuantity' => 
      array (
        'setter' => 'setDoseQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'MedicationDispense.Substitution' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseSubstitution',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'responsibleParty' => 
      array (
        'setter' => 'addResponsibleParty',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MedicationDispenseStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMedicationDispenseStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationDispenseStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationOrder' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedicationOrder',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'dateWritten' => 
      array (
        'setter' => 'setDateWritten',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationOrderStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMedicationOrderStatus',
      ),
      'dateEnded' => 
      array (
        'setter' => 'setDateEnded',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'reasonEnded' => 
      array (
        'setter' => 'setReasonEnded',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'prescriber' => 
      array (
        'setter' => 'setPrescriber',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'dosageInstruction' => 
      array (
        'setter' => 'addDosageInstruction',
        'element' => 'MedicationOrder.DosageInstruction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderDosageInstruction',
      ),
      'dispenseRequest' => 
      array (
        'setter' => 'setDispenseRequest',
        'element' => 'MedicationOrder.DispenseRequest',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderDispenseRequest',
      ),
      'substitution' => 
      array (
        'setter' => 'setSubstitution',
        'element' => 'MedicationOrder.Substitution',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderSubstitution',
      ),
      'priorPrescription' => 
      array (
        'setter' => 'setPriorPrescription',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MedicationOrder.DosageInstruction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderDosageInstruction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'additionalInstructions' => 
      array (
        'setter' => 'setAdditionalInstructions',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'timing' => 
      array (
        'setter' => 'setTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteCodeableConcept' => 
      array (
        'setter' => 'setSiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteReference' => 
      array (
        'setter' => 'setSiteReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseRange' => 
      array (
        'setter' => 'setDoseRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'doseQuantity' => 
      array (
        'setter' => 'setDoseQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'MedicationOrder.DispenseRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderDispenseRequest',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'validityPeriod' => 
      array (
        'setter' => 'setValidityPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'numberOfRepeatsAllowed' => 
      array (
        'setter' => 'setNumberOfRepeatsAllowed',
        'element' => 'positiveInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPositiveInt',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'expectedSupplyDuration' => 
      array (
        'setter' => 'setExpectedSupplyDuration',
        'element' => 'Duration',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRDuration',
      ),
    ),
  ),
  'MedicationOrder.Substitution' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderSubstitution',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'MedicationOrderStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMedicationOrderStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationOrderStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'List' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRList',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ListStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRListStatus',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'orderedBy' => 
      array (
        'setter' => 'setOrderedBy',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'ListMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRListMode',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'entry' => 
      array (
        'setter' => 'addEntry',
        'element' => 'List.Entry',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRList\\FHIRListEntry',
      ),
      'emptyReason' => 
      array (
        'setter' => 'setEmptyReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'List.Entry' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRList\\FHIRListEntry',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'flag' => 
      array (
        'setter' => 'setFlag',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'deleted' => 
      array (
        'setter' => 'setDeleted',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ListStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRListStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ListStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ListMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRListMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ListMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'Person' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPerson',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'name' => 
      array (
        'setter' => 'addName',
        'element' => 'HumanName',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAddress',
      ),
      'photo' => 
      array (
        'setter' => 'setPhoto',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Person.Link',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPerson\\FHIRPersonLink',
      ),
    ),
  ),
  'Person.Link' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPerson\\FHIRPersonLink',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'assurance' => 
      array (
        'setter' => 'setAssurance',
        'element' => 'IdentityAssuranceLevel',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentityAssuranceLevel',
      ),
    ),
  ),
  'IdentityAssuranceLevel' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentityAssuranceLevel',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'IdentityAssuranceLevel-list',
        'type' => 'string',
      ),
    ),
  ),
  'Bundle' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'BundleType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBundleType',
      ),
      'total' => 
      array (
        'setter' => 'setTotal',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Bundle.Link',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleLink',
      ),
      'entry' => 
      array (
        'setter' => 'addEntry',
        'element' => 'Bundle.Entry',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleEntry',
      ),
      'signature' => 
      array (
        'setter' => 'setSignature',
        'element' => 'Signature',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSignature',
      ),
    ),
  ),
  'Bundle.Link' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleLink',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'relation' => 
      array (
        'setter' => 'setRelation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Bundle.Entry' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleEntry',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Bundle.Link',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleLink',
      ),
      'fullUrl' => 
      array (
        'setter' => 'setFullUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'search' => 
      array (
        'setter' => 'setSearch',
        'element' => 'Bundle.Search',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleSearch',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Bundle.Request',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleRequest',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Bundle.Response',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleResponse',
      ),
    ),
  ),
  'Bundle.Search' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleSearch',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'SearchEntryMode',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSearchEntryMode',
      ),
      'score' => 
      array (
        'setter' => 'setScore',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'Bundle.Request' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleRequest',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'HTTPVerb',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHTTPVerb',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'ifNoneMatch' => 
      array (
        'setter' => 'setIfNoneMatch',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ifModifiedSince' => 
      array (
        'setter' => 'setIfModifiedSince',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'ifMatch' => 
      array (
        'setter' => 'setIfMatch',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ifNoneExist' => 
      array (
        'setter' => 'setIfNoneExist',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Bundle.Response' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRBundle\\FHIRBundleResponse',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'etag' => 
      array (
        'setter' => 'setEtag',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'lastModified' => 
      array (
        'setter' => 'setLastModified',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
    ),
  ),
  'HTTPVerb' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRHTTPVerb',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'HTTPVerb-list',
        'type' => 'string',
      ),
    ),
  ),
  'SearchEntryMode' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSearchEntryMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SearchEntryMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'BundleType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBundleType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'BundleType-list',
        'type' => 'string',
      ),
    ),
  ),
  'MessageHeader' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMessageHeader',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'timestamp' => 
      array (
        'setter' => 'setTimestamp',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'event' => 
      array (
        'setter' => 'setEvent',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'MessageHeader.Response',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderResponse',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'MessageHeader.Source',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderSource',
      ),
      'destination' => 
      array (
        'setter' => 'addDestination',
        'element' => 'MessageHeader.Destination',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderDestination',
      ),
      'enterer' => 
      array (
        'setter' => 'setEnterer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'receiver' => 
      array (
        'setter' => 'setReceiver',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'responsible' => 
      array (
        'setter' => 'setResponsible',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'data' => 
      array (
        'setter' => 'addData',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MessageHeader.Response' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderResponse',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'ResponseType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRResponseType',
      ),
      'details' => 
      array (
        'setter' => 'setDetails',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MessageHeader.Source' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderSource',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'software' => 
      array (
        'setter' => 'setSoftware',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'setContact',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'endpoint' => 
      array (
        'setter' => 'setEndpoint',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'MessageHeader.Destination' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderDestination',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'endpoint' => 
      array (
        'setter' => 'setEndpoint',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'ResponseType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRResponseType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ResponseType-list',
        'type' => 'string',
      ),
    ),
  ),
  'EligibilityResponse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIREligibilityResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Slot' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSlot',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'freeBusyType' => 
      array (
        'setter' => 'setFreeBusyType',
        'element' => 'SlotStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSlotStatus',
      ),
      'start' => 
      array (
        'setter' => 'setStart',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'overbooked' => 
      array (
        'setter' => 'setOverbooked',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'SlotStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSlotStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SlotStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Account' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRAccount',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'AccountStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAccountStatus',
      ),
      'activePeriod' => 
      array (
        'setter' => 'setActivePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'currency' => 
      array (
        'setter' => 'setCurrency',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'balance' => 
      array (
        'setter' => 'setBalance',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'coveragePeriod' => 
      array (
        'setter' => 'setCoveragePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'owner' => 
      array (
        'setter' => 'setOwner',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'AccountStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAccountStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AccountStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'OrderResponse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROrderResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'who' => 
      array (
        'setter' => 'setWho',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'orderStatus' => 
      array (
        'setter' => 'setOrderStatus',
        'element' => 'OrderStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROrderStatus',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'fulfillment' => 
      array (
        'setter' => 'addFulfillment',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'OrderStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROrderStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'OrderStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'SupplyRequest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRSupplyRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SupplyRequestStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSupplyRequestStatus',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'orderedItem' => 
      array (
        'setter' => 'setOrderedItem',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'supplier' => 
      array (
        'setter' => 'addSupplier',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'SupplyRequest.When',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSupplyRequest\\FHIRSupplyRequestWhen',
      ),
    ),
  ),
  'SupplyRequest.When' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRSupplyRequest\\FHIRSupplyRequestWhen',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
    ),
  ),
  'SupplyRequestStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRSupplyRequestStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SupplyRequestStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ExplanationOfBenefit' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRExplanationOfBenefit',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DeviceUseStatement' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDeviceUseStatement',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'bodySiteCodeableConcept' => 
      array (
        'setter' => 'setBodySiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySiteReference' => 
      array (
        'setter' => 'setBodySiteReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'whenUsed' => 
      array (
        'setter' => 'setWhenUsed',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'indication' => 
      array (
        'setter' => 'addIndication',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'recordedOn' => 
      array (
        'setter' => 'setRecordedOn',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'timingTiming' => 
      array (
        'setter' => 'setTimingTiming',
        'element' => 'Timing',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTiming',
      ),
      'timingPeriod' => 
      array (
        'setter' => 'setTimingPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'timingDateTime' => 
      array (
        'setter' => 'setTimingDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'QuestionnaireResponse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRQuestionnaireResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'questionnaire' => 
      array (
        'setter' => 'setQuestionnaire',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'QuestionnaireResponseStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuestionnaireResponseStatus',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'authored' => 
      array (
        'setter' => 'setAuthored',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'QuestionnaireResponse.Group',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseGroup',
      ),
    ),
  ),
  'QuestionnaireResponse.Group' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseGroup',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'QuestionnaireResponse.Group',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseGroup',
      ),
      'question' => 
      array (
        'setter' => 'addQuestion',
        'element' => 'QuestionnaireResponse.Question',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseQuestion',
      ),
    ),
  ),
  'QuestionnaireResponse.Question' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseQuestion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'answer' => 
      array (
        'setter' => 'addAnswer',
        'element' => 'QuestionnaireResponse.Answer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseAnswer',
      ),
    ),
  ),
  'QuestionnaireResponse.Answer' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseAnswer',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'valueDate' => 
      array (
        'setter' => 'setValueDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'valueInstant' => 
      array (
        'setter' => 'setValueInstant',
        'element' => 'instant',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInstant',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'valueCoding' => 
      array (
        'setter' => 'setValueCoding',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity',
      ),
      'valueReference' => 
      array (
        'setter' => 'setValueReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'QuestionnaireResponse.Group',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseGroup',
      ),
    ),
  ),
  'QuestionnaireResponseStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuestionnaireResponseStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'QuestionnaireResponseStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'DocumentManifest' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRDocumentManifest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'masterIdentifier' => 
      array (
        'setter' => 'setMasterIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'DocumentManifest.Content',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentManifest\\FHIRDocumentManifestContent',
      ),
      'related' => 
      array (
        'setter' => 'addRelated',
        'element' => 'DocumentManifest.Related',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentManifest\\FHIRDocumentManifestRelated',
      ),
    ),
  ),
  'DocumentManifest.Content' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentManifest\\FHIRDocumentManifestContent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'pAttachment' => 
      array (
        'setter' => 'setPAttachment',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'pReference' => 
      array (
        'setter' => 'setPReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentManifest.Related' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRDocumentManifest\\FHIRDocumentManifestRelated',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'ref' => 
      array (
        'setter' => 'setRef',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'HealthcareService' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRHealthcareService',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'providedBy' => 
      array (
        'setter' => 'setProvidedBy',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'serviceCategory' => 
      array (
        'setter' => 'setServiceCategory',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'serviceType' => 
      array (
        'setter' => 'addServiceType',
        'element' => 'HealthcareService.ServiceType',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceServiceType',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'serviceName' => 
      array (
        'setter' => 'setServiceName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'extraDetails' => 
      array (
        'setter' => 'setExtraDetails',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'photo' => 
      array (
        'setter' => 'setPhoto',
        'element' => 'Attachment',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRAttachment',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
      'coverageArea' => 
      array (
        'setter' => 'addCoverageArea',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'serviceProvisionCode' => 
      array (
        'setter' => 'addServiceProvisionCode',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'eligibility' => 
      array (
        'setter' => 'setEligibility',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'eligibilityNote' => 
      array (
        'setter' => 'setEligibilityNote',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'programName' => 
      array (
        'setter' => 'addProgramName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'characteristic' => 
      array (
        'setter' => 'addCharacteristic',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'referralMethod' => 
      array (
        'setter' => 'addReferralMethod',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'publicKey' => 
      array (
        'setter' => 'setPublicKey',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'appointmentRequired' => 
      array (
        'setter' => 'setAppointmentRequired',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'availableTime' => 
      array (
        'setter' => 'addAvailableTime',
        'element' => 'HealthcareService.AvailableTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceAvailableTime',
      ),
      'notAvailable' => 
      array (
        'setter' => 'addNotAvailable',
        'element' => 'HealthcareService.NotAvailable',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceNotAvailable',
      ),
      'availabilityExceptions' => 
      array (
        'setter' => 'setAvailabilityExceptions',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'HealthcareService.ServiceType' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceServiceType',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialty' => 
      array (
        'setter' => 'addSpecialty',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'HealthcareService.AvailableTime' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceAvailableTime',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'daysOfWeek' => 
      array (
        'setter' => 'addDaysOfWeek',
        'element' => 'DaysOfWeek',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDaysOfWeek',
      ),
      'allDay' => 
      array (
        'setter' => 'setAllDay',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'availableStartTime' => 
      array (
        'setter' => 'setAvailableStartTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
      'availableEndTime' => 
      array (
        'setter' => 'setAvailableEndTime',
        'element' => 'time',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRTime',
      ),
    ),
  ),
  'HealthcareService.NotAvailable' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceNotAvailable',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'during' => 
      array (
        'setter' => 'setDuring',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'DaysOfWeek' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDaysOfWeek',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DaysOfWeek-list',
        'type' => 'string',
      ),
    ),
  ),
  'PaymentReconciliation' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRPaymentReconciliation',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'PaymentReconciliation.Detail',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPaymentReconciliation\\FHIRPaymentReconciliationDetail',
      ),
      'form' => 
      array (
        'setter' => 'setForm',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'total' => 
      array (
        'setter' => 'setTotal',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'PaymentReconciliation.Note',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPaymentReconciliation\\FHIRPaymentReconciliationNote',
      ),
    ),
  ),
  'PaymentReconciliation.Detail' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPaymentReconciliation\\FHIRPaymentReconciliationDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'responce' => 
      array (
        'setter' => 'setResponce',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'submitter' => 
      array (
        'setter' => 'setSubmitter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'payee' => 
      array (
        'setter' => 'setPayee',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'date',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDate',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRMoney',
      ),
    ),
  ),
  'PaymentReconciliation.Note' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRPaymentReconciliation\\FHIRPaymentReconciliationNote',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ImagingObjectSelection' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRImagingObjectSelection',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'authoringTime' => 
      array (
        'setter' => 'setAuthoringTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'study' => 
      array (
        'setter' => 'addStudy',
        'element' => 'ImagingObjectSelection.Study',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionStudy',
      ),
    ),
  ),
  'ImagingObjectSelection.Study' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionStudy',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'imagingStudy' => 
      array (
        'setter' => 'setImagingStudy',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'series' => 
      array (
        'setter' => 'addSeries',
        'element' => 'ImagingObjectSelection.Series',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionSeries',
      ),
    ),
  ),
  'ImagingObjectSelection.Series' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionSeries',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'instance' => 
      array (
        'setter' => 'addInstance',
        'element' => 'ImagingObjectSelection.Instance',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionInstance',
      ),
    ),
  ),
  'ImagingObjectSelection.Instance' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionInstance',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'sopClass' => 
      array (
        'setter' => 'setSopClass',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROid',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'frames' => 
      array (
        'setter' => 'addFrames',
        'element' => 'ImagingObjectSelection.Frames',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionFrames',
      ),
    ),
  ),
  'ImagingObjectSelection.Frames' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionFrames',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'frameNumbers' => 
      array (
        'setter' => 'addFrameNumbers',
        'element' => 'unsignedInt',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUnsignedInt',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'OperationDefinition' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIROperationDefinition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'OperationKind',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROperationKind',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'OperationDefinition.Contact',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'idempotent' => 
      array (
        'setter' => 'setIdempotent',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'instance' => 
      array (
        'setter' => 'setInstance',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'OperationDefinition.Parameter',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionParameter',
      ),
    ),
  ),
  'OperationDefinition.Contact' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'OperationDefinition.Parameter' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionParameter',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'OperationParameterUse',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROperationParameterUse',
      ),
      'min' => 
      array (
        'setter' => 'setMin',
        'element' => 'integer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRInteger',
      ),
      'max' => 
      array (
        'setter' => 'setMax',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'binding' => 
      array (
        'setter' => 'setBinding',
        'element' => 'OperationDefinition.Binding',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionBinding',
      ),
      'part' => 
      array (
        'setter' => 'addPart',
        'element' => 'OperationDefinition.Parameter',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionParameter',
      ),
    ),
  ),
  'OperationDefinition.Binding' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionBinding',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'strength' => 
      array (
        'setter' => 'setStrength',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'valueSetUri' => 
      array (
        'setter' => 'setValueSetUri',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'valueSetReference' => 
      array (
        'setter' => 'setValueSetReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'OperationParameterUse' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROperationParameterUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'OperationParameterUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'OperationKind' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIROperationKind',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'OperationKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationAdministration' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRMedicationAdministration',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationAdministrationStatus',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMedicationAdministrationStatus',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'practitioner' => 
      array (
        'setter' => 'setPractitioner',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'prescription' => 
      array (
        'setter' => 'setPrescription',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'wasNotGiven' => 
      array (
        'setter' => 'setWasNotGiven',
        'element' => 'boolean',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRBoolean',
      ),
      'reasonNotGiven' => 
      array (
        'setter' => 'addReasonNotGiven',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonGiven' => 
      array (
        'setter' => 'addReasonGiven',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'effectiveTimeDateTime' => 
      array (
        'setter' => 'setEffectiveTimeDateTime',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'effectiveTimePeriod' => 
      array (
        'setter' => 'setEffectiveTimePeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'device' => 
      array (
        'setter' => 'addDevice',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'dosage' => 
      array (
        'setter' => 'setDosage',
        'element' => 'MedicationAdministration.Dosage',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationAdministration\\FHIRMedicationAdministrationDosage',
      ),
    ),
  ),
  'MedicationAdministration.Dosage' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRMedicationAdministration\\FHIRMedicationAdministrationDosage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
      'siteCodeableConcept' => 
      array (
        'setter' => 'setSiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteReference' => 
      array (
        'setter' => 'setSiteReference',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRQuantity\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRatio',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
    ),
  ),
  'MedicationAdministrationStatus' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMedicationAdministrationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationAdministrationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'RiskAssessment' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRDomainResource\\FHIRRiskAssessment',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDateTime',
      ),
      'condition' => 
      array (
        'setter' => 'setCondition',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRIdentifier',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'basis' => 
      array (
        'setter' => 'addBasis',
        'element' => 'Reference',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRReference',
      ),
      'prediction' => 
      array (
        'setter' => 'addPrediction',
        'element' => 'RiskAssessment.Prediction',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRRiskAssessment\\FHIRRiskAssessmentPrediction',
      ),
      'mitigation' => 
      array (
        'setter' => 'setMitigation',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'RiskAssessment.Prediction' => 
  array (
    'fullClassName' => '\\App\\HL7\\FHIR\\DSTU2\\FHIRResource\\FHIRRiskAssessment\\FHIRRiskAssessmentPrediction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRExtension',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'probabilityDecimal' => 
      array (
        'setter' => 'setProbabilityDecimal',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'probabilityRange' => 
      array (
        'setter' => 'setProbabilityRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'probabilityCodeableConcept' => 
      array (
        'setter' => 'setProbabilityCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRCodeableConcept',
      ),
      'relativeRisk' => 
      array (
        'setter' => 'setRelativeRisk',
        'element' => 'decimal',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRDecimal',
      ),
      'whenPeriod' => 
      array (
        'setter' => 'setWhenPeriod',
        'element' => 'Period',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRPeriod',
      ),
      'whenRange' => 
      array (
        'setter' => 'setWhenRange',
        'element' => 'Range',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRRange',
      ),
      'rationale' => 
      array (
        'setter' => 'setRationale',
        'element' => 'string',
        'type' => 'App\\HL7\\FHIR\\DSTU2\\FHIRElement\\FHIRString',
      ),
    ),
  ),
);

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->_bigDumbMap[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        if (isset($this->_bigDumbMap[$offset]))
            return $this->_bigDumbMap[$offset];

        trigger_error(sprintf(
            'Offset %s does not exist in the FHIR element map, this could either mean a malformed response or a bug in the generator.',
            $offset
        ));

        return null;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        throw new \BadMethodCallException('Not allowed to set values on the FHIR parser element map');
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        throw new \BadMethodCallException('Not allowed to unset values in this FHIR parser element map');
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->_bigDumbMap);
    }

    /**
     * @return string
     */
    public function key()
    {
        return key($this->_bigDumbMap);
    }

    public function next()
    {
        next($this->_bigDumbMap);
    }

    public function rewind()
    {
        reset($this->_bigDumbMap);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return key($this->_bigDumbMap) !== null;
    }
}