<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Brands\ByBrandId;

final class Vets extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/brands/{brandId}/vets [operationId: get-brand-vets] */
    /**
     * Get Brand Vets
     *
     * Retrieves all vets done for the brand with the given ID.
     */
    public static function get(string $brandId, ?\InfobipSDK\GetParams\NumberRegistration\Resource1\Brands\ByBrandId\Vets $params = null): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PageResponseBrandVet
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Vets::class)->get($brandId, $params);
    }

    /** POST /number-registration/1/brands/{brandId}/vets [operationId: vet-brand] */
    /**
     * Vet Brand
     *
     * Vets the brand with the given ID. Vetting a brand may only be performed once every 30 days.
     * Can be created as vet type standard or enhanced.
     * Each vet of a brand incurs a cost, consult your contract for pricing information.
     */
    public static function post(string $brandId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVet $payload): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVet
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Vets::class)->post($brandId, $payload);
    }

    /** GET /number-registration/1/brands/{brandId}/vets/{vetId} [operationId: get-brand-vet] */
    /**
     * Get Brand Vet
     *
     * Retrieves brand vet done for the brand with the given ID.
     */
    public static function getByVetId(\InfobipSDK\PathParams\NumberRegistration\Resource1\Brands\ByBrandId\Vets\ByVetId $identifier): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVet
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Vets::class)->getByVetId($identifier);
    }

    /** PUT /number-registration/1/brands/{brandId}/vets/{vetId} [operationId: update-brand-vet] */
    /**
     * Update Brand Vet
     *
     * Updates a brand vetting type.
     * Provided vet must be current active standard vet and it may only be updated to an enhanced vet if it was performed within the last 30 days.
     * All other attempts to update a vet are considered an error.
     */
    public static function putByVetId(\InfobipSDK\PathParams\NumberRegistration\Resource1\Brands\ByBrandId\Vets\ByVetId $identifier, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVet $payload): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVet
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands\ByBrandId\Vets::class)->putByVetId($identifier, $payload);
    }
}
