<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Agents\ByAgentId;

final class Heartbeat extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PUT /ccaas/1/agents/{agentId}/heartbeat [operationId: update-agent-heartbeat] */
    /**
     * Set agents heartbeat
     *
     * Use this method to set agents heartbeat. <a href="https://www.infobip.com/docs/conversations/get-started" target="_blank">More info</a>
     */
    public static function put(string $agentId): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents\ByAgentId\Heartbeat::class)->put($agentId);
    }

}
