<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\Companies;

final class Batch extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/companies/batch [operationId: delete-companies] */
    /**
     * Batch companies delete
     *
     * Use this method to delete multiple companies.<br>**NOTE** Array size of the batch delete request is limited to `1000` companies.
     */
    public static function delete(?\InfobipSDK\Requests\CompaniesBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Companies\Batch\DeleteStatus200\BatchDeleteStatus200Response|\InfobipSDK\Responses\People\Resource2\Companies\Batch\DeleteStatus207\BatchDeleteStatus207Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies\Batch::class)->delete();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies\Batch::class)->delete($payload);
    }

    /** PATCH /people/2/companies/batch [operationId: update-companies] */
    /**
     * Batch companies update
     *
     * Use this method to update multiple companies.<br>**NOTE** Array size of the batch update request is limited to `1000` companies.
     */
    public static function patch(?\InfobipSDK\Requests\AllOfUpdateCompaniesBody\CompaniesBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Companies\Batch\PatchStatus200\BatchPatchStatus200Response|\InfobipSDK\Responses\People\Resource2\Companies\Batch\PatchStatus207\BatchPatchStatus207Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies\Batch::class)->patch();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies\Batch::class)->patch($payload);
    }

    /** POST /people/2/companies/batch [operationId: create-companies] */
    /**
     * Batch companies create
     *
     * Use this method to create multiple companies.<br>**NOTE** Array size of the batch create request is limited to `1000` companies.
     */
    public static function post(?\InfobipSDK\Requests\AllOfCreateCompaniesBody\CompaniesBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Companies\Batch\PostStatus200\BatchPostStatus200Response|\InfobipSDK\Responses\People\Resource2\Companies\Batch\PostStatus207\BatchPostStatus207Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies\Batch::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies\Batch::class)->post($payload);
    }

}
