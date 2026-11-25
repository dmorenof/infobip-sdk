<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * DeleteOverrideRequest
 *
 * Request to delete country-level blocking overrides.
 * Example: {"countryCodes":["US","GB"]}
 */
final class DeleteOverrideRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'countryCodes',
];

    protected const array VALIDATION = [
    'countryCodes' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
];

    /**
     * ISO alpha-2 country codes of the overrides to delete.
     */
    public \InfobipSDK\Collections\StringCollection $countryCodes {
        set {
            $this->assigning('countryCodes', $value);
            $this->countryCodes = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCodes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->countryCodes = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
