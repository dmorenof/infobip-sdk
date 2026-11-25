<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * FormField
 *
 * Form field name and value.
 */
final class FormField extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Field ID. UUID v4.
     * Example: "b57ab774-43b7-4b0c-929f-83c1d8eabb03"
     */
    public string $id;
    /**
     * Field name.
     * Example: "Field Name 1"
     */
    public string $name;
    /**
     * Field value.
     * Example: "234234"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
