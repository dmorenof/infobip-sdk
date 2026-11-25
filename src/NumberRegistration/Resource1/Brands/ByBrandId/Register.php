<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId;

final class Register extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/brands/{brandId}/register [operationId: register-brand] */
    /**
     * Register Brand
     *
     * Registers the brand with the given ID with all available registrars. Each registered brand incurs a cost, consult your contract for pricing details.
     * When registering brands of type TENDLC_PUBLIC_COMPANY brands, brand authentication+ verification are automatically triggered.
     * This is only available for 10DLC Brands
     */
    public static function post(string $brandId): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Register::class)->post($brandId);
    }
}
