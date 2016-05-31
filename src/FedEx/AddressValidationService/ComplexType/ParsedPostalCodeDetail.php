<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedPostalCodeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedPostalCodeDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedPostalCodeDetail';

    /**
     * Set Base
     *
     * @param string $base
     * @return ParsedPostalCodeDetail
     */
    public function setBase($base)
    {
        $this->Base = $base;
        return $this;
    }
    
    /**
     * Returns Set Base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->Base;
    }
    
    /**
     * Set AddOn
     *
     * @param string $addOn
     * @return ParsedPostalCodeDetail
     */
    public function setAddOn($addOn)
    {
        $this->AddOn = $addOn;
        return $this;
    }
    
    /**
     * Returns Set AddOn
     *
     * @return string
     */
    public function getAddOn()
    {
        return $this->AddOn;
    }
    
    /**
     * Set DeliveryPoint
     *
     * @param string $deliveryPoint
     * @return ParsedPostalCodeDetail
     */
    public function setDeliveryPoint($deliveryPoint)
    {
        $this->DeliveryPoint = $deliveryPoint;
        return $this;
    }
    
    /**
     * Returns Set DeliveryPoint
     *
     * @return string
     */
    public function getDeliveryPoint()
    {
        return $this->DeliveryPoint;
    }
    

    
}