<?php

namespace RoyalMail\SDK\V2Tracking\Api;

use OpenAPI\Runtime\AbstractAPI as AbstractAPI;
use RoyalMail\SDK\V2Tracking\Model\ErrorResponse as ErrorResponse;
use RoyalMail\SDK\V2Tracking\Model\EventsSuccessResponse as EventsSuccessResponse;
use RoyalMail\SDK\V2Tracking\Model\SignatureSuccessResponse as SignatureSuccessResponse;
use RoyalMail\SDK\V2Tracking\Model\Status401 as Status401;
use RoyalMail\SDK\V2Tracking\Model\Status403errorResponse as Status403errorResponse;
use RoyalMail\SDK\V2Tracking\Model\Status405 as Status405;
use RoyalMail\SDK\V2Tracking\Model\Status429 as Status429;
use RoyalMail\SDK\V2Tracking\Model\Status500 as Status500;
use RoyalMail\SDK\V2Tracking\Model\SummaryErrorResponse as SummaryErrorResponse;
use RoyalMail\SDK\V2Tracking\Model\SummarySuccessResponse as SummarySuccessResponse;

class API extends AbstractAPI
{
    /**
     * The behaviour of the events operation is to provide a history of tracks for a single mail item. This operation returns the summary, signature metadata, estimated delivery window and events for a supplied tracking number.
     *
     * @param $mailPieceId 1D or 2D barcode tracking number of the mail item being queried
     *
     * @return EventsSuccessResponse|ErrorResponse|Status401|Status403errorResponse|Status405|Status429|Status500
     */
    public function events($mailPieceId)
    {
        return $this->client->request('events', 'get', "mailpieces/v2/{$mailPieceId}/events",
            [
            ]
        );
    }

    /**
     * The behaviour of the summary operation is to allow customers to obtain the latest tracking data for a mail item. This operation returns the summary of one or more tracking numbers provided in the request. This operation only allows a maximum of 30 tracking numbers to be provided in the mailPieceId query parameter via a comma separated list.
     *
     * @param array $queries options:
     *                       'mailPieceId'		1D or 2D barcode tracking number
     *
     * @return SummarySuccessResponse|SummaryErrorResponse|Status401|Status403errorResponse|Status405|Status429|Status500
     */
    public function summary(array $queries = [])
    {
        return $this->client->request('summary', 'get', 'mailpieces/v2/summary',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * The signature operation provides the details captured at the point of delivery as proof that delivery has occurred. Note that a proof of delivery is only captured by the delivery track for those service offerings that require a signature on delivery.
     *
     * @param $mailPieceId 1D or 2D barcode tracking number of the mail item being queried
     *
     * @return SignatureSuccessResponse|ErrorResponse|Status401|Status403errorResponse|Status405|Status429|Status500
     */
    public function signature($mailPieceId)
    {
        return $this->client->request('signature', 'get', "mailpieces/v2/{$mailPieceId}/signature",
            [
            ]
        );
    }
}
