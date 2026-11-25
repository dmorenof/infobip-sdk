<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId\Vets;

final class Import extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PUT /number-registration/1/brands/{brandId}/vets/import [operationId: import-existing-brand-vet] */
    /**
     * Import Existing Brand Vet
     *
     * Imports Existing Brand Vet provider
     */
    public static function put(string $brandId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VetImportRequest $payload): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVet
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Vets\Import::class)->put($brandId, $payload);
    }
}
