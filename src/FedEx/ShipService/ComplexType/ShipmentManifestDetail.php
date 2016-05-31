<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentManifestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentManifestDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentManifestDetail';

    /**
     * This identifies which customer reference field contains the manifest ID.
     *
     * @param \FedEx\ShipService\SimpleType\CustomerReferenceType|string $manifestReferenceType
     * @return ShipmentManifestDetail
     */
    public function setManifestReferenceType($manifestReferenceType)
    {
        $this->ManifestReferenceType = $manifestReferenceType;
        return $this;
    }
    
    /**
     * Returns This identifies which customer reference field contains the manifest ID.
     *
     * @return \FedEx\ShipService\SimpleType\CustomerReferenceType|string
     */
    public function getManifestReferenceType()
    {
        return $this->ManifestReferenceType;
    }
    

    
}