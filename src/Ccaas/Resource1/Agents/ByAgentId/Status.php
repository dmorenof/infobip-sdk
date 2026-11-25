<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Agents\ByAgentId;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PUT /ccaas/1/agents/{agentId}/status [operationId: update-agent-status] */
    /**
     * Change agents status
     *
     * Use this method to change agents status. <a href="https://www.infobip.com/docs/conversations/get-started" target="_blank">More info</a>
     */
    public static function put(string $agentId, \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusRequest $payload): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents\ByAgentId\Status::class)->put($agentId, $payload);
    }

}
