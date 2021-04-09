<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class MailPieceIdDef extends AbstractModel
{
    /**
     * 1D or 2D Barcode.
     *
     * @var string
     */
    public $mailPieceId = null;

    /**
     * HTTP status code specific to the item.
     *
     * @var string
     */
    public $status = null;
}
