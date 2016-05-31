<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReservationAvailabilityDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class ReservationAvailabilityDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReservationAvailabilityDetail';

    /**
     * Set Attributes
     *
     * @param ReservationAttributesType[] $attributes
     * @return ReservationAvailabilityDetail
     */
    public function setAttributes(array $attributes)
    {
        $this->Attributes = $attributes;
        return $this;
    }
    
    /**
     * Returns Set Attributes
     *
     * @return ReservationAttributesType[]
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    

    
}