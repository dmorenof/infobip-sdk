<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * DeliveryTimeWindow
 *
 * Set specific scheduling options to send a message within daily or hourly intervals.
 */
final class DeliveryTimeWindow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'days',
];

    protected const array WRITE_ONLY_FIELDS = [
    'days',
];

    /**
     * Days of the week which are included in the delivery time window. At least one day must be provided.
     */
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DeliveryTimeWindow\DaysCollection $days;
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DeliveryTime $from;
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DeliveryTime $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => $value instanceof \stdClass ? $this->from = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DeliveryTime($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DeliveryTime($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
