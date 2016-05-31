<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the relationship between the address specificed and the address of the FedEx Location in terms of distance.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class AddressToLocationRelationshipDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressToLocationRelationshipDetail';

    /**
     * Address as provided in the request.
     *
     * @param Address $matchedAddress
     * @return AddressToLocationRelationshipDetail
     */
    public function setMatchedAddress(Address $matchedAddress)
    {
        $this->MatchedAddress = $matchedAddress;
        return $this;
    }
    
    /**
     * Returns Address as provided in the request.
     *
     * @return Address
     */
    public function getMatchedAddress()
    {
        return $this->MatchedAddress;
    }
    
    /**
     * Specify the geographic co-ordinates for the matched address.
     *
     * @param string $matchedAddressGeographicCoordinates
     * @return AddressToLocationRelationshipDetail
     */
    public function setMatchedAddressGeographicCoordinates($matchedAddressGeographicCoordinates)
    {
        $this->MatchedAddressGeographicCoordinates = $matchedAddressGeographicCoordinates;
        return $this;
    }
    
    /**
     * Returns Specify the geographic co-ordinates for the matched address.
     *
     * @return string
     */
    public function getMatchedAddressGeographicCoordinates()
    {
        return $this->MatchedAddressGeographicCoordinates;
    }
    
    /**
     * Specifies the distance between the matched address and the addresses of matched FedEx locations. Also specifies the details of the FedEx locations.
     *
     * @param DistanceAndLocationDetail[] $distanceAndLocationDetails
     * @return AddressToLocationRelationshipDetail
     */
    public function setDistanceAndLocationDetails(array $distanceAndLocationDetails)
    {
        $this->DistanceAndLocationDetails = $distanceAndLocationDetails;
        return $this;
    }
    
    /**
     * Returns Specifies the distance between the matched address and the addresses of matched FedEx locations. Also specifies the details of the FedEx locations.
     *
     * @return DistanceAndLocationDetail[]
     */
    public function getDistanceAndLocationDetails()
    {
        return $this->DistanceAndLocationDetails;
    }
    

    
}