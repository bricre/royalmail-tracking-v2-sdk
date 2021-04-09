<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Container for signature link information.
 */
class SubLinksSignatureDef extends AbstractModel
{
    /**
     * Relative URL link for signature information.
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
