<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * ConversationApiModel
 * Example: {"topic":"Topic","summary":"Summary","status":"OPEN","priority":"HIGH","queueId":"6f2e6c5a-e4ca-48c6-bc0a-d9c18479743a","agentId":"c856e230-a8cd-498b-9996-42bbed35029a"}
 */
final class ConversationApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'agentId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'queueId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'summary' => [
        'minLength' => 0,
        'maxLength' => 4000,
    ],
    'topic' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'closedAt',
    'createdAt',
    'id',
    'updatedAt',
];

    /**
     * Id of the agent assigned to the conversation.
     */
    public string $agentId {
        set {
            $this->assigning('agentId', $value);
            $this->agentId = $value;
        }
    }
    /**
     * If conversation is closed, time stamp when is closed.
     * Format: date-time
     */
    public string $closedAt;
    /**
     * Time stamp when conversation is created.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Conversation Id.
     */
    public string $id;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationPriority $priority;
    /**
     * Id of the queue conversation belongs to.
     */
    public string $queueId {
        set {
            $this->assigning('queueId', $value);
            $this->queueId = $value;
        }
    }
    /**
     * Conversation status.
     */
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel\StatusEnum $status;
    /**
     * Short description of the conversation.
     */
    public string $summary {
        set {
            $this->assigning('summary', $value);
            $this->summary = $value;
        }
    }
    /**
     * Conversation topic.
     */
    public string $topic {
        set {
            $this->assigning('topic', $value);
            $this->topic = $value;
        }
    }
    /**
     * Time stamp when conversation is updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentId' => is_string($value) ? $this->agentId = $value : parent::assignMember($name, $value),
            'closedAt' => is_string($value) ? $this->closedAt = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'priority' => is_string($value) ? $this->priority = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationPriority::from($value) : parent::assignMember($name, $value),
            'queueId' => is_string($value) ? $this->queueId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel\StatusEnum::from($value) : parent::assignMember($name, $value),
            'summary' => is_string($value) ? $this->summary = $value : parent::assignMember($name, $value),
            'topic' => is_string($value) ? $this->topic = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
