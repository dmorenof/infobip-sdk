<?php

declare(strict_types=1);

namespace InfobipSDK\Catalogs\Resource1\Catalogs\ByCatalogId;

final class Fields extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /catalogs/1/catalogs/{catalogId}/fields [operationId: get-catalog-fields] */
    /**
     * Get fields
     *
     * Use this method to get a list of fields for a specific catalog.
     */
    public static function get(int $catalogId): \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\Get\ByCatalogIdFieldsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Fields::class)->get($catalogId);
    }

    /** POST /catalogs/1/catalogs/{catalogId}/fields [operationId: create-catalog-fields] */
    /**
     * Create fields
     *
     * Use this method to add catalog fields to a specific catalog.<br><br>
     * <strong>NOTE</strong><br><ul><li>Maximum of <code>100</code> catalog fields are allowed.</li></ul>
     */
    public static function post(int $catalogId, \InfobipSDK\Collections\FieldsBodyCollection $payload): \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\Get\ByCatalogIdFieldsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Fields::class)->post($catalogId, $payload);
    }

    /** DELETE /catalogs/1/catalogs/{catalogId}/fields/{fieldId} [operationId: delete-catalog-field] */
    /**
     * Delete field
     *
     * Use this method to delete a field.
     */
    public static function deleteByFieldId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\ByFieldId $identifier): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Fields::class)->deleteByFieldId($identifier);
    }

    /** GET /catalogs/1/catalogs/{catalogId}/fields/{fieldId} [operationId: get-catalog-field] */
    /**
     * Get field
     *
     * Use this method to get a specific catalog field.
     */
    public static function getByFieldId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\ByFieldId $identifier): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogFieldDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Fields::class)->getByFieldId($identifier);
    }

    /** PATCH /catalogs/1/catalogs/{catalogId}/fields/{fieldId} [operationId: update-catalog-field] */
    /**
     * Update field
     *
     * Use this method to update a catalog field.
     */
    public static function patchByFieldId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\ByFieldId $identifier, \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\UpdateCatalogFieldDto $payload): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogFieldDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Fields::class)->patchByFieldId($identifier, $payload);
    }

}
