<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60;

/**
 * ConversionDetails
 *
 * Details should contain value and currency information indicating exact value of the conversion that happened.
 */
final class ConversionDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'value',
    ];

    /**
     * Currency of the conversion. Has to be the same as it is set on ad account.
     * Example: "USD"
     */
    public string $currency;
    /**
     * Value of the conversion. Can be 0.
     * Example: 100
     */
    public float $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'value' => is_float($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
