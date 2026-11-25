<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * MmsOutboundContent
 *
 * Content of the failover message being sent.
 */
final class MmsOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'messageSegments',
    ];

    protected const array VALIDATION = [
        'messageSegments' => [
            'minItems' => 1,
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 66,
        ],
    ];

    /**
     * Content of the message being sent.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\MmsOutboundContent\MessageSegmentsCollection $messageSegments {
        set {
            $this->assigning('messageSegments', $value);
            $this->messageSegments = $value;
        }
    }
    /**
     * Message title.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
