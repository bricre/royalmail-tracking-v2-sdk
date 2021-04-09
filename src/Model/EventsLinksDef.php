<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Object containing API links.
 */
class EventsLinksDef extends AbstractModel
{
    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SubLinksSummaryDef
     */
    public $summary = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SubLinksSignatureDef
     */
    public $signature = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SubLinksRedeliveryDef
     */
    public $redelivery = null;
}
