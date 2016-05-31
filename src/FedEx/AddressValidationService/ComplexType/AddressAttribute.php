<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies additional information about the address processed by the SHARE systems as a key-value pair.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressAttribute
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressAttribute';

    /**
     * Specifies the key for the address attribute.
     *
     * @param string $name
     * @return AddressAttribute
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Returns Specifies the key for the address attribute.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    
    /**
     * The value for the key for the address attribute.
     *
     * @param string $value
     * @return AddressAttribute
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns The value for the key for the address attribute.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}