<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class EventsSuccessOutput extends AbstractModel
{
    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\EventsMailPiecesDef
     */
    public $mailPieces = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\IntegrationFooterDef
     */
    public $integrationFooter = null;
}
