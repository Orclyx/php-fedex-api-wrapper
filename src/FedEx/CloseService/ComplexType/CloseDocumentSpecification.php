<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains all data required for close-time documents to be produced in conjunction with a specific set of shipments. For January 2010, there are no applicable options for the COD report, the Manifest, or the Multiweight Report (they will only be available in TEXT format). Detail specifications will be added for those report types when customer-selectable options are implemented.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseDocumentSpecification
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CloseDocumentSpecification';

    /**
     * Indicates the types of close documents requested by the caller.
     *
     * @param CloseDocumentType[] $closeDocumentTypes
     * @return CloseDocumentSpecification
     */
    public function setCloseDocumentTypes(array $closeDocumentTypes)
    {
        $this->CloseDocumentTypes = $closeDocumentTypes;
        return $this;
    }
    
    /**
     * Returns Indicates the types of close documents requested by the caller.
     *
     * @return CloseDocumentType[]
     */
    public function getCloseDocumentTypes()
    {
        return $this->CloseDocumentTypes;
    }
    
    /**
     * Set DetailedDeliveryManifestDetail
     *
     * @param DetailedDeliveryManifestDetail $detailedDeliveryManifestDetail
     * @return CloseDocumentSpecification
     */
    public function setDetailedDeliveryManifestDetail(DetailedDeliveryManifestDetail $detailedDeliveryManifestDetail)
    {
        $this->DetailedDeliveryManifestDetail = $detailedDeliveryManifestDetail;
        return $this;
    }
    
    /**
     * Returns Set DetailedDeliveryManifestDetail
     *
     * @return DetailedDeliveryManifestDetail
     */
    public function getDetailedDeliveryManifestDetail()
    {
        return $this->DetailedDeliveryManifestDetail;
    }
    
    /**
     * Set ManifestDetail
     *
     * @param ManifestDetail $manifestDetail
     * @return CloseDocumentSpecification
     */
    public function setManifestDetail(ManifestDetail $manifestDetail)
    {
        $this->ManifestDetail = $manifestDetail;
        return $this;
    }
    
    /**
     * Returns Set ManifestDetail
     *
     * @return ManifestDetail
     */
    public function getManifestDetail()
    {
        return $this->ManifestDetail;
    }
    
    /**
     * Specifies the production of the OP-950 document for hazardous materials.
     *
     * @param Op950Detail $op950Detail
     * @return CloseDocumentSpecification
     */
    public function setOp950Detail(Op950Detail $op950Detail)
    {
        $this->Op950Detail = $op950Detail;
        return $this;
    }
    
    /**
     * Returns Specifies the production of the OP-950 document for hazardous materials.
     *
     * @return Op950Detail
     */
    public function getOp950Detail()
    {
        return $this->Op950Detail;
    }
    

    
}