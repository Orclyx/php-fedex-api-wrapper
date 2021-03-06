<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackRequestProcessingOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackRequestProcessingOptionType
    extends AbstractSimpleType
{
    const _INCLUDE_DETAILED_SCANS = 'INCLUDE_DETAILED_SCANS';
}