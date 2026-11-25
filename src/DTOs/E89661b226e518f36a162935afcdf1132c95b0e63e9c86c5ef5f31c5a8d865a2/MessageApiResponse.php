<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * MessageApiResponse
 */
final class MessageApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Internal unique ID of the customer or agent, determined by the author type.
     */
    public string $authorId;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\AuthorType $authorType;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageChannel $channel;
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageContent $content;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType $contentType;
    /**
     * Id of the conversation message belongs to.
     */
    public string $conversationId;
    /**
     * Time stamp when message is created.
     * Format: date-time
     */
    public string $createdAt;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageDirection $direction;
    /**
     * Sender phone number, email address, FB messenger Id or live chat widget Id.
     */
    public string $from;
    /**
     * Message Id
     */
    public string $id;
    /**
     * Destination phone number, email address, FB messenger or live chat user Id.
     */
    public string $to;
    /**
     * Time stamp when message is updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorId' => is_string($value) ? $this->authorId = $value : parent::assignMember($name, $value),
            'authorType' => is_string($value) ? $this->authorType = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\AuthorType::from($value) : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageChannel::from($value) : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType::from($value) : parent::assignMember($name, $value),
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageDirection::from($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
