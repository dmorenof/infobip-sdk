<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class Assignee extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /ccaas/1/conversations/{conversationId}/assignee [operationId: unassign-conversation-agent] */
    /**
     * Unassign conversation agent
     *
     * Use this method to remove an assigned agent from conversation. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function delete(string $conversationId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Assignee::class)->delete($conversationId);
    }

    /** PUT /ccaas/1/conversations/{conversationId}/assignee [operationId: change-conversation-assignment] */
    /**
     * Change conversation assignment
     *
     * Use this method to update a conversation assignee. Assignee cannot be updated in closed conversations. For Agent Takeovers (bot replaced by an agent), the Infobip platform will additionally update [Answers](https://www.infobip.com/docs/answers) that a bot is no longer in control of the conversation. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function put(string $conversationId, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\AssignAgentApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Assignee::class)->put($conversationId, $payload);
    }
}
