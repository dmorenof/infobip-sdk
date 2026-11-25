<?php

declare(strict_types=1);

namespace InfobipSDK\Ccca\Resource1;

final class AgentConfigs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccca/1/agent-configs/{agentId} [operationId: get-conversations-agent-config] */
    /**
     * Get agent configuration
     *
     * Use this method to retrieve the current agent-specific configuration.
     */
    public static function getByAgentId(string $agentId): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccca\Resource1\AgentConfigs::class)->getByAgentId($agentId);
    }
}
