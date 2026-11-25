<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * LinkedConversationMember
 *
 * A conversation that is linked to another conversation.
 */
final class LinkedConversationMember extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the assigned agent.
     */
    public string $agentId;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationChannel $channel;
    /**
     * Conversation ID.
     */
    public string $conversationId;
    /**
     * Time when the conversation was created.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Display name of the customer.
     */
    public string $customerDisplayName;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationStatus $status;
    /**
     * Conversation topic.
     */
    public string $topic;
    /**
     * Time when the conversation was last updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentId' => is_string($value) ? $this->agentId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationChannel::from($value) : parent::assignMember($name, $value),
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'customerDisplayName' => is_string($value) ? $this->customerDisplayName = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationStatus::from($value) : parent::assignMember($name, $value),
            'topic' => is_string($value) ? $this->topic = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
