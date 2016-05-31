<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PagingDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PagingDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PagingDetail';

    /**
     * When the MoreData field = true in a TrackReply the PagingToken must be sent in the subsequent TrackRequest to retrieve the next page of data.
     *
     * @param string $pagingToken
     * @return PagingDetail
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Returns When the MoreData field = true in a TrackReply the PagingToken must be sent in the subsequent TrackRequest to retrieve the next page of data.
     *
     * @return string
     */
    public function getPagingToken()
    {
        return $this->PagingToken;
    }
    
    /**
     * Specifies the number of results to display per page when the there is more than one page in the subsequent TrackReply.
     *
     * @param nonNegativeInteger $numberOfResultsPerPage
     * @return PagingDetail
     */
    public function setNumberOfResultsPerPage($numberOfResultsPerPage)
    {
        $this->NumberOfResultsPerPage = $numberOfResultsPerPage;
        return $this;
    }
    
    /**
     * Returns Specifies the number of results to display per page when the there is more than one page in the subsequent TrackReply.
     *
     * @return nonNegativeInteger
     */
    public function getNumberOfResultsPerPage()
    {
        return $this->NumberOfResultsPerPage;
    }
    

    
}