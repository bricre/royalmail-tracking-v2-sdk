<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SignatureSuccessOutput extends AbstractModel
{
    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SignatureMailPiecesDef
     */
    public $mailPieces = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\IntegrationFooterDef
     */
    public $integrationFooter = null;
}
