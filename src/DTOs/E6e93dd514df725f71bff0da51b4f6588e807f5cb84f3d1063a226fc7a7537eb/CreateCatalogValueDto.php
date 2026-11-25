<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb;

/**
 * CreateCatalogValueDto
 *
 * A list of item field values. Maximum <code>1000</code> values.
 */
final class CreateCatalogValueDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'value',
];

    /**
     * Field ID.
     * Example: "8b00a8c6-5302-4fd0-a0cc-bb090b28ac34"
     */
    public string $fieldId;
    /**
     * Field name.
     * Example: "Custom field name"
     */
    public string $fieldName;
    /**
     * Field value.
     * Example: "Custom field value"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fieldId' => is_string($value) ? $this->fieldId = $value : parent::assignMember($name, $value),
            'fieldName' => is_string($value) ? $this->fieldName = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
