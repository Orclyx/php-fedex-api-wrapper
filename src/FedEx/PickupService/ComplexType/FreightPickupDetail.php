<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FreightPickupDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightPickupDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightPickupDetail';

    /**
     * Contact Information of origin service center representative that authorized the pickup
     *
     * @param Contact $approvedBy
     * @return FreightPickupDetail
     */
    public function setApprovedBy(Contact $approvedBy)
    {
        $this->ApprovedBy = $approvedBy;
        return $this;
    }
    
    /**
     * Returns Contact Information of origin service center representative that authorized the pickup
     *
     * @return Contact
     */
    public function getApprovedBy()
    {
        return $this->ApprovedBy;
    }
    
    /**
     * Set Payment
     *
     * @param \FedEx\PickupService\SimpleType\PaymentType|string $payment
     * @return FreightPickupDetail
     */
    public function setPayment($payment)
    {
        $this->Payment = $payment;
        return $this;
    }
    
    /**
     * Returns Set Payment
     *
     * @return \FedEx\PickupService\SimpleType\PaymentType|string
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    
    /**
     * Set Role
     *
     * @param \FedEx\PickupService\SimpleType\FreightShipmentRoleType|string $role
     * @return FreightPickupDetail
     */
    public function setRole($role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Returns Set Role
     *
     * @return \FedEx\PickupService\SimpleType\FreightShipmentRoleType|string
     */
    public function getRole()
    {
        return $this->Role;
    }
    
    /**
     * Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     *
     * @param Party $alternateBilling
     * @return FreightPickupDetail
     */
    public function setAlternateBilling(Party $alternateBilling)
    {
        $this->AlternateBilling = $alternateBilling;
        return $this;
    }
    
    /**
     * Returns Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     *
     * @return Party
     */
    public function getAlternateBilling()
    {
        return $this->AlternateBilling;
    }
    
    /**
     * Set SubmittedBy
     *
     * @param Contact $submittedBy
     * @return FreightPickupDetail
     */
    public function setSubmittedBy(Contact $submittedBy)
    {
        $this->SubmittedBy = $submittedBy;
        return $this;
    }
    
    /**
     * Returns Set SubmittedBy
     *
     * @return Contact
     */
    public function getSubmittedBy()
    {
        return $this->SubmittedBy;
    }
    
    /**
     * Set LineItems
     *
     * @param FreightPickupLineItem[] $lineItems
     * @return FreightPickupDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    
    /**
     * Returns Set LineItems
     *
     * @return FreightPickupLineItem[]
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    

    
}