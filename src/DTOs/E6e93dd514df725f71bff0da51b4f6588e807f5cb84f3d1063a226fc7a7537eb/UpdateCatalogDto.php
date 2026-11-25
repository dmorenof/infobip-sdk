<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb;

/**
 * UpdateCatalogDto
 */
final class UpdateCatalogDto extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Catalog description.
     * Example: "Just a description"
     */
    public ?string $description;
    /**
     * Catalog name.
     * Example: "CatalogName"
     */
    public ?string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
