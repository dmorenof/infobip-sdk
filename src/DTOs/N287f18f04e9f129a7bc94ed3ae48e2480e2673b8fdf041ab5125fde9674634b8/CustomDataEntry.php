<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CustomDataEntry
 *
 * WhatsApp custom data. To meet the criteria, all of the provided custom data pairs must match.
 */
final class CustomDataEntry extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key',
    ];

    protected const array VALIDATION = [
        'key' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Custom data key. Example: `key1`.
     */
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    /**
     * Custom data value or regular expression pattern representing the value. Examples: `value1`, `value(.+)`.
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
