<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2;

final class AccountWrapUpConfig extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/account-wrap-up-config [operationId: get-conversations-account-wrap-up-config] */
    /**
     * Get account wrap up configuration
     *
     * Use this method to retrieve the current account wrap up configuration. Wrap up is the time after a call during which an agent's status is still BUSY. Default wrap up time is 30 seconds. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     */
    public static function get(): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountWrapUpApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AccountWrapUpConfig::class)->get();
    }

    /** PUT /ccaas/voice/2/account-wrap-up-config [operationId: update-conversations-account-wrap-up-config] */
    /**
     * Update account wrap up configuration
     *
     * Use this method to update account wrap up configuration. Wrap up is the time after a call during which an agent's status is still BUSY. Default wrap up time is 30 seconds. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     */
    public static function put(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountWrapUpApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountWrapUpApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AccountWrapUpConfig::class)->put($payload);
    }

}
