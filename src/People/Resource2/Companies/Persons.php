<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\Companies;

final class Persons extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/companies/persons [operationId: batch-remove-persons-from-company] */
    /**
     * Remove persons from company batch
     *
     * Use this method to remove persons from a company.<br>**NOTE** Array size is limited to `1000` persons.
     */
    public static function delete(?\InfobipSDK\DeleteParams\People\Resource2\Companies\Persons $params = null): void
    {
        self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies\Persons::class)->delete($params);
    }

    /** PATCH /people/2/companies/persons [operationId: batch-add-persons-to-company] */
    /**
     * Add persons to company batch
     *
     * Use this method to add persons to a company.<br>**NOTE** Array size is limited to `1000` persons.
     */
    public static function patch(?\InfobipSDK\PatchParams\People\Resource2\Companies\Persons $params = null): void
    {
        self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies\Persons::class)->patch($params);
    }
}
