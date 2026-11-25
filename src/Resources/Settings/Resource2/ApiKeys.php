<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Settings\Resource2;

final class ApiKeys extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/settings/2/api-keys',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
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
        'responseType' => '\\InfobipSDK\\DTOs\\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\\GetApiKeysResponse',
    ];

    /**
     * Get API keys by filter
     *
     * This method allows you to fetch an API keys by filter. Only users with certain roles can fetch api keys; for example, Account Manager and Integrations Manager roles.
     */
    public function get(?\InfobipSDK\GetParams\Settings\Resource2\ApiKeys $params = null): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\GetApiKeysResponse
    {
        /** @var \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\GetApiKeysResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/settings/2/api-keys',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
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
        'responseType' => '\\InfobipSDK\\DTOs\\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\\ApiKey',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\\CreateApiKeyRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create API key
     *
     * This method allows you to create an API key. Only users with certain roles can create api keys; for example, Account Manager and Integrations Manager roles.
     */
    public function post(\InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\CreateApiKeyRequest $payload): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey
    {
        /** @var \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_API_KEY_ID = [
        'method' => 'GET',
        'path' => '/settings/2/api-keys/{apiKeyId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\\ApiKey',
        'validation' => [
            'apiKeyId' => [
                'minLength' => 1,
            ],
        ],
    ];

    /**
     * Get API key
     *
     * This method allows you to fetch an API key. Only users with certain roles can fetch api key; for example, Account Manager and Integrations Manager roles.
     */
    public function getByApiKeyId(string $apiKeyId): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey
    {
        /** @var \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_API_KEY_ID), path: ['apiKeyId' => $apiKeyId]);
        return $result;
    }

    private const array PUT_BY_API_KEY_ID = [
        'method' => 'PUT',
        'path' => '/settings/2/api-keys/{apiKeyId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\\ApiKey',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\\UpdateApiKeyRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update API key
     *
     * This method allows you to update an API key. Only users with certain roles can create api keys; for example, Account Manager and Integrations Manager roles.
     */
    public function putByApiKeyId(string $apiKeyId, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\UpdateApiKeyRequest $payload): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey
    {
        /** @var \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_API_KEY_ID), $payload, path: ['apiKeyId' => $apiKeyId]);
        return $result;
    }

}
