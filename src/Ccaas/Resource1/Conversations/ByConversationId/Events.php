<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class Events extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/1/conversations/{conversationId}/events [operationId: send-event] */
    /**
     * Send a conversation event
     *
     * Use this endpoint to send an event to a conversation. E.g. indication when typing started or ended.<a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function post(string $conversationId, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationEventApiRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Events::class)->post($conversationId, $payload);
    }

}
