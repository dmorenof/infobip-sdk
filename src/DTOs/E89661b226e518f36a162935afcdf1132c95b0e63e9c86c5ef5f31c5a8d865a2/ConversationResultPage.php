<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * ConversationResultPage
 * Example: {"conversations":[{"id":"9542b329-01f4-4593-b7b0-606949389129","topic":"First conversation topic","summary":"First conversation summary","status":"OPEN","priority":"NORMAL","queueId":null,"agentId":null,"createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00"},{"id":"be2de5f9-d049-446b-8c62-098be8b8f624","topic":"Second conversation topic","summary":"Second conversation summary","status":"SOLVED","priority":"HIGH","queueId":"6f2e6c5a-e4ca-48c6-bc0a-d9c18479743a","agentId":"c856e230-a8cd-498b-9996-42bbed35029a","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00"},{"id":"7e40af76-3020-4bf6-942f-27910d33899b","topic":"Third conversation topic","summary":"Third conversation topic","status":"CLOSED","priority":"LOW","queueId":"6f2e6c5a-e4ca-48c6-bc0a-d9c18479743a","agentId":"c856e230-a8cd-498b-9996-42bbed35029a","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","closedAt":"2024-01-03T00:00:00.000+00:00"}],"pagination":{"totalItems":3,"page":0,"limit":10,"orderBy":"id:ASC"}}
 */
final class ConversationResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationResultPage\ConversationsCollection $conversations;
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination $pagination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conversations = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationResultPage\ConversationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel::class)) : parent::assignMember($name, $value),
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
