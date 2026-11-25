<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey;

final class Actions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /push/1/applications/{applicationCode}/configurations/{configurationKey}/actions [operationId: list-all-actions] */
    /**
     * List all actions
     *
     * List all actions for an MO (Mobile Originated) message configuration.
     */
    public static function get(\InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions $identifier): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions::class)->get($identifier);
    }

    /** POST /push/1/applications/{applicationCode}/configurations/{configurationKey}/actions [operationId: create-new-action] */
    /**
     * Create new action
     *
     * Create a new action for an MO (Mobile Originated) message configuration. Supported action types are HTTP_FORWARD and PULL.
     */
    public static function post(\InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions $identifier, \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionRequest $payload): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions::class)->post($identifier, $payload);
    }

    /** DELETE /push/1/applications/{applicationCode}/configurations/{configurationKey}/actions/{actionKey} [operationId: delete-action] */
    /**
     * Delete action
     *
     * Delete an action from an MO (Mobile Originated) message configuration.
     */
    public static function deleteByActionKey(\InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions\ByActionKey $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions::class)->deleteByActionKey($identifier);
    }

}
