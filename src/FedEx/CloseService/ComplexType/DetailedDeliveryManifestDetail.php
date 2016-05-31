<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DetailedDeliveryManifestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class DetailedDeliveryManifestDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DetailedDeliveryManifestDetail';

    /**
     * Set Format
     *
     * @param CloseDocumentFormat $format
     * @return DetailedDeliveryManifestDetail
     */
    public function setFormat(CloseDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Set Format
     *
     * @return CloseDocumentFormat
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * This field provides a mechanism for the client to specify their time zone offset relative to GMT. This governs the printed on time for this report. If this field is left empty, then the server time will be used. The value of this field must be in the format '(+|-)[hh]:[mm]', '(+|-)[hh][mm]', '(+|-)[hh]', or 'Z' (for GMT time). An offset of zero, in addition to having the special representation 'Z', can also be stated numerically as '+00:00', '+0000', or '+00'. However, it is not permitted to state it numerically with a negative sign.
     *
     * @param string $clientTimeZoneOffset
     * @return DetailedDeliveryManifestDetail
     */
    public function setClientTimeZoneOffset($clientTimeZoneOffset)
    {
        $this->ClientTimeZoneOffset = $clientTimeZoneOffset;
        return $this;
    }
    
    /**
     * Returns This field provides a mechanism for the client to specify their time zone offset relative to GMT. This governs the printed on time for this report. If this field is left empty, then the server time will be used. The value of this field must be in the format '(+|-)[hh]:[mm]', '(+|-)[hh][mm]', '(+|-)[hh]', or 'Z' (for GMT time). An offset of zero, in addition to having the special representation 'Z', can also be stated numerically as '+00:00', '+0000', or '+00'. However, it is not permitted to state it numerically with a negative sign.
     *
     * @return string
     */
    public function getClientTimeZoneOffset()
    {
        return $this->ClientTimeZoneOffset;
    }
    

    
}