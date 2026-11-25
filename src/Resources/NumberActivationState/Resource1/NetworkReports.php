<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberActivationState\Resource1;

final class NetworkReports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/number-activation-state/1/network-reports',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\\PageReportMetadata',
    ];

    /**
     * Get Network Reports metadata
     *
     * Get a paginated list of Network Reports metadata.
     */
    public function get(?\InfobipSDK\GetParams\NumberActivationState\Resource1\NetworkReports $params = null): \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageReportMetadata
    {
        /** @var \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageReportMetadata $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
