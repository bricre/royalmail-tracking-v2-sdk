<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Object containing tracking information for the requested mail item. This will
 * only be provided in the event that no error information is returned.
 */
class EventsMailPiecesDef extends AbstractModel
{
    /**
     * 1D or 2D barcode provided in the API request.
     *
     * @var string
     */
    public $mailPieceId = null;

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
     * @var \RoyalMail\SDK\V2Tracking\Model\EventsSignatureDef
     */
    public $signature = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\EventsEstimatedDeliveryDef
     */
    public $estimatedDelivery = null;

    /**
     * Array containing mail piece event information.
     *
     * @var \RoyalMail\SDK\V2Tracking\Model\EventsEventsDef[]
     */
    public $events = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\EventsLinksDef
     */
    public $links = null;
}
