<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Applications\ByAppId;

final class Verifications extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /2fa/2/applications/{appId}/verifications [operationId: get-2fa-verification-status] */
    /**
     * Get 2FA verification status
     *
     * Check if a phone number (or email) is already verified for a specific 2FA application.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function get(string $appId, \InfobipSDK\GetParams\Resource2fa\Resource2\Applications\ByAppId\Verifications $params): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Verifications\Get\ByAppIdVerificationsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Verifications::class)->get($appId, $params);
    }

}
