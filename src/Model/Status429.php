<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Status429 extends AbstractModel
{
    /**
     * @var string
     */
    public $httpCode = null;

    /**
     * @var string
     */
    public $httpMessage = null;

    /**
     * @var string
     */
    public $moreInformation = null;
}
