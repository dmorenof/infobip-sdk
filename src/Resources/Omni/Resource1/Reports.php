<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Omni\Resource1;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/omni/1/reports',
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
            400 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2\\DeliveryReports',
    ];

    /**
     * Get OMNI failover delivery reports
     *
     * Get one-time delivery reports to see which channel was used to deliver the failover message.
     */
    public function get(?\InfobipSDK\GetParams\Omni\Resource1\Reports $params = null): \InfobipSDK\DTOs\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2\DeliveryReports
    {
        /** @var \InfobipSDK\DTOs\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2\DeliveryReports $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
