<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * Price
 *
 * Sent message price.
 */
final class Price extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Currency.
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
