<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseManifestReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseManifestReferenceDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CloseManifestReferenceDetail';

    /**
     * This identifies which customer reference field used as the manifest ID.
     *
     * @param \FedEx\CloseService\SimpleType\CustomerReferenceType|string $type
     * @return CloseManifestReferenceDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns This identifies which customer reference field used as the manifest ID.
     *
     * @return \FedEx\CloseService\SimpleType\CustomerReferenceType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Value
     *
     * @param string $value
     * @return CloseManifestReferenceDetail
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Set Value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}