<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * ProductItem
 */
final class ProductItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'itemPrice',
        'productRetailerId',
        'quantity',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'minLength' => 0,
        ],
        'productRetailerId' => [
            'minLength' => 0,
        ],
        'quantity' => [
            'minimum' => 1,
        ],
    ];

    /**
     * Currency of the product.
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * Price of the product.
     */
    public float $itemPrice;
    /**
     * Product's unique identifier as defined in the catalog.
     */
    public string $productRetailerId {
        set {
            $this->assigning('productRetailerId', $value);
            $this->productRetailerId = $value;
        }
    }
    /**
     * Quantity of the ordered product.
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
