<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb;

/**
 * CatalogItemDto
 */
final class CatalogItemDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'values',
    ];

    /**
     * Item ID.
     * Example: 10000
     * Format: int64
     */
    public int $id;
    /**
     * A list of item field values. Maximum <code>1000</code> values.
     */
    public \InfobipSDK\Collections\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogItemDto\ValuesCollection $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->values = new \InfobipSDK\Collections\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogItemDto\ValuesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogValueDto::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
