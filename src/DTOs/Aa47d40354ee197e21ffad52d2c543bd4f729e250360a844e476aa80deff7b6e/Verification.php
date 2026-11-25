<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e;

/**
 * Verification
 */
final class Verification extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'msisdn',
        'sentAt',
        'verified',
        'verifiedAt',
    ];

    /**
     * Phone number (MSISDN) for which verification status is checked.
     */
    public string $msisdn;
    /**
     * Sent UNIX timestamp (in millis), if the phone number (MSISDN) is verified.
     * Format: int64
     */
    public int $sentAt;
    /**
     * Indicates if the phone number (MSISDN) is already verified for 2FA application with given ID.
     */
    public bool $verified;
    /**
     * Verification UNIX timestamp (in millis), if the phone number (MSISDN) is verified.
     * Format: int64
     */
    public int $verifiedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'msisdn' => is_string($value) ? $this->msisdn = $value : parent::assignMember($name, $value),
            'sentAt' => is_int($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'verified' => is_bool($value) ? $this->verified = $value : parent::assignMember($name, $value),
            'verifiedAt' => is_int($value) ? $this->verifiedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
