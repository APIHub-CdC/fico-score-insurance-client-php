<?php

namespace FicoScoreInsurance\Client\Model;

use \ArrayAccess;
use \FicoScoreInsurance\Client\ObjectSerializer;

class Domicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $FicoScoreInsuranceSimulacionModelName = 'Domicilio';
    
    protected static $FicoScoreInsuranceSimulacionTypes = [
        'direccion' => 'string',
        'colonia' => 'string',
        'ciudad' => 'string',
        'codigo_postal' => 'string',
        'municipio' => 'string',
        'estado' => 'string'
    ];
    
    protected static $FicoScoreInsuranceSimulacionFormats = [
        'direccion' => null,
        'colonia' => null,
        'ciudad' => null,
        'codigo_postal' => null,
        'municipio' => null,
        'estado' => null
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
        'direccion' => 'direccion',
        'colonia' => 'colonia',
        'ciudad' => 'ciudad',
        'codigo_postal' => 'codigoPostal',
        'municipio' => 'municipio',
        'estado' => 'estado'
    ];
    
    protected static $setters = [
        'direccion' => 'setDireccion',
        'colonia' => 'setColonia',
        'ciudad' => 'setCiudad',
        'codigo_postal' => 'setCodigoPostal',
        'municipio' => 'setMunicipio',
        'estado' => 'setEstado'
    ];
    
    protected static $getters = [
        'direccion' => 'getDireccion',
        'colonia' => 'getColonia',
        'ciudad' => 'getCiudad',
        'codigo_postal' => 'getCodigoPostal',
        'municipio' => 'getMunicipio',
        'estado' => 'getEstado'
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
    const ESTADO_AGS = 'AGS';
    const ESTADO_BC = 'BC';
    const ESTADO_BCS = 'BCS';
    const ESTADO_CAMP = 'CAMP';
    const ESTADO_COAH = 'COAH';
    const ESTADO_COL = 'COL';
    const ESTADO_CHIS = 'CHIS';
    const ESTADO_CHIH = 'CHIH';
    const ESTADO_DF = 'DF';
    const ESTADO_CDMX = 'CDMX';
    const ESTADO_DGO = 'DGO';
    const ESTADO_GTO = 'GTO';
    const ESTADO_GRO = 'GRO';
    const ESTADO_HGO = 'HGO';
    const ESTADO_JAL = 'JAL';
    const ESTADO_MEX = 'MEX';
    const ESTADO_MICH = 'MICH';
    const ESTADO_MOR = 'MOR';
    const ESTADO_NAY = 'NAY';
    const ESTADO_NL = 'NL';
    const ESTADO_OAX = 'OAX';
    const ESTADO_PUE = 'PUE';
    const ESTADO_QRO = 'QRO';
    const ESTADO_QROO = 'QROO';
    const ESTADO_SLP = 'SLP';
    const ESTADO_SIN = 'SIN';
    const ESTADO_SON = 'SON';
    const ESTADO_TAB = 'TAB';
    const ESTADO_TAMP = 'TAMP';
    const ESTADO_TLAX = 'TLAX';
    const ESTADO_VER = 'VER';
    const ESTADO_YUC = 'YUC';
    const ESTADO_ZAC = 'ZAC';
    
    
    
    public function getEstadoAllowableValues()
    {
        return [
            self::ESTADO_AGS,
            self::ESTADO_BC,
            self::ESTADO_BCS,
            self::ESTADO_CAMP,
            self::ESTADO_COAH,
            self::ESTADO_COL,
            self::ESTADO_CHIS,
            self::ESTADO_CHIH,
            self::ESTADO_DF,
            self::ESTADO_CDMX,
            self::ESTADO_DGO,
            self::ESTADO_GTO,
            self::ESTADO_GRO,
            self::ESTADO_HGO,
            self::ESTADO_JAL,
            self::ESTADO_MEX,
            self::ESTADO_MICH,
            self::ESTADO_MOR,
            self::ESTADO_NAY,
            self::ESTADO_NL,
            self::ESTADO_OAX,
            self::ESTADO_PUE,
            self::ESTADO_QRO,
            self::ESTADO_QROO,
            self::ESTADO_SLP,
            self::ESTADO_SIN,
            self::ESTADO_SON,
            self::ESTADO_TAB,
            self::ESTADO_TAMP,
            self::ESTADO_TLAX,
            self::ESTADO_VER,
            self::ESTADO_YUC,
            self::ESTADO_ZAC,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['colonia'] = isset($data['colonia']) ? $data['colonia'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['codigo_postal'] = isset($data['codigo_postal']) ? $data['codigo_postal'] : null;
        $this->container['municipio'] = isset($data['municipio']) ? $data['municipio'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['direccion']) && (mb_strlen($this->container['direccion']) > 85)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be smaller than or equal to 85.";
        }
        if (!is_null($this->container['direccion']) && (mb_strlen($this->container['direccion']) < 0)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['colonia']) && (mb_strlen($this->container['colonia']) > 65)) {
            $invalidProperties[] = "invalid value for 'colonia', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['colonia']) && (mb_strlen($this->container['colonia']) < 0)) {
            $invalidProperties[] = "invalid value for 'colonia', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) > 65)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) < 0)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['codigo_postal']) && (mb_strlen($this->container['codigo_postal']) > 5)) {
            $invalidProperties[] = "invalid value for 'codigo_postal', the character length must be smaller than or equal to 5.";
        }
        if (!is_null($this->container['codigo_postal']) && (mb_strlen($this->container['codigo_postal']) < 5)) {
            $invalidProperties[] = "invalid value for 'codigo_postal', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['municipio']) && (mb_strlen($this->container['municipio']) > 65)) {
            $invalidProperties[] = "invalid value for 'municipio', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['municipio']) && (mb_strlen($this->container['municipio']) < 0)) {
            $invalidProperties[] = "invalid value for 'municipio', the character length must be bigger than or equal to 0.";
        }
        $allowedValues = $this->getEstadoAllowableValues();
        if (!is_null($this->container['estado']) && !in_array($this->container['estado'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'estado', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        if (!is_null($this->container['estado']) && (mb_strlen($this->container['estado']) > 4)) {
            $invalidProperties[] = "invalid value for 'estado', the character length must be smaller than or equal to 4.";
        }
        if (!is_null($this->container['estado']) && (mb_strlen($this->container['estado']) < 0)) {
            $invalidProperties[] = "invalid value for 'estado', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getDireccion()
    {
        return $this->container['direccion'];
    }
    
    public function setDireccion($direccion)
    {
        if (!is_null($direccion) && (mb_strlen($direccion) > 85)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling Domicilio., must be smaller than or equal to 85.');
        }
        if (!is_null($direccion) && (mb_strlen($direccion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['direccion'] = $direccion;
        return $this;
    }
    
    public function getColonia()
    {
        return $this->container['colonia'];
    }
    
    public function setColonia($colonia)
    {
        if (!is_null($colonia) && (mb_strlen($colonia) > 65)) {
            throw new \InvalidArgumentException('invalid length for $colonia when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($colonia) && (mb_strlen($colonia) < 0)) {
            throw new \InvalidArgumentException('invalid length for $colonia when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['colonia'] = $colonia;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        if (!is_null($ciudad) && (mb_strlen($ciudad) > 65)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($ciudad) && (mb_strlen($ciudad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['ciudad'] = $ciudad;
        return $this;
    }
    
    public function getCodigoPostal()
    {
        return $this->container['codigo_postal'];
    }
    
    public function setCodigoPostal($codigo_postal)
    {
        if (!is_null($codigo_postal) && (mb_strlen($codigo_postal) > 5)) {
            throw new \InvalidArgumentException('invalid length for $codigo_postal when calling Domicilio., must be smaller than or equal to 5.');
        }
        if (!is_null($codigo_postal) && (mb_strlen($codigo_postal) < 5)) {
            throw new \InvalidArgumentException('invalid length for $codigo_postal when calling Domicilio., must be bigger than or equal to 5.');
        }
        $this->container['codigo_postal'] = $codigo_postal;
        return $this;
    }
    
    public function getMunicipio()
    {
        return $this->container['municipio'];
    }
    
    public function setMunicipio($municipio)
    {
        if (!is_null($municipio) && (mb_strlen($municipio) > 65)) {
            throw new \InvalidArgumentException('invalid length for $municipio when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($municipio) && (mb_strlen($municipio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $municipio when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['municipio'] = $municipio;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->container['estado'];
    }
    
    public function setEstado($estado)
    {
        $allowedValues = $this->getEstadoAllowableValues();
        if (!is_null($estado) && !in_array($estado, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'estado', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($estado) && (mb_strlen($estado) > 4)) {
            throw new \InvalidArgumentException('invalid length for $estado when calling Domicilio., must be smaller than or equal to 4.');
        }
        if (!is_null($estado) && (mb_strlen($estado) < 0)) {
            throw new \InvalidArgumentException('invalid length for $estado when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['estado'] = $estado;
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
