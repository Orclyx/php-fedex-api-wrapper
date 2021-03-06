<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about the countries supported by this location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class ClearanceLocationDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ClearanceLocationDetail';

    /**
     * Services supported for clearance
     *
     * @param ServiceType[] $servicesSupported
     * @return ClearanceLocationDetail
     */
    public function setServicesSupported(array $servicesSupported)
    {
        $this->ServicesSupported = $servicesSupported;
        return $this;
    }
    
    /**
     * Returns Services supported for clearance
     *
     * @return ServiceType[]
     */
    public function getServicesSupported()
    {
        return $this->ServicesSupported;
    }
    
    /**
     * Identifies the type of consolidation for which these clearance location attributes were extracted.
     *
     * @param \FedEx\LocationsService\SimpleType\ConsolidationType|string $consolidationType
     * @return ClearanceLocationDetail
     */
    public function setConsolidationType($consolidationType)
    {
        $this->ConsolidationType = $consolidationType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of consolidation for which these clearance location attributes were extracted.
     *
     * @return \FedEx\LocationsService\SimpleType\ConsolidationType|string
     */
    public function getConsolidationType()
    {
        return $this->ConsolidationType;
    }
    
    /**
     * Identifies the type of clearance performed at this location.
     *
     * @param \FedEx\LocationsService\SimpleType\DistributionClearanceType|string $clearanceLocationType
     * @return ClearanceLocationDetail
     */
    public function setClearanceLocationType($clearanceLocationType)
    {
        $this->ClearanceLocationType = $clearanceLocationType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of clearance performed at this location.
     *
     * @return \FedEx\LocationsService\SimpleType\DistributionClearanceType|string
     */
    public function getClearanceLocationType()
    {
        return $this->ClearanceLocationType;
    }
    
    /**
     * Identifies the constrained special services supported at this location.
     *
     * @param PackageSpecialServiceType[] $specialServicesSupported
     * @return ClearanceLocationDetail
     */
    public function setSpecialServicesSupported(array $specialServicesSupported)
    {
        $this->SpecialServicesSupported = $specialServicesSupported;
        return $this;
    }
    
    /**
     * Returns Identifies the constrained special services supported at this location.
     *
     * @return PackageSpecialServiceType[]
     */
    public function getSpecialServicesSupported()
    {
        return $this->SpecialServicesSupported;
    }
    
    /**
     * Set ClearanceCountries
     *
     * @param ClearanceCountryDetail[] $clearanceCountries
     * @return ClearanceLocationDetail
     */
    public function setClearanceCountries(array $clearanceCountries)
    {
        $this->ClearanceCountries = $clearanceCountries;
        return $this;
    }
    
    /**
     * Returns Set ClearanceCountries
     *
     * @return ClearanceCountryDetail[]
     */
    public function getClearanceCountries()
    {
        return $this->ClearanceCountries;
    }
    
    /**
     * Set ClearanceRoutingCode
     *
     * @param string $clearanceRoutingCode
     * @return ClearanceLocationDetail
     */
    public function setClearanceRoutingCode($clearanceRoutingCode)
    {
        $this->ClearanceRoutingCode = $clearanceRoutingCode;
        return $this;
    }
    
    /**
     * Returns Set ClearanceRoutingCode
     *
     * @return string
     */
    public function getClearanceRoutingCode()
    {
        return $this->ClearanceRoutingCode;
    }
    

    
}