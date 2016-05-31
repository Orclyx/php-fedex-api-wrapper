<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FreightGuaranteeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightGuaranteeDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightGuaranteeDetail';

    /**
     * Set Type
     *
     * @param \FedEx\PickupService\SimpleType\FreightGuaranteeType|string $type
     * @return FreightGuaranteeDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\PickupService\SimpleType\FreightGuaranteeType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Date for all Freight guarantee types.
     *
     * @param date $date
     * @return FreightGuaranteeDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns Date for all Freight guarantee types.
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    
    /**
     * Time for GUARANTEED_TIME only.
     *
     * @param time $time
     * @return FreightGuaranteeDetail
     */
    public function setTime(time $time)
    {
        $this->Time = $time;
        return $this;
    }
    
    /**
     * Returns Time for GUARANTEED_TIME only.
     *
     * @return time
     */
    public function getTime()
    {
        return $this->Time;
    }
    

    
}