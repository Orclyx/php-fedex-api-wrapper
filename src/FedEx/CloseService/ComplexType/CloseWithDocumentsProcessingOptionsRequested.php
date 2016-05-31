<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseWithDocumentsProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseWithDocumentsProcessingOptionsRequested
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CloseWithDocumentsProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param CloseWithDocumentsProcessingOptionType[] $options
     * @return CloseWithDocumentsProcessingOptionsRequested
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Set Options
     *
     * @return CloseWithDocumentsProcessingOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}