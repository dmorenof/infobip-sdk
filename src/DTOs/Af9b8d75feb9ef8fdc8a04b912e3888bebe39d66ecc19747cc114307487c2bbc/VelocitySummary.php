<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

/**
 * VelocitySummary
 *
 * Detailed information about velocity.
 */
final class VelocitySummary extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'count' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Count of messages received
     * Format: int32
     */
    public ?int $count {
        set {
            $this->assigning('count', $value);
            $this->count = $value;
        }
    }
    public \InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\RiskLevel $riskLevel;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => $value === null || is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'riskLevel' => is_string($value) ? $this->riskLevel = \InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\RiskLevel::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
