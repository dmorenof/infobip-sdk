<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff;

/**
 * ValidationRequest
 *
 * Validation request
 */
final class ValidationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'to',
];

    /**
     * The email address to be validated.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
