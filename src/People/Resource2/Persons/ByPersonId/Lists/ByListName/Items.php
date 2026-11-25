<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\Persons\ByPersonId\Lists\ByListName;

final class Items extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/persons/{personId}/lists/{listName}/items [operationId: deprecated-delete-list-items] */
    /**
     * Delete items
     *
     * Deletes items with given identifiers and returns rest items of the updated list.
     *
     * @deprecated
     */
    public static function delete(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $identifier, \InfobipSDK\DeleteParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::class)->delete($identifier, $params);
    }

    /** GET /people/2/persons/{personId}/lists/{listName}/items [operationId: deprecated-get-list-items] */
    /**
     * Get items
     *
     * Returns a single item or set of items of a list.
     *
     * @deprecated
     */
    public static function get(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $identifier, \InfobipSDK\GetParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::class)->get($identifier, $params);
    }

    /** POST /people/2/persons/{personId}/lists/{listName}/items [operationId: deprecated-append-list-items] */
    /**
     * Append items
     *
     * Adds new items to a list and returns all items of the updated list.
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $identifier, \InfobipSDK\Collections\DeprecatedAppendListItemsBodyArray\ItemsBodyCollection $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::class)->post($identifier, $payload);
    }

    /** PATCH /people/2/persons/{personId}/lists/{listName}/items/{itemId} [operationId: deprecated-update-list-item] */
    /**
     * Update an item
     *
     * Updates only fields of the item that are presented in a given data.<br>Missing fields will be preserved.<br>Returns all items of the updated list.
     *
     * @deprecated
     */
    public static function patchByItemId(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items\ByItemId $identifier, \InfobipSDK\Requests\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items\ByItemId\Patch $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::class)->patchByItemId($identifier, $payload);
    }

    /** PUT /people/2/persons/{personId}/lists/{listName}/items/{itemId} [operationId: deprecated-replace-list-item] */
    /**
     * Replace an item
     *
     * Replaces an item of a list and returns all items of the updated list.
     *
     * @deprecated
     */
    public static function putByItemId(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items\ByItemId $identifier, \InfobipSDK\Requests\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items\ByItemId\Put $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::class)->putByItemId($identifier, $payload);
    }
}
