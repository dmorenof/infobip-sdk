<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb;

/**
 * CountResponse
 */
final class CountResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'count',
];

    /**
     * Number of affected items.
     * Example: 100
     * Format: int64
     */
    public int $count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
