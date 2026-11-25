<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class SimulateRouting extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/conversations/{conversationId}/simulate-routing [operationId: simulate-routing-result-for-conversation] */
    /**
     * Simulate routing result for conversation
     *
     * Use this method to simulate routing for an existing conversation.
     * This method will resolve the routing rule applicable to the current conversation state and return the queue ID and priority
     * that would be applied if the conversation was actually routed at this moment.
     * Closed conversations cannot be routed.
     *
     */
    public static function get(string $conversationId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationRoutingResultApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\SimulateRouting::class)->get($conversationId);
    }

}
