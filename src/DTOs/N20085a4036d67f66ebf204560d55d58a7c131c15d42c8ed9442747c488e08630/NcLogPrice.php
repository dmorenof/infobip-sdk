<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * NcLogPrice
 */
final class NcLogPrice extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'currency',
        'pricePerLookup',
    ];

    /**
     * The currency in which the price is expressed.
     */
    public string $currency;
    /**
     * Price per one NC lookup.
     * Format: double
     */
    public float $pricePerLookup;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'pricePerLookup' => is_float($value) ? $this->pricePerLookup = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
