<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId;

final class Appeal extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/brands/{brandId}/appeal [operationId: submit-brand-appeal] */
    /**
     * Submit Brand Identity Appeal
     *
     * Submit an appeal for an eligible 10DLC brand registration. An appeal can be submitted within 45 calendar days after the rejection.
     * Only one pending appeal per brand is allowed at a time.
     * Charges apply only if the appeal is processed by TCR. Appeals rejected internally are not charged and can be resubmitted.
     */
    public static function post(string $brandId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealRequest $payload): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Appeal::class)->post($brandId, $payload);
    }
}
