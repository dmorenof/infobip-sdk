<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class Route extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/1/conversations/{conversationId}/route [operationId: route-conversation] */
    /**
     * Route conversation
     *
     * Use this method to route the existing conversation.
     * This method will remove the assigned agent from a conversation (if one exists), and send the conversation to the [routing process](../#customer-engagement/conversations/update-routing).
     * Closed Conversations cannot be routed.
     */
    public static function post(string $conversationId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Route::class)->post($conversationId);
    }

}
