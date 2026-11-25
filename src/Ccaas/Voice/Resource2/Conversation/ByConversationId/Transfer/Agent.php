<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer;

final class Agent extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /ccaas/voice/2/conversation/{conversationId}/transfer/agent [operationId: transfer-call-to-agent] */
    /**
     * Transfer call to another agent
     *
     * Use this method to transfer a call to another agent. Please note that the targeted agent must be available for the transfer to succeed. The conversation will be assigned to the targeted agent once they answer the call. <a href="https://www.infobip.com/docs/conversations/calls#transfer-to-agent-agent-guide" target="_blank">More info</a>.
     */
    public static function patch(string $conversationId, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferToAgentRequest $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer\Agent::class)->patch($conversationId, $payload);
    }

}
