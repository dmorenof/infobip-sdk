<?php

declare(strict_types=1);

namespace InfobipSDK\Settings\Resource2;

final class ApiKeys extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /settings/2/api-keys [operationId: get-api-keys-by-filter] */
    /**
     * Get API keys by filter
     *
     * This method allows you to fetch an API keys by filter. Only users with certain roles can fetch api keys; for example, Account Manager and Integrations Manager roles.
     */
    public static function get(?\InfobipSDK\GetParams\Settings\Resource2\ApiKeys $params = null): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\GetApiKeysResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource2\ApiKeys::class)->get($params);
    }

    /** POST /settings/2/api-keys [operationId: create-api-key] */
    /**
     * Create API key
     *
     * This method allows you to create an API key. Only users with certain roles can create api keys; for example, Account Manager and Integrations Manager roles.
     */
    public static function post(\InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\CreateApiKeyRequest $payload): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource2\ApiKeys::class)->post($payload);
    }

    /** GET /settings/2/api-keys/{apiKeyId} [operationId: get-api-key] */
    /**
     * Get API key
     *
     * This method allows you to fetch an API key. Only users with certain roles can fetch api key; for example, Account Manager and Integrations Manager roles.
     */
    public static function getByApiKeyId(string $apiKeyId): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource2\ApiKeys::class)->getByApiKeyId($apiKeyId);
    }

    /** PUT /settings/2/api-keys/{apiKeyId} [operationId: update-api-key] */
    /**
     * Update API key
     *
     * This method allows you to update an API key. Only users with certain roles can create api keys; for example, Account Manager and Integrations Manager roles.
     */
    public static function putByApiKeyId(string $apiKeyId, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\UpdateApiKeyRequest $payload): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource2\ApiKeys::class)->putByApiKeyId($apiKeyId, $payload);
    }

}
