<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\ByConversationId;

final class Hold extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /ccaas/voice/2/{conversationId}/hold [operationId: set-call-on-hold] */
    /**
     * Put client on hold
     *
     * Use this method to put your client on hold. <a href="https://www.infobip.com/docs/conversations/calls#call-on-hold-agent-guide" target="_blank">More info</a>.
     */
    public static function patch(string $conversationId): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\ByConversationId\Hold::class)->patch($conversationId);
    }

}
