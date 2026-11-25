<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * RelatedMessageApiResponse
 *
 * Returns up to 50 comments created after the specified inbound comment, at the same level of the conversation.
 */
final class RelatedMessageApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Facebook or Instagram username.
     */
    public string $authorName;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageChannel $channel;
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageContent $content;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType $contentType;
    /**
     * ID of the conversation to which the message belongs.
     */
    public string $conversationId;
    /**
     * Timestamp when message was created.
     * Format: date-time
     */
    public string $createdAt;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageDirection $direction;
    /**
     * Unique ID of the comment.
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorName' => is_string($value) ? $this->authorName = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageChannel::from($value) : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType::from($value) : parent::assignMember($name, $value),
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageDirection::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
