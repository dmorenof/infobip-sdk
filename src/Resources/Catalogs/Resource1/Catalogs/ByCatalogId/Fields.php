<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId;

final class Fields extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/catalogs/1/catalogs/{catalogId}/fields',
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
        'responseType' => '\\InfobipSDK\\Collections\\Catalogs\\Resource1\\Catalogs\\ByCatalogId\\Fields\\Get\\ByCatalogIdFieldsCollection',
    ];

    /**
     * Get fields
     *
     * Use this method to get a list of fields for a specific catalog.
     */
    public function get(int $catalogId): \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\Get\ByCatalogIdFieldsCollection
    {
        /** @var \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\Get\ByCatalogIdFieldsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['catalogId' => $catalogId]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/catalogs/1/catalogs/{catalogId}/fields',
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
        'responseType' => '\\InfobipSDK\\Collections\\Catalogs\\Resource1\\Catalogs\\ByCatalogId\\Fields\\Get\\ByCatalogIdFieldsCollection',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Collections\\FieldsBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create fields
     *
     * Use this method to add catalog fields to a specific catalog.<br><br>
     * <strong>NOTE</strong><br><ul><li>Maximum of <code>100</code> catalog fields are allowed.</li></ul>
     */
    public function post(int $catalogId, \InfobipSDK\Collections\FieldsBodyCollection $payload): \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\Get\ByCatalogIdFieldsCollection
    {
        /** @var \InfobipSDK\Collections\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\Get\ByCatalogIdFieldsCollection $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['catalogId' => $catalogId]);
        return $result;
    }

    private const array DELETE_BY_FIELD_ID = [
        'method' => 'DELETE',
        'path' => '/catalogs/1/catalogs/{catalogId}/fields/{fieldId}',
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
     * Delete field
     *
     * Use this method to delete a field.
     */
    public function deleteByFieldId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\ByFieldId $identifier): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_FIELD_ID), path: $identifier);
        return $result;
    }

    private const array GET_BY_FIELD_ID = [
        'method' => 'GET',
        'path' => '/catalogs/1/catalogs/{catalogId}/fields/{fieldId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\CatalogFieldDto',
    ];

    /**
     * Get field
     *
     * Use this method to get a specific catalog field.
     */
    public function getByFieldId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\ByFieldId $identifier): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogFieldDto
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogFieldDto $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_FIELD_ID), path: $identifier);
        return $result;
    }

    private const array PATCH_BY_FIELD_ID = [
        'method' => 'PATCH',
        'path' => '/catalogs/1/catalogs/{catalogId}/fields/{fieldId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\CatalogFieldDto',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\UpdateCatalogFieldDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update field
     *
     * Use this method to update a catalog field.
     */
    public function patchByFieldId(\InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Fields\ByFieldId $identifier, \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\UpdateCatalogFieldDto $payload): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogFieldDto
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogFieldDto $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_FIELD_ID), $payload, path: $identifier);
        return $result;
    }

}
