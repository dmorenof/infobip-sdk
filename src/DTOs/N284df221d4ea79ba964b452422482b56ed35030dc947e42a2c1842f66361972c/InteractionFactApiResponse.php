<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * InteractionFactApiResponse
 *
 * A structured fact extracted from an interaction.
 */
final class InteractionFactApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'name',
    'value',
];

    /**
     * Timestamp (UTC, ISO-8601) when the fact was first persisted.
     * Example: "2026-09-15T10:12:33.421Z"
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Fact name or identifier.
     * Example: "preferred_language"
     */
    public string $name;
    /**
     * Fact value.
     * Example: "English"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
