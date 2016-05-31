<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackOtherIdentifierDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackOtherIdentifierDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackOtherIdentifierDetail';

    /**
     * Set PackageIdentifier
     *
     * @param TrackPackageIdentifier $packageIdentifier
     * @return TrackOtherIdentifierDetail
     */
    public function setPackageIdentifier(TrackPackageIdentifier $packageIdentifier)
    {
        $this->PackageIdentifier = $packageIdentifier;
        return $this;
    }
    
    /**
     * Returns Set PackageIdentifier
     *
     * @return TrackPackageIdentifier
     */
    public function getPackageIdentifier()
    {
        return $this->PackageIdentifier;
    }
    
    /**
     * Set TrackingNumberUniqueIdentifier
     *
     * @param string $trackingNumberUniqueIdentifier
     * @return TrackOtherIdentifierDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * Returns Set TrackingNumberUniqueIdentifier
     *
     * @return string
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    
    /**
     * Set CarrierCode
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrierCode
     * @return TrackOtherIdentifierDetail
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Set CarrierCode
     *
     * @return \FedEx\TrackService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    

    
}