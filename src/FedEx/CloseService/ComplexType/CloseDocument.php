<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseDocument
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseDocument
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CloseDocument';

    /**
     * Set Type
     *
     * @param \FedEx\CloseService\SimpleType\CloseDocumentType|string $type
     * @return CloseDocument
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\CloseService\SimpleType\CloseDocumentType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Identifies the shipping cycle covered by the content of this document.
     *
     * @param string $shippingCycle
     * @return CloseDocument
     */
    public function setShippingCycle($shippingCycle)
    {
        $this->ShippingCycle = $shippingCycle;
        return $this;
    }
    
    /**
     * Returns Identifies the shipping cycle covered by the content of this document.
     *
     * @return string
     */
    public function getShippingCycle()
    {
        return $this->ShippingCycle;
    }
    
    /**
     * Set ShippingDocumentDisposition
     *
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentDispositionType|string $shippingDocumentDisposition
     * @return CloseDocument
     */
    public function setShippingDocumentDisposition($shippingDocumentDisposition)
    {
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    
    /**
     * Returns Set ShippingDocumentDisposition
     *
     * @return \FedEx\CloseService\SimpleType\ShippingDocumentDispositionType|string
     */
    public function getShippingDocumentDisposition()
    {
        return $this->ShippingDocumentDisposition;
    }
    
    /**
     * The name under which a STORED or DEFERRED document is written.
     *
     * @param string $accessReference
     * @return CloseDocument
     */
    public function setAccessReference($accessReference)
    {
        $this->AccessReference = $accessReference;
        return $this;
    }
    
    /**
     * Returns The name under which a STORED or DEFERRED document is written.
     *
     * @return string
     */
    public function getAccessReference()
    {
        return $this->AccessReference;
    }
    
    /**
     * Specifies the image resolution in DPI (dots per inch).
     *
     * @param nonNegativeInteger $resolution
     * @return CloseDocument
     */
    public function setResolution($resolution)
    {
        $this->Resolution = $resolution;
        return $this;
    }
    
    /**
     * Returns Specifies the image resolution in DPI (dots per inch).
     *
     * @return nonNegativeInteger
     */
    public function getResolution()
    {
        return $this->Resolution;
    }
    
    /**
     * Can be zero for documents whose disposition implies that no content is included.
     *
     * @param nonNegativeInteger $copiesToPrint
     * @return CloseDocument
     */
    public function setCopiesToPrint($copiesToPrint)
    {
        $this->CopiesToPrint = $copiesToPrint;
        return $this;
    }
    
    /**
     * Returns Can be zero for documents whose disposition implies that no content is included.
     *
     * @return nonNegativeInteger
     */
    public function getCopiesToPrint()
    {
        return $this->CopiesToPrint;
    }
    
    /**
     * One or more document parts which make up a single logical document, such as multiple pages of a single form.
     *
     * @param ShippingDocumentPart[] $parts
     * @return CloseDocument
     */
    public function setParts(array $parts)
    {
        $this->Parts = $parts;
        return $this;
    }
    
    /**
     * Returns One or more document parts which make up a single logical document, such as multiple pages of a single form.
     *
     * @return ShippingDocumentPart[]
     */
    public function getParts()
    {
        return $this->Parts;
    }
    

    
}