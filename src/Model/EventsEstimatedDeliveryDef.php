<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Object containing the estimated delivery data.
 */
class EventsEstimatedDeliveryDef extends AbstractModel
{
    /**
     * Date of the estimated delivery window in the format: ISO8601 YYYY-MM-DD.
     *
     * @var string
     */
    public $date = null;

    /**
     * Start time of the estimated delivery window in the format: hh:mm:ss±hh:mm.
     *
     * @var string
     */
    public $startOfEstimatedWindow = null;

    /**
     * End time of the estimated delivery window in the format: hh:mm:ss±hh:mm.
     *
     * @var string
     */
    public $endOfEstimatedWindow = null;
}
