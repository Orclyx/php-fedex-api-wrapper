<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class UploadDocumentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentDetail';

    /**
     * Set LineNumber
     *
     * @param nonNegativeInteger $lineNumber
     * @return UploadDocumentDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * Returns Set LineNumber
     *
     * @return nonNegativeInteger
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    
    /**
     * Set CustomerReference
     *
     * @param string $customerReference
     * @return UploadDocumentDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * Returns Set CustomerReference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }
    
    /**
     * Set DocumentProducer
     *
     * @param \FedEx\PickupService\SimpleType\UploadDocumentProducerType|string $documentProducer
     * @return UploadDocumentDetail
     */
    public function setDocumentProducer($documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * Returns Set DocumentProducer
     *
     * @return \FedEx\PickupService\SimpleType\UploadDocumentProducerType|string
     */
    public function getDocumentProducer()
    {
        return $this->DocumentProducer;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\PickupService\SimpleType\UploadDocumentType|string $documentType
     * @return UploadDocumentDetail
     */
    public function setDocumentType($documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * Returns Set DocumentType
     *
     * @return \FedEx\PickupService\SimpleType\UploadDocumentType|string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    
    /**
     * Set FileName
     *
     * @param string $fileName
     * @return UploadDocumentDetail
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * Returns Set FileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    
    /**
     * Set DocumentContent
     *
     * @param base64Binary $documentContent
     * @return UploadDocumentDetail
     */
    public function setDocumentContent($documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * Returns Set DocumentContent
     *
     * @return base64Binary
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }
    
    /**
     * Specifies the date until which the document is available
     *
     * @param date $expirationDate
     * @return UploadDocumentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Returns Specifies the date until which the document is available
     *
     * @return date
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    

    
}