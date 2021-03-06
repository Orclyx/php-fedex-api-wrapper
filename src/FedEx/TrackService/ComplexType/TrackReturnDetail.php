<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackReturnDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackReturnDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackReturnDetail';

    /**
     * Set MovementStatus
     *
     * @param \FedEx\TrackService\SimpleType\TrackReturnMovementStatusType|string $movementStatus
     * @return TrackReturnDetail
     */
    public function setMovementStatus($movementStatus)
    {
        $this->MovementStatus = $movementStatus;
        return $this;
    }
    
    /**
     * Returns Set MovementStatus
     *
     * @return \FedEx\TrackService\SimpleType\TrackReturnMovementStatusType|string
     */
    public function getMovementStatus()
    {
        return $this->MovementStatus;
    }
    
    /**
     * Set LabelType
     *
     * @param \FedEx\TrackService\SimpleType\TrackReturnLabelType|string $labelType
     * @return TrackReturnDetail
     */
    public function setLabelType($labelType)
    {
        $this->LabelType = $labelType;
        return $this;
    }
    
    /**
     * Returns Set LabelType
     *
     * @return \FedEx\TrackService\SimpleType\TrackReturnLabelType|string
     */
    public function getLabelType()
    {
        return $this->LabelType;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return TrackReturnDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Set AuthorizationName
     *
     * @param string $authorizationName
     * @return TrackReturnDetail
     */
    public function setAuthorizationName($authorizationName)
    {
        $this->AuthorizationName = $authorizationName;
        return $this;
    }
    
    /**
     * Returns Set AuthorizationName
     *
     * @return string
     */
    public function getAuthorizationName()
    {
        return $this->AuthorizationName;
    }
    

    
}