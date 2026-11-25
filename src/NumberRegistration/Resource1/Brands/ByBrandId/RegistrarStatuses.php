<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId;

final class RegistrarStatuses extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/brands/{brandId}/registrar-statuses [operationId: get-brand-registrar-statuses] */
    /**
     * Get Brand Registrar Statuses
     *
     * Retrieves status of a registered brand for each registrar.
     */
    public static function get(string $brandId): \InfobipSDK\Collections\NumberRegistration\Resource1\Brands\ByBrandId\RegistrarStatuses\Get\ByBrandIdRegistrarStatusesCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\RegistrarStatuses::class)->get($brandId);
    }

}
