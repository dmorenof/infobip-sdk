<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8;

/**
 * Destination
 *
 * Array of message destination addresses. Maximum number of destination addresses is 20k.
 */
final class Destination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'to',
    ];

    protected const array VALIDATION = [
        'to' => [
            'minLength' => 1,
        ],
    ];

    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    /**
     * Message destination addresses. Destination address must be in the E.164 standard format (Example: `41793026727`).
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
