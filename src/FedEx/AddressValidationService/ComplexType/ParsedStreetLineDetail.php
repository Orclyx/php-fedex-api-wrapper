<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedStreetLineDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedStreetLineDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedStreetLineDetail';

    /**
     * Set HouseNumber
     *
     * @param string $houseNumber
     * @return ParsedStreetLineDetail
     */
    public function setHouseNumber($houseNumber)
    {
        $this->HouseNumber = $houseNumber;
        return $this;
    }
    
    /**
     * Returns Set HouseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }
    
    /**
     * Set PreStreetType
     *
     * @param string $preStreetType
     * @return ParsedStreetLineDetail
     */
    public function setPreStreetType($preStreetType)
    {
        $this->PreStreetType = $preStreetType;
        return $this;
    }
    
    /**
     * Returns Set PreStreetType
     *
     * @return string
     */
    public function getPreStreetType()
    {
        return $this->PreStreetType;
    }
    
    /**
     * Set LeadingDirectional
     *
     * @param string $leadingDirectional
     * @return ParsedStreetLineDetail
     */
    public function setLeadingDirectional($leadingDirectional)
    {
        $this->LeadingDirectional = $leadingDirectional;
        return $this;
    }
    
    /**
     * Returns Set LeadingDirectional
     *
     * @return string
     */
    public function getLeadingDirectional()
    {
        return $this->LeadingDirectional;
    }
    
    /**
     * Set StreetName
     *
     * @param string $streetName
     * @return ParsedStreetLineDetail
     */
    public function setStreetName($streetName)
    {
        $this->StreetName = $streetName;
        return $this;
    }
    
    /**
     * Returns Set StreetName
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }
    
    /**
     * Set StreetSuffix
     *
     * @param string $streetSuffix
     * @return ParsedStreetLineDetail
     */
    public function setStreetSuffix($streetSuffix)
    {
        $this->StreetSuffix = $streetSuffix;
        return $this;
    }
    
    /**
     * Returns Set StreetSuffix
     *
     * @return string
     */
    public function getStreetSuffix()
    {
        return $this->StreetSuffix;
    }
    
    /**
     * Set TrailingDirectional
     *
     * @param string $trailingDirectional
     * @return ParsedStreetLineDetail
     */
    public function setTrailingDirectional($trailingDirectional)
    {
        $this->TrailingDirectional = $trailingDirectional;
        return $this;
    }
    
    /**
     * Returns Set TrailingDirectional
     *
     * @return string
     */
    public function getTrailingDirectional()
    {
        return $this->TrailingDirectional;
    }
    
    /**
     * Set UnitLabel
     *
     * @param string $unitLabel
     * @return ParsedStreetLineDetail
     */
    public function setUnitLabel($unitLabel)
    {
        $this->UnitLabel = $unitLabel;
        return $this;
    }
    
    /**
     * Returns Set UnitLabel
     *
     * @return string
     */
    public function getUnitLabel()
    {
        return $this->UnitLabel;
    }
    
    /**
     * Set UnitNumber
     *
     * @param string $unitNumber
     * @return ParsedStreetLineDetail
     */
    public function setUnitNumber($unitNumber)
    {
        $this->UnitNumber = $unitNumber;
        return $this;
    }
    
    /**
     * Returns Set UnitNumber
     *
     * @return string
     */
    public function getUnitNumber()
    {
        return $this->UnitNumber;
    }
    
    /**
     * Set RuralRoute
     *
     * @param string $ruralRoute
     * @return ParsedStreetLineDetail
     */
    public function setRuralRoute($ruralRoute)
    {
        $this->RuralRoute = $ruralRoute;
        return $this;
    }
    
    /**
     * Returns Set RuralRoute
     *
     * @return string
     */
    public function getRuralRoute()
    {
        return $this->RuralRoute;
    }
    
    /**
     * Set POBox
     *
     * @param string $pOBox
     * @return ParsedStreetLineDetail
     */
    public function setPOBox($pOBox)
    {
        $this->POBox = $pOBox;
        return $this;
    }
    
    /**
     * Returns Set POBox
     *
     * @return string
     */
    public function getPOBox()
    {
        return $this->POBox;
    }
    
    /**
     * Set Building
     *
     * @param string $building
     * @return ParsedStreetLineDetail
     */
    public function setBuilding($building)
    {
        $this->Building = $building;
        return $this;
    }
    
    /**
     * Returns Set Building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->Building;
    }
    
    /**
     * Set Organization
     *
     * @param string $organization
     * @return ParsedStreetLineDetail
     */
    public function setOrganization($organization)
    {
        $this->Organization = $organization;
        return $this;
    }
    
    /**
     * Returns Set Organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->Organization;
    }
    

    
}