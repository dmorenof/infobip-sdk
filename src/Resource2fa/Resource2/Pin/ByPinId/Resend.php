<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Pin\ByPinId;

final class Resend extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /2fa/2/pin/{pinId}/resend [operationId: resend-2fa-pin-code-over-sms] */
    /**
     * Resend 2FA PIN code over SMS
     *
     * If needed, you can resend the same (previously sent) PIN code over SMS.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(string $pinId, ?\InfobipSDK\Requests\AllOfResend2faPinCodeOverSmsBody\SmsBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Resend\Post\ByPinIdResendResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId\Resend::class)->post($pinId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId\Resend::class)->post($pinId, $payload);
    }

}
