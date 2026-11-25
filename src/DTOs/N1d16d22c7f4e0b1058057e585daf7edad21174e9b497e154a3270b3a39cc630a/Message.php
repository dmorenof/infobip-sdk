<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * Message
 *
 * Full message data.
 */
final class Message extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel',
    'conversationId',
    'from',
    'id',
    'messageId',
    'to',
];

    /**
     * Message channel. See the list of [supported Conversations channels](https://www.infobip.com/docs/conversations#available-channels).
     * Example: "LIVE_CHAT"
     */
    public string $channel;
    /**
     * Message content in various formats (text, image, etc.).
     */
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Message\ContentDTO $content;
    /**
     * ID of conversation the message belongs to.
     * Example: "b9263ee4-93b9-4352-912a-3b558f751276"
     */
    public string $conversationId;
    /**
     * Message creation time in `yyyy-MM-dd'T'HH:mm:ss.SSSZ` format.
     * Example: "2025-03-21T13:12:06.495+00:00"
     */
    public string $createdAt;
    /**
     * Sender ID or identifier. Ranges from alphanumeric to UUID v4 values, depending on the channel.
     * Example: "d21806c0-279e-418d-8caf-b96223fd8392"
     */
    public string $from;
    /**
     * Unique message ID. UUID v4.
     * Example: "f74f3515-2a8d-481a-9bd1-36ee1f905585"
     */
    public string $id;
    /**
     * Platform message ID. Ranges from alphanumeric to UUID v4 values, depending on the channel.
     * Example: "f74f3515-2a8d-481a-9bd1-36ee1f905585"
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\SocialContext $socialContext;
    /**
     * Recipient ID or identifier. Ranges from alphanumeric to UUID v4 values, depending on the channel.
     * Example: "a48d5aad-f584-41c6-b5e3-c1e3a43b52d2"
     */
    public string $to;
    /**
     * Last message update time in `yyyy-MM-dd'T'HH:mm:ss.SSSZ` format.
     * Example: "2025-03-21T13:12:06.495+00:00"
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'socialContext' => $value instanceof \stdClass ? $this->socialContext = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\SocialContext($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
