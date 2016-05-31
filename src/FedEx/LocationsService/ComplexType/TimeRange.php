<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TimeRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class TimeRange
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TimeRange';

    /**
     * Set Begins
     *
     * @param time $begins
     * @return TimeRange
     */
    public function setBegins(time $begins)
    {
        $this->Begins = $begins;
        return $this;
    }
    
    /**
     * Returns Set Begins
     *
     * @return time
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    
    /**
     * Set Ends
     *
     * @param time $ends
     * @return TimeRange
     */
    public function setEnds(time $ends)
    {
        $this->Ends = $ends;
        return $this;
    }
    
    /**
     * Returns Set Ends
     *
     * @return time
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    

    
}