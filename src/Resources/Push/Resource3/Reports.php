<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Push\Resource3;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/push/3/reports',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\DeliveryReports',
    ];

    /**
     * Get Push delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/mobile-push
     */
    public function get(?\InfobipSDK\GetParams\Push\Resource3\Reports $params = null): \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\DeliveryReports
    {
        /** @var \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\DeliveryReports $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
