<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource2\Conversations\ByConversationId\Form;

final class Unassign extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/2/conversations/{conversationId}/form/unassign [operationId: un-assign-conversation-form] */
    /**
     * Un-assign form from conversation
     *
     * Use this method to remove a form from a given conversation. Un-assign is implemented by setting the formId property of the Conversation to null.
     */
    public static function post(string $conversationId): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\Conversations\ByConversationId\Form\Unassign::class)->post($conversationId);
    }

}
