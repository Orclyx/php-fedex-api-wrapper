<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PieceCountLocationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PieceCountLocationType
    extends AbstractSimpleType
{
    const _DESTINATION = 'DESTINATION';
    const _ORIGIN = 'ORIGIN';
}