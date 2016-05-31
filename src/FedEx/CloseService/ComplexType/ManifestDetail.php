<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ManifestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ManifestDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ManifestDetail';

    /**
     * Set Format
     *
     * @param CloseDocumentFormat $format
     * @return ManifestDetail
     */
    public function setFormat(CloseDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Set Format
     *
     * @return CloseDocumentFormat
     */
    public function getFormat()
    {
        return $this->Format;
    }
    

    
}