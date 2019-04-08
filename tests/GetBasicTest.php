<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use Nategood\Httpful;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

use App\Service\CernerFhir;
use App\HL7\FHIR\DSTU2\FHIRDomainResource\FHIRPatient;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRIdentifier;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRHumanName;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRCode;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRBoolean;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRDate;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRAdministrativeGender;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRContactPoint;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRAddress;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept;
use App\HL7\FHIR\DSTU2\FHIRElement\FHIRReference;
use App\HL7\FHIR\DSTU2\PHPFHIRResponseParser;

class GetBasicTest extends TestCase
{

    public function testMetaData(CernerFhir $fhirApi)
    {
        $response = $fhirApi->get('/metadata');
        
        // Parse meta data response
        $parser = new PHPFHIRResponseParser();
        $p = $parser->parse(json_encode($response));
        $this->assertTrue(is_object($p));
    }

    public function testGetPatient(CernerFhir $fhirApi)
    {
        $id = '1316024';
        $response = $fhirApi->get('Patient/'.$id);
        
        // Parse Response Object to Patient Object
        $parser = new PHPFHIRResponseParser();
        $p = $parser->parse(json_encode($response));
        $this->assertTrue(is_object($p));
    }

    public function testGetPerson(CernerFhir $fhirApi)
    {
        // Person 4342009
        $id = '4342009';
        $response = $fhirApi->get('Person/'.$id);

        // Parse Response Object to Patient Object
        $parser = new PHPFHIRResponseParser();
        $p = $parser->parse(json_encode($response));
        $this->assertTrue(is_object($p));
    }
    
    public function tesGetPractitioner(CernerFhir $fhirApi)
    {
        // Practitioner/1272007
        $id = '1272007';
        $response = $fhirApi->get('Practitioner/'.$id);
        
        // Parse Response Object to Patient Object
        $parser = new PHPFHIRResponseParser();
        $p = $parser->parse(json_encode($response));
        $this->assertTrue(is_object($p));
    }

    public function tesGetAppointment(CernerFhir $fhirApi)
    {
        // Appointment by multiple patient ids and date
        // 35698551 4048128
        $response = $fhirApi->get('Appointment', [
            //'patient' => '4704007,1316024', // Can be a list of patient id's
            'date' => '2018', // Note, date can simply be '2018' to get all appts in 2018
            'location' => '4048128',
        ]);

        // Parse Response Object to Patient Object
        $parser = new PHPFHIRResponseParser();
        $p = $parser->parse(json_encode($response));
        $this->assertTrue(is_object($p));
    }

    public function testGetSchedule(CernerFhir $fhirApi)
    {
        // GET https://fhir-open.sandboxcerner.com/dstu2/0b8a0111-e8e6-4c26-a91c-5069cbc6b1ca/Schedule
        // ?_id=21265426-633867-3121665-0,21265426-633867-3121665-15
        $response = $fhirApi->get('Schedule', [
            '_id' => '21265426-633867-3121665-0,21265426-633867-3121665-15'
        ]);

        // Parse Response Object to Patient Object
        $parser = new PHPFHIRResponseParser();
        $p = $parser->parse(json_encode($response));
        $this->assertTrue(is_object($p));
    }

    public function testGetSlotSearch(CernerFhir $fhirApi)
    {
        // GET https://fhir-open.sandboxcerner.com/dstu2/0b8a0111-e8e6-4c26-a91c-5069cbc6b1ca/Slot
        // ?schedule.actor=Practitioner/2578010&start=2016&slot-type=http://snomed.info/sct|394581000&_count=5
        $response = $fhirApi->get('Slot', [
            'schedule.actor' => 'Practitioner/2578010',
            'start' => '2016',
            'slot-type' => 'http://snomed.info/sct|394581000',
            '_count' => '5'
        ]);

        // Parse Response Object to Patient Object
        $parser = new PHPFHIRResponseParser();
        $p = $parser->parse(json_encode($response));
        $this->assertTrue(is_object($p));
    }

    public function testGetSlot(CernerFhir $fhirApi)
    {
        // GET https://fhir-open.sandboxcerner.com/dstu2/0b8a0111-e8e6-4c26-a91c-5069cbc6b1ca/Slot/21265426-633867-3121665-0
        $response = $fhirApi->get('Slot/21265426-633867-3121665-0');

        // Parse Response Object to Patient Object
        $parser = new PHPFHIRResponseParser();
        $p = $parser->parse(json_encode($response));
        $this->assertTrue(is_object($p));
    }
}
