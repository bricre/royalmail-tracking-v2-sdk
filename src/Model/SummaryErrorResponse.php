<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SummaryErrorResponse extends AbstractModel
{
    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\MailPieceIdDef[]
     */
    public $mailPieces = null;

    /**
     * HTTP status code associated with the error condition.
     *
     * @var string
     */
    public $httpCode = null;

    /**
     * HTTP status description associated with the error condition.
     *
     * @var string
     */
    public $httpMessage = null;

    /**
     * Description of the error condition.
     *
     * @var string
     */
    public $moreinformation = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\ErrorsDef[]
     */
    public $errors = null;
}
