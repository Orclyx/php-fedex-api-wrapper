<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SignatureImageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SignatureImageDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SignatureImageDetail';

    /**
     * Set Image
     *
     * @param base64Binary $image
     * @return SignatureImageDetail
     */
    public function setImage($image)
    {
        $this->Image = $image;
        return $this;
    }
    
    /**
     * Returns Set Image
     *
     * @return base64Binary
     */
    public function getImage()
    {
        return $this->Image;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return SignatureImageDetail
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
    

    
}