<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Status500 extends AbstractModel
{
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
     * @var \RoyalMail\SDK\V2Tracking\Model\Status500errorsDef[]
     */
    public $errors = null;
}
