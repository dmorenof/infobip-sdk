<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * DeliveryTimeWindow
 *
 * Scheduling object that allows setting up detailed time windows in which the message can be sent. Consists of from, to and days properties. Days property is mandatory. From and to properties should be either both included, to allow finer time window granulation or both omitted, to include whole days in the delivery time window. Note: delivery time window is set in UTC timezone.
 */
final class DeliveryTimeWindow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from',
        'to',
    ];

    protected const array VALIDATION = [
        'days' => [
            'uniqueItems' => true,
        ],
    ];

    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DeliveryTimeWindow\DaysCollection $days {
        set {
            $this->assigning('days', $value);
            $this->days = $value;
        }
    }
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DeliveryTime $from;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DeliveryTime $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => $value instanceof \stdClass ? $this->from = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DeliveryTime($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DeliveryTime($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
