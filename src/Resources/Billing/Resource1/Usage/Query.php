<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Billing\Resource1\Usage;

final class Query extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/billing/1/usage/query',
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
            'type' => '\\InfobipSDK\\DTOs\\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\\QueryBillingUsageRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Query billing usage data
     *
     * Start the process of aggregating billing-grade financial cost data for your Infobip traffic. The results are delivered once via POST to the `callbackURL` provided in the request. Make sure the URL is reachable before submitting. See [Receive billing usage result](#platform/billing-usage-api/receive-billing-usage-result) for the webhook payload structure.
     */
    public function post(\InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryBillingUsageRequest $payload): \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataResponse
    {
        /** @var \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
