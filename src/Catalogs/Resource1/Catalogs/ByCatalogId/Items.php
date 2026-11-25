<?php

declare(strict_types=1);

namespace InfobipSDK\Catalogs\Resource1\Catalogs\ByCatalogId;

final class Items extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /catalogs/1/catalogs/{catalogId}/items [operationId: delete-items] */
    /**
     * Delete items
     *
     * Use this method to delete a list of filtered items.
     */
    public static function delete(int $catalogId, \InfobipSDK\DeleteParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items $params): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items::class)->delete($catalogId, $params);
    }

    /** GET /catalogs/1/catalogs/{catalogId}/items [operationId: get-items] */
    /**
     * Get items
     *
     * Use this method  to get a list of items from a catalog with pagination. Query parameters are optional and can be used to narrow list results.
     */
    public static function get(int $catalogId, ?\InfobipSDK\GetParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items $params = null): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\PageResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items::class)->get($catalogId, $params);
    }

    /** PATCH /catalogs/1/catalogs/{catalogId}/items [operationId: patch-items] */
    /**
     * Update items
     *
     * Use this method to update list of filtered items.
     */
    public static function patch(int $catalogId, \InfobipSDK\PatchParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items $params): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items::class)->patch($catalogId, $params);
    }

    /** POST /catalogs/1/catalogs/{catalogId}/items [operationId: add-items] */
    /**
     * Add items
     *
     * Use this method to add items to a specific catalog.<br><br>
     * <strong>NOTE</strong><br>Response details:<ul><li>This endpoint only returns successful results</li><li>Other results are ignored</li><li>Errors are not returned</li>
     * </ul><br><strong>NOTE</strong><br><ul><li>Maximum of <code>1000</code> item field values are allowed.</li></ul>
     */
    public static function post(int $catalogId, \InfobipSDK\Collections\AddItemsBodyArray\ItemsBodyCollection $payload): \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Items\Post\ByCatalogIdItemsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items::class)->post($catalogId, $payload);
    }

    /** DELETE /catalogs/1/catalogs/{catalogId}/items/{itemId} [operationId: delete-item] */
    /**
     * Delete item
     *
     * Use this method to delete a specific item.
     */
    public static function deleteByItemId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items\ByItemId $identifier): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items::class)->deleteByItemId($identifier);
    }

    /** GET /catalogs/1/catalogs/{catalogId}/items/{itemId} [operationId: get-item-by-id] */
    /**
     * Get item
     *
     * Use this method to get a specific item from a catalog.
     */
    public static function getByItemId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items\ByItemId $identifier): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogItemDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items::class)->getByItemId($identifier);
    }

    /** PATCH /catalogs/1/catalogs/{catalogId}/items/{itemId} [operationId: patch-item] */
    /**
     * Update item
     *
     * Use this method to update the field values of items.
     */
    public static function patchByItemId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items\ByItemId $identifier, \InfobipSDK\Collections\ItemsBodyCollection $payload): \InfobipSDK\Collections\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogItemDto\ValuesCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items::class)->patchByItemId($identifier, $payload);
    }
}
