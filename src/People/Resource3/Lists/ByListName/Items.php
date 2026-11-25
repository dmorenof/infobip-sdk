<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource3\Lists\ByListName;

final class Items extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/3/lists/{listName}/items [operationId: delete-list-items] */
    /**
     * Delete items
     *
     * Deletes items in a list attribute and returns all items of the updated list.
     */
    public static function delete(string $listName, \InfobipSDK\DeleteParams\People\Resource3\Lists\ByListName\Items $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists\ByListName\Items::class)->delete($listName, $params);
    }

    /** GET /people/3/lists/{listName}/items [operationId: get-list-items] */
    /**
     * Get items
     *
     * Get a single item or a list of items of a list attribute.
     */
    public static function get(string $listName, \InfobipSDK\GetParams\People\Resource3\Lists\ByListName\Items $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists\ByListName\Items::class)->get($listName, $params);
    }

    /** POST /people/3/lists/{listName}/items [operationId: append-list-items] */
    /**
     * Append items
     *
     * Adds new items to a list attribute and returns all items of the updated list.
     */
    public static function post(string $listName, \InfobipSDK\PostParams\People\Resource3\Lists\ByListName\Items $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists\ByListName\Items::class)->post($listName, $params);
    }

    /** PATCH /people/3/lists/{listName}/items/{itemId} [operationId: update-list-item] */
    /**
     * Update an item
     *
     * Updates the fields of a list item that are passed in the request.
     * Missing fields will keep their values.
     * Returns all items of the updated list attribute.
     */
    public static function patchByItemId(\InfobipSDK\PathParams\People\Resource3\Lists\ByListName\Items\ByItemId $identifier, \InfobipSDK\PatchParams\People\Resource3\Lists\ByListName\Items\ByItemId $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists\ByListName\Items::class)->patchByItemId($identifier, $params);
    }

    /** PUT /people/3/lists/{listName}/items/{itemId} [operationId: replace-list-item] */
    /**
     * Replace an item
     *
     * Replaces an item of a list attribute and returns all items of the updated list.
     */
    public static function putByItemId(\InfobipSDK\PathParams\People\Resource3\Lists\ByListName\Items\ByItemId $identifier, \InfobipSDK\PutParams\People\Resource3\Lists\ByListName\Items\ByItemId $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists\ByListName\Items::class)->putByItemId($identifier, $params);
    }
}
