<?php

declare(strict_types=1);

namespace InfobipSDK\Tts\Resource3;

final class Multi extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /tts/3/multi [operationId: send-multiple-voice-tts] */
    /**
     * Send multiple voice messages
     *
     * This method allows you to send multiple voice messages to one or more destination addresses.
     * Documentation: https://www.infobip.com/docs/voice-and-video/voice-messages
     */
    public static function post(\InfobipSDK\DTOs\Faa1195a85d1a730663c8d9058f7685a3760136466d26134605b0efcc286bec7\MultiTtsApiRequest $payload): \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Multi::class)->post($payload);
    }

}
