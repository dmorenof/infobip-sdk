<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\Persons\ByPersonId;

final class Lists extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/persons/{personId}/lists [operationId: deprecated-delete-lists] */
    /**
     * Delete lists
     *
     * Deletes a single list instance or set of lists instanses for a person.
     *
     * @deprecated
     */
    public static function delete(int $personId, \InfobipSDK\DeleteParams\People\Resource2\Persons\ByPersonId\Lists $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists::class)->delete($personId, $params);
    }

    /** GET /people/2/persons/{personId}/lists [operationId: deprecated-get-lists] */
    /**
     * Get lists
     *
     * Returns all items of a single list or sets of items of a set of lists.
     *
     * @deprecated
     */
    public static function get(int $personId, \InfobipSDK\GetParams\People\Resource2\Persons\ByPersonId\Lists $params): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists::class)->get($personId, $params);
    }

    /** PATCH /people/2/persons/{personId}/lists/{listName} [operationId: deprecated-update-list] */
    /**
     * Update a list
     *
     * Updates only items and fields for a given data set.<br>Missing items and fields will be preserved.<br>Returns all items of the updated list.
     *
     * @deprecated
     */
    public static function patchByListName(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName $identifier, \InfobipSDK\Collections\ListBodyCollection $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists::class)->patchByListName($identifier, $payload);
    }

    /** PUT /people/2/persons/{personId}/lists/{listName} [operationId: deprecated-replace-list] */
    /**
     * Replace a list
     *
     * Replaces a list and returns all items of the updated list.
     *
     * @deprecated
     */
    public static function putByListName(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName $identifier, \InfobipSDK\Collections\DeprecatedReplaceListBodyArray\ListBodyCollection $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists::class)->putByListName($identifier, $payload);
    }
}
