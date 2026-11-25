<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * EventFieldResource
 */
final class EventFieldResource extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'type',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
        'maxLength' => 128,
        'pattern' => '^[a-z_][a-zA-Z0-9_]*$',
    ],
];

    /**
     * Field name. Must not exceed `128` characters. Must start with a lowercase letter `(a–z)` and can contain alphanumeric characters `(A–Z, a–z, 0–9)` and underscores `(_)`.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Schema definition for List type fields. Must be `null` when type is not `List`. Must be provided and valid when type equals `List`.
     */
    public \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventFieldResource\SchemaDTO $schema;
    /**
     * Field data type.
     */
    public \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventFieldResource\TypeDTO $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
