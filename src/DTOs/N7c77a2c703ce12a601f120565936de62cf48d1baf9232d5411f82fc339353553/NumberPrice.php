<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * NumberPrice
 *
 * The price object indicating pricing details for the number.
 */
final class NumberPrice extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Currency of the number's fees.
     */
    public string $currency;
    /**
     * Price for the initial month.
     */
    public float $initialMonthPrice;
    /**
     * Price of the monthly fee.
     */
    public float $pricePerMonth;
    /**
     * Price of the setup fee.
     */
    public float $setupPrice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'initialMonthPrice' => is_float($value) ? $this->initialMonthPrice = $value : parent::assignMember($name, $value),
            'pricePerMonth' => is_float($value) ? $this->pricePerMonth = $value : parent::assignMember($name, $value),
            'setupPrice' => is_float($value) ? $this->setupPrice = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
