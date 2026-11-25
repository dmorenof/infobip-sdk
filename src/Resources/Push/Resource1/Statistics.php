<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Push\Resource1;

final class Statistics extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/push/1/statistics',
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
            400 => '\\InfobipSDK\\DTOs\\N77db2635bc301813b34d9bf25b46b5eb0b93ccf4142ac82fa2d80980d0455beb\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N77db2635bc301813b34d9bf25b46b5eb0b93ccf4142ac82fa2d80980d0455beb\\ApiException',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\A381f86553e288851808282b347a5f8bd7ba34b9b6feb33f5946feb4892476be\\StatisticsResponse',
    ];

    /**
     * Get Push statistics
     *
     * The following method allows you to retrieve statistics for a specific bulk of sent Push messages.
     */
    public function get(\InfobipSDK\GetParams\Push\Resource1\Statistics $params): \InfobipSDK\DTOs\A381f86553e288851808282b347a5f8bd7ba34b9b6feb33f5946feb4892476be\StatisticsResponse
    {
        /** @var \InfobipSDK\DTOs\A381f86553e288851808282b347a5f8bd7ba34b9b6feb33f5946feb4892476be\StatisticsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
