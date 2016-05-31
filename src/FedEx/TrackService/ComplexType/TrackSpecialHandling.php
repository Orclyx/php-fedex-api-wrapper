<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackSpecialHandling
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackSpecialHandling
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackSpecialHandling';

    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\TrackSpecialHandlingType|string $type
     * @return TrackSpecialHandling
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\TrackService\SimpleType\TrackSpecialHandlingType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return TrackSpecialHandling
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
     * Set PaymentType
     *
     * @param \FedEx\TrackService\SimpleType\TrackPaymentType|string $paymentType
     * @return TrackSpecialHandling
     */
    public function setPaymentType($paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Returns Set PaymentType
     *
     * @return \FedEx\TrackService\SimpleType\TrackPaymentType|string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    

    
}