<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId;

final class Appeals extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/brands/{brandId}/appeals [operationId: get-brand-appeals] */
    /**
     * Get Brand Appeals
     *
     * Retrieves the list of all appeals submitted for the specified brand.
     */
    public static function get(string $brandId): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Appeals::class)->get($brandId);
    }
}
