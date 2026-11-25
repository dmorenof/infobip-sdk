<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * TxtRecord
 *
 * List of verified domains for this SIP trunk.
 */
final class TxtRecord extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'createdAt',
    'updatedAt',
];

    /**
     * Date and time when domain verification was set up (Example: 2026-09-07T13:40:11.072+0000).
     * Format: date-time
     */
    public string $createdAt;
    /**
     * The verified domain name.
     * Example: "sip.example.com"
     */
    public string $fqdn;
    /**
     * Date and time when domain verification was last updated (Example: 2026-09-07T13:40:11.072+0000).
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * The verification code for this domain.
     * Example: "ms=ms12345678"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'fqdn' => is_string($value) ? $this->fqdn = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
