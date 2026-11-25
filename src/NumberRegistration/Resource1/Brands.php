<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1;

final class Brands extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/brands [operationId: get-brands] */
    /**
     * Get Brands
     *
     * Get a page of brands, using query parameters to filter results.
     */
    public static function get(?\InfobipSDK\GetParams\NumberRegistration\Resource1\Brands $params = null): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PageResponseBrand
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands::class)->get($params);
    }

    /** POST /number-registration/1/brands [operationId: create-brand] */
    /**
     * Create Brand
     *
     * Creates a brand within the Infobip platform. This operation does not register the brand with any registrars. Registration can be done using created brand's ID with the 'Register Brand' endpoint.
     */
    public static function post(\InfobipSDK\PostParams\NumberRegistration\Resource1\Brands $params): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Brand
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands::class)->post($params);
    }

    /** DELETE /number-registration/1/brands/{brandId} [operationId: delete-brand] */
    /**
     * Delete Brand
     *
     * Removes a previously created brand by its ID.
     * This operation is only supported if all associated campaigns are in a stage that allows deletion (applies to vetted and non-vetted brands).
     *
     */
    public static function deleteByBrandId(string $brandId): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands::class)->deleteByBrandId($brandId);
    }

    /** GET /number-registration/1/brands/{brandId} [operationId: get-brand] */
    /**
     * Get Brand
     *
     * Retrieves a previously created brand by its ID.
     */
    public static function getByBrandId(string $brandId): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Brand
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands::class)->getByBrandId($brandId);
    }

    /** PUT /number-registration/1/brands/{brandId} [operationId: update-brand] */
    /**
     * Update Brand
     *
     * Updates a brand that has not yet been registered within the Infobip platform (response 200) or that has a successful or failed registration
     * (response 202). This method will not support a brand update with pending registration status and will return a 400 Bad Request.
     * Also for successfully registered brands, updates to the legalName, type, taxId, and taxIdIssuingCountry are restricted
     * and will also return a 400 Bad Request.
     */
    public static function putByBrandId(string $brandId, \InfobipSDK\PutParams\NumberRegistration\Resource1\Brands\ByBrandId $params): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Brand
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Brands::class)->putByBrandId($brandId, $params);
    }
}
