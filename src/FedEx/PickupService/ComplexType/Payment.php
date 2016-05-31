<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Payment
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Payment';

    /**
     * Set PaymentType
     *
     * @param \FedEx\PickupService\SimpleType\PaymentType|string $paymentType
     * @return Payment
     */
    public function setPaymentType($paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Returns Set PaymentType
     *
     * @return \FedEx\PickupService\SimpleType\PaymentType|string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    
    /**
     * Set Payor
     *
     * @param Payor $payor
     * @return Payment
     */
    public function setPayor(Payor $payor)
    {
        $this->Payor = $payor;
        return $this;
    }
    
    /**
     * Returns Set Payor
     *
     * @return Payor
     */
    public function getPayor()
    {
        return $this->Payor;
    }
    
    /**
     * Set Amount
     *
     * @param Money $amount
     * @return Payment
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns Set Amount
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    

    
}