<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2;

final class Pin extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /2fa/2/pin [operationId: send-2fa-pin-code-over-sms] */
    /**
     * Send 2FA PIN code over SMS
     *
     * Send a PIN code over SMS using a previously created [message template](#channels/sms/create-2fa-message-template).
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(?\InfobipSDK\PostParams\Resource2fa\Resource2\Pin $params = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\Post\Resource2PinResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin::class)->post($params);
    }
}
