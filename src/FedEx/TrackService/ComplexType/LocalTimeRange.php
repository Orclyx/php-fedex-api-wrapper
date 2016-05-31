<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Time Range specified in local time.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class LocalTimeRange
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LocalTimeRange';

    /**
     * Set Begins
     *
     * @param string $begins
     * @return LocalTimeRange
     */
    public function setBegins($begins)
    {
        $this->Begins = $begins;
        return $this;
    }
    
    /**
     * Returns Set Begins
     *
     * @return string
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    
    /**
     * Set Ends
     *
     * @param string $ends
     * @return LocalTimeRange
     */
    public function setEnds($ends)
    {
        $this->Ends = $ends;
        return $this;
    }
    
    /**
     * Returns Set Ends
     *
     * @return string
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    

    
}