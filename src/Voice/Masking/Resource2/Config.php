<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Masking\Resource2;

final class Config extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /voice/masking/2/config [operationId: get-number-masking-configurations] */
    /**
     * Get number masking configurations
     *
     * This method allows you to get all Voice number masking configurations.
     */
    public static function get(): \InfobipSDK\Collections\Voice\Masking\Resource2\Config\Get\Resource2ConfigCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Config::class)->get();
    }

    /** POST /voice/masking/2/config [operationId: create-number-masking-configuration] */
    /**
     * Create number masking configuration
     *
     * This method allows you to create a masking configuration.
     */
    public static function post(\InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupRequest $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Config::class)->post($payload);
    }

    /** DELETE /voice/masking/2/config/{key} [operationId: delete-number-masking-configuration] */
    /**
     * Delete number masking configuration
     *
     * This method allows you to delete a Voice number masking configuration.
     */
    public static function deleteByKey(string $key): void
    {
        self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Config::class)->deleteByKey($key);
    }

    /** GET /voice/masking/2/config/{key} [operationId: get-number-masking-configuration] */
    /**
     * Get number masking configuration
     *
     * This method allows you to get a Voice number masking configuration.
     */
    public static function getByKey(string $key): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Config::class)->getByKey($key);
    }

    /** PUT /voice/masking/2/config/{key} [operationId: update-number-masking-configuration] */
    /**
     * Update number masking configuration
     *
     * This method allows you to update a Voice number masking configuration.
     */
    public static function putByKey(string $key, \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupRequest $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Config::class)->putByKey($key, $payload);
    }
}
