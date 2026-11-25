<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * PersonSummaryFactApiResponse
 *
 * A fact compiled across a person's interactions, with its most recently observed value.
 */
final class PersonSummaryFactApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'value',
];

    /**
     * Fact name, unique within the account.
     * Example: "preferred_language"
     */
    public string $name;
    /**
     * Most recently observed fact value.
     * Example: "English"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
