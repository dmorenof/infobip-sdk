<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Message result as to
 */
final class MessageResultTo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the message sent.
     * Example: "2250be2d4219-3af1-78856-aabe-1362af1edfd2"
     */
    public string $messageId;
    /**
     * The message destination address.
     * Example: "41793026727"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
