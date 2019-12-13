<?php

namespace FicoScoreInsurance\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack;

use \FicoScoreInsurance\Client\Configuration;
use \FicoScoreInsurance\Client\ApiException;
use \FicoScoreInsurance\Client\ObjectSerializer;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \FicoScoreInsurance\Client\Interceptor\KeyHandler(null, null, $password);     
        $events = new \FicoScoreInsurance\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $config = new \FicoScoreInsurance\Client\Configuration();
        $config->setHost('the_url');
        
        $this->apiInstance = new \FicoScoreInsurance\Client\Api\FicoScoreInsuranceApi($client,$config);
    }  
    
    public function testGetFicoscore()    
    {
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $requestPersona = new \FicoScoreInsurance\Client\Model\Persona();
        $requestDomicilio = new \FicoScoreInsurance\Client\Model\Domicilio();

        $requestDomicilio->setDireccion(null);
        $requestDomicilio->setColonia(null);
        $requestDomicilio->setCiudad(null);
        $requestDomicilio->setCodigoPostal(null);
        $requestDomicilio->setMunicipio(null);
        $requestDomicilio->setEstado($requestDomicilio::ESTADO_AGS);
    
        $requestPersona->setPrimerNombre("NOMBRE");
        $requestPersona->setSegundoNombre(null);
        $requestPersona->setApellidoPaterno("PATERNO");
        $requestPersona->setApellidoMaterno("MATERNO");
        $requestPersona->setApellidoAdicional(null);
        $requestPersona->setFechaNacimiento("07-01-1980");
        $requestPersona->setRfc(null);
        $requestPersona->setCurp(null);
        $requestPersona->setDomicilio($requestDomicilio);

        try {
            $result = $this->apiInstance->getFicoscore($x_api_key, $username, $password, $requestPersona);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->getFicoscore: ', $e->getMessage(), PHP_EOL;
        }        
    }
}
