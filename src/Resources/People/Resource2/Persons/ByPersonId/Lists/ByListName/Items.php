<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\Persons\ByPersonId\Lists\ByListName;

final class Items extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/people/2/persons/{personId}/lists/{listName}/items',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
        'validation' => [
            'listName' => [
                'minLength' => 1,
            ],
            'personId' => [
                'minimum' => 1,
            ],
        ],
        'querySerialization' => [
            'itemIds' => 'multi',
        ],
    ];

    /**
     * Delete items
     *
     * Deletes items with given identifiers and returns rest items of the updated list.
     *
     * @deprecated
     */
    public function delete(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $identifier, \InfobipSDK\DeleteParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: $identifier, parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/people/2/persons/{personId}/lists/{listName}/items',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
        'validation' => [
            'listName' => [
                'minLength' => 1,
            ],
            'personId' => [
                'minimum' => 1,
            ],
        ],
        'querySerialization' => [
            'itemIds' => 'multi',
        ],
    ];

    /**
     * Get items
     *
     * Returns a single item or set of items of a list.
     *
     * @deprecated
     */
    public function get(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $identifier, \InfobipSDK\GetParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/people/2/persons/{personId}/lists/{listName}/items',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
        'validation' => [
            'listName' => [
                'minLength' => 1,
            ],
            'personId' => [
                'minimum' => 1,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Collections\\DeprecatedAppendListItemsBodyArray\\ItemsBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Append items
     *
     * Adds new items to a list and returns all items of the updated list.
     *
     * @deprecated
     */
    public function post(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items $identifier, \InfobipSDK\Collections\DeprecatedAppendListItemsBodyArray\ItemsBodyCollection $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }

    private const array PATCH_BY_ITEM_ID = [
        'method' => 'PATCH',
        'path' => '/people/2/persons/{personId}/lists/{listName}/items/{itemId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
        'validation' => [
            'listName' => [
                'minLength' => 1,
            ],
            'personId' => [
                'minimum' => 1,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\People\\Resource2\\Persons\\ByPersonId\\Lists\\ByListName\\Items\\ByItemId\\Patch',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update an item
     *
     * Updates only fields of the item that are presented in a given data.<br>Missing fields will be preserved.<br>Returns all items of the updated list.
     *
     * @deprecated
     */
    public function patchByItemId(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items\ByItemId $identifier, \InfobipSDK\Requests\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items\ByItemId\Patch $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_ITEM_ID), $payload, path: $identifier);
        return $result;
    }

    private const array PUT_BY_ITEM_ID = [
        'method' => 'PUT',
        'path' => '/people/2/persons/{personId}/lists/{listName}/items/{itemId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
        'validation' => [
            'listName' => [
                'minLength' => 1,
            ],
            'personId' => [
                'minimum' => 1,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\People\\Resource2\\Persons\\ByPersonId\\Lists\\ByListName\\Items\\ByItemId\\Put',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Replace an item
     *
     * Replaces an item of a list and returns all items of the updated list.
     *
     * @deprecated
     */
    public function putByItemId(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items\ByItemId $identifier, \InfobipSDK\Requests\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items\ByItemId\Put $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_ITEM_ID), $payload, path: $identifier);
        return $result;
    }
}
