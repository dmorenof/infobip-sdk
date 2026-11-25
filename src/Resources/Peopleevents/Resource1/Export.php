<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Peopleevents\Resource1;

final class Export extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/peopleevents/1/export',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\\ExportResponseBody',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\A1a8ff0e2d4e8815c87f131be18d5198cdc635a778df6b963f0f0a4b59822f94\\ExportRequestBody',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Submit event export request
     *
     * Events export allows you to asynchronously export People Events data to a compressed file or multiple files in your AWS S3 bucket.
     *
     * Refer to [product documentation](https://www.infobip.com/docs/people/events#events-in-external-systems) for detailed information on configuring AWS S3 for export, export file format and event data schema.
     *
     * **Throttling**
     *
     * You can have maximum of 72 hours worth of export requests in progress at one time.
     *
     *
     */
    public function post(\InfobipSDK\DTOs\A1a8ff0e2d4e8815c87f131be18d5198cdc635a778df6b963f0f0a4b59822f94\ExportRequestBody $payload): \InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\ExportResponseBody
    {
        /** @var \InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\ExportResponseBody $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_REQUEST_ID = [
        'method' => 'DELETE',
        'path' => '/peopleevents/1/export/{requestId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
            409 => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
                'schemaNullable' => false,
            ],
            409 => [
                'type' => '\\InfobipSDK\\DTOs\\N4d8013f567a19c1659f9fa9ee91385e2997d2edc529631040fb843879960b1b6\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
    ];

    /**
     * Asynchronous cancellation of an event export request
     *
     * Requests asynchronous cancellation of a previously submitted data export request by the request ID.
     */
    public function deleteByRequestId(string $requestId): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_REQUEST_ID), path: ['requestId' => $requestId]);
        return $result;
    }

}
