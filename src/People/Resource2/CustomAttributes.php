<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2;

final class CustomAttributes extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /people/2/customAttributes [operationId: get-a-list-of-custom-attributes] */
    /**
     * Get a list of custom attributes
     *
     * Get a list of custom attributes using this method.
     */
    public static function get(?\InfobipSDK\GetParams\People\Resource2\CustomAttributes $params = null): \InfobipSDK\Responses\People\Resource2\CustomAttributes\Get\Resource2CustomAttributesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\CustomAttributes::class)->get($params);
    }

    /** POST /people/2/customAttributes [operationId: create-a-custom-attribute] */
    /**
     * Create a custom attribute
     *
     * Create a new custom attribute by using this method.
     */
    public static function post(?\InfobipSDK\Requests\AttributeBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\CustomAttributes\Post\Resource2CustomAttributesResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\CustomAttributes::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\CustomAttributes::class)->post($payload);
    }

    /** DELETE /people/2/customAttributes/{name} [operationId: delete-a-custom-attribute] */
    /**
     * Delete a custom attribute
     *
     * Use this method to delete the custom attribute
     */
    public static function deleteByName(string $name): string
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\CustomAttributes::class)->deleteByName($name);
    }

    /** GET /people/2/customAttributes/{name} [operationId: get-a-single-custom-attribute] */
    /**
     * Get a single custom attribute
     *
     * Get a single custom attribute using this method.
     */
    public static function getByName(string $name): \InfobipSDK\Responses\People\Resource2\CustomAttributes\ByName\Get\CustomAttributesByNameResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\CustomAttributes::class)->getByName($name);
    }

}
