<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2;

final class OutboundCallConversation extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/voice/2/outbound-call-conversation [operationId: create-conversation-outbound-call] */
    /**
     * Create outbound call conversation
     *
     * Use this method to create a conversation associated with an outbound call. Expected usage is to trigger this endpoint and then start a call using the RTC SDK callConversations method. The created conversation ID is required when using the callConversations method to trigger an outbound call. Another option is to use the ID of a previously created call conversation. <a href="https://www.infobip.com/docs/conversations/calls#make-a-call-agent-guide"
     *  target="_blank">More info</a>.
     */
    public static function post(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OutboundCallConversationRequestApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OutboundCallConversationResponseApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\OutboundCallConversation::class)->post($payload);
    }
}
