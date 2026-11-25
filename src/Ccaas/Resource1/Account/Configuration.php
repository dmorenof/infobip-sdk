<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Account;

final class Configuration extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PUT /ccaas/1/account/configuration [operationId: update-conversation-account-configuration] */
    /**
     * Update account configuration
     *
     * This endpoint is deprecated as of March 12, 2025, meaning no fixes or updates will be provided. It will be completely removed on December 31, 2026. Configure the webhooks through the <a href="https://www.infobip.com/docs/conversations-api" target="_blank">Subscription management</a> section in your Infobip account or the existing <a href="https://www.infobip.com/docs/api/platform/subscriptions-api" target="_blank">Subscriptions management API</a>.
     *
     * @deprecated
     */
    public static function put(\InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\AccountConfigurationRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Account\Configuration::class)->put($payload);
    }

}
