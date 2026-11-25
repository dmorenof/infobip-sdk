<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * MessageResultPage
 * Example: {"messages":[{"id":"c3b94b2f-a3a1-4999-b63b-413800544123","from":"447492263899","to":"447496389711","channel":"SMS","direction":"INBOUND","conversationId":"4461ea29-c09e-4ba8-a751-df86cf0a0eb9","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","contentType":"TEXT","content":{"text":"Customer message content"}},{"id":"0224bdbc-8693-4ce5-8eb1-c8046d44d09f","from":"447492263899","to":"447496389711","channel":"VIBER","direction":"OUTBOUND","conversationId":"4461ea29-c09e-4ba8-a751-df86cf0a0eb9","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","contentType":"TEXT","content":{"text":"Agent message content"}}],"pagination":{"totalItems":2,"page":0,"limit":10,"orderBy":"id:ASC"}}
 */
final class MessageResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageResultPage\MessagesCollection $messages;
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination $pagination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageResultPage\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageApiResponse::class)) : parent::assignMember($name, $value),
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
