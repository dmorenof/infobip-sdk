<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource2\Conversations\ByConversationId\Form;

final class Assign extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/2/conversations/{conversationId}/form/assign [operationId: assign-conversation-form] */
    /**
     * Assign form to conversation
     *
     * Use this method to assign form to a conversation.
     */
    public static function post(string $conversationId, \InfobipSDK\PostParams\Ccaas\Resource2\Conversations\ByConversationId\Form\Assign $params): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\Conversations\ByConversationId\Form\Assign::class)->post($conversationId, $params);
    }
}
