<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data sent by a client to track a FedEx package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return TrackRequest
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
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return TrackRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @param TransactionDetail $transactionDetail
     * @return TrackRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * The version of the request being used.
     *
     * @param VersionId $version
     * @return TrackRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns The version of the request being used.
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Specifies the details needed to select the shipment being requested to be tracked.
     *
     * @param TrackSelectionDetail[] $selectionDetails
     * @return TrackRequest
     */
    public function setSelectionDetails(array $selectionDetails)
    {
        $this->SelectionDetails = $selectionDetails;
        return $this;
    }
    
    /**
     * Returns Specifies the details needed to select the shipment being requested to be tracked.
     *
     * @return TrackSelectionDetail[]
     */
    public function getSelectionDetails()
    {
        return $this->SelectionDetails;
    }
    
    /**
     * The customer can specify a desired time out value for this particular transaction.
     *
     * @param nonNegativeInteger $transactionTimeOutValueInMilliseconds
     * @return TrackRequest
     */
    public function setTransactionTimeOutValueInMilliseconds($transactionTimeOutValueInMilliseconds)
    {
        $this->TransactionTimeOutValueInMilliseconds = $transactionTimeOutValueInMilliseconds;
        return $this;
    }
    
    /**
     * Returns The customer can specify a desired time out value for this particular transaction.
     *
     * @return nonNegativeInteger
     */
    public function getTransactionTimeOutValueInMilliseconds()
    {
        return $this->TransactionTimeOutValueInMilliseconds;
    }
    
    /**
     * Set ProcessingOptions
     *
     * @param TrackRequestProcessingOptionType[] $processingOptions
     * @return TrackRequest
     */
    public function setProcessingOptions(array $processingOptions)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    
    /**
     * Returns Set ProcessingOptions
     *
     * @return TrackRequestProcessingOptionType[]
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    

    
}