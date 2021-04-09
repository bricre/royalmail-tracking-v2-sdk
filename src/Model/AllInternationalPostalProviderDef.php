<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Object containing details of  international postal organisation.
 */
class AllInternationalPostalProviderDef extends AbstractModel
{
    /**
     * URL link to website of delivery provider for international parcels.
     *
     * @var string
     */
    public $url = null;

    /**
     * Name of the international postal organisation.
     *
     * @var string
     */
    public $title = null;

    /**
     * Description of the international postal organisation.
     *
     * @var string
     */
    public $description = null;
}
