<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class Tags extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/1/conversations/{conversationId}/tags [operationId: add-conversation-tag] */
    /**
     * Add tag to conversation
     *
     * Use this method to add a tag to the conversation. With tag(s) you can categorize conversations for assignment and/or reporting purposes. <a href="https://www.infobip.com/docs/conversations-api/tags" target="_blank">More info</a>
     */
    public static function post(string $conversationId, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\AddTagToConversationApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Tags::class)->post($conversationId, $payload);
    }

    /** DELETE /ccaas/1/conversations/{conversationId}/tags/{tagName} [operationId: delete-conversation-tag] */
    /**
     * Remove tag from conversation
     *
     * Use this method to remove the tag from the conversation. Operation only deletes the link between a tag and the conversation. <a href="https://www.infobip.com/docs/conversations-api/tags" target="_blank">More info</a>
     */
    public static function deleteByTagName(\InfobipSDK\PathParams\Ccaas\Resource1\Conversations\ByConversationId\Tags\ByTagName $identifier): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Tags::class)->deleteByTagName($identifier);
    }
}
