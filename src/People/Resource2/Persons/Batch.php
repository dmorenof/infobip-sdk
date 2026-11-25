<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\Persons;

final class Batch extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/persons/batch [operationId: batch-people-delete] */
    /**
     * Batch people delete
     *
     * Use this method to delete multiple persons.<br>**NOTE** Array size of the batch delete request is limited to `1000` persons.
     */
    public static function delete(?\InfobipSDK\Requests\PeopleBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Persons\Batch\DeleteStatus200\BatchDeleteStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\DeleteStatus207\BatchDeleteStatus207Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\Batch::class)->delete();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\Batch::class)->delete($payload);
    }

    /** PATCH /people/2/persons/batch [operationId: batch-people-update] */
    /**
     * Batch people update
     *
     * Use this method to update multiple person profiles with the data passed in the request body as follows:<br>1. New values for standard and custom profile attributes replace existing values on the profile. If no value is passed in the request, the attribute keeps its value.<br>2. Tags in the request are appended to the profile tag list.<br>3. New contact information (email addresses and phone numbers) in the request is appended to the contact list of the profile.<br>**NOTE** Array size of the batch update request is limited to `1000` persons.
     */
    public static function patch(?\InfobipSDK\Requests\AllOfBatchPeopleUpdateBody\UpdateBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Persons\Batch\PatchStatus200\BatchPatchStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\PatchStatus207\BatchPatchStatus207Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\Batch::class)->patch();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\Batch::class)->patch($payload);
    }

    /** POST /people/2/persons/batch [operationId: batch-people-create] */
    /**
     * Batch people create
     *
     * Use this method to create multiple persons.<br>**NOTE** Array size of the batch create request is limited to `1000` persons.
     */
    public static function post(?\InfobipSDK\Requests\CreateBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Persons\Batch\PostStatus200\BatchPostStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\PostStatus207\BatchPostStatus207Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\Batch::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\Batch::class)->post($payload);
    }
}
