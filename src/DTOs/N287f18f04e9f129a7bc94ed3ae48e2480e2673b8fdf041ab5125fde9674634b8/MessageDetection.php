<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * MessageDetection
 *
 * Message detection configuration
 */
final class MessageDetection extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'timeout' => [
            'minimum' => 1,
            'maximum' => 60,
            'format' => 'int32',
        ],
    ];

    /**
     * Timeout in seconds
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
