<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * EventDefinitionCreateResource
 */
final class EventDefinitionCreateResource extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'definitionId' => [
            'pattern' => '^[a-zA-Z0-9]{0,36}$',
        ],
        'fields' => [
            'maxItems' => 120,
            'uniqueItems' => true,
        ],
        'templateId' => [
            'pattern' => '^[a-zA-Z0-9]{0,36}$',
        ],
    ];

    /**
     * Event definition identifier. Must contain only alphanumeric characters `(a–z, A–Z, 0–9)`. Maximum length: `36` characters. Must be `null` if `templateId` is provided. Cannot have a value from the list of predefined (standard) definitions.
     */
    public ?string $definitionId {
        set {
            $this->assigning('definitionId', $value);
            $this->definitionId = $value;
        }
    }
    /**
     * Event definition description. Maximum length: `2000` characters if `templateId` is `null`. Must be `null` if `templateId` is provided.
     */
    public ?string $description;
    /**
     * Event definition fields. The total number of fields cannot exceed `120`. Field names must be unique (case-insensitive). The number of fields of type `List` cannot exceed `1`.
     */
    public ?\InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionCreateResource\FieldsCollection $fields {
        set {
            $this->assigning('fields', $value);
            $this->fields = $value;
        }
    }
    /**
     * Template identifier. Used when the client wants to create a definition from a template. Must contain only alphanumeric characters `(a–z, A–Z, 0–9)`. Maximum length: `36` characters. Must be `null` if `definitionId` is provided.
     */
    public ?string $templateId {
        set {
            $this->assigning('templateId', $value);
            $this->templateId = $value;
        }
    }
    /**
     * Event definition title. Required if `templateId` is `null`. Maximum length: `100` characters. Must be `null` if `templateId` is provided.
     */
    public ?string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'definitionId' => $value === null || is_string($value) ? $this->definitionId = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'fields' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->fields = $value === null ? null : new \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionCreateResource\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventFieldResource::class)) : parent::assignMember($name, $value),
            'templateId' => $value === null || is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            'title' => $value === null || is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
