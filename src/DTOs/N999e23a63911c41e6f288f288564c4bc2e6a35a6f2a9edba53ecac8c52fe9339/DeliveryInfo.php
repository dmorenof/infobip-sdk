<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N999e23a63911c41e6f288f288564c4bc2e6a35a6f2a9edba53ecac8c52fe9339;

/**
 * DeliveryInfo
 *
 * Delivery information about the bulk sending of messages.
 */
final class DeliveryInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'rate',
    'time',
];

    /**
     * Delivery rate. Ratio between total delivered and total sent messages in a specific bulk sending process.
     */
    public float $rate;
    /**
     * Delivery time.
     * Format: int64
     */
    public int $time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'rate' => is_float($value) ? $this->rate = $value : parent::assignMember($name, $value),
            'time' => is_int($value) ? $this->time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
