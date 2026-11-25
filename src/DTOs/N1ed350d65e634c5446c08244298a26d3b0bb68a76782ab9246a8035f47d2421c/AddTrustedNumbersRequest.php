<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * AddTrustedNumbersRequest
 *
 * Request to add trusted phone numbers to a blocking configuration.
 * Example: {"phoneNumbers":["385991234567","385991234568"]}
 */
final class AddTrustedNumbersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'phoneNumbers',
    ];

    protected const array VALIDATION = [
        'phoneNumbers' => [
            'minItems' => 1,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Phone numbers to add to the trusted phone numbers list. They should be in international format without leading plus sign.
     * Example: ["385991234567","385991234568"]
     */
    public \InfobipSDK\Collections\StringCollection $phoneNumbers {
        set {
            $this->assigning('phoneNumbers', $value);
            $this->phoneNumbers = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phoneNumbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->phoneNumbers = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
