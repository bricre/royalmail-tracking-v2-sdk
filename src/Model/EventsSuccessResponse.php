<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * 200 OK Response for events Operation.
 */
class EventsSuccessResponse extends AbstractModel
{
    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\EventsMailPiecesDef
     */
    public $mailPieces = null;
}
