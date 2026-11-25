<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * ErrorDetailsItemResponse
 */
final class ErrorDetailsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
        'property',
    ];

    /**
     * A descriptive message explaining the nature of the error associated with the property.
     */
    public string $message;
    /**
     * The name of the specific property or field related to the error.
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
