<?php

declare(strict_types=1);

namespace InfobipSDK\Tts\Resource3;

final class Advanced extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /tts/3/advanced [operationId: send-advanced-voice-tts] */
    /**
     * Send advanced voice message
     *
     * This method allows you to send advanced voice messages to one or more destination addresses.
     * Documentation: https://www.infobip.com/docs/voice-and-video/voice-messages
     */
    public static function post(\InfobipSDK\DTOs\N329f726ae6e36d1a92786c502bebf028e5aa08cc32a3a8e9f0bed0d82dbc7157\AdvancedTtsApiRequest $payload): \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Advanced::class)->post($payload);
    }

}
