<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7;

/**
 * DeliveryTimeWindow
 *
 * Sets specific SMS delivery window outside of which messages won't be delivered. Often, used when there are restrictions on when messages can be sent.
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

    protected const array WRITE_ONLY_FIELDS = [
        'days',
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
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTimeFrom $from;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTimeTo $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => $value instanceof \stdClass ? $this->from = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTimeFrom($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryTimeTo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
