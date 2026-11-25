<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Pin\ByPinId\Resend;

final class Voice extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /2fa/2/pin/{pinId}/resend/voice [operationId: resend-2fa-pin-code-over-voice] */
    /**
     * Resend 2FA PIN code over Voice
     *
     * If needed, you can resend the same (previously sent) PIN code over Voice.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(string $pinId, ?\InfobipSDK\Requests\AllOfResend2faPinCodeOverVoiceBody\VoiceBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Resend\Voice\Post\ResendVoiceResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId\Resend\Voice::class)->post($pinId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId\Resend\Voice::class)->post($pinId, $payload);
    }

}
