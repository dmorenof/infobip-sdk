<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N270617dafe939f994767f4b01223addd34979b1c67bb145186dac4c5c875ab19;

/**
 * Price
 *
 * Message price.
 */
final class Price extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The currency in which the price is expressed.
     * Example: "EUR"
     */
    public string $currency;
    /**
     * Price per one message.
     * Example: 0.02
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
