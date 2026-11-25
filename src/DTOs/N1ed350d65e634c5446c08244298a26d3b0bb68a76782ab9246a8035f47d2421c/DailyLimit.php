<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * DailyLimit
 *
 * A daily message count limit for a country.
 */
final class DailyLimit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'countryCode',
    'messageCountLimit',
];

    protected const array VALIDATION = [
    'messageCountLimit' => [
        'format' => 'int32',
    ],
];

    /**
     * ISO alpha-2 country code.
     * Example: "US"
     */
    public string $countryCode;
    /**
     * Daily message count limit for this country.
     * Example: 1000
     * Format: int32
     */
    public int $messageCountLimit {
        set {
            $this->assigning('messageCountLimit', $value);
            $this->messageCountLimit = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'messageCountLimit' => is_int($value) ? $this->messageCountLimit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
