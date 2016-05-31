<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseSmartPostDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseSmartPostDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CloseSmartPostDetail';

    /**
     * Set HubId
     *
     * @param string $hubId
     * @return CloseSmartPostDetail
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * Returns Set HubId
     *
     * @return string
     */
    public function getHubId()
    {
        return $this->HubId;
    }
    
    /**
     * Set CustomerId
     *
     * @param string $customerId
     * @return CloseSmartPostDetail
     */
    public function setCustomerId($customerId)
    {
        $this->CustomerId = $customerId;
        return $this;
    }
    
    /**
     * Returns Set CustomerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }
    
    /**
     * Set CustomerManifestId
     *
     * @param string $customerManifestId
     * @return CloseSmartPostDetail
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    
    /**
     * Returns Set CustomerManifestId
     *
     * @return string
     */
    public function getCustomerManifestId()
    {
        return $this->CustomerManifestId;
    }
    
    /**
     * Set DestinationCountryCode
     *
     * @param string $destinationCountryCode
     * @return CloseSmartPostDetail
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    
    /**
     * Returns Set DestinationCountryCode
     *
     * @return string
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }
    
    /**
     * Set PickupCarrier
     *
     * @param \FedEx\CloseService\SimpleType\CarrierCodeType|string $pickupCarrier
     * @return CloseSmartPostDetail
     */
    public function setPickupCarrier($pickupCarrier)
    {
        $this->PickupCarrier = $pickupCarrier;
        return $this;
    }
    
    /**
     * Returns Set PickupCarrier
     *
     * @return \FedEx\CloseService\SimpleType\CarrierCodeType|string
     */
    public function getPickupCarrier()
    {
        return $this->PickupCarrier;
    }
    

    
}