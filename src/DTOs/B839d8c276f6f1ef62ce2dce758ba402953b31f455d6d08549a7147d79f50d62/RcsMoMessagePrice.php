<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsMoMessagePrice
 *
 * Price object with traffic type information.
 */
final class RcsMoMessagePrice extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The currency in which the price is expressed.
     */
    public string $currency;
    /**
     * Price per one message.
     */
    public float $pricePerMessage;
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMoTrafficType $trafficType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'pricePerMessage' => is_float($value) ? $this->pricePerMessage = $value : parent::assignMember($name, $value),
            'trafficType' => is_string($value) ? $this->trafficType = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMoTrafficType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
