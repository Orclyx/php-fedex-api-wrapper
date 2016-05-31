<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedAddressPartsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedAddressPartsDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedAddressPartsDetail';

    /**
     * Set ParsedStreetLine
     *
     * @param ParsedStreetLineDetail $parsedStreetLine
     * @return ParsedAddressPartsDetail
     */
    public function setParsedStreetLine(ParsedStreetLineDetail $parsedStreetLine)
    {
        $this->ParsedStreetLine = $parsedStreetLine;
        return $this;
    }
    
    /**
     * Returns Set ParsedStreetLine
     *
     * @return ParsedStreetLineDetail
     */
    public function getParsedStreetLine()
    {
        return $this->ParsedStreetLine;
    }
    
    /**
     * The postal code specified in a form that is supported by USPS as base, secondary and tertiary.
     *
     * @param ParsedPostalCodeDetail $parsedPostalCode
     * @return ParsedAddressPartsDetail
     */
    public function setParsedPostalCode(ParsedPostalCodeDetail $parsedPostalCode)
    {
        $this->ParsedPostalCode = $parsedPostalCode;
        return $this;
    }
    
    /**
     * Returns The postal code specified in a form that is supported by USPS as base, secondary and tertiary.
     *
     * @return ParsedPostalCodeDetail
     */
    public function getParsedPostalCode()
    {
        return $this->ParsedPostalCode;
    }
    

    
}