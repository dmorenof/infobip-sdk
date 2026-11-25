<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource2\Numbers\ByNumberKey;

final class Mms extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /numbers/2/numbers/{numberKey}/mms [operationId: get-mms-configurations] */
    /**
     * Get all number MMS configurations
     *
     * List all MMS configurations set up for a number.
     *
     * @deprecated
     */
    public static function get(string $numberKey, ?\InfobipSDK\GetParams\Numbers\Resource2\Numbers\ByNumberKey\Mms $params = null): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MmsConfigurations
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Mms::class)->get($numberKey, $params);
    }

    /** POST /numbers/2/numbers/{numberKey}/mms [operationId: create-mms-configuration] */
    /**
     * Create number MMS configuration
     *
     * Create a new MMS configuration for the number. The parameters used for setting up a configuration depend on the action type. Check the examples for more details.
     * Documentation: https://www.infobip.com/docs/numbers/keywords-and-actions
     *
     * @deprecated
     */
    public static function post(string $numberKey, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MmsConfiguration $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MmsConfiguration
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Mms::class)->post($numberKey, $payload);
    }

    /** DELETE /numbers/2/numbers/{numberKey}/mms/{configurationKey} [operationId: delete-mms-configuration] */
    /**
     * Delete number MMS configuration
     *
     * This method will delete MMS configuration. If there are no configurations, you can still retrieve any incoming message by using a Get received messages method.
     *
     * @deprecated
     */
    public static function deleteByConfigurationKey(\InfobipSDK\PathParams\Numbers\Resource2\Numbers\ByNumberKey\Mms\ByConfigurationKey $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Mms::class)->deleteByConfigurationKey($identifier);
    }

    /** GET /numbers/2/numbers/{numberKey}/mms/{configurationKey} [operationId: get-mms-configuration] */
    /**
     * Get number MMS configuration
     *
     * This method fetches a single MMS configuration details set up for the number.
     *
     * @deprecated
     */
    public static function getByConfigurationKey(\InfobipSDK\PathParams\Numbers\Resource2\Numbers\ByNumberKey\Mms\ByConfigurationKey $identifier): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MmsConfiguration
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Mms::class)->getByConfigurationKey($identifier);
    }

    /** PUT /numbers/2/numbers/{numberKey}/mms/{configurationKey} [operationId: update-mms-configuration] */
    /**
     * Update number MMS configuration
     *
     * Update MMS configuration details. Parameters used vary depending on the action type, the same as with the Create a new MMS configuration method.
     * Documentation: https://www.infobip.com/docs/numbers/keywords-and-actions
     *
     * @deprecated
     */
    public static function putByConfigurationKey(\InfobipSDK\PathParams\Numbers\Resource2\Numbers\ByNumberKey\Mms\ByConfigurationKey $identifier, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MmsConfiguration $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MmsConfiguration
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Mms::class)->putByConfigurationKey($identifier, $payload);
    }

}
