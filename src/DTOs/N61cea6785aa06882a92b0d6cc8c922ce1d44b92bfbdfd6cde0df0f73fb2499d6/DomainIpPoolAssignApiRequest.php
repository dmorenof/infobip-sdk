<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6;

/**
 * DomainIpPoolAssignApiRequest
 */
final class DomainIpPoolAssignApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'poolId',
        'priority',
    ];

    protected const array VALIDATION = [
        'priority' => [
            'minimum' => 0,
            'maximum' => 49,
            'format' => 'int32',
        ],
    ];

    /**
     * IP pool identifier.
     */
    public string $poolId;
    /**
     * IP pool sending priority.
     * Format: int32
     */
    public int $priority {
        set {
            $this->assigning('priority', $value);
            $this->priority = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'poolId' => is_string($value) ? $this->poolId = $value : parent::assignMember($name, $value),
            'priority' => is_int($value) ? $this->priority = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
