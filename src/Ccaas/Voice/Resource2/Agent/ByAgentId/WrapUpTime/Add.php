<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime;

final class Add extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /ccaas/voice/2/agent/{agentId}/wrap-up-time/add/{seconds} [operationId: add-conversations-agent-wrap-up-time] */
    /**
     * Add agent wrap up time
     *
     * Use this method to extend the agent wrap up time after a call, by specified number of seconds. Number of seconds should be a positive number. Agent should be in Wrapping status. Wrap up is the time after a call during which an agent's status is still BUSY. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     */
    public static function patchBySeconds(\InfobipSDK\PathParams\Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime\Add\BySeconds $identifier): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime\Add::class)->patchBySeconds($identifier);
    }

}
