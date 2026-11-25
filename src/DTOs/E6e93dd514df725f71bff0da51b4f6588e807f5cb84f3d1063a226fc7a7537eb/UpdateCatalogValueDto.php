<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb;

/**
 * UpdateCatalogValueDto
 */
final class UpdateCatalogValueDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fieldId',
    'value',
];

    /**
     * Field ID.
     * Example: "f5cdcb82-7a5b-4707-b37a-4153da514403"
     */
    public string $fieldId;
    /**
     * Field value.
     * Example: "Custom field value"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fieldId' => is_string($value) ? $this->fieldId = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
