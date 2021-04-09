<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Array containing error information.
 */
class ErrorsDef extends AbstractModel
{
    /**
     * Code associated with the error condition.
     *
     * @var string
     */
    public $errorCode = null;

    /**
     * Description of the error condition.
     *
     * @var string
     */
    public $errorDescription = null;

    /**
     * Cause of the error (if known).
     *
     * @var string
     */
    public $errorCause = null;

    /**
     * Description of the resolution and action required to correct the error.
     *
     * @var string
     */
    public $errorResolution = null;
}
