<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * TimeWindow
 *
 * Defines a scheduling object that allows setting up a detailed time window in which calls can be established. Consists of from, to and days properties. Days property is mandatory.
 */
final class TimeWindow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'days',
    ];

    /**
     * Days when scheduling call establishment will be attempted.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TimeWindow\DaysCollection $days;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TimeWindowPoint $from;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TimeWindowPoint $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => $value instanceof \stdClass ? $this->from = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TimeWindowPoint($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TimeWindowPoint($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
