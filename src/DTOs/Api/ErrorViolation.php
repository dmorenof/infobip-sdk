<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Api;

/**
 * ApiErrorViolation
 *
 * List of violations that caused the error.
 */
final class ErrorViolation extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Request property that caused the error.
     */
    public string $property;
    /**
     * Detailed violation description.
     */
    public string $violation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'property' => is_string($value) ? $this->property = $value : parent::assignMember($name, $value),
            'violation' => is_string($value) ? $this->violation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
