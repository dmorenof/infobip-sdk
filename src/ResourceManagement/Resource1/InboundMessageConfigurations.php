<?php

declare(strict_types=1);

namespace InfobipSDK\ResourceManagement\Resource1;

final class InboundMessageConfigurations extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /resource-management/1/inbound-message-configurations [operationId: get-inbound-configurations] */
    /**
     * Get inbound configurations
     *
     * Get all configurations using a filter.<br/>
     * If you want configuration for a specific number or resource, then one of the following parameters is required: <code>number, numberKey, resource</code> or <code>resourceKey</code>.<br/>
     * If you are using <code>configurationKey</code> none of previously mentioned parameters are needed.
     * Documentation: https://www.infobip.com/docs/numbers/keywords-and-actions
     */
    public static function get(\InfobipSDK\GetParams\ResourceManagement\Resource1\InboundMessageConfigurations $params): \InfobipSDK\Collections\ResourceManagement\Resource1\InboundMessageConfigurations\Get\Resource1InboundMessageConfigurationsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\ResourceManagement\Resource1\InboundMessageConfigurations::class)->get($params);
    }

    /** POST /resource-management/1/inbound-message-configurations [operationId: manage-inbound-configuration] */
    /**
     * Manage inbound configuration
     *
     * Create and update configuration details for incoming messages. Each action type and channel will require different parameters.
     * Documentation: https://www.infobip.com/docs/numbers/keywords-and-actions
     */
    public static function post(\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfigurationRequest $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\ResourceManagement\Resource1\InboundMessageConfigurations::class)->post($payload);
    }

    /** DELETE /resource-management/1/inbound-message-configurations/{configurationKey} [operationId: delete-inbound-configuration] */
    /**
     * Delete inbound configuration
     *
     * This method will delete the configuration.
     * Documentation: https://www.infobip.com/docs/numbers/keywords-and-actions
     */
    public static function deleteByConfigurationKey(string $configurationKey): void
    {
        self::client()->resource(\InfobipSDK\Resources\ResourceManagement\Resource1\InboundMessageConfigurations::class)->deleteByConfigurationKey($configurationKey);
    }

}
