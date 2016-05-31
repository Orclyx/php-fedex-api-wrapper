<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerExceptionRequestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomerExceptionRequestDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerExceptionRequestDetail';

    /**
     * Unique identifier for the customer exception request.
     *
     * @param string $id
     * @return CustomerExceptionRequestDetail
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Unique identifier for the customer exception request.
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * Set StatusCode
     *
     * @param string $statusCode
     * @return CustomerExceptionRequestDetail
     */
    public function setStatusCode($statusCode)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * Returns Set StatusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    
    /**
     * Set StatusDescription
     *
     * @param string $statusDescription
     * @return CustomerExceptionRequestDetail
     */
    public function setStatusDescription($statusDescription)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    
    /**
     * Returns Set StatusDescription
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    
    /**
     * Set CreateTime
     *
     * @param dateTime $createTime
     * @return CustomerExceptionRequestDetail
     */
    public function setCreateTime($createTime)
    {
        $this->CreateTime = $createTime;
        return $this;
    }
    
    /**
     * Returns Set CreateTime
     *
     * @return dateTime
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }
    

    
}