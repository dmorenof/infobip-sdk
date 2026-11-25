<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6;

/**
 * BalanceInfoResponse
 */
final class BalanceInfoResponse extends \Dmorenof\SdkRuntime\DTO
{
    public float $allowedMinus;
    public float $balance;
    public \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\SimpleCurrencyInfo $currency;
    public \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\BalanceInfoResponse\FreeMessagesMap $freeMessages;
    public float $monthlyBalance;
    public float $monthlyLimit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allowedMinus' => is_float($value) ? $this->allowedMinus = $value : parent::assignMember($name, $value),
            'balance' => is_float($value) ? $this->balance = $value : parent::assignMember($name, $value),
            'currency' => $value instanceof \stdClass ? $this->currency = new \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\SimpleCurrencyInfo($value) : parent::assignMember($name, $value),
            'monthlyBalance' => is_float($value) ? $this->monthlyBalance = $value : parent::assignMember($name, $value),
            'monthlyLimit' => is_float($value) ? $this->monthlyLimit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
