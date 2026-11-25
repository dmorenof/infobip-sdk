<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * DeliveryTimeWindow
 *
 * Sets specific message delivery window outside of which messages won't be delivered. Often, used when there are restrictions on when messages can be sent. The exact time of the day to start sending messages can be defined using the `from` property. The exact time of the day to end sending messages can be defined using the `to` property. Properties `from` and `to` should be both provided with the minimum 1 hour difference or omitted.
 */
final class DeliveryTimeWindow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'days',
    ];

    protected const array VALIDATION = [
        'days' => [
            'minItems' => 1,
        ],
    ];

    /**
     * Days of the week which are included in the delivery time window. At least one day must be provided. Separate multiple days with a comma.
     */
    public \InfobipSDK\Collections\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTimeWindow\DaysCollection $days {
        set {
            $this->assigning('days', $value);
            $this->days = $value;
        }
    }
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTime $from;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTime $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => $value instanceof \stdClass ? $this->from = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTime($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTime($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
