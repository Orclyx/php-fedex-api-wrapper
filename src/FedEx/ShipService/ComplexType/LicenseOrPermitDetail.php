<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LicenseOrPermitDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LicenseOrPermitDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LicenseOrPermitDetail';

    /**
     * License or Permit Number.
     *
     * @param string $number
     * @return LicenseOrPermitDetail
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Returns License or Permit Number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }
    
    /**
     * Specifies the effective date of the license.
     *
     * @param date $effectiveDate
     * @return LicenseOrPermitDetail
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    
    /**
     * Returns Specifies the effective date of the license.
     *
     * @return date
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    
    /**
     * Specifies the expiration date of the license.
     *
     * @param date $expirationDate
     * @return LicenseOrPermitDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Returns Specifies the expiration date of the license.
     *
     * @return date
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    

    
}