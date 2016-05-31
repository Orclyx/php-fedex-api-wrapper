<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PieceCountVerificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PieceCountVerificationDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PieceCountVerificationDetail';

    /**
     * Set CountLocationType
     *
     * @param \FedEx\TrackService\SimpleType\PieceCountLocationType|string $countLocationType
     * @return PieceCountVerificationDetail
     */
    public function setCountLocationType($countLocationType)
    {
        $this->CountLocationType = $countLocationType;
        return $this;
    }
    
    /**
     * Returns Set CountLocationType
     *
     * @return \FedEx\TrackService\SimpleType\PieceCountLocationType|string
     */
    public function getCountLocationType()
    {
        return $this->CountLocationType;
    }
    
    /**
     * Set Count
     *
     * @param nonNegativeInteger $count
     * @return PieceCountVerificationDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    
    /**
     * Returns Set Count
     *
     * @return nonNegativeInteger
     */
    public function getCount()
    {
        return $this->Count;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return PieceCountVerificationDetail
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
    

    
}