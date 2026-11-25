<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A381f86553e288851808282b347a5f8bd7ba34b9b6feb33f5946feb4892476be;

/**
 * StatisticsResponse
 */
final class StatisticsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'delivered',
        'delivery',
        'errors',
        'seen',
        'totalSent',
    ];

    /**
     * Total number of delivered messages.
     * Format: int64
     */
    public int $delivered;
    public \InfobipSDK\DTOs\N999e23a63911c41e6f288f288564c4bc2e6a35a6f2a9edba53ecac8c52fe9339\DeliveryInfo $delivery;
    public \InfobipSDK\DTOs\N999e23a63911c41e6f288f288564c4bc2e6a35a6f2a9edba53ecac8c52fe9339\ErrorInfo $errors;
    /**
     * Total number of seen messages.
     * Format: int64
     */
    public int $seen;
    /**
     * Total number of sent messages.
     * Format: int64
     */
    public int $totalSent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delivered' => is_int($value) ? $this->delivered = $value : parent::assignMember($name, $value),
            'delivery' => $value instanceof \stdClass ? $this->delivery = new \InfobipSDK\DTOs\N999e23a63911c41e6f288f288564c4bc2e6a35a6f2a9edba53ecac8c52fe9339\DeliveryInfo($value) : parent::assignMember($name, $value),
            'errors' => $value instanceof \stdClass ? $this->errors = new \InfobipSDK\DTOs\N999e23a63911c41e6f288f288564c4bc2e6a35a6f2a9edba53ecac8c52fe9339\ErrorInfo($value) : parent::assignMember($name, $value),
            'seen' => is_int($value) ? $this->seen = $value : parent::assignMember($name, $value),
            'totalSent' => is_int($value) ? $this->totalSent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
