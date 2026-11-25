<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class Conversations extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/conversations [operationId: get-conversations] */
    /**
     * Get conversations
     *
     * Use this method to get a list of conversations with pagination and filtering option. Using the filter is optional. The result can be filtered by one or many optional filters described in parameters. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource1\Conversations $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations::class)->get($params);
    }

    /** POST /ccaas/1/conversations [operationId: create-conversation] */
    /**
     * Create conversation
     *
     * Use this method to create a new conversation. All conversation parameters are optional. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function post(\InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations::class)->post($payload);
    }

    /** GET /ccaas/1/conversations/{conversationId} [operationId: get-conversation] */
    /**
     * Get conversation
     *
     * Use this method to get a single conversation. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function getByConversationId(string $conversationId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations::class)->getByConversationId($conversationId);
    }

    /** PATCH /ccaas/1/conversations/{conversationId} [operationId: patch-conversation] */
    /**
     * Patch conversation
     *
     * Use this method to patch a conversation. Closed conversations cannot be changed. To change an assignment to another agent or a bot, use [Change conversation assignment](https://www.infobip.com/docs/api/customer-engagement/conversations/change-conversation-assignment).<a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function patchByConversationId(string $conversationId, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\PatchConversationApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations::class)->patchByConversationId($conversationId, $payload);
    }

    /** PUT /ccaas/1/conversations/{conversationId} [operationId: update-conversation] */
    /**
     * Update conversation
     *
     * Use this method to update a conversation. Closed conversations cannot be changed. To change an assignment to another agent or a bot, use [Change conversation assignment](https://www.infobip.com/docs/api/customer-engagement/conversations/change-conversation-assignment).<a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function putByConversationId(string $conversationId, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations::class)->putByConversationId($conversationId, $payload);
    }

}
