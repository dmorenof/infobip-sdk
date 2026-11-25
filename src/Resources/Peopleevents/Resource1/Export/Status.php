<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Peopleevents\Resource1\Export;

final class Status extends \InfobipSDK\Client
{
    private const array GET_BY_REQUEST_ID = [
        'method' => 'GET',
        'path' => '/peopleevents/1/export/status/{requestId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\\StatusResponseBody',
    ];

    /**
     * Check status of event export request
     *
     * Retrieves the status of a previously submitted data export request by the request ID.
     */
    public function getByRequestId(string $requestId): \InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\StatusResponseBody
    {
        /** @var \InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\StatusResponseBody $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REQUEST_ID), path: ['requestId' => $requestId]);
        return $result;
    }
}
