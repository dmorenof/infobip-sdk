<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf;

/**
 * Price
 */
final class Price extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The currency in which the price is expressed.
     */
    public string $currency;
    /**
     * Price per one second of the Voice message.
     * Format: double
     */
    public float $pricePerSecond;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'pricePerSecond' => is_float($value) ? $this->pricePerSecond = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
