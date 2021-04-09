<?php

namespace RoyalMail\SDK\V2Tracking\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Object containing mail piece signature data.
 */
class SignatureSignatureDef extends AbstractModel
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
     * Name of the person who signed for the mail piece.
     *
     * @var string
     */
    public $recipientName = null;

    /**
     * Date timestamp associated with when the signature was captured in the following
     * format: ISO8601  YYYY-MM-DDThh:mm:ss±hh:mm.
     *
     * @var string
     */
    public $signatureDateTime = null;

    /**
     * Media type of the signature image, i.e. image/svg+xml or image/png.
     *
     * @var string
     */
    public $imageFormat = null;

    /**
     * Unique identifier associated with the signature image.
     *
     * @var string
     */
    public $imageId = null;

    /**
     * Height of the signature image (in pixels).
     *
     * @var int
     */
    public $height = null;

    /**
     * Width of the signature image (in pixels).
     *
     * @var int
     */
    public $width = null;

    /**
     * SVG image or base64 encoded PNG image.
     *
     * @var string
     */
    public $image = null;
}
