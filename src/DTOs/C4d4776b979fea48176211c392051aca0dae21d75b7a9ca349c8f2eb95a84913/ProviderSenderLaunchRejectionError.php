<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * ProviderSenderLaunchRejectionError
 *
 * List of errors related to given `requirementKey` / `externalRequirementKey`. For list of possible errors, please check [Get feedback errors](#platform/resources/resource-request/get-feedback-errors).
 */
final class ProviderSenderLaunchRejectionError extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'details',
    'key',
    'reason',
];

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
