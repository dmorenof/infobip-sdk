<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * FactApiResponse
 *
 * A single fact definition.
 */
final class FactApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'description',
    'id',
    'name',
    'updatedAt',
    'valueType',
];

    /**
     * Timestamp (UTC, ISO-8601) when the fact definition was created.
     * Example: "2026-09-15T10:12:33.421Z"
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Human-readable description of the fact.
     * Example: "Customer's preferred communication language."
     */
    public string $description;
    /**
     * Surrogate identifier of this fact definition.
     * Example: "0197a1c8-4a2b-7ef1-8b7c-3f0d2c9d3a11"
     * Format: uuid
     */
    public string $id;
    /**
     * Fact name, unique within the account.
     * Example: "preferred_language"
     */
    public string $name;
    /**
     * Timestamp (UTC, ISO-8601) when the fact definition was last updated.
     * Example: "2026-09-15T10:12:33.421Z"
     * Format: date-time
     */
    public string $updatedAt;
    public \InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ApiFactValueType $valueType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'valueType' => is_string($value) ? $this->valueType = \InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ApiFactValueType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
