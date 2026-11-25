<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource2\Numbers\ByNumberKey;

final class Sms extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /numbers/2/numbers/{numberKey}/sms [operationId: list-configurations-for-number] */
    /**
     * Get all number configurations
     *
     * List all configurations set up for a number.
     *
     * @deprecated
     */
    public static function get(string $numberKey, ?\InfobipSDK\GetParams\Numbers\Resource2\Numbers\ByNumberKey\Sms $params = null): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfigurations
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Sms::class)->get($numberKey, $params);
    }

    /** POST /numbers/2/numbers/{numberKey}/sms [operationId: create-new-configuration] */
    /**
     * Create number configuration
     *
     * Create a new configuration for the number. The parameters used for setting up a configuration depend on the action type. Check the examples for more details.
     * Documentation: https://www.infobip.com/docs/numbers/keywords-and-actions
     *
     * @deprecated
     */
    public static function post(string $numberKey, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfiguration $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\StoredMoConfiguration
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Sms::class)->post($numberKey, $payload);
    }

    /** PUT /numbers/2/numbers/{numberKey}/sms [operationId: modify-sms-configurations] */
    /**
     * Update number configuration
     *
     * Update configuration details. Parameters used vary depending on the action type, the same as with the Create a new configuration method.
     * Documentation: https://www.infobip.com/docs/numbers/keywords-and-actions
     *
     * @deprecated
     */
    public static function put(string $numberKey, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\StoredMoConfiguration $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\StoredMoConfiguration
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Sms::class)->put($numberKey, $payload);
    }

    /** DELETE /numbers/2/numbers/{numberKey}/sms/{configurationKey} [operationId: delete-configuration] */
    /**
     * Delete number configuration
     *
     * This method will delete the configuration. If there are no configurations, you can still retrieve any incoming message by using a Get received messages method.
     *
     * @deprecated
     */
    public static function deleteByConfigurationKey(\InfobipSDK\PathParams\Numbers\Resource2\Numbers\ByNumberKey\Sms\ByConfigurationKey $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Sms::class)->deleteByConfigurationKey($identifier);
    }

    /** GET /numbers/2/numbers/{numberKey}/sms/{configurationKey} [operationId: get-single-configuration] */
    /**
     * Get single number configuration
     *
     * This method fetches a single configuration details set up for the number.
     *
     * @deprecated
     */
    public static function getByConfigurationKey(\InfobipSDK\PathParams\Numbers\Resource2\Numbers\ByNumberKey\Sms\ByConfigurationKey $identifier): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\StoredMoConfiguration
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Sms::class)->getByConfigurationKey($identifier);
    }

}
