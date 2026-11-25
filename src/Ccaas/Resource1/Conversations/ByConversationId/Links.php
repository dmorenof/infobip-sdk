<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class Links extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/conversations/{conversationId}/links [operationId: get-linked-conversations] */
    /**
     * Get linked conversations
     *
     * Use this method to get a list of conversations linked to the specified conversation. <a href="https://www.infobip.com/docs/conversations-api/linked-conversations" target="_blank">More info</a>
     */
    public static function get(string $conversationId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\LinkedConversations
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Links::class)->get($conversationId);
    }
}
