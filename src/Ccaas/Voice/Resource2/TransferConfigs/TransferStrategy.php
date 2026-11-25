<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\TransferConfigs;

final class TransferStrategy extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/transfer-configs/transfer-strategy [operationId: get-transfer-strategy] */
    /**
     * Get transfer strategy
     *
     * Use this endpoint to get a Transfer Strategy. <a href="https://www.infobip.com/docs/conversations/calls#custom-transfer-music-and-message-set-up-calls" target="_blank">More info</a>.
     */
    public static function get(): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferStrategyApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\TransferConfigs\TransferStrategy::class)->get();
    }

    /** PUT /ccaas/voice/2/transfer-configs/transfer-strategy [operationId: update-transfer-strategy] */
    /**
     * Update transfer strategy
     *
     * Use this endpoint to update an already existing Transfer Strategy. <a href="https://www.infobip.com/docs/conversations/calls#custom-transfer-music-and-message-set-up-calls" target="_blank">More info</a>.
     */
    public static function put(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferStrategyApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferStrategyApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\TransferConfigs\TransferStrategy::class)->put($payload);
    }
}
