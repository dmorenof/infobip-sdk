<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c;

/**
 * Price
 *
 * Sent message price.
 */
final class Price extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The currency in which the price is expressed.
     */
    public string $currency;
    /**
     * Price per message.
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
