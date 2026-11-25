<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Pin\ByPinId\Resend;

final class Email extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /2fa/2/pin/{pinId}/resend/email [operationId: resend-2fa-pin-code-over-email] */
    /**
     * Resend 2FA PIN code over Email
     *
     * If needed, you can resend the same (previously sent) PIN code over Email.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(string $pinId, ?\InfobipSDK\Requests\AllOfResend2faPinCodeOverEmailBody\EmailBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Resend\Email\Post\ResendEmailResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId\Resend\Email::class)->post($pinId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId\Resend\Email::class)->post($pinId, $payload);
    }
}
