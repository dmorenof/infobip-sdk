<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * EventDefinitionUpdateResource
 */
final class EventDefinitionUpdateResource extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'title',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 2000,
        ],
        'fields' => [
            'maxItems' => 120,
            'uniqueItems' => true,
        ],
        'title' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    /**
     * Event definition description. Maximum length: `2000` characters.<br>**Note**: The description cannot be changed for a template definition. If the client tries to update the value, it will be overwritten with the standard description from the template.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Event definition fields. The total number of fields cannot exceed `120`. Field names must be unique (case-insensitive). The number of fields of type `List` cannot exceed `1`. Only new fields can be added; existing fields **cannot** be removed or changed.
     */
    public ?\InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionCreateResource\FieldsCollection $fields {
        set {
            $this->assigning('fields', $value);
            $this->fields = $value;
        }
    }
    /**
     * Event definition title. Must not be empty. Maximum length: `100` characters.<br>**Note**: The title cannot be changed for a template definition. If the client tries to update the value, it will be overwritten with the standard title from the template.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'fields' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->fields = $value === null ? null : new \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionCreateResource\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventFieldResource::class)) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
