<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupScheduleOption
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupScheduleOption
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupScheduleOption';

    /**
     * Set Carrier
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrier
     * @return PickupScheduleOption
     */
    public function setCarrier($carrier)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * Returns Set Carrier
     *
     * @return \FedEx\PickupService\SimpleType\CarrierCodeType|string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return PickupScheduleOption
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Set ScheduleDay
     *
     * @param \FedEx\PickupService\SimpleType\PickupRequestType|string $scheduleDay
     * @return PickupScheduleOption
     */
    public function setScheduleDay($scheduleDay)
    {
        $this->ScheduleDay = $scheduleDay;
        return $this;
    }
    
    /**
     * Returns Set ScheduleDay
     *
     * @return \FedEx\PickupService\SimpleType\PickupRequestType|string
     */
    public function getScheduleDay()
    {
        return $this->ScheduleDay;
    }
    
    /**
     * Set Available
     *
     * @param boolean $available
     * @return PickupScheduleOption
     */
    public function setAvailable($available)
    {
        $this->Available = $available;
        return $this;
    }
    
    /**
     * Returns Set Available
     *
     * @return boolean
     */
    public function getAvailable()
    {
        return $this->Available;
    }
    
    /**
     * Set PickupDate
     *
     * @param date $pickupDate
     * @return PickupScheduleOption
     */
    public function setPickupDate($pickupDate)
    {
        $this->PickupDate = $pickupDate;
        return $this;
    }
    
    /**
     * Returns Set PickupDate
     *
     * @return date
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }
    
    /**
     * Set CutOffTime
     *
     * @param time $cutOffTime
     * @return PickupScheduleOption
     */
    public function setCutOffTime(time $cutOffTime)
    {
        $this->CutOffTime = $cutOffTime;
        return $this;
    }
    
    /**
     * Returns Set CutOffTime
     *
     * @return time
     */
    public function getCutOffTime()
    {
        return $this->CutOffTime;
    }
    
    /**
     * Set AccessTime
     *
     * @param duration $accessTime
     * @return PickupScheduleOption
     */
    public function setAccessTime(duration $accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * Returns Set AccessTime
     *
     * @return duration
     */
    public function getAccessTime()
    {
        return $this->AccessTime;
    }
    
    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @param boolean $residentialAvailable
     * @return PickupScheduleOption
     */
    public function setResidentialAvailable($residentialAvailable)
    {
        $this->ResidentialAvailable = $residentialAvailable;
        return $this;
    }
    
    /**
     * Returns Indicates whether residential pickup is available for the requested postal code.
     *
     * @return boolean
     */
    public function getResidentialAvailable()
    {
        return $this->ResidentialAvailable;
    }
    
    /**
     * Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @param \FedEx\PickupService\SimpleType\CountryRelationshipType|string $countryRelationship
     * @return PickupScheduleOption
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->CountryRelationship = $countryRelationship;
        return $this;
    }
    
    /**
     * Returns Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @return \FedEx\PickupService\SimpleType\CountryRelationshipType|string
     */
    public function getCountryRelationship()
    {
        return $this->CountryRelationship;
    }
    

    
}