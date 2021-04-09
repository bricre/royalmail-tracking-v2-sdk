<?php

namespace RoyalMail\SDK\V2Tracking\Test\Functional;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;
use OpenAPI\Runtime\Client;
use OpenAPI\Runtime\ResponseHandler\JsonPsrResponseHandler;
use OpenAPI\Runtime\ResponseHandlerStack;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;
use Psr\Log\LogLevel;
use RoyalMail\SDK\V2Tracking\Api\API;
use RoyalMail\SDK\V2Tracking\Model\EventsSuccessResponse;
use RoyalMail\SDK\V2Tracking\Model\SignatureSuccessResponse;
use RoyalMail\SDK\V2Tracking\Model\SummarySuccessResponse as SummarySuccessResponse;
use RoyalMail\SDK\V2Tracking\ResponseTypes;

class APITest extends TestCase
{
    use ProphecyTrait;

    public static function setUpBeforeClass(): void
    {
        $handler = HandlerStack::create();
        $logger  = new Logger('unittest');

        $logger->pushHandler(new ErrorLogHandler());
        $handler->push(Middleware::log(
            $logger,
            new MessageFormatter('{method} Response: {res_body}'),
            LogLevel::DEBUG
        ));
        $handler->push(Middleware::log(
            $logger,
            new MessageFormatter('{method} : {uri} - Request: {req_body}'),
            LogLevel::DEBUG
        ));

        Client::configure(
            new Guzzle([
                'base_uri' => 'https://api.royalmail.net',
                'headers'  => [
                    'Accept'              => 'application/json',
                    'X-Accept-RMG-Terms'  => 'yes',
                    'X-IBM-Client-Id'     => getenv('X-IBM-Client-Id'),
                    'X-IBM-Client-Secret' => getenv('X-IBM-Client-Secret'),
                ],
                'handler'  => $handler,
                'debug'    => true
            ]),
            new ResponseHandlerStack([
                JsonPsrResponseHandler::setResponseTypes(new ResponseTypes())
            ]),
        );
    }


    public function testEvents()
    {
        $responseContent = <<<EOL
        {
          "mailPieces": {
            "mailPieceId": "090367574000000FE1E1B",
            "carrierShortName": "RM",
            "carrierFullName": "Royal Mail Group Ltd",
            "summary": {
              "uniqueItemId": "090367574000000FE1E1B",
              "oneDBarcode": "FQ087430672GB",
              "productId": "SD2",
              "productName": "Special Delivery Guaranteed",
              "productDescription": "Our guaranteed next working day service with tracking and a signature on delivery",
              "productCategory": "NON-INTERNATIONAL",
              "destinationCountryCode": "GBR",
              "destinationCountryName": "United Kingdom of Great Britain and Northern Ireland",
              "originCountryCode": "GBR",
              "originCountryName": "United Kingdom of Great Britain and Northern Ireland",
              "lastEventCode": "EVNMI",
              "lastEventName": "Forwarded - Mis-sort",
              "lastEventDateTime": "2016-10-20T10:04:00+01:00",
              "lastEventLocationName": "Stafford DO",
              "statusDescription": "It's being redirected",
              "statusCategory": "IN TRANSIT",
              "statusHelpText": "The item is in transit and a confirmation will be provided on delivery. For more information on levels of tracking by service, please see Sending Mail.",
              "summaryLine": "Item FQ087430672GB was forwarded to the Delivery Office on 2016-10-20.",
              "internationalPostalProvider": {
                "url": "https://www.royalmail.com/track-your-item",
                "title": "Royal Mail Group Ltd",
                "description": "Royal Mail Group Ltd"
              }
            },
            "signature": {
              "recipientName": "Simon",
              "signatureDateTime": "2016-10-20T10:04:00+01:00",
              "imageId": "001234"
            },
            "estimatedDelivery": {
              "date": "2017-02-20",
              "startOfEstimatedWindow": "08:00:00+01:00",
              "endOfEstimatedWindow": "11:00:00+01:00"
            },
            "events": [
              {
                "eventCode": "EVNMI",
                "eventName": "Forwarded - Mis-sort",
                "eventDateTime": "2016-10-20T10:04:00+01:00",
                "locationName": "Stafford DO"
              }
            ],
            "links": {
              "summary": {
                "href": "/mailpieces/v2/summary?mailPieceId=090367574000000FE1E1B",
                "title": "Summary",
                "description": "Get summary"
              },
              "signature": {
                "href": "/mailpieces/v2/090367574000000FE1E1B/signature",
                "title": "Signature",
                "description": "Get signature"
              },
              "redelivery": {
                "href": "/personal/receiving-mail/redelivery",
                "title": "Redelivery",
                "description": "Book a redelivery"
              }
            }
          }
        }
        EOL;
        $response        = new Response(200, [], $responseContent);
        $client          = $this->prophesize(Guzzle::class);
        $client->send(Argument::any(), Argument::any())->willReturn($response);


        $API      = new API(Client::configure($client->reveal()));
        $response = $API->events('WL551794060GB');
        $this->assertInstanceOf(EventsSuccessResponse::class, $response);
    }

    public function testSignature()
    {
        $responseContent = <<<EOL
         {
             "mailPieces": {
                 "mailPieceId": "090367574000000FE1E1B",
                 "carrierShortName": "RM",
                 "carrierFullName": "Royal Mail Group Ltd",
                 "signature": {
                     "uniqueItemId": "090367574000000FE1E1B",
                     "oneDBarcode": "FQ087430672GB",
                     "recipientName": "Simon",
                     "signatureDateTime": "2017-03-30T16:15:00+01:00",
                     "imageFormat": "image/svg+xml",
                     "imageId": "001234",
                     "height": 530,
                     "width": 660
                 },
                 "links": {
                     "events": {
                         "href": "/mailpieces/v2/FQ087430672GB/events",
                         "title": "Events",
                         "description": "Get events"
                     },
                     "summary": {
                         "href": "/mailpieces/v2/summary?mailPieceId=090367574000000FE1E1B",
                         "title": "Summary",
                         "description": "Get summary"
                     }
                 }
             }
         }
        EOL;
        $response        = new Response(200, [], $responseContent);
        $client          = $this->prophesize(Guzzle::class);
        $client->send(Argument::any(), Argument::any())->willReturn($response);


        $API      = new API(Client::configure($client->reveal()));
        $response = $API->signature('WL551794060GB');
        $this->assertInstanceOf(SignatureSuccessResponse::class, $response);
    }

    public function testSummary()
    {
        $responseContent = <<<EOL
        {
            "mailPieces": [{
                "mailPieceId": "WL999999999GB",
                "status": "200",
                "carrierShortName": "RM",
                "carrierFullName": "Royal Mail Group Ltd",
                "summary": {
                    "uniqueItemId": "0B043748500002A37AB10",
                    "oneDBarcode": "WL551794060GB",
                    "productId": "TPL",
                    "productName": "Royal Mail Tracked 48",
                    "productDescription": "Aims to deliver within 2-3 days with online tracking",
                    "productCategory": "NON-INTERNATIONAL",
                    "originCountryCode": "GB",
                    "originCountryName": "United Kingdom",
                    "lastEventCode": "EVBAH",
                    "lastEventName": "Item Received",
                    "lastEventDateTime": "2021-04-08T23:24:18+01:00",
                    "lastEventLocationName": "North West DC",
                    "statusDescription": "We've got it",
                    "statusCategory": "We've got it",
                    "statusHelpText": "If a delivery timeframe is offered, please be aware this is our aim and not a guarantee, and it cant be changed.",
                    "summaryLine": "We have your item at North West DC and it's on its way. "
                },
                "links": {
                    "events": {
                        "href": "/mailpieces/v2/WL551794060GB/events",
                        "title": "Events",
                        "description": "Get events"
                    }
                }
            }]
        }
        EOL;
        $response        = new Response(200, [], $responseContent);
        $client          = $this->prophesize(Guzzle::class);
        $client->send(Argument::any(), Argument::any())->willReturn($response);


        $API      = new API(Client::configure($client->reveal()));
        $response = $API->summary(['mailPieceId' => 'WL999999999GB']);
        $this->assertInstanceOf(SummarySuccessResponse::class, $response);
    }
}
