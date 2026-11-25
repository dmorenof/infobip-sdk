<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\Tags\ByName;

final class Persons extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/tags/{name}/persons [operationId: remove-tag-from-people-batch] */
    /**
     * Remove tag from people batch
     *
     * This method allows you to remove tag from multiple people.<br>**NOTE** Array size of the batch remove request is limited to `1000` people.
     */
    public static function delete(string $name, ?\InfobipSDK\Requests\BatchBodyRequest $payload = null): string
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags\ByName\Persons::class)->delete($name);
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags\ByName\Persons::class)->delete($name, $payload);
    }

    /** PATCH /people/2/tags/{name}/persons [operationId: add-tag-to-people-batch] */
    /**
     * Add tag to people batch
     *
     * This method allows you to assign tag to multiple people.<br>**NOTE** Array size of the batch add request is limited to `1000` people.
     */
    public static function patch(string $name, ?\InfobipSDK\Requests\AllOfAddTagToPeopleBatchBody\BatchBodyRequest $payload = null): void
    {
        if (func_num_args() <= 1) {
            self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags\ByName\Persons::class)->patch($name);
            return;
        }
        self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags\ByName\Persons::class)->patch($name, $payload);
    }
}
