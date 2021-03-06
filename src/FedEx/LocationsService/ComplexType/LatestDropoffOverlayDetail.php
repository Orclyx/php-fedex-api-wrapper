<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the time and reason to overlay the last drop off time for a carrier at a FedEx location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LatestDropoffOverlayDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LatestDropoffOverlayDetail';

    /**
     * Set Type
     *
     * @param \FedEx\LocationsService\SimpleType\LatestDropOffOverlayType|string $type
     * @return LatestDropoffOverlayDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\LocationsService\SimpleType\LatestDropOffOverlayType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Time
     *
     * @param time $time
     * @return LatestDropoffOverlayDetail
     */
    public function setTime(time $time)
    {
        $this->Time = $time;
        return $this;
    }
    
    /**
     * Returns Set Time
     *
     * @return time
     */
    public function getTime()
    {
        return $this->Time;
    }
    

    
}