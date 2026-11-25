<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * EventDefinitionResource
 */
final class EventDefinitionResource extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fields' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * Event definition category.
     */
    public ?\InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource\CategoryDTO $category;
    /**
     * Event definition identifier.
     */
    public ?string $definitionId;
    /**
     * Event definition description.
     */
    public ?string $description;
    /**
     * Event definition fields describing the structure and data types of the event properties.
     */
    public ?\InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionCreateResource\FieldsCollection $fields {
        set {
            $this->assigning('fields', $value);
            $this->fields = $value;
        }
    }
    /**
     * Indicates whether this is a standard (internal) event definition provided by the system, or a custom (external) definition created by the user.
     */
    public bool $isInternalDefinition;
    /**
     * Event definition subcategory, providing more granular classification within the main category.
     */
    public ?\InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionResource\SubcategoryDTO $subcategory;
    /**
     * Event definition title.
     */
    public ?string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'definitionId' => $value === null || is_string($value) ? $this->definitionId = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'fields' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->fields = $value === null ? null : new \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventDefinitionCreateResource\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventFieldResource::class)) : parent::assignMember($name, $value),
            'isInternalDefinition' => is_bool($value) ? $this->isInternalDefinition = $value : parent::assignMember($name, $value),
            'title' => $value === null || is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
