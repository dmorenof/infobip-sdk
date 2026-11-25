<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * ToDelete
 *
 * To.
 */
final class ToDelete extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'to',
    ];

    protected const array VALIDATION = [
        'to' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
    ];

    /**
     * Destination address that needs to be removed from blocklist. Addresses must be a number in international format (example: `41793026727`), a valid email address (example: `recipient&#64;example.com`) or valid email domain (example: `example.com`).
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
