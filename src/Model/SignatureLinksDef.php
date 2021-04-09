<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SignatureLinksDef extends AbstractModel
{
    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SubLinksEventsDef
     */
    public $events = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SubLinksSummaryDef
     */
    public $summary = null;
}
