<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackStatusAncillaryDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackStatusAncillaryDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackStatusAncillaryDetail';

    /**
     * Set Reason
     *
     * @param string $reason
     * @return TrackStatusAncillaryDetail
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    
    /**
     * Returns Set Reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }
    
    /**
     * Set ReasonDescription
     *
     * @param string $reasonDescription
     * @return TrackStatusAncillaryDetail
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->ReasonDescription = $reasonDescription;
        return $this;
    }
    
    /**
     * Returns Set ReasonDescription
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->ReasonDescription;
    }
    
    /**
     * Set Action
     *
     * @param string $action
     * @return TrackStatusAncillaryDetail
     */
    public function setAction($action)
    {
        $this->Action = $action;
        return $this;
    }
    
    /**
     * Returns Set Action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }
    
    /**
     * Set ActionDescription
     *
     * @param string $actionDescription
     * @return TrackStatusAncillaryDetail
     */
    public function setActionDescription($actionDescription)
    {
        $this->ActionDescription = $actionDescription;
        return $this;
    }
    
    /**
     * Returns Set ActionDescription
     *
     * @return string
     */
    public function getActionDescription()
    {
        return $this->ActionDescription;
    }
    

    
}