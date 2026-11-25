<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d;

/**
 * AvailableProduct
 *
 * List of available products.
 */
final class AvailableProduct extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Product identifier.
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
