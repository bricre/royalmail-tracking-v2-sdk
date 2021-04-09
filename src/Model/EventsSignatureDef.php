<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Object containing signature metadata data.
 */
class EventsSignatureDef extends AbstractModel
{
    /**
     * Name of the person who provided the signature.
     *
     * @var string
     */
    public $recipientName = null;

    /**
     * Date and time the signature was captured in the following format: ISO8601
     * YYYY-MM-DDThh:mm:ss±hh:mm.
     *
     * @var string
     */
    public $signatureDateTime = null;

    /**
     * Identifier associated with the signature image.
     *
     * @var string
     */
    public $imageId = null;
}
