<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * AuthenticationData
 *
 * Authentication data for Live Chat end users.
 */
final class AuthenticationData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'authenticationType',
    ];

    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\AuthenticationType $authenticationType;
    /**
     * Person ID in People database.
     * Example: 3325
     * Format: int64
     */
    public int $personId;
    /**
     * Value used for authentication (email, phone, external ID).
     * Example: "customer&#64;example.com"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authenticationType' => is_string($value) ? $this->authenticationType = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\AuthenticationType::from($value) : parent::assignMember($name, $value),
            'personId' => is_int($value) ? $this->personId = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
