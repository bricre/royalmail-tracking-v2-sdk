<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * 200 OK response for summary Operation.
 */
class SummarySuccessResponse extends AbstractModel
{
    /**
     * Repeating Node of Mail Piece Data.
     *
     * @var \RoyalMail\SDK\V2Tracking\Model\SummaryMailPiecesDef[]
     */
    public $mailPieces = null;
}
