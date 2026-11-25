<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Pin;

final class Voice extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /2fa/2/pin/voice [operationId: send-2fa-pin-code-over-voice] */
    /**
     * Send 2FA PIN code over Voice
     *
     * Send a PIN code over Voice using previously created [message template](#channels/sms/create-2fa-message-template).
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(?\InfobipSDK\Requests\VoiceBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\Voice\Post\PinVoiceResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\Voice::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\Voice::class)->post($payload);
    }
}
