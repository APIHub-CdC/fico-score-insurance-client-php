<?php

namespace FicoScoreInsurance\Client\Model;

use \ArrayAccess;
use \FicoScoreInsurance\Client\ObjectSerializer;

class Razon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $FicoScoreInsuranceSimulacionModelName = 'Razon';
    
    protected static $FicoScoreInsuranceSimulacionTypes = [
        'clave' => 'string',
        'descripcion' => 'string'
    ];
    
    protected static $FicoScoreInsuranceSimulacionFormats = [
        'clave' => null,
        'descripcion' => null
    ];
    
    public static function FicoScoreInsuranceSimulacionTypes()
    {
        return self::$FicoScoreInsuranceSimulacionTypes;
    }
    
    public static function FicoScoreInsuranceSimulacionFormats()
    {
        return self::$FicoScoreInsuranceSimulacionFormats;
    }
    
    protected static $attributeMap = [
        'clave' => 'clave',
        'descripcion' => 'descripcion'
    ];
    
    protected static $setters = [
        'clave' => 'setClave',
        'descripcion' => 'setDescripcion'
    ];
    
    protected static $getters = [
        'clave' => 'getClave',
        'descripcion' => 'getDescripcion'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$FicoScoreInsuranceSimulacionModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['clave'] = isset($data['clave']) ? $data['clave'] : null;
        $this->container['descripcion'] = isset($data['descripcion']) ? $data['descripcion'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clave'] === null) {
            $invalidProperties[] = "'clave' can't be null";
        }
        if ((mb_strlen($this->container['clave']) > 2)) {
            $invalidProperties[] = "invalid value for 'clave', the character length must be smaller than or equal to 2.";
        }
        if ((mb_strlen($this->container['clave']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['descripcion'] === null) {
            $invalidProperties[] = "'descripcion' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getClave()
    {
        return $this->container['clave'];
    }
    
    public function setClave($clave)
    {
        if ((mb_strlen($clave) > 2)) {
            throw new \InvalidArgumentException('invalid length for $clave when calling Razon., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($clave) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave when calling Razon., must be bigger than or equal to 0.');
        }
        $this->container['clave'] = $clave;
        return $this;
    }
    
    public function getDescripcion()
    {
        return $this->container['descripcion'];
    }
    
    public function setDescripcion($descripcion)
    {
        $this->container['descripcion'] = $descripcion;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
