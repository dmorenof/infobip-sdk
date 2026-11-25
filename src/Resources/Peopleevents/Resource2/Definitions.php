<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Peopleevents\Resource2;

final class Definitions extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/peopleevents/2/definitions',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Collections\\Peopleevents\\Resource2\\Definitions\\Get\\Resource2DefinitionsCollection',
        'querySerialization' => [
            'category' => 'multi',
        ],
    ];

    /**
     * List Event Definitions
     *
     * Retrieve a paginated list of event definitions, including standard, custom, and template definitions. Use query parameters to filter by category (`External`, `Person`, `Channel`, `Product`, `Template`) or search by definition ID, title, or description. Results can be ordered by definition ID or title.
     */
    public function get(?\InfobipSDK\GetParams\Peopleevents\Resource2\Definitions $params = null): \InfobipSDK\Collections\Peopleevents\Resource2\Definitions\Get\Resource2DefinitionsCollection
    {
        /** @var \InfobipSDK\Collections\Peopleevents\Resource2\Definitions\Get\Resource2DefinitionsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/peopleevents/2/definitions',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            409 => null,
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
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
            409 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\\EventDefinitionResource',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\\EventDefinitionCreateResource',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Event Definition
     *
     * Create a new custom event definition either from scratch or from a template. When creating from scratch, specify a unique definition ID (alphanumeric only, max `36` characters), title, description, and up to `120` fields. When using a template, only provide the template ID and optional additional fields—the title, description, and default fields are inherited from the template. Supports various field types including `String`, `Boolean`, `DateTime`, `Numeric`, `Decimal`, and `List` (with nested object schema).
     */
    public function post(\InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionCreateResource $payload): \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource
    {
        /** @var \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_DEFINITION_ID = [
        'method' => 'GET',
        'path' => '/peopleevents/2/definitions/{definitionId}',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\\EventDefinitionResource',
    ];

    /**
     * Get Event Definition
     *
     * Retrieve complete details of a specific event definition, including its fields, data types, category, and whether it's a standard or custom definition. Useful for understanding the schema before sending events or for validating your event data structure.
     */
    public function getByDefinitionId(string $definitionId): \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource
    {
        /** @var \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DEFINITION_ID), path: ['definitionId' => $definitionId]);
        return $result;
    }

    private const array POST_BY_DEFINITION_ID = [
        'method' => 'POST',
        'path' => '/peopleevents/2/definitions/{definitionId}',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
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
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\\EventDefinitionResource',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\\EventDefinitionUpdateResource',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Event Definition
     *
     * Update an existing custom event definition by adding new fields or modifying the title and description. Only supports additive changes—you can add new fields but **cannot** remove existing fields or change their types. This ensures backward compatibility with historical events. Standard (internal) definitions and template-inherited properties cannot be modified.
     */
    public function postByDefinitionId(string $definitionId, \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionUpdateResource $payload): \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource
    {
        /** @var \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource $result */
        $result = $this->executeBody(self::operation(self::POST_BY_DEFINITION_ID), $payload, path: ['definitionId' => $definitionId]);
        return $result;
    }

}
