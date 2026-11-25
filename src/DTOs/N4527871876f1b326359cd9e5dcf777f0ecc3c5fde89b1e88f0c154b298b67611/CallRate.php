<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CallRate
 *
 * Call rate defined in number of calls created per second, minute, hour, or day.
 */
final class CallRate extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxCalls' => [
        'format' => 'int32',
    ],
];

    /**
     * Defines the number of calls scheduled per specified time unit.
     * Format: int32
     */
    public int $maxCalls {
        set {
            $this->assigning('maxCalls', $value);
            $this->maxCalls = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TimeUnit $timeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxCalls' => is_int($value) ? $this->maxCalls = $value : parent::assignMember($name, $value),
            'timeUnit' => is_string($value) ? $this->timeUnit = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
