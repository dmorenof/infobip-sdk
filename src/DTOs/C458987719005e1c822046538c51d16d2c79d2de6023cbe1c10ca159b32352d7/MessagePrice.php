<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

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
