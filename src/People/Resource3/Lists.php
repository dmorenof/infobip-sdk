<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource3;

final class Lists extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/3/lists [operationId: delete-lists] */
    /**
     * Delete lists
     *
     * Deletes a single or multiple list attributes of a profile.
     */
    public static function delete(\InfobipSDK\DeleteParams\People\Resource3\Lists $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists::class)->delete($params);
    }

    /** GET /people/3/lists [operationId: get-lists] */
    /**
     * Get lists
     *
     * Returns all items of a single or multiple list attributes.
     */
    public static function get(\InfobipSDK\GetParams\People\Resource3\Lists $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists::class)->get($params);
    }

    /** PATCH /people/3/lists/{listName} [operationId: update-list] */
    /**
     * Update a list
     *
     * Updates the fields of list items passed in the request.
     * Missing items and fields will keep their values.
     * Returns all items of the updated list.
     */
    public static function patchByListName(string $listName, \InfobipSDK\PatchParams\People\Resource3\Lists\ByListName $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists::class)->patchByListName($listName, $params);
    }

    /** PUT /people/3/lists/{listName} [operationId: replace-list] */
    /**
     * Replace a list
     *
     * Replaces all items in a list attribute and returns all items of the updated list.
     */
    public static function putByListName(string $listName, \InfobipSDK\PutParams\People\Resource3\Lists\ByListName $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Lists::class)->putByListName($listName, $params);
    }
}
