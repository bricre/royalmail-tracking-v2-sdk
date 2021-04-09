<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Repeating node of events.
 */
class EventsEventsDef extends AbstractModel
{
    /**
     * Code associated with the mail piece event.
     *
     * @var string
     */
    public $eventCode = null;

    /**
     * Name of the event.
     *
     * @var string
     */
    public $eventName = null;

    /**
     * Date and time of the event in the format: ISO8601  -
     * YYYY-MM-DDThh:mm:ss±hh:mm.
     *
     * @var string
     */
    public $eventDateTime = null;

    /**
     * Location name associated with the mail piece event.
     *
     * @var string
     */
    public $locationName = null;
}
