<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\CustomAttributes\ByName;

final class Append extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /people/2/customAttributes/{name}/append [operationId: append-item-to-custom-attribute] */
    /**
     * Append item to custom attribute
     *
     * Custom attributes with `LIST_OF_OBJECTS` type contain an array of items as a value. Using this API method, you can add a new item to the specified list type custom attribute of a specific person. The item you want to add should match the defined list schema.
     *
     * @return list<mixed>
     */
    public static function post(string $name, ?\InfobipSDK\PostParams\People\Resource2\CustomAttributes\ByName\Append $params = null): array
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\CustomAttributes\ByName\Append::class)->post($name, $params);
    }

}
