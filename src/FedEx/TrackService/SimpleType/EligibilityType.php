<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies different values of eligibility status
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EligibilityType
    extends AbstractSimpleType
{
    const _ELIGIBLE = 'ELIGIBLE';
    const _INELIGIBLE = 'INELIGIBLE';
    const _POSSIBLY_ELIGIBLE = 'POSSIBLY_ELIGIBLE';
}