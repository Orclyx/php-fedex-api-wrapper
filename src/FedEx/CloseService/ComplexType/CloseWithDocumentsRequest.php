<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseWithDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseWithDocumentsRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CloseWithDocumentsRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return CloseWithDocumentsRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return CloseWithDocumentsRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Set ClientDetail
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return CloseWithDocumentsRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return CloseWithDocumentsRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set ActionType
     *
     * @param \FedEx\CloseService\SimpleType\CloseActionType|string $actionType
     * @return CloseWithDocumentsRequest
     */
    public function setActionType($actionType)
    {
        $this->ActionType = $actionType;
        return $this;
    }
    
    /**
     * Returns Set ActionType
     *
     * @return \FedEx\CloseService\SimpleType\CloseActionType|string
     */
    public function getActionType()
    {
        return $this->ActionType;
    }
    
    /**
     * Set ProcessingOptions
     *
     * @param CloseWithDocumentsProcessingOptionsRequested $processingOptions
     * @return CloseWithDocumentsRequest
     */
    public function setProcessingOptions(CloseWithDocumentsProcessingOptionsRequested $processingOptions)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    
    /**
     * Returns Set ProcessingOptions
     *
     * @return CloseWithDocumentsProcessingOptionsRequested
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    
    /**
     * Set CarrierCode
     *
     * @param \FedEx\CloseService\SimpleType\CarrierCodeType|string $carrierCode
     * @return CloseWithDocumentsRequest
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Set CarrierCode
     *
     * @return \FedEx\CloseService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * Set ShippingCycle
     *
     * @param string $shippingCycle
     * @return CloseWithDocumentsRequest
     */
    public function setShippingCycle($shippingCycle)
    {
        $this->ShippingCycle = $shippingCycle;
        return $this;
    }
    
    /**
     * Returns Set ShippingCycle
     *
     * @return string
     */
    public function getShippingCycle()
    {
        return $this->ShippingCycle;
    }
    
    /**
     * Set ReprintCloseDate
     *
     * @param dateTime $reprintCloseDate
     * @return CloseWithDocumentsRequest
     */
    public function setReprintCloseDate($reprintCloseDate)
    {
        $this->ReprintCloseDate = $reprintCloseDate;
        return $this;
    }
    
    /**
     * Returns Set ReprintCloseDate
     *
     * @return dateTime
     */
    public function getReprintCloseDate()
    {
        return $this->ReprintCloseDate;
    }
    
    /**
     * Set ManifestReferenceDetail
     *
     * @param CloseManifestReferenceDetail $manifestReferenceDetail
     * @return CloseWithDocumentsRequest
     */
    public function setManifestReferenceDetail(CloseManifestReferenceDetail $manifestReferenceDetail)
    {
        $this->ManifestReferenceDetail = $manifestReferenceDetail;
        return $this;
    }
    
    /**
     * Returns Set ManifestReferenceDetail
     *
     * @return CloseManifestReferenceDetail
     */
    public function getManifestReferenceDetail()
    {
        return $this->ManifestReferenceDetail;
    }
    
    /**
     * Set SmartPostDetail
     *
     * @param CloseSmartPostDetail $smartPostDetail
     * @return CloseWithDocumentsRequest
     */
    public function setSmartPostDetail(CloseSmartPostDetail $smartPostDetail)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    
    /**
     * Returns Set SmartPostDetail
     *
     * @return CloseSmartPostDetail
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    
    /**
     * Set CloseDocumentSpecification
     *
     * @param CloseDocumentSpecification $closeDocumentSpecification
     * @return CloseWithDocumentsRequest
     */
    public function setCloseDocumentSpecification(CloseDocumentSpecification $closeDocumentSpecification)
    {
        $this->CloseDocumentSpecification = $closeDocumentSpecification;
        return $this;
    }
    
    /**
     * Returns Set CloseDocumentSpecification
     *
     * @return CloseDocumentSpecification
     */
    public function getCloseDocumentSpecification()
    {
        return $this->CloseDocumentSpecification;
    }
    

    
}