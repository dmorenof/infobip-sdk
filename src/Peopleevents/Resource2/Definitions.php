<?php

declare(strict_types=1);

namespace InfobipSDK\Peopleevents\Resource2;

final class Definitions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /peopleevents/2/definitions [operationId: list-event-definitions] */
    /**
     * List Event Definitions
     *
     * Retrieve a paginated list of event definitions, including standard, custom, and template definitions. Use query parameters to filter by category (`External`, `Person`, `Channel`, `Product`, `Template`) or search by definition ID, title, or description. Results can be ordered by definition ID or title.
     */
    public static function get(?\InfobipSDK\GetParams\Peopleevents\Resource2\Definitions $params = null): \InfobipSDK\Collections\Peopleevents\Resource2\Definitions\Get\Resource2DefinitionsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource2\Definitions::class)->get($params);
    }

    /** POST /peopleevents/2/definitions [operationId: create-event-definition] */
    /**
     * Create Event Definition
     *
     * Create a new custom event definition either from scratch or from a template. When creating from scratch, specify a unique definition ID (alphanumeric only, max `36` characters), title, description, and up to `120` fields. When using a template, only provide the template ID and optional additional fields—the title, description, and default fields are inherited from the template. Supports various field types including `String`, `Boolean`, `DateTime`, `Numeric`, `Decimal`, and `List` (with nested object schema).
     */
    public static function post(\InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionCreateResource $payload): \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource2\Definitions::class)->post($payload);
    }

    /** GET /peopleevents/2/definitions/{definitionId} [operationId: get-event-definition] */
    /**
     * Get Event Definition
     *
     * Retrieve complete details of a specific event definition, including its fields, data types, category, and whether it's a standard or custom definition. Useful for understanding the schema before sending events or for validating your event data structure.
     */
    public static function getByDefinitionId(string $definitionId): \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource2\Definitions::class)->getByDefinitionId($definitionId);
    }

    /** POST /peopleevents/2/definitions/{definitionId} [operationId: update-event-definition] */
    /**
     * Update Event Definition
     *
     * Update an existing custom event definition by adding new fields or modifying the title and description. Only supports additive changes—you can add new fields but **cannot** remove existing fields or change their types. This ensures backward compatibility with historical events. Standard (internal) definitions and template-inherited properties cannot be modified.
     */
    public static function postByDefinitionId(string $definitionId, \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionUpdateResource $payload): \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource2\Definitions::class)->postByDefinitionId($definitionId, $payload);
    }
}
