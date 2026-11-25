<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * ConversationRoutingResultApiResponse
 */
final class ConversationRoutingResultApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Conversation Id.
     */
    public string $id;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationPriority $priority;
    /**
     * Resolved queue Id.
     */
    public string $queueId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'priority' => is_string($value) ? $this->priority = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationPriority::from($value) : parent::assignMember($name, $value),
            'queueId' => is_string($value) ? $this->queueId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
