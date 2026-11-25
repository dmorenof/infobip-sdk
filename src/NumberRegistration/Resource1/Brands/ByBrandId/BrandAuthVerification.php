<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId;

final class BrandAuthVerification extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/brands/{brandId}/brand-auth-verification [operationId: brand-auth-verification] */
    /**
     * Request Brand Authentication+ Verification
     *
     * Request brand authentication+ verification to finalize brand registration process.
     * This operation can be executed for TENDLC_PUBLIC_COMPANY brand type only when Brand authentication is not in progress.
     */
    public static function post(string $brandId): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\BrandAuthVerification::class)->post($brandId);
    }
}
