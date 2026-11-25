<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Ctc\Resource1;

final class Send extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /voice/ctc/1/send [operationId: send-click-to-call-message] */
    /**
     * Send click-to-call message
     *
     * This method allows you to send click-to-call voice messages.
     * Documentation: https://www.infobip.com/docs/voice-and-video/click-to-call
     */
    public static function post(\InfobipSDK\DTOs\N977e3573b6848c404863a30ecae06e08186a75a9070af48acc4b4f99a371a9b7\ClickToCallApiRequest $payload): \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ctc\Resource1\Send::class)->post($payload);
    }
}
