<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payor
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Payor
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Payor';

    /**
     * Set ResponsibleParty
     *
     * @param Party $responsibleParty
     * @return Payor
     */
    public function setResponsibleParty(Party $responsibleParty)
    {
        $this->ResponsibleParty = $responsibleParty;
        return $this;
    }
    
    /**
     * Returns Set ResponsibleParty
     *
     * @return Party
     */
    public function getResponsibleParty()
    {
        return $this->ResponsibleParty;
    }
    
    /**
     * Set AssociatedAccounts
     *
     * @param AssociatedAccount[] $associatedAccounts
     * @return Payor
     */
    public function setAssociatedAccounts(array $associatedAccounts)
    {
        $this->AssociatedAccounts = $associatedAccounts;
        return $this;
    }
    
    /**
     * Returns Set AssociatedAccounts
     *
     * @return AssociatedAccount[]
     */
    public function getAssociatedAccounts()
    {
        return $this->AssociatedAccounts;
    }
    

    
}