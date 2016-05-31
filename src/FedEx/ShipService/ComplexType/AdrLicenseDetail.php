<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details around the ADR license required for shipping.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AdrLicenseDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AdrLicenseDetail';

    /**
     * Set LicenseOrPermitDetail
     *
     * @param LicenseOrPermitDetail $licenseOrPermitDetail
     * @return AdrLicenseDetail
     */
    public function setLicenseOrPermitDetail(LicenseOrPermitDetail $licenseOrPermitDetail)
    {
        $this->LicenseOrPermitDetail = $licenseOrPermitDetail;
        return $this;
    }
    
    /**
     * Returns Set LicenseOrPermitDetail
     *
     * @return LicenseOrPermitDetail
     */
    public function getLicenseOrPermitDetail()
    {
        return $this->LicenseOrPermitDetail;
    }
    

    
}