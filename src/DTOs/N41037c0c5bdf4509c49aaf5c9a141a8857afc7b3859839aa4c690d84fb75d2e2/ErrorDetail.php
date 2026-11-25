<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2;

/**
 * ErrorDetail
 *
 * Detailed error information for a specific property or field.
 */
final class ErrorDetail extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message',
    'property',
];

    /**
     * Specific error message describing the validation failure.
     */
    public string $message;
    /**
     * Additional context or metadata related to the validation error.
     */
    public \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ErrorDetail\PayloadMap $payload;
    /**
     * Name of the property or field that caused the validation error.
     */
    public string $property;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'property' => is_string($value) ? $this->property = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
