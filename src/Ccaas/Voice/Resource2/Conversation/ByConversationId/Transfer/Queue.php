<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer;

final class Queue extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /ccaas/voice/2/conversation/{conversationId}/transfer/queue [operationId: transfer-call-to-queue] */
    /**
     * Transfer call to another queue
     *
     * Use this method to transfer a call to another queue. Please note that the targeted queue must be within working hours and have auto-assignment enabled for the transfer to succeed. The agent selection process will be run, and the conversation will be assigned to the agent who answers the call. <a href="https://www.infobip.com/docs/conversations/calls#transfer-to-queue-agent-guide" target="_blank">More info</a>.
     */
    public static function patch(string $conversationId, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferToQueueRequest $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer\Queue::class)->patch($conversationId, $payload);
    }

}
