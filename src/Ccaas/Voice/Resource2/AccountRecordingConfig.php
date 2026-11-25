<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2;

final class AccountRecordingConfig extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/account-recording-config [operationId: get-conversations-account-recording-config] */
    /**
     * Get account recording configuration
     *
     * Use this method to retrieve the account recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public static function get(): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AccountRecordingConfig::class)->get();
    }

    /** POST /ccaas/voice/2/account-recording-config [operationId: create-conversations-account-recording-config] */
    /**
     * Create account recording configuration
     *
     * Use this method to create an account recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public static function post(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AccountRecordingConfig::class)->post($payload);
    }

    /** PUT /ccaas/voice/2/account-recording-config [operationId: update-conversations-account-recording-config] */
    /**
     * Update account recording configuration
     *
     * Use this method to create or update an account recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public static function put(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AccountRecordingConfig::class)->put($payload);
    }

}
