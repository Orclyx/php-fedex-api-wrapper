<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the location hours for a location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationHours
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LocationHours';

    /**
     * Set DayofWeek
     *
     * @param \FedEx\LocationsService\SimpleType\DayOfWeekType|string $dayofWeek
     * @return LocationHours
     */
    public function setDayofWeek($dayofWeek)
    {
        $this->DayofWeek = $dayofWeek;
        return $this;
    }
    
    /**
     * Returns Set DayofWeek
     *
     * @return \FedEx\LocationsService\SimpleType\DayOfWeekType|string
     */
    public function getDayofWeek()
    {
        return $this->DayofWeek;
    }
    
    /**
     * Set OperationalHours
     *
     * @param \FedEx\LocationsService\SimpleType\OperationalHoursType|string $operationalHours
     * @return LocationHours
     */
    public function setOperationalHours($operationalHours)
    {
        $this->OperationalHours = $operationalHours;
        return $this;
    }
    
    /**
     * Returns Set OperationalHours
     *
     * @return \FedEx\LocationsService\SimpleType\OperationalHoursType|string
     */
    public function getOperationalHours()
    {
        return $this->OperationalHours;
    }
    
    /**
     * Set Hours
     *
     * @param TimeRange[] $hours
     * @return LocationHours
     */
    public function setHours(array $hours)
    {
        $this->Hours = $hours;
        return $this;
    }
    
    /**
     * Returns Set Hours
     *
     * @return TimeRange[]
     */
    public function getHours()
    {
        return $this->Hours;
    }
    

    
}