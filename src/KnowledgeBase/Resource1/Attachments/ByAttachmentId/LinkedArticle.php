<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1\Attachments\ByAttachmentId;

final class LinkedArticle extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /knowledge-base/1/attachments/{attachmentId}/linked-article [operationId: get-attachment-linked-article] */
    /**
     * Get attachment linked article
     *
     * Returns the article that is linked to a specific attachment.
     */
    public static function get(string $attachmentId): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\AttachmentLinkedArticleResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Attachments\ByAttachmentId\LinkedArticle::class)->get($attachmentId);
    }

}
