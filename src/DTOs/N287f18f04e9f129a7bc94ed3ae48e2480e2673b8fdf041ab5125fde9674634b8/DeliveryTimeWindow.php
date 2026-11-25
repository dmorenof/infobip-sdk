<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * DeliveryTimeWindow
 *
 * Scheduling object that allows setting up detailed time windows in which the message can be sent. Consists of from, to and days properties. Days in the week are written as their full names: Monday-Sunday. Days parameter must be populated as a list, between two square brackets. `Example: ['MONDAY', 'TUESDAY', 'WEDNESDAY']`. From and to properties should be either both included, to allow finer time window granulation or both omitted, to include whole days in the delivery time window. From and to parameters are objects, that consist of hour and minute fields that hold integer values. For example, ` from: [ hour: 15, minute:45 ]`. For complete json, please check out our example. Note: delivery time window is set in UTC timezone.
 */
final class DeliveryTimeWindow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'days',
        'from',
        'to',
    ];

    protected const array VALIDATION = [
        'days' => [
            'minItems' => 1,
            'uniqueItems' => true,
        ],
    ];

    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTimeWindow\DaysCollection $days {
        set {
            $this->assigning('days', $value);
            $this->days = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTime $from;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTime $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => $value instanceof \stdClass ? $this->from = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTime($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTime($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
