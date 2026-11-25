<?php

declare(strict_types=1);

namespace InfobipSDK\Ccca\Resource1\AgentConfigs\ByAgentId;

final class WrapUp extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PUT /ccca/1/agent-configs/{agentId}/wrap-up [operationId: update-conversations-agent-wrap-up-config] */
    /**
     * Update agent wrap up configuration
     *
     * Use this method to create or update agent wrap up configuration.
     */
    public static function put(string $agentId, ?\InfobipSDK\PutParams\Ccca\Resource1\AgentConfigs\ByAgentId\WrapUp $params = null): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccca\Resource1\AgentConfigs\ByAgentId\WrapUp::class)->put($agentId, $params);
    }
}
