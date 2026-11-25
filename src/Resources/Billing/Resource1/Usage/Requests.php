<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Billing\Resource1\Usage;

final class Requests extends \InfobipSDK\Client
{
    private const array GET_BY_REQUEST_ID = [
        'method' => 'GET',
        'path' => '/billing/1/usage/requests/{requestId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\\RequestInfo',
    ];

    /**
     * Get status of query billing usage request
     *
     * Return the status of ongoing request, started by invoking [Query billing usage data](#platform/billing-usage-api/query-billing-usage).
     */
    public function getByRequestId(string $requestId): \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\RequestInfo
    {
        /** @var \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\RequestInfo $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REQUEST_ID), path: ['requestId' => $requestId]);
        return $result;
    }
}
