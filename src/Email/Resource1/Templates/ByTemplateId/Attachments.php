<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\Templates\ByTemplateId;

final class Attachments extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/templates/{templateId}/attachments [operationId: get-email-template-attachments] */
    /**
     * Get email template attachments
     *
     * Retrieves a list of attachments associated with a specific email template.
     */
    public static function get(int $templateId): \InfobipSDK\Collections\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate\AttachmentsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates\ByTemplateId\Attachments::class)->get($templateId);
    }

    /** POST /email/1/templates/{templateId}/attachments [operationId: upload-email-template-attachment] */
    /**
     * Upload email template attachment
     *
     * Uploads an attachment to a specific email template.
     */
    public static function post(int $templateId, ?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\Base64EncodedFile $payload = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\Attachment
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates\ByTemplateId\Attachments::class)->post($templateId, $payload);
    }

    /** DELETE /email/1/templates/{templateId}/attachments/{attachmentId} [operationId: delete-email-template-attachment] */
    /**
     * Delete email template attachment
     *
     * Removes a specific attachment from an email template.
     */
    public static function deleteByAttachmentId(\InfobipSDK\PathParams\Email\Resource1\Templates\ByTemplateId\Attachments\ByAttachmentId $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates\ByTemplateId\Attachments::class)->deleteByAttachmentId($identifier);
    }
}
