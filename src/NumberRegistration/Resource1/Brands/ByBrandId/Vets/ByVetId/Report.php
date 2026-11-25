<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId\Vets\ByVetId;

final class Report extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/brands/{brandId}/vets/{vetId}/report [operationId: get-brand-enhanced-vet-report] */
    /**
     * Get Brand Enhanced Vet Report
     *
     * Retrieves brand enhanced vet report by given vetId.
     */
    public static function get(\InfobipSDK\PathParams\NumberRegistration\Resource1\Brands\ByBrandId\Vets\ByVetId\Report $identifier): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Vets\ByVetId\Report::class)->get($identifier);
    }
}
