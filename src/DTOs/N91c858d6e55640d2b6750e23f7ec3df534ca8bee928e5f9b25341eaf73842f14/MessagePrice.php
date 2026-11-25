<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * MessagePrice
 *
 * Sent message price.
 */
final class MessagePrice extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The currency in which the price is expressed.
     */
    public string $currency;
    /**
     * Price per one message.
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
