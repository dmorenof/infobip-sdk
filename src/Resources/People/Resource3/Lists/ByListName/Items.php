<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource3\Lists\ByListName;

final class Items extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/people/3/lists/{listName}/items',
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
        ],
        'querySerialization' => [
            'itemIds' => 'multi',
        ],
    ];

    /**
     * Delete items
     *
     * Deletes items in a list attribute and returns all items of the updated list.
     */
    public function delete(string $listName, \InfobipSDK\DeleteParams\People\Resource3\Lists\ByListName\Items $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['listName' => $listName], parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/people/3/lists/{listName}/items',
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
        ],
        'querySerialization' => [
            'itemIds' => 'multi',
        ],
    ];

    /**
     * Get items
     *
     * Get a single item or a list of items of a list attribute.
     */
    public function get(string $listName, \InfobipSDK\GetParams\People\Resource3\Lists\ByListName\Items $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['listName' => $listName], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/people/3/lists/{listName}/items',
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
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Collections\\AppendListItemsBodyArray\\ItemsBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Append items
     *
     * Adds new items to a list attribute and returns all items of the updated list.
     */
    public function post(string $listName, \InfobipSDK\PostParams\People\Resource3\Lists\ByListName\Items $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['listName' => $listName], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_ITEM_ID = [
        'method' => 'PATCH',
        'path' => '/people/3/lists/{listName}/items/{itemId}',
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
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\People\\Resource3\\Lists\\ByListName\\Items\\ByItemId\\Patch',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update an item
     *
     * Updates the fields of a list item that are passed in the request.
     * Missing fields will keep their values.
     * Returns all items of the updated list attribute.
     */
    public function patchByItemId(\InfobipSDK\PathParams\People\Resource3\Lists\ByListName\Items\ByItemId $identifier, \InfobipSDK\PatchParams\People\Resource3\Lists\ByListName\Items\ByItemId $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_ITEM_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array PUT_BY_ITEM_ID = [
        'method' => 'PUT',
        'path' => '/people/3/lists/{listName}/items/{itemId}',
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
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\People\\Resource3\\Lists\\ByListName\\Items\\ByItemId\\Put',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Replace an item
     *
     * Replaces an item of a list attribute and returns all items of the updated list.
     */
    public function putByItemId(\InfobipSDK\PathParams\People\Resource3\Lists\ByListName\Items\ByItemId $identifier, \InfobipSDK\PutParams\People\Resource3\Lists\ByListName\Items\ByItemId $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_ITEM_ID), path: $identifier, parameters: $params);
        return $result;
    }

}
