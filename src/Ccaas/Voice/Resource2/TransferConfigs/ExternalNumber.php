<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\TransferConfigs;

final class ExternalNumber extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/transfer-configs/external-number [operationId: get-transfer-to-external-number-config] */
    /**
     * Get transfer to external number configuration
     *
     * Use this endpoint to get a Transfer to external number configuration. <a href="https://www.infobip.com/docs/conversations/calls#transfer-to-external-number-set-up-calls" target="_blank">More info</a>.
     */
    public static function get(): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferToExternalConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\TransferConfigs\ExternalNumber::class)->get();
    }

    /** PUT /ccaas/voice/2/transfer-configs/external-number [operationId: update-transfer-to-external-number-config] */
    /**
     * Update transfer to external number configuration
     *
     * Use this endpoint to update an already existing transfer to external number configuration. <a href="https://www.infobip.com/docs/conversations/calls#transfer-to-external-number-set-up-calls" target="_blank">More info</a>.
     */
    public static function put(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferToExternalConfigApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferToExternalConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\TransferConfigs\ExternalNumber::class)->put($payload);
    }
}
