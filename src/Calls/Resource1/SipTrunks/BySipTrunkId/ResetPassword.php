<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\SipTrunks\BySipTrunkId;

final class ResetPassword extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/sip-trunks/{sipTrunkId}/reset-password [operationId: reset-sip-trunk-password] */
    /**
     * Reset SIP trunk credentials
     *
     * Reset credentials. For `REGISTERED` SIP trunks, resets the registration password. For `AUTHENTICATED` SIP trunks, resets the authentication secrets (header value and digest credentials).
     */
    public static function post(string $sipTrunkId): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResetPasswordResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\BySipTrunkId\ResetPassword::class)->post($sipTrunkId);
    }

}
