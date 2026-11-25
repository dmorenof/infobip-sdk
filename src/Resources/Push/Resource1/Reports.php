<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Push\Resource1;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/push/1/reports',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\\ApiReportsResponse',
    ];

    /**
     * Get Push reports
     *
     * This method allows you to get one-time delivery reports for sent Push messages. You can only fetch reports that are no older than 48 hours.
     */
    public function get(?\InfobipSDK\GetParams\Push\Resource1\Reports $params = null): \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\ApiReportsResponse
    {
        /** @var \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\ApiReportsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
