<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * FactPayload
 *
 * Structured facts extracted from the interaction.
 */
final class FactPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key',
        'value',
    ];

    /**
     * Fact name or identifier.
     * Example: "preferred_language"
     */
    public string $key;
    /**
     * Origin of the fact (e.g. `llm`, `user_input`).
     * Example: "llm"
     */
    public string $source;
    /**
     * Fact value.
     * Example: "English"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
