<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2;

final class Persons extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/persons [operationId: delete-a-person] */
    /**
     * Delete a person
     *
     * Use this method to delete a person.
     */
    public static function delete(?\InfobipSDK\DeleteParams\People\Resource2\Persons $params = null): void
    {
        self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons::class)->delete($params);
    }

    /** GET /people/2/persons [operationId: get-a-single-person-or-a-list-of-people] */
    /**
     * Get a single person or a list of people
     *
     * Use this method with a unique person identifier to get a single person. Skip the identifier to return all people or use the `filter` parameter to return a list of people matching your specific conditions.
     */
    public static function get(?\InfobipSDK\GetParams\People\Resource2\Persons $params = null): \InfobipSDK\Responses\People\Resource2\Persons\Get\Resource2PersonsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons::class)->get($params);
    }

    /** PATCH /people/2/persons [operationId: partial-person-update] */
    /**
     * Partial person update
     *
     * Use this method to update a person profile with the data passed in the request body as follows:<br>1. New values for standard and custom profile attributes replace existing values on the profile. If no value is passed in the request, the attribute keeps its value.<br>2. Tags in the request are appended to the profile tag list.<br>3. New contact information (email addresses and phone numbers) in the request is appended to the contact list of the profile.
     */
    public static function patch(?\InfobipSDK\PatchParams\People\Resource2\Persons $params = null): \InfobipSDK\Responses\People\Resource2\Persons\Patch\Resource2PersonsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons::class)->patch($params);
    }

    /** POST /people/2/persons [operationId: create-a-new-person] */
    /**
     * Create a new person
     *
     * Use this method to create a new person.
     */
    public static function post(?\InfobipSDK\Requests\PersonBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Persons\Post\Resource2PersonsResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons::class)->post($payload);
    }

    /** PUT /people/2/persons [operationId: update-a-person] */
    /**
     * Update a person
     *
     * Use this method to overwrite a person profile with the data passed in the request body as follows:<br>1. New values for standard and custom profile attributes replace existing values on the profile. If no value is passed in the request, the attribute is set to empty.<br>2. Tags in the request replace the existing profile tags. If no tags are passed, the existing profile tag list is cleared.<br>3. New contact information (email addresses and phone numbers) in the request replaces the current information on the profile.
     */
    public static function put(?\InfobipSDK\PutParams\People\Resource2\Persons $params = null): \InfobipSDK\Responses\People\Resource2\Persons\Put\Resource2PersonsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons::class)->put($params);
    }

}
