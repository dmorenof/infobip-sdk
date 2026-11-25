<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * DeliveryTimeWindow
 *
 * Used to specify a time-window in which a response message is allowed to be sent. If not defined there is no limitation when message will be sent.
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
            'maxItems' => 7,
            'uniqueItems' => true,
        ],
    ];

    /**
     * Days which are included in the delivery time window.
     */
    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\DeliveryTimeWindow\DaysCollection $days {
        set {
            $this->assigning('days', $value);
            $this->days = $value;
        }
    }
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\DeliveryTimeZone $deliveryTimeZone;
    /**
     * Exact time of day in which the sending can start. Consists of hour and minute properties, both mandatory. Time is expressed in the UTC time zone. Formatted as <code>HH:mm</code>.
     * Example: "08:35"
     */
    public string $from;
    /**
     * Exact time of day in which the sending will end. Consists of an hour and minute properties, both mandatory. Time is expressed in the UTC time zone. Formatted as <code>HH:mm</code>.
     * Example: "16:35"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deliveryTimeZone' => is_string($value) ? $this->deliveryTimeZone = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\DeliveryTimeZone::from($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
