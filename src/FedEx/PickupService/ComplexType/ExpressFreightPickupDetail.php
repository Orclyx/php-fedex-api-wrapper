<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExpressFreightPickupDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ExpressFreightPickupDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressFreightPickupDetail';

    /**
     * Set Service
     *
     * @param \FedEx\PickupService\SimpleType\ServiceType|string $service
     * @return ExpressFreightPickupDetail
     */
    public function setService($service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Returns Set Service
     *
     * @return \FedEx\PickupService\SimpleType\ServiceType|string
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * Set BookingNumber
     *
     * @param string $bookingNumber
     * @return ExpressFreightPickupDetail
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->BookingNumber = $bookingNumber;
        return $this;
    }
    
    /**
     * Returns Set BookingNumber
     *
     * @return string
     */
    public function getBookingNumber()
    {
        return $this->BookingNumber;
    }
    
    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return ExpressFreightPickupDetail
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Returns Set Dimensions
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    
    /**
     * Set TruckType
     *
     * @param \FedEx\PickupService\SimpleType\TruckType|string $truckType
     * @return ExpressFreightPickupDetail
     */
    public function setTruckType($truckType)
    {
        $this->TruckType = $truckType;
        return $this;
    }
    
    /**
     * Returns Set TruckType
     *
     * @return \FedEx\PickupService\SimpleType\TruckType|string
     */
    public function getTruckType()
    {
        return $this->TruckType;
    }
    
    /**
     * Set TrailerSize
     *
     * @param \FedEx\PickupService\SimpleType\TrailerSizeType|string $trailerSize
     * @return ExpressFreightPickupDetail
     */
    public function setTrailerSize($trailerSize)
    {
        $this->TrailerSize = $trailerSize;
        return $this;
    }
    
    /**
     * Returns Set TrailerSize
     *
     * @return \FedEx\PickupService\SimpleType\TrailerSizeType|string
     */
    public function getTrailerSize()
    {
        return $this->TrailerSize;
    }
    

    
}