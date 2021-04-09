<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Object containing mail piece summary data.
 */
class AllSummaryDef extends AbstractModel
{
    /**
     * 2D barcode for the mail piece.
     *
     * @var string
     */
    public $uniqueItemId = null;

    /**
     * 1D barcode for the mail piece.
     *
     * @var string
     */
    public $oneDBarcode = null;

    /**
     * Identifier for the tracked product.
     *
     * @var string
     */
    public $productId = null;

    /**
     * Name of the tracked product.
     *
     * @var string
     */
    public $productName = null;

    /**
     * Description of tracked product.
     *
     * @var string
     */
    public $productDescription = null;

    /**
     * Category for tracked product.
     *
     * @var string
     */
    public $productCategory = null;

    /**
     * Destination country code.
     *
     * @var string
     */
    public $destinationCountryCode = null;

    /**
     * Destination country name.
     *
     * @var string
     */
    public $destinationCountryName = null;

    /**
     * Origin Country Code.
     *
     * @var string
     */
    public $originCountryCode = null;

    /**
     * Origin Country Name.
     *
     * @var string
     */
    public $originCountryName = null;

    /**
     * Code associated with the latest mail piece event.
     *
     * @var string
     */
    public $lastEventCode = null;

    /**
     * Name of the latest mail piece event.
     *
     * @var string
     */
    public $lastEventName = null;

    /**
     * Date timestamp associated with the latest mail piece event in the following
     * format: ISO8601  YYYY-MM-DDThh:mm:ss±hh:mm.
     *
     * @var string
     */
    public $lastEventDateTime = null;

    /**
     * Location name associated with the latest mail piece event.
     *
     * @var string
     */
    public $lastEventLocationName = null;

    /**
     * Status description associated with the latest mail piece event.
     *
     * @var string
     */
    public $statusDescription = null;

    /**
     * Status category associated with the latest mail piece event.
     *
     * @var string
     */
    public $statusCategory = null;

    /**
     * Status help text associated with the latest mail piece event.
     *
     * @var string
     */
    public $statusHelpText = null;

    /**
     * Summary message for mail item’s last tracking scan.
     *
     * @var string
     */
    public $summaryLine = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\AllInternationalPostalProviderDef
     */
    public $internationalPostalProvider = null;
}
