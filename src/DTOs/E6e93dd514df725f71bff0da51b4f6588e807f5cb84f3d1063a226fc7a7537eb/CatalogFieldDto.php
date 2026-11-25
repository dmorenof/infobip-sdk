<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb;

/**
 * CatalogFieldDto
 */
final class CatalogFieldDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dataType',
        'id',
        'isPredefined',
        'name',
    ];

    public \InfobipSDK\Enums\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogFieldDataType $dataType;
    /**
     * Field ID.
     * Example: "caad56e4-2a1c-4ae8-9717-ebb40d05533d"
     */
    public string $id;
    /**
     * Indicates whether the field is predefined by a catalog type. You cannot create predefined fields.
     * Example: true
     */
    public bool $isPredefined;
    /**
     * Field name.
     * Example: "Custom name"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataType' => is_string($value) ? $this->dataType = \InfobipSDK\Enums\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CatalogFieldDataType::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isPredefined' => is_bool($value) ? $this->isPredefined = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
