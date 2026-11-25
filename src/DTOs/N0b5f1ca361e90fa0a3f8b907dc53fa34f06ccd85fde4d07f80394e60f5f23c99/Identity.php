<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Identity
 *
 * Information about the identity of the end user.
 */
final class Identity extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'acknowledged',
    'createdAt',
    'hash',
];

    /**
     * Indicates whether identity is acknowledged.
     */
    public bool $acknowledged;
    /**
     * Indicates when the identity was changed. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Identifier for the latest user_identity_changed system notification
     */
    public string $hash;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acknowledged' => is_bool($value) ? $this->acknowledged = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'hash' => is_string($value) ? $this->hash = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
