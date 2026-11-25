<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Saas\Resource1\Request\ByRequestId;

final class Status extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/saas/1/request/{requestId}/status',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\\RequestStatusResponse',
    ];

    /**
     * Get SaaS request status
     *
     * Get the status of your share request.
     */
    public function get(string $requestId): \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\RequestStatusResponse
    {
        /** @var \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\RequestStatusResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['requestId' => $requestId]);
        return $result;
    }
}
