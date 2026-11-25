<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

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

    /**
     * Days of the week which are included in the delivery time window. At least one day must be provided. Separate multiple days with a comma.
     */
    public \InfobipSDK\Collections\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryTimeWindow\DaysCollection $days;
    public \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryTime $from;
    public \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryTime $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => $value instanceof \stdClass ? $this->from = new \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryTime($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryTime($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
