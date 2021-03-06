<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationContactAndAddress
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationContactAndAddress
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LocationContactAndAddress';

    /**
     * Set Contact
     *
     * @param Contact $contact
     * @return LocationContactAndAddress
     */
    public function setContact(Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * Returns Set Contact
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }
    
    /**
     * Set Address
     *
     * @param Address $address
     * @return LocationContactAndAddress
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns Set Address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    
    /**
     * Set AddressAncillaryDetail
     *
     * @param AddressAncillaryDetail $addressAncillaryDetail
     * @return LocationContactAndAddress
     */
    public function setAddressAncillaryDetail(AddressAncillaryDetail $addressAncillaryDetail)
    {
        $this->AddressAncillaryDetail = $addressAncillaryDetail;
        return $this;
    }
    
    /**
     * Returns Set AddressAncillaryDetail
     *
     * @return AddressAncillaryDetail
     */
    public function getAddressAncillaryDetail()
    {
        return $this->AddressAncillaryDetail;
    }
    

    
}