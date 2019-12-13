<?php

namespace FicoScoreInsurance\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function FicoScoreInsuranceSimulacionTypes();
    
    public static function FicoScoreInsuranceSimulacionFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
    
    public function listInvalidProperties();
    
    public function valid();
}
