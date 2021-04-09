<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Object containing signature image and meta-data information for the requested
 * mail item.
 */
class SignatureMailPiecesDef extends AbstractModel
{
    /**
     * 1D or 2D barcode provided in the API request.
     *
     * @var string
     */
    public $mailPieceId = null;

    /**
     * Short name of the carrier.
     *
     * @var string
     */
    public $carrierShortName = null;

    /**
     * Full name of the carrier.
     *
     * @var string
     */
    public $carrierFullName = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SignatureSignatureDef
     */
    public $signature = null;

    /**
     * @var \RoyalMail\SDK\V2Tracking\Model\SignatureLinksDef
     */
    public $links = null;
}
