<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2;

final class AwayAudioMessage extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /ccaas/voice/2/away-audio-message/{workingHoursConfigId} [operationId: delete-conversations-away-audio-message] */
    /**
     * Delete away audio message
     *
     * Use this method to delete an away audio message by its working hours configuration id.
     */
    public static function deleteByWorkingHoursConfigId(string $workingHoursConfigId): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AwayAudioMessage::class)->deleteByWorkingHoursConfigId($workingHoursConfigId);
    }

    /** GET /ccaas/voice/2/away-audio-message/{workingHoursConfigId} [operationId: get-conversations-away-audio-message] */
    /**
     * Get away audio message
     *
     * Use this method to retrieve an away audio message by its working hours configuration id.
     */
    public static function getByWorkingHoursConfigId(string $workingHoursConfigId): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AwayAudioMessageApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AwayAudioMessage::class)->getByWorkingHoursConfigId($workingHoursConfigId);
    }

}
