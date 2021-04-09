<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ErrorResponse extends AbstractModel
{
    /**
     * HTTP error code.  Please note that this will only be populated in the event of
     * an error condition.
     *
     * @var string
     */
    public $httpCode = null;

    /**
     * HTTP error code description. Please note that this will only be populated in the
     * event of an error condition.
     *
     * @var string
     */
    public $httpMessage = null;

    /**
     * Information relating to the error condition.
     *
     * @var string
     */
    public $moreInformation = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\ErrorsDef[]
     */
    public $errors = null;
}
