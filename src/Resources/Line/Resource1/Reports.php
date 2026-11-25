<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Line\Resource1;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/line/1/reports',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\\DeliveryReports',
    ];

    /**
     * Get LON delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/line
     */
    public function get(?\InfobipSDK\GetParams\Line\Resource1\Reports $params = null): \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\DeliveryReports
    {
        /** @var \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\DeliveryReports $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
