<?php

declare(strict_types=1);

namespace InfobipSDK\Settings\Resource1\Accounts\ByAccountKey;

final class ApiKeys extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /settings/1/accounts/{accountKey}/api-keys [operationId: get-api-keys-by-filter-deprecated] */
    /**
     * Get API keys by filter
     *
     * This method allows you to get API keys of some account by filter forwarded
     *
     * @deprecated
     */
    public static function get(string $accountKey, ?\InfobipSDK\GetParams\Settings\Resource1\Accounts\ByAccountKey\ApiKeys $params = null): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeys
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource1\Accounts\ByAccountKey\ApiKeys::class)->get($accountKey, $params);
    }

    /** POST /settings/1/accounts/{accountKey}/api-keys [operationId: create-api-key-deprecated] */
    /**
     * Create API key
     *
     * This method allows you to create an API key.
     *
     * @deprecated
     */
    public static function post(string $accountKey, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\CreateApiKeyRequestV1 $payload): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeyResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource1\Accounts\ByAccountKey\ApiKeys::class)->post($accountKey, $payload);
    }

    /** GET /settings/1/accounts/{accountKey}/api-keys/{key} [operationId: get-api-key-deprecated] */
    /**
     * Get API key
     *
     * Key of the main account the API key belongs to. Use the special _ value to reference the account of the user making the API request or a standard account key such as 8F0792F86035A9F4290821F1EE6BC06A to reference an account explicitly
     *
     * @deprecated
     */
    public static function getByKey(\InfobipSDK\PathParams\Settings\Resource1\Accounts\ByAccountKey\ApiKeys\ByKey $identifier): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeyResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource1\Accounts\ByAccountKey\ApiKeys::class)->getByKey($identifier);
    }

    /** PUT /settings/1/accounts/{accountKey}/api-keys/{key} [operationId: update-api-key-deprecated] */
    /**
     * Update API key
     *
     * Key of the main account the API key belongs to. Use the special _ value to reference the account of the user making the API request or a standard account key such as 8F0792F86035A9F4290821F1EE6BC06A to reference an account explicitly.
     *
     * @deprecated
     */
    public static function putByKey(\InfobipSDK\PathParams\Settings\Resource1\Accounts\ByAccountKey\ApiKeys\ByKey $identifier, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\UpdateApiKeyRequestV1 $payload): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeyResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource1\Accounts\ByAccountKey\ApiKeys::class)->putByKey($identifier, $payload);
    }
}
