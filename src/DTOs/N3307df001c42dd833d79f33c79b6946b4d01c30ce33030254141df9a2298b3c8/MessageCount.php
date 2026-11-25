<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8;

/**
 * MessageCount
 */
class MessageCount extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'messageCount' => [
            'format' => 'int32',
        ],
        'pendingMessageCount' => [
            'format' => 'int32',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'messageCount',
        'pendingMessageCount',
    ];

    /**
     * Number of returned messages in this request.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * Number of remaining new messages on Infobip servers ready to be returned in the next request.
     * Format: int32
     */
    public int $pendingMessageCount {
        set {
            $this->assigning('pendingMessageCount', $value);
            $this->pendingMessageCount = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'pendingMessageCount' => is_int($value) ? $this->pendingMessageCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
