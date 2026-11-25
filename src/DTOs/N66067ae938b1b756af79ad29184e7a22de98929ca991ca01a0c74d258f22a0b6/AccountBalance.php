<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6;

/**
 * AccountBalance
 */
final class AccountBalance extends \Dmorenof\SdkRuntime\DTO
{
    public float $balance;
    public string $currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'balance' => is_float($value) ? $this->balance = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
