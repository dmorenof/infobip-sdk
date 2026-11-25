<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Audit\Resource1\Logs;

final class Export extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/audit/1/logs/export',
        'security' => [
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
        'responseType' => 'string',
        'responseMediaType' => 'text/csv',
        'responseEncoding' => 'text',
    ];

    /**
     * Export Audit Logs
     *
     * This method allows you to search and export users' activities on the web interface.
     */
    public function get(?\InfobipSDK\GetParams\Audit\Resource1\Logs\Export $params = null): string
    {
        /** @var string $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
