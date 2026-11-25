<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Pin\ByPinId;

final class Verify extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /2fa/2/pin/{pinId}/verify [operationId: verify-2fa-phone-number] */
    /**
     * Verify a PIN
     *
     * Verify OTP to confirm successful phone number verification. pinId is received in the response after [sending the OTP message](#channels/sms/2fa/pin-sending-and-verification/send-2fa-pin-code-over-voice).
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(string $pinId, ?\InfobipSDK\Requests\NumberBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Verify\Post\ByPinIdVerifyResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId\Verify::class)->post($pinId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId\Verify::class)->post($pinId, $payload);
    }
}
