<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d;

/**
 * AvailableProducts
 *
 * Available products.
 */
final class AvailableProducts extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of available products.
     */
    public \InfobipSDK\Collections\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\AvailableProducts\ProductsCollection $products;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'products' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->products = new \InfobipSDK\Collections\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\AvailableProducts\ProductsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\AvailableProduct::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
