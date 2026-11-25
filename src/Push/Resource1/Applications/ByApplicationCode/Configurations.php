<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource1\Applications\ByApplicationCode;

final class Configurations extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /push/1/applications/{applicationCode}/configurations [operationId: list-all-configurations] */
    /**
     * List all configurations
     *
     * List all MO (Mobile Originated) message configurations for an application.
     */
    public static function get(string $applicationCode): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ConfigurationsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications\ByApplicationCode\Configurations::class)->get($applicationCode);
    }

    /** POST /push/1/applications/{applicationCode}/configurations [operationId: create-a-new-configuration] */
    /**
     * Create a new configuration
     *
     * Create a new MO (Mobile Originated) message configuration for an application.
     */
    public static function post(string $applicationCode): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications\ByApplicationCode\Configurations::class)->post($applicationCode);
    }

    /** DELETE /push/1/applications/{applicationCode}/configurations/{configurationKey} [operationId: delete-the-configuration] */
    /**
     * Delete the configuration
     *
     * Delete an MO (Mobile Originated) message configuration by key.
     */
    public static function deleteByConfigurationKey(\InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications\ByApplicationCode\Configurations::class)->deleteByConfigurationKey($identifier);
    }

    /** GET /push/1/applications/{applicationCode}/configurations/{configurationKey} [operationId: get-a-single-configuration] */
    /**
     * Get a single configuration
     *
     * Get a single MO (Mobile Originated) message configuration by key.
     */
    public static function getByConfigurationKey(\InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey $identifier): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications\ByApplicationCode\Configurations::class)->getByConfigurationKey($identifier);
    }

}
