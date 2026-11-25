<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1;

final class Attachments extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /knowledge-base/1/attachments [operationId: upload-attachment] */
    /**
     * Upload attachment
     *
     * Uploads a file as a new knowledge base attachment. The file is validated and stored.
     */
    public static function post(?\InfobipSDK\Requests\KnowledgeBase\Resource1\Attachments\Post $payload = null): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\AttachmentDetailResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Attachments::class)->post($payload);
    }

    /** DELETE /knowledge-base/1/attachments/{attachmentId} [operationId: delete-attachment] */
    /**
     * Delete attachment
     *
     * Deletes an attachment by its identifier.
     */
    public static function deleteByAttachmentId(string $attachmentId): void
    {
        self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Attachments::class)->deleteByAttachmentId($attachmentId);
    }

    /** GET /knowledge-base/1/attachments/{attachmentId} [operationId: get-attachment-details] */
    /**
     * Get attachment details
     *
     * Returns the details of a specific attachment including its metadata and download URL.
     */
    public static function getByAttachmentId(string $attachmentId): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\AttachmentDetailResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Attachments::class)->getByAttachmentId($attachmentId);
    }
}
