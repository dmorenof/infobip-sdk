<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * ListItemResource
 */
final class ListItemResource extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fields',
        'type',
    ];

    protected const array VALIDATION = [
        'fields' => [
            'minItems' => 1,
            'maxItems' => 128,
            'uniqueItems' => true,
        ],
    ];

    /**
     * Fields within the List item object. Must not be empty, must contain no more than `128` items, field names must be unique (case-insensitive).
     */
    public \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventFieldResource\AllOfSchema\FieldsCollection $fields {
        set {
            $this->assigning('fields', $value);
            $this->fields = $value;
        }
    }
    /**
     * Schema type for List items. Must be `Object`.
     */
    public \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\ListItemResource\TypeDTO $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventFieldResource\AllOfSchema\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\ListItemFieldResource::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
