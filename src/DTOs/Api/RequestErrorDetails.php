<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Api;

/**
 * ApiRequestErrorDetails
 */
final class RequestErrorDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identifier of the error.
     */
    public string $messageId;
    /**
     * Detailed error description.
     */
    public string $text;
    /**
     * Validation errors.
     */
    public \InfobipSDK\DTOs\Api\RequestErrorDetails\ValidationErrorsMap $validationErrors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
