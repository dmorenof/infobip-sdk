<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02;

/**
 * ConferenceSendMessageRequest
 */
final class ConferenceSendMessageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message',
];

    /**
     * Message to send.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
