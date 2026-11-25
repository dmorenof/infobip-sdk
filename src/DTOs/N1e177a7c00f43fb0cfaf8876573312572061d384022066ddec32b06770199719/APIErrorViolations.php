<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * APIErrorViolations
 */
final class APIErrorViolations extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'property',
    'violation',
];

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
