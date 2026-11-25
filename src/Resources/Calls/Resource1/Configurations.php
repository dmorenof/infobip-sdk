<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1;

final class Configurations extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/calls/1/configurations',
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
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\\CallsConfigurationPage',
    ];

    /**
     * Get calls configurations
     *
     * Get calls configurations.
     */
    public function get(?\InfobipSDK\GetParams\Calls\Resource1\Configurations $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\CallsConfigurationPage
    {
        /** @var \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\CallsConfigurationPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/calls/1/configurations',
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
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\\CallsConfigurationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\\CallsConfigurationCreateRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create calls configuration
     *
     * Create calls configuration.
     */
    public function post(\InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationCreateRequest $payload): \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse
    {
        /** @var \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_CALLS_CONFIGURATION_ID = [
        'method' => 'DELETE',
        'path' => '/calls/1/configurations/{callsConfigurationId}',
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
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\\CallsConfigurationResponse',
    ];

    /**
     * Delete calls configuration
     *
     * Delete calls configuration.
     */
    public function deleteByCallsConfigurationId(string $callsConfigurationId): \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse
    {
        /** @var \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_CALLS_CONFIGURATION_ID), path: ['callsConfigurationId' => $callsConfigurationId]);
        return $result;
    }

    private const array GET_BY_CALLS_CONFIGURATION_ID = [
        'method' => 'GET',
        'path' => '/calls/1/configurations/{callsConfigurationId}',
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
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\\CallsConfigurationResponse',
    ];

    /**
     * Get calls configuration
     *
     * Get a single calls configuration.
     */
    public function getByCallsConfigurationId(string $callsConfigurationId): \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse
    {
        /** @var \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CALLS_CONFIGURATION_ID), path: ['callsConfigurationId' => $callsConfigurationId]);
        return $result;
    }

    private const array PUT_BY_CALLS_CONFIGURATION_ID = [
        'method' => 'PUT',
        'path' => '/calls/1/configurations/{callsConfigurationId}',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\\CallsConfigurationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\\CallsConfigurationUpdateRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update calls configuration
     *
     * Update calls configuration.
     */
    public function putByCallsConfigurationId(string $callsConfigurationId, \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationUpdateRequest $payload): \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse
    {
        /** @var \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_CALLS_CONFIGURATION_ID), $payload, path: ['callsConfigurationId' => $callsConfigurationId]);
        return $result;
    }
}
