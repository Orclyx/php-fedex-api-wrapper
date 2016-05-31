<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'GroundCloseRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return GroundCloseRequest
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
     * @return GroundCloseRequest
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
     * @return GroundCloseRequest
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
     * @return GroundCloseRequest
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
     * Set CloseGrouping
     *
     * @param \FedEx\CloseService\SimpleType\CloseGroupingType|string $closeGrouping
     * @return GroundCloseRequest
     */
    public function setCloseGrouping($closeGrouping)
    {
        $this->CloseGrouping = $closeGrouping;
        return $this;
    }
    
    /**
     * Returns Set CloseGrouping
     *
     * @return \FedEx\CloseService\SimpleType\CloseGroupingType|string
     */
    public function getCloseGrouping()
    {
        return $this->CloseGrouping;
    }
    
    /**
     * Set TimeUpToWhichShipmentsAreToBeClosed
     *
     * @param dateTime $timeUpToWhichShipmentsAreToBeClosed
     * @return GroundCloseRequest
     */
    public function setTimeUpToWhichShipmentsAreToBeClosed($timeUpToWhichShipmentsAreToBeClosed)
    {
        $this->TimeUpToWhichShipmentsAreToBeClosed = $timeUpToWhichShipmentsAreToBeClosed;
        return $this;
    }
    
    /**
     * Returns Set TimeUpToWhichShipmentsAreToBeClosed
     *
     * @return dateTime
     */
    public function getTimeUpToWhichShipmentsAreToBeClosed()
    {
        return $this->TimeUpToWhichShipmentsAreToBeClosed;
    }
    
    /**
     * Set ManifestReferenceDetail
     *
     * @param CloseManifestReferenceDetail $manifestReferenceDetail
     * @return GroundCloseRequest
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
    

    
}