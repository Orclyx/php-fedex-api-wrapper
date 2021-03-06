<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the criterion and order to be used to sort the location details.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationSortDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LocationSortDetail';

    /**
     * Specifies the criterion to be used to sort the location details.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationSortCriteriaType|string $criterion
     * @return LocationSortDetail
     */
    public function setCriterion($criterion)
    {
        $this->Criterion = $criterion;
        return $this;
    }
    
    /**
     * Returns Specifies the criterion to be used to sort the location details.
     *
     * @return \FedEx\LocationsService\SimpleType\LocationSortCriteriaType|string
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }
    
    /**
     * Specifies sort order of the location details.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationSortOrderType|string $order
     * @return LocationSortDetail
     */
    public function setOrder($order)
    {
        $this->Order = $order;
        return $this;
    }
    
    /**
     * Returns Specifies sort order of the location details.
     *
     * @return \FedEx\LocationsService\SimpleType\LocationSortOrderType|string
     */
    public function getOrder()
    {
        return $this->Order;
    }
    

    
}