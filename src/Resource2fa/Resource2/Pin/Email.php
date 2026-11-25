<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Pin;

final class Email extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /2fa/2/pin/email [operationId: send-2fa-pin-code-over-email] */
    /**
     * Send 2FA PIN code over Email
     *
     * Send a PIN code over Email using previously created [Email message template](#channels/sms/2fa/2fa-configuration/create-2fa-email-message-template).
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(?\InfobipSDK\Requests\EmailBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\Email\Post\PinEmailResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\Email::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\Email::class)->post($payload);
    }

}
