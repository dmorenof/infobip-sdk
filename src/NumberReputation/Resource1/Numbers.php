<?php

declare(strict_types=1);

namespace InfobipSDK\NumberReputation\Resource1;

final class Numbers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-reputation/1/numbers [operationId: get-phone-numbers] */
    /**
     * Get phone numbers (cross-business)
     *
     * Returns phone numbers across all businesses for this account.
     */
    public static function get(?\InfobipSDK\GetParams\NumberReputation\Resource1\Numbers $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\HiyaPhoneNumberCrossBusinessPage
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Numbers::class)->get($params);
    }
}
