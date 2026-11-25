<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/conversations/{conversationId}/messages [operationId: get-messages] */
    /**
     * Get messages
     *
     * Use this method to get a list of messages from a conversation with pagination and filtering option. Using a filter is optional. The result can be filtered by one or many optional filters described in the parameters.
     */
    public static function get(string $conversationId, ?\InfobipSDK\GetParams\Ccaas\Resource1\Conversations\ByConversationId\Messages $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Messages::class)->get($conversationId, $params);
    }

    /** POST /ccaas/1/conversations/{conversationId}/messages [operationId: create-message] */
    /**
     * Create message
     *
     * Inbound messages are automatically threaded in conversations if the channels and senders are configured for using Conversations.
     * To send an outbound message use this method with the following parameters, adding it to an existing conversation.
     * Please note that the response from sending a TEMPLATE content type is a message of the TEXT content type, containing the
     * template content filled with parameters.
     *
     * Also, HTTP header should contain parameter "x-agent-id" as agent identifier,
     * but only in case conversations are assigned to agents. <a href="https://www.infobip.com/docs/conversations-api/messages" target="_blank">More info</a>
     */
    public static function post(string $conversationId, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateMessageApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Messages::class)->post($conversationId, $payload);
    }
}
