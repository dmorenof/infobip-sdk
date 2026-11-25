<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * FeedbackError
 *
 * List of available feedback errors.
 */
final class FeedbackError extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Country code in two-letter ISO standard the error applies to, or null if it applies to all countries.
     */
    public string $countryCode;
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
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceOrderType $resourceRequestType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'details' => is_string($value) ? $this->details = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'resourceRequestType' => is_string($value) ? $this->resourceRequestType = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceOrderType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
