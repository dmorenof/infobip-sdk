<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * TrustedNumberCheckResponse
 *
 * Result of a trusted phone number check.
 * Example: {"trusted":true}
 */
final class TrustedNumberCheckResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'trusted',
    ];

    /**
     * True if the phone number is trusted for this blocking configuration.
     */
    public bool $trusted;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'trusted' => is_bool($value) ? $this->trusted = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
