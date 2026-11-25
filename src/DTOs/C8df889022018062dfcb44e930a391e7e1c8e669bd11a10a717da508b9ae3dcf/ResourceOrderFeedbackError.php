<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * ResourceOrderFeedbackError
 *
 * List of validation errors for the requirement.
 */
final class ResourceOrderFeedbackError extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Additional details and recommended actions for the error.
     */
    public string $details;
    /**
     * Code identifying the type of error.
     */
    public string $key;
    /**
     * Reason for the error.
     */
    public string $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'details' => is_string($value) ? $this->details = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
