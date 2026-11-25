<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Tts\Options;

final class Placeholders extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/tts/options/placeholders/{ttsPurpose} [operationId: get-conversations-tts-supported-placeholders] */
    /**
     * Get supported TTS placeholders for purpose
     *
     * Use this method to retrieve supported TTS placeholders for specified purpose.
     */
    public static function getByTtsPurpose(\InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TtsPurposeApiModel $ttsPurpose): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\GetPlaceholdersApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Tts\Options\Placeholders::class)->getByTtsPurpose($ttsPurpose);
    }
}
