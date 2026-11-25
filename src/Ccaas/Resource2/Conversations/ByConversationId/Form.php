<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource2\Conversations\ByConversationId;

final class Form extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/2/conversations/{conversationId}/form [operationId: get-conversation-form-dispositions] */
    /**
     * Get dispositions
     *
     * Use this method to get a conversation form with attached fields and values.
     */
    public static function get(string $conversationId, ?\InfobipSDK\GetParams\Ccaas\Resource2\Conversations\ByConversationId\Form $params = null): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\DispositionBasicInfoApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\Conversations\ByConversationId\Form::class)->get($conversationId, $params);
    }

    /** PUT /ccaas/2/conversations/{conversationId}/form [operationId: upsert-conversation-form-dispositions] */
    /**
     * Update or insert dispositions
     *
     * Use this method to create or update field value for a conversation. Method overwrites old dispositions.
     */
    public static function put(string $conversationId, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpsertDispositionApiRequest $payload): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\Conversations\ByConversationId\Form::class)->put($conversationId, $payload);
    }

    /** DELETE /ccaas/2/conversations/{conversationId}/form/{id} [operationId: delete-conversation-form-disposition] */
    /**
     * Delete disposition
     *
     * Use this method to delete an agent input to a field from a conversation.
     */
    public static function deleteById(\InfobipSDK\PathParams\Ccaas\Resource2\Conversations\ByConversationId\Form\ById $identifier): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\Conversations\ByConversationId\Form::class)->deleteById($identifier);
    }

}
