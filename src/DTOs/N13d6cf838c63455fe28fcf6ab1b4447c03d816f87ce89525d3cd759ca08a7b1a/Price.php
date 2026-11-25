<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Price
 *
 * Sent voice message price.
 */
final class Price extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The currency in which the price is expressed.
     */
    public string $currency;
    /**
     * Price per one second of the voice message.
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
