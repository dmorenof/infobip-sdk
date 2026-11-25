<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * Product
 */
final class Product extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'quantity' => [
        'format' => 'int32',
    ],
];

    public string $currency;
    public float $itemPrice;
    public string $productRetailerId;
    /**
     * Format: int32
     */
    public int $quantity {
        set {
            $this->assigning('quantity', $value);
            $this->quantity = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'itemPrice' => is_float($value) ? $this->itemPrice = $value : parent::assignMember($name, $value),
            'productRetailerId' => is_string($value) ? $this->productRetailerId = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
