<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\Persons\ByPersonId;

final class Lists extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/people/2/persons/{personId}/lists',
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
        'success' => [
            204,
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
        'querySerialization' => [
            'listNames' => 'multi',
        ],
    ];

    /**
     * Delete lists
     *
     * Deletes a single list instance or set of lists instanses for a person.
     *
     * @deprecated
     */
    public function delete(int $personId, \InfobipSDK\DeleteParams\People\Resource2\Persons\ByPersonId\Lists $params): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: ['personId' => $personId], parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/people/2/persons/{personId}/lists',
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
            'personId' => [
                'minimum' => 1,
            ],
        ],
        'querySerialization' => [
            'listNames' => 'multi',
        ],
    ];

    /**
     * Get lists
     *
     * Returns all items of a single list or sets of items of a set of lists.
     *
     * @deprecated
     */
    public function get(int $personId, \InfobipSDK\GetParams\People\Resource2\Persons\ByPersonId\Lists $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['personId' => $personId], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_LIST_NAME = [
        'method' => 'PATCH',
        'path' => '/people/2/persons/{personId}/lists/{listName}',
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
            'type' => '\\InfobipSDK\\Collections\\ListBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update a list
     *
     * Updates only items and fields for a given data set.<br>Missing items and fields will be preserved.<br>Returns all items of the updated list.
     *
     * @deprecated
     */
    public function patchByListName(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName $identifier, \InfobipSDK\Collections\ListBodyCollection $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_LIST_NAME), $payload, path: $identifier);
        return $result;
    }

    private const array PUT_BY_LIST_NAME = [
        'method' => 'PUT',
        'path' => '/people/2/persons/{personId}/lists/{listName}',
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
            'type' => '\\InfobipSDK\\Collections\\DeprecatedReplaceListBodyArray\\ListBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Replace a list
     *
     * Replaces a list and returns all items of the updated list.
     *
     * @deprecated
     */
    public function putByListName(\InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName $identifier, \InfobipSDK\Collections\DeprecatedReplaceListBodyArray\ListBodyCollection $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_LIST_NAME), $payload, path: $identifier);
        return $result;
    }
}
