<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Agents\ByAgentId;

final class Conversations extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/agents/{agentId}/conversations [operationId: get-agent-conversations] */
    /**
     * Get agent conversations
     *
     * Use this method to get a list of conversations, an agent is assigned on, with pagination.
     */
    public static function get(string $agentId, ?\InfobipSDK\GetParams\Ccaas\Resource1\Agents\ByAgentId\Conversations $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents\ByAgentId\Conversations::class)->get($agentId, $params);
    }

}
