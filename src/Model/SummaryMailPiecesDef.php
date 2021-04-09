<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SummaryMailPiecesDef extends AbstractModel
{
    /**
     * 1D or 2D barcode provided in the API request.
     *
     * @var string
     */
    public $mailPieceId = null;

    /**
     * HTTP status code associated with the provision of mail piece summary information.
     *
     * @var string
     */
    public $status = null;

    /**
     * Short name of the carrier.
     *
     * @var string
     */
    public $carrierShortName = null;

    /**
     * Full name of the carrier.
     *
     * @var string
     */
    public $carrierFullName = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\AllSummaryDef
     */
    public $summary = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SummaryLinksDef
     */
    public $links = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\ErrorsDef
     */
    public $error = null;
}
