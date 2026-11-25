<?php

declare(strict_types=1);

namespace InfobipSDK\Catalogs\Resource1;

final class Catalogs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /catalogs/1/catalogs [operationId: get-catalogs] */
    /**
     * Get catalogs
     *
     * Use this method to get a list of catalogs with pagination. Query parameters are optional and can be used to narrow down the results.
     */
    public static function get(?\InfobipSDK\GetParams\Catalogs\Resource1\Catalogs $params = null): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\PageResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs::class)->get($params);
    }

    /** POST /catalogs/1/catalogs [operationId: create-catalog] */
    /**
     * Create catalog
     *
     * Use this method to create a catalog.
     */
    public static function post(\InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CreateCatalogDto $payload): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs::class)->post($payload);
    }

    /** DELETE /catalogs/1/catalogs/{id} [operationId: delete-catalog] */
    /**
     * Delete catalog
     *
     * Use this method to delete a catalog.
     */
    public static function deleteById(int $id): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs::class)->deleteById($id);
    }

    /** GET /catalogs/1/catalogs/{id} [operationId: get-catalog] */
    /**
     * Get catalog
     *
     * Use this method to get a specific catalog.
     */
    public static function getById(int $id): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs::class)->getById($id);
    }

    /** PATCH /catalogs/1/catalogs/{id} [operationId: update-catalog] */
    /**
     * Update catalog
     *
     * Use this method to overwrite a catalog with the data passed in the request body.
     * New values replace the existing values from the catalog. If no value is passed in the request,
     * the parameter keeps its value.
     */
    public static function patchById(int $id, \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\UpdateCatalogDto $payload): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs::class)->patchById($id, $payload);
    }
}
