<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer;

final class ExternalNumber extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /ccaas/voice/2/conversation/{conversationId}/transfer/external-number [operationId: transfer-call-to-external-number] */
    /**
     * Transfer call to external number
     *
     * Use this method to transfer the call to an external phone number. Depending on the Transfer to External Number configuration, the Agent can transfer the call to any valid phone number or only to the numbers in the People with the external_number tag. <a href="https://www.infobip.com/docs/conversations/calls#transfer-to-external-number-agent-guide" target="_blank">More info</a>.
     */
    public static function patch(string $conversationId, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferToExternalRequest $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer\ExternalNumber::class)->patch($conversationId, $payload);
    }

}
