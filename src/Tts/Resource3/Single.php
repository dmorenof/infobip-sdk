<?php

declare(strict_types=1);

namespace InfobipSDK\Tts\Resource3;

final class Single extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /tts/3/single [operationId: send-single-voice-tts] */
    /**
     * Send single voice message
     *
     * This method allows you to send single voice message to one or more destination addresses.
     * Documentation: https://www.infobip.com/docs/voice-and-video/voice-messages
     */
    public static function post(\InfobipSDK\DTOs\N4171c7b532e904c90fa2d755f583a0120bed3adbb383ab2309fddb57ee41f476\SingleTtsApiRequest $payload): \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Single::class)->post($payload);
    }

}
