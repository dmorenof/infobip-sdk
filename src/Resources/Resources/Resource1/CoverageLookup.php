<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resources\Resource1;

final class CoverageLookup extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/resources/1/coverage-lookup',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            404 => [
                'type' => null,
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
        'responseType' => '\\InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\OneOfIbResourceCoverageInfo',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\IbResourceCoverageKey',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Lookup coverage for a resource
     *
     * Look up the coverage for a single resource by specifying the resource type, identifier (such as sender name or phone number), and associated country code.<br/>
     *
     */
    public function post(\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCoverageKey $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\OneOfIbResourceCoverageInfo
    {
        /** @var \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\OneOfIbResourceCoverageInfo $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
