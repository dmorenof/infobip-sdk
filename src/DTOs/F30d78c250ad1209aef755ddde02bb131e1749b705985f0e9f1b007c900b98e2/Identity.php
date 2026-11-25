<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * Identity
 */
final class Identity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'acknowledged',
        'createdAt',
        'hash',
    ];

    protected const array VALIDATION = [
        'hash' => [
            'minLength' => 1,
        ],
    ];

    public bool $acknowledged;
    /**
     * Format: date-time
     */
    public string $createdAt;
    public string $hash {
        set {
            $this->assigning('hash', $value);
            $this->hash = $value;
        }
    }

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
