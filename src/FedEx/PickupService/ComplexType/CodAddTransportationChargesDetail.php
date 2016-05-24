<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CodAddTransportationChargesDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CodAddTransportationChargesDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CodAddTransportationChargesDetail';

    /**
     * Set RateTypeBasis
     *
     * @param \FedEx\PickupService\SimpleType\RateTypeBasisType|string $rateTypeBasis
     * return CodAddTransportationChargesDetail
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->RateTypeBasis = $rateTypeBasis;
        return $this;
    }
    
    /**
     * Set ChargeBasis
     *
     * @param \FedEx\PickupService\SimpleType\CodAddTransportationChargeBasisType|string $chargeBasis
     * return CodAddTransportationChargesDetail
     */
    public function setChargeBasis($chargeBasis)
    {
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    
    /**
     * Set ChargeBasisLevel
     *
     * @param \FedEx\PickupService\SimpleType\ChargeBasisLevelType|string $chargeBasisLevel
     * return CodAddTransportationChargesDetail
     */
    public function setChargeBasisLevel($chargeBasisLevel)
    {
        $this->ChargeBasisLevel = $chargeBasisLevel;
        return $this;
    }
    

    
}