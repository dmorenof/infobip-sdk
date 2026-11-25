<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07;

/**
 * IdentityInfo
 */
final class IdentityInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'acknowledged',
    'createdAt',
    'hash',
];

    /**
     * Identity acknowledge status
     * Example: true
     */
    public bool $acknowledged;
    /**
     * Identity event creation date
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Identity hash
     * Example: "eU2Fdi4EMUw="
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
