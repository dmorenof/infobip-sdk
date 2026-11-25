<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class Configurations extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/configurations [operationId: get-calls-configurations] */
    /**
     * Get calls configurations
     *
     * Get calls configurations.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Configurations $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\CallsConfigurationPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Configurations::class)->get($params);
    }

    /** POST /calls/1/configurations [operationId: create-calls-configuration] */
    /**
     * Create calls configuration
     *
     * Create calls configuration.
     */
    public static function post(\InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationCreateRequest $payload): \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Configurations::class)->post($payload);
    }

    /** DELETE /calls/1/configurations/{callsConfigurationId} [operationId: delete-calls-configuration] */
    /**
     * Delete calls configuration
     *
     * Delete calls configuration.
     */
    public static function deleteByCallsConfigurationId(string $callsConfigurationId): \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Configurations::class)->deleteByCallsConfigurationId($callsConfigurationId);
    }

    /** GET /calls/1/configurations/{callsConfigurationId} [operationId: get-calls-configuration] */
    /**
     * Get calls configuration
     *
     * Get a single calls configuration.
     */
    public static function getByCallsConfigurationId(string $callsConfigurationId): \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Configurations::class)->getByCallsConfigurationId($callsConfigurationId);
    }

    /** PUT /calls/1/configurations/{callsConfigurationId} [operationId: update-calls-configuration] */
    /**
     * Update calls configuration
     *
     * Update calls configuration.
     */
    public static function putByCallsConfigurationId(string $callsConfigurationId, \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationUpdateRequest $payload): \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Configurations::class)->putByCallsConfigurationId($callsConfigurationId, $payload);
    }
}
