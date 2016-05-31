<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SendNotificationsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SendNotificationsRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SendNotificationsRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return SendNotificationsRequest
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
     * @return SendNotificationsRequest
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
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations
     *
     * @param TransactionDetail $transactionDetail
     * @return SendNotificationsRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations
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
     * @return SendNotificationsRequest
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
     * The tracking number to which the notifications will be triggered from.
     *
     * @param string $trackingNumber
     * @return SendNotificationsRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns The tracking number to which the notifications will be triggered from.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * Indicates whether to return tracking information for all associated packages.
     *
     * @param boolean $multiPiece
     * @return SendNotificationsRequest
     */
    public function setMultiPiece($multiPiece)
    {
        $this->MultiPiece = $multiPiece;
        return $this;
    }
    
    /**
     * Returns Indicates whether to return tracking information for all associated packages.
     *
     * @return boolean
     */
    public function getMultiPiece()
    {
        return $this->MultiPiece;
    }
    
    /**
     * When the MoreDataAvailable field is true in a TrackNotificationReply the PagingToken must be sent in the subsequent TrackNotificationRequest to retrieve the next page of data.
     *
     * @param string $pagingToken
     * @return SendNotificationsRequest
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Returns When the MoreDataAvailable field is true in a TrackNotificationReply the PagingToken must be sent in the subsequent TrackNotificationRequest to retrieve the next page of data.
     *
     * @return string
     */
    public function getPagingToken()
    {
        return $this->PagingToken;
    }
    
    /**
     * Use this field when your original request informs you that there are duplicates of this tracking number. If you get duplicates you will also receive some information about each of the duplicate tracking numbers to enable you to chose one and resend that number along with the TrackingNumberUniqueId to get notifications for that tracking number.
     *
     * @param string $trackingNumberUniqueId
     * @return SendNotificationsRequest
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId)
    {
        $this->TrackingNumberUniqueId = $trackingNumberUniqueId;
        return $this;
    }
    
    /**
     * Returns Use this field when your original request informs you that there are duplicates of this tracking number. If you get duplicates you will also receive some information about each of the duplicate tracking numbers to enable you to chose one and resend that number along with the TrackingNumberUniqueId to get notifications for that tracking number.
     *
     * @return string
     */
    public function getTrackingNumberUniqueId()
    {
        return $this->TrackingNumberUniqueId;
    }
    
    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param date $shipDateRangeBegin
     * @return SendNotificationsRequest
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    
    /**
     * Returns To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @return date
     */
    public function getShipDateRangeBegin()
    {
        return $this->ShipDateRangeBegin;
    }
    
    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param date $shipDateRangeEnd
     * @return SendNotificationsRequest
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    
    /**
     * Returns To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @return date
     */
    public function getShipDateRangeEnd()
    {
        return $this->ShipDateRangeEnd;
    }
    
    /**
     * Included in the email notification identifying the requester of this notification.
     *
     * @param string $senderEMailAddress
     * @return SendNotificationsRequest
     */
    public function setSenderEMailAddress($senderEMailAddress)
    {
        $this->SenderEMailAddress = $senderEMailAddress;
        return $this;
    }
    
    /**
     * Returns Included in the email notification identifying the requester of this notification.
     *
     * @return string
     */
    public function getSenderEMailAddress()
    {
        return $this->SenderEMailAddress;
    }
    
    /**
     * Included in the email notification identifying the requester of this notification.
     *
     * @param string $senderContactName
     * @return SendNotificationsRequest
     */
    public function setSenderContactName($senderContactName)
    {
        $this->SenderContactName = $senderContactName;
        return $this;
    }
    
    /**
     * Returns Included in the email notification identifying the requester of this notification.
     *
     * @return string
     */
    public function getSenderContactName()
    {
        return $this->SenderContactName;
    }
    
    /**
     * Who to send the email notifications to and for which events. The notificationRecipientType and NotifyOnShipment fields are not used in this request.
     *
     * @param EMailNotificationDetail $notificationDetail
     * @return SendNotificationsRequest
     */
    public function setNotificationDetail(EMailNotificationDetail $notificationDetail)
    {
        $this->NotificationDetail = $notificationDetail;
        return $this;
    }
    
    /**
     * Returns Who to send the email notifications to and for which events. The notificationRecipientType and NotifyOnShipment fields are not used in this request.
     *
     * @return EMailNotificationDetail
     */
    public function getNotificationDetail()
    {
        return $this->NotificationDetail;
    }
    

    
}