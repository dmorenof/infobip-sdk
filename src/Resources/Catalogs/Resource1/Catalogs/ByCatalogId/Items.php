<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId;

final class Items extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/catalogs/1/catalogs/{catalogId}/items',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\CountResponse',
    ];

    /**
     * Delete items
     *
     * Use this method to delete a list of filtered items.
     */
    public function delete(int $catalogId, \InfobipSDK\DeleteParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items $params): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['catalogId' => $catalogId], parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/catalogs/1/catalogs/{catalogId}/items',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\PageResponseDto',
    ];

    /**
     * Get items
     *
     * Use this method  to get a list of items from a catalog with pagination. Query parameters are optional and can be used to narrow list results.
     */
    public function get(int $catalogId, ?\InfobipSDK\GetParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items $params = null): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\PageResponseDto
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\PageResponseDto $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['catalogId' => $catalogId], parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/catalogs/1/catalogs/{catalogId}/items',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\CountResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Collections\\ItemsBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update items
     *
     * Use this method to update list of filtered items.
     */
    public function patch(int $catalogId, \InfobipSDK\PatchParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items $params): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse $result */
        $result = $this->executeArguments(self::operation(self::PATCH), path: ['catalogId' => $catalogId], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/catalogs/1/catalogs/{catalogId}/items',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
        'responseType' => '\\InfobipSDK\\Collections\\Catalogs\\Resource1\\Catalogs\\ByCatalogId\\Items\\Post\\ByCatalogIdItemsCollection',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Collections\\AddItemsBodyArray\\ItemsBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add items
     *
     * Use this method to add items to a specific catalog.<br><br>
     * <strong>NOTE</strong><br>Response details:<ul><li>This endpoint only returns successful results</li><li>Other results are ignored</li><li>Errors are not returned</li>
     * </ul><br><strong>NOTE</strong><br><ul><li>Maximum of <code>1000</code> item field values are allowed.</li></ul>
     */
    public function post(int $catalogId, \InfobipSDK\Collections\AddItemsBodyArray\ItemsBodyCollection $payload): \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Items\Post\ByCatalogIdItemsCollection
    {
        /** @var \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Items\Post\ByCatalogIdItemsCollection $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['catalogId' => $catalogId]);
        return $result;
    }

    private const array DELETE_BY_ITEM_ID = [
        'method' => 'DELETE',
        'path' => '/catalogs/1/catalogs/{catalogId}/items/{itemId}',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\CountResponse',
    ];

    /**
     * Delete item
     *
     * Use this method to delete a specific item.
     */
    public function deleteByItemId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items\ByItemId $identifier): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ITEM_ID), path: $identifier);
        return $result;
    }

    private const array GET_BY_ITEM_ID = [
        'method' => 'GET',
        'path' => '/catalogs/1/catalogs/{catalogId}/items/{itemId}',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\CatalogItemDto',
    ];

    /**
     * Get item
     *
     * Use this method to get a specific item from a catalog.
     */
    public function getByItemId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items\ByItemId $identifier): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogItemDto
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogItemDto $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ITEM_ID), path: $identifier);
        return $result;
    }

    private const array PATCH_BY_ITEM_ID = [
        'method' => 'PATCH',
        'path' => '/catalogs/1/catalogs/{catalogId}/items/{itemId}',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
        'responseType' => '\\InfobipSDK\\Collections\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\CatalogItemDto\\ValuesCollection',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Collections\\ItemsBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update item
     *
     * Use this method to update the field values of items.
     */
    public function patchByItemId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items\ByItemId $identifier, \InfobipSDK\Collections\ItemsBodyCollection $payload): \InfobipSDK\Collections\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogItemDto\ValuesCollection
    {
        /** @var \InfobipSDK\Collections\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogItemDto\ValuesCollection $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_ITEM_ID), $payload, path: $identifier);
        return $result;
    }

}
