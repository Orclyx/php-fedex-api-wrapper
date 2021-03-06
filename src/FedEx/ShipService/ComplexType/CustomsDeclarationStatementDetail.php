<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This provides the information necessary to identify the different statements, declarations, acts, and/or certifications that apply to this shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomsDeclarationStatementDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomsDeclarationStatementDetail';

    /**
     * This indicates the different statements, declarations, acts, and/or certifications that apply to this shipment.
     *
     * @param CustomsDeclarationStatementType[] $types
     * @return CustomsDeclarationStatementDetail
     */
    public function setTypes(array $types)
    {
        $this->Types = $types;
        return $this;
    }
    
    /**
     * Returns This indicates the different statements, declarations, acts, and/or certifications that apply to this shipment.
     *
     * @return CustomsDeclarationStatementType[]
     */
    public function getTypes()
    {
        return $this->Types;
    }
    
    /**
     * Specifies the NAFTA low value statement information.
     *
     * @param NaftaLowValueStatementDetail $naftaLowValueStatementDetail
     * @return CustomsDeclarationStatementDetail
     */
    public function setNaftaLowValueStatementDetail(NaftaLowValueStatementDetail $naftaLowValueStatementDetail)
    {
        $this->NaftaLowValueStatementDetail = $naftaLowValueStatementDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the NAFTA low value statement information.
     *
     * @return NaftaLowValueStatementDetail
     */
    public function getNaftaLowValueStatementDetail()
    {
        return $this->NaftaLowValueStatementDetail;
    }
    

    
}