<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * ProductItem
 *
 * An array of selected products.
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
        'minLength' => 1,
    ],
    'productRetailerId' => [
        'minLength' => 1,
    ],
    'quantity' => [
        'minimum' => 1,
        'format' => 'int32',
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
