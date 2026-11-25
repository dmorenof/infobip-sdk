<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Metrics\Resource1;

final class QueryAggregateData extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/metrics/1/query-aggregate-data',
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
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\\QueryAggregateDataResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\\QueryAggregateDataRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Query aggregated traffic data
     *
     * Start process for traffic data aggregation. The result will be posted to `callbackURL` provided in the request. The response format is described in [Receive aggregated data result](#platform/metrics-api/receive-aggregate-data-result) operation.
     */
    public function post(\InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataRequest $payload): \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataResponse
    {
        /** @var \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
