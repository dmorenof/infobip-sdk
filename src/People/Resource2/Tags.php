<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2;

final class Tags extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /people/2/tags [operationId: get-list-of-tags] */
    /**
     * Get list of tags
     *
     * Use this method to get a list of tags with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\People\Resource2\Tags $params = null): \InfobipSDK\Collections\People\Resource2\Tags\Get\Resource2TagsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags::class)->get($params);
    }

    /** POST /people/2/tags [operationId: create-a-new-tag] */
    /**
     * Create a new tag
     *
     * Use this method to create a new tag.
     */
    public static function post(?\InfobipSDK\Requests\TagBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Tags\Post\Resource2TagsResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags::class)->post($payload);
    }

    /** DELETE /people/2/tags/{name} [operationId: delete-a-tag] */
    /**
     * Delete a tag
     *
     * Use this method to delete the existing tag.
     */
    public static function deleteByName(string $name): string
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags::class)->deleteByName($name);
    }

    /** GET /people/2/tags/{name} [operationId: get-a-tag] */
    /**
     * Get a tag
     *
     * Use this method to get a single tag.
     */
    public static function getByName(string $name): \InfobipSDK\Responses\People\Resource2\Tags\ByName\Get\TagsByNameResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Tags::class)->getByName($name);
    }

}
