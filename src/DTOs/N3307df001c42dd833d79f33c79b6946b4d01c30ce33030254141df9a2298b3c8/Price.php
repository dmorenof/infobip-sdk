<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8;

/**
 * Price
 */
final class Price extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'currency',
    'pricePerMessage',
];

    /**
     * The currency in which the price is displayed.
     */
    public string $currency;
    /**
     * The price per individual  message.
     * Format: double
     */
    public float $pricePerMessage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'pricePerMessage' => is_float($value) ? $this->pricePerMessage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
