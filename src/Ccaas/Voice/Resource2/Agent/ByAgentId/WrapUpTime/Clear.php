<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime;

final class Clear extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /ccaas/voice/2/agent/{agentId}/wrap-up-time/clear [operationId: clear-conversations-agent-wrap-up-time] */
    /**
     * Clear agent wrap up time
     *
     * Use this method to clear the agent wrap up time after a call. After that, the agent will no longer have Wrapping status. Wrap up is the time after a call during which an agent's status is still BUSY. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     */
    public static function patch(string $agentId): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime\Clear::class)->patch($agentId);
    }
}
