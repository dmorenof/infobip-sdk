<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1;

final class Bulks extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/calls/1/bulks',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\\BulkResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\\BulkRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create bulk of calls
     *
     * Create a bulk of outbound calls. Currently, only `PHONE` endpoints are supported.
     * When retry options are specified, bulk calls are retried if they meet internal or client retry criteria.
     * Client retry criteria are met when call reaches the end device and fails. Internal retry criteria are met when call fails before reaching the end device.
     */
    public function post(\InfobipSDK\DTOs\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkRequest $payload): \InfobipSDK\DTOs\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkResponse
    {
        /** @var \InfobipSDK\DTOs\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_BULK_ID = [
        'method' => 'GET',
        'path' => '/calls/1/bulks/{bulkId}',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\BulkStatus',
    ];

    /**
     * Get bulk status
     *
     * Get a single bulk status. Bulk has a status if it was created with scheduling options.
     */
    public function getByBulkId(string $bulkId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkStatus
    {
        /** @var \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkStatus $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_BULK_ID), path: ['bulkId' => $bulkId]);
        return $result;
    }

}
