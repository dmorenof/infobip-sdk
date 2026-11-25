<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * MessageContext
 *
 * Context object to define WhatsApp-specific metadata about a message.
 */
final class MessageContext extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'replyToMessageId',
    ];

    protected const array VALIDATION = [
        'replyToMessageId' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Inbound message ID used for a reply. Contextual bubble will not appear for template messages.
     */
    public string $replyToMessageId {
        set {
            $this->assigning('replyToMessageId', $value);
            $this->replyToMessageId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'replyToMessageId' => is_string($value) ? $this->replyToMessageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
