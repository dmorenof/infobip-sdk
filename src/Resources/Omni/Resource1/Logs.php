<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Omni\Resource1;

final class Logs extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/omni/1/logs',
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
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N1bf84e5ebfeebf0839825dcb3ba7bdfe29e9008eef02919c0c668629628db19e\\OmniLogsResponse',
        'querySerialization' => [
            'bulkId' => 'multi',
            'messageId' => 'multi',
        ],
    ];

    /**
     * Get OMNI failover message logs
     *
     * If you need to show message logs in some GUI use this method. For message delivery status use [OMNI failover delivery reports](#programmable-communications/omni-failover/get-omni-failover-delivery-reports).
     */
    public function get(?\InfobipSDK\GetParams\Omni\Resource1\Logs $params = null): \InfobipSDK\DTOs\N1bf84e5ebfeebf0839825dcb3ba7bdfe29e9008eef02919c0c668629628db19e\OmniLogsResponse
    {
        /** @var \InfobipSDK\DTOs\N1bf84e5ebfeebf0839825dcb3ba7bdfe29e9008eef02919c0c668629628db19e\OmniLogsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
