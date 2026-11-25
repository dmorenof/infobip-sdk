<?php

declare(strict_types=1);

namespace InfobipSDK\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers;

final class Jobs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-reputation/1/businesses/{businessId}/numbers/jobs [operationId: get-phone-number-jobs] */
    /**
     * Get phone number registration jobs
     *
     * Get phone number registration jobs for a specific business.
     */
    public static function get(string $businessId, ?\InfobipSDK\GetParams\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers\Jobs $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\HiyaPhoneJobPage
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers\Jobs::class)->get($businessId, $params);
    }
}
