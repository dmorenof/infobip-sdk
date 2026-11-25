<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1;

final class NumberPools extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/number-pools [operationId: get-owned-number-pools] */
    /**
     * Get Owned Number Pools
     *
     * Returns a paginated list of number pools owned by the authenticated account.
     */
    public static function get(?\InfobipSDK\GetParams\NumberRegistration\Resource1\NumberPools $params = null): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPoolUsageApiPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\NumberPools::class)->get($params);
    }
}
