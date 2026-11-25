<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6;

/**
 * SimpleCurrencyInfo
 */
final class SimpleCurrencyInfo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public string $code;
    public string $currencyName;
    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $symbol;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'currencyName' => is_string($value) ? $this->currencyName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'symbol' => is_string($value) ? $this->symbol = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
