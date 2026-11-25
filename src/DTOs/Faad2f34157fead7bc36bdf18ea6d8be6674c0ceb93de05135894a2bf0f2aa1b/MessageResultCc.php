<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Message result as cc
 */
final class MessageResultCc extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The message destination address.
     * Example: "41793026728"
     */
    public string $cc;
    /**
     * The ID that uniquely identifies the message sent.
     * Example: "2250be2d4219-3af1-78856-aabe-1362af1edfd2"
     */
    public string $messageId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cc' => is_string($value) ? $this->cc = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
