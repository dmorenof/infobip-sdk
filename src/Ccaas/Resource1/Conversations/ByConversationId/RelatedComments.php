<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class RelatedComments extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/conversations/{conversationId}/related-comments [operationId: get-related-comments] */
    /**
     * Get related comments
     *
     * Use this method to return social comments related to a specified inbound comment within a conversation.
     * It returns up to 50 older and 50 newer comments that are on the same hierarchy level as the inbound comment.
     *
     */
    public static function get(string $conversationId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RelatedCommentsApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\RelatedComments::class)->get($conversationId);
    }
}
