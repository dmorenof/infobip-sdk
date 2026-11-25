<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId;

final class Resend2fa extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/brands/{brandId}/resend2fa [operationId: resend-2fa-mail-brand-auth] */
    /**
     * Resend 2FA Email For Brand Authentication
     *
     * Resend 2FA email to proceed with Brand authentication.
     * This operation can be executed for TENDLC_PUBLIC_COMPANY brand type only when Brand authentication is in progress.
     * In 2 hour time window can resend only one 2FA email.
     */
    public static function post(string $brandId): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Resend2fa::class)->post($brandId);
    }
}
