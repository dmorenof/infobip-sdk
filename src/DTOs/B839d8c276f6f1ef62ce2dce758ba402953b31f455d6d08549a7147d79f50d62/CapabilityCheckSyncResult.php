<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CapabilityCheckSyncResult
 *
 * The result of the RCS capability check for the specified phone numbers.
 */
final class CapabilityCheckSyncResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'code',
    'messageId',
    'phoneNumber',
];

    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckResponseCodeV2 $code;
    /**
     * A unique message ID. This ID is automatically generated and will be included in the API response.
     */
    public string $messageId;
    /**
     * The recipient's phone number that was checked for RCS capability.
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckResponseCodeV2::from($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
