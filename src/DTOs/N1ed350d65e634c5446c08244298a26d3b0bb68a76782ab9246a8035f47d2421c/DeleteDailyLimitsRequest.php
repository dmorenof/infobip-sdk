<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * DeleteDailyLimitsRequest
 *
 * Request to delete daily limits.
 * Example: {"countryCodes":["US","GB"]}
 */
final class DeleteDailyLimitsRequest extends \Dmorenof\SdkRuntime\DTO
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
     * List of ISO alpha-2 country codes to delete daily limits for.
     * Example: ["US","GB"]
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
