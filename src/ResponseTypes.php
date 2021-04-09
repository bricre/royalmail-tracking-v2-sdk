<?php

namespace RoyalMail\SDK\V2Tracking;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'events' => [
            '200.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\EventsSuccessResponse',
            '400.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\ErrorResponse',
            '401.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status401',
            '403.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status403errorResponse',
            '405.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status405',
            '429.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status429',
            '500.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status500',
        ],
        'summary' => [
            '200.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\SummarySuccessResponse',
            '400.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\SummaryErrorResponse',
            '401.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status401',
            '403.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status403errorResponse',
            '405.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status405',
            '429.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status429',
            '500.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status500',
        ],
        'signature' => [
            '200.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\SignatureSuccessResponse',
            '400.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\ErrorResponse',
            '401.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status401',
            '403.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status403errorResponse',
            '405.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status405',
            '429.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status429',
            '500.' => 'RoyalMail\\SDK\\V2Tracking\\Model\\Status500',
        ],
    ];
}
