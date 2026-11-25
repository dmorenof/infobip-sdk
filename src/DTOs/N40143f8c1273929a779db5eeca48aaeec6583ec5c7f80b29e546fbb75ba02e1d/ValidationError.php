<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d;

/**
 * ValidationError
 */
final class ValidationError extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $error;
    public ?string $fieldName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value === null || is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            'fieldName' => $value === null || is_string($value) ? $this->fieldName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
