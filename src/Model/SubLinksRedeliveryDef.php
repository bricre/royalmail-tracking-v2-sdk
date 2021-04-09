<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Container for redelivery link information.
 */
class SubLinksRedeliveryDef extends AbstractModel
{
    /**
     * Relative URL link for redelivery.
     *
     * @var string
     */
    public $href = null;

    /**
     * Title of the link.
     *
     * @var string
     */
    public $title = null;

    /**
     * Description of the link.
     *
     * @var string
     */
    public $description = null;
}
