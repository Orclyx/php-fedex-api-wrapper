<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupAvailabilityRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupAvailabilityRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupAvailabilityRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return PickupAvailabilityRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return PickupAvailabilityRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Set ClientDetail
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return PickupAvailabilityRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return PickupAvailabilityRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set PickupType
     *
     * @param \FedEx\PickupService\SimpleType\PickupType|string $pickupType
     * @return PickupAvailabilityRequest
     */
    public function setPickupType($pickupType)
    {
        $this->PickupType = $pickupType;
        return $this;
    }
    
    /**
     * Returns Set PickupType
     *
     * @return \FedEx\PickupService\SimpleType\PickupType|string
     */
    public function getPickupType()
    {
        return $this->PickupType;
    }
    
    /**
     * Identifies the account number for Freight Pickup Availability
     *
     * @param AssociatedAccount $accountNumber
     * @return PickupAvailabilityRequest
     */
    public function setAccountNumber(AssociatedAccount $accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the account number for Freight Pickup Availability
     *
     * @return AssociatedAccount
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    
    /**
     * Set PickupAddress
     *
     * @param Address $pickupAddress
     * @return PickupAvailabilityRequest
     */
    public function setPickupAddress(Address $pickupAddress)
    {
        $this->PickupAddress = $pickupAddress;
        return $this;
    }
    
    /**
     * Returns Set PickupAddress
     *
     * @return Address
     */
    public function getPickupAddress()
    {
        return $this->PickupAddress;
    }
    
    /**
     * Set PickupRequestType
     *
     * @param PickupRequestType[] $pickupRequestType
     * @return PickupAvailabilityRequest
     */
    public function setPickupRequestType(array $pickupRequestType)
    {
        $this->PickupRequestType = $pickupRequestType;
        return $this;
    }
    
    /**
     * Returns Set PickupRequestType
     *
     * @return PickupRequestType[]
     */
    public function getPickupRequestType()
    {
        return $this->PickupRequestType;
    }
    
    /**
     * Set DispatchDate
     *
     * @param date $dispatchDate
     * @return PickupAvailabilityRequest
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    
    /**
     * Returns Set DispatchDate
     *
     * @return date
     */
    public function getDispatchDate()
    {
        return $this->DispatchDate;
    }
    
    /**
     * Number of business days to consider when checking availability.
     *
     * @param positiveInteger $numberOfBusinessDays
     * @return PickupAvailabilityRequest
     */
    public function setNumberOfBusinessDays($numberOfBusinessDays)
    {
        $this->NumberOfBusinessDays = $numberOfBusinessDays;
        return $this;
    }
    
    /**
     * Returns Number of business days to consider when checking availability.
     *
     * @return positiveInteger
     */
    public function getNumberOfBusinessDays()
    {
        return $this->NumberOfBusinessDays;
    }
    
    /**
     * Set PackageReadyTime
     *
     * @param time $packageReadyTime
     * @return PickupAvailabilityRequest
     */
    public function setPackageReadyTime(time $packageReadyTime)
    {
        $this->PackageReadyTime = $packageReadyTime;
        return $this;
    }
    
    /**
     * Returns Set PackageReadyTime
     *
     * @return time
     */
    public function getPackageReadyTime()
    {
        return $this->PackageReadyTime;
    }
    
    /**
     * Set CustomerCloseTime
     *
     * @param time $customerCloseTime
     * @return PickupAvailabilityRequest
     */
    public function setCustomerCloseTime(time $customerCloseTime)
    {
        $this->CustomerCloseTime = $customerCloseTime;
        return $this;
    }
    
    /**
     * Returns Set CustomerCloseTime
     *
     * @return time
     */
    public function getCustomerCloseTime()
    {
        return $this->CustomerCloseTime;
    }
    
    /**
     * Set Carriers
     *
     * @param CarrierCodeType[] $carriers
     * @return PickupAvailabilityRequest
     */
    public function setCarriers(array $carriers)
    {
        $this->Carriers = $carriers;
        return $this;
    }
    
    /**
     * Returns Set Carriers
     *
     * @return CarrierCodeType[]
     */
    public function getCarriers()
    {
        return $this->Carriers;
    }
    
    /**
     * Set ShipmentAttributes
     *
     * @param PickupShipmentAttributes $shipmentAttributes
     * @return PickupAvailabilityRequest
     */
    public function setShipmentAttributes(PickupShipmentAttributes $shipmentAttributes)
    {
        $this->ShipmentAttributes = $shipmentAttributes;
        return $this;
    }
    
    /**
     * Returns Set ShipmentAttributes
     *
     * @return PickupShipmentAttributes
     */
    public function getShipmentAttributes()
    {
        return $this->ShipmentAttributes;
    }
    

    
}