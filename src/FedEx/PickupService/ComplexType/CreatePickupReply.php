<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CreatePickupReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreatePickupReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreatePickupReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\PickupService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return CreatePickupReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Set HighestSeverity
     *
     * @return \FedEx\PickupService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return CreatePickupReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns Set Notifications
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return CreatePickupReply
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
     * @return CreatePickupReply
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
     * Set PickupConfirmationNumber
     *
     * @param string $pickupConfirmationNumber
     * @return CreatePickupReply
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    
    /**
     * Returns Set PickupConfirmationNumber
     *
     * @return string
     */
    public function getPickupConfirmationNumber()
    {
        return $this->PickupConfirmationNumber;
    }
    
    /**
     * Set Location
     *
     * @param string $location
     * @return CreatePickupReply
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Returns Set Location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }
    
    /**
     * Coded value supplied by dispatch system.
     *
     * @param string $messageCode
     * @return CreatePickupReply
     */
    public function setMessageCode($messageCode)
    {
        $this->MessageCode = $messageCode;
        return $this;
    }
    
    /**
     * Returns Coded value supplied by dispatch system.
     *
     * @return string
     */
    public function getMessageCode()
    {
        return $this->MessageCode;
    }
    
    /**
     * Message supplied by dispatch system.
     *
     * @param string $message
     * @return CreatePickupReply
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Returns Message supplied by dispatch system.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    
    /**
     * Package Return Program control number
     *
     * @param string $pRPControlNumber
     * @return CreatePickupReply
     */
    public function setPRPControlNumber($pRPControlNumber)
    {
        $this->PRPControlNumber = $pRPControlNumber;
        return $this;
    }
    
    /**
     * Returns Package Return Program control number
     *
     * @return string
     */
    public function getPRPControlNumber()
    {
        return $this->PRPControlNumber;
    }
    
    /**
     * Used with "stay late" requests; postal-code specific.
     *
     * @param time $lastAccessTime
     * @return CreatePickupReply
     */
    public function setLastAccessTime(time $lastAccessTime)
    {
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    
    /**
     * Returns Used with "stay late" requests; postal-code specific.
     *
     * @return time
     */
    public function getLastAccessTime()
    {
        return $this->LastAccessTime;
    }
    
    /**
     * Set CompletedFreightPickupDetail
     *
     * @param CompletedFreightPickupDetail $completedFreightPickupDetail
     * @return CreatePickupReply
     */
    public function setCompletedFreightPickupDetail(CompletedFreightPickupDetail $completedFreightPickupDetail)
    {
        $this->CompletedFreightPickupDetail = $completedFreightPickupDetail;
        return $this;
    }
    
    /**
     * Returns Set CompletedFreightPickupDetail
     *
     * @return CompletedFreightPickupDetail
     */
    public function getCompletedFreightPickupDetail()
    {
        return $this->CompletedFreightPickupDetail;
    }
    

    
}