<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * 200 OK response for signature Operation.
 */
class SignatureSuccessResponse extends AbstractModel
{
    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SignatureMailPiecesDef
     */
    public $mailPieces = null;
}
