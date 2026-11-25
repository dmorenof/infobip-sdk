<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\Templates\ByTemplateId;

final class Preview extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/1/templates/{templateId}/preview [operationId: generate-email-template-preview] */
    /**
     * Generate email template preview
     *
     * Generates a rendered preview of an email template by replacing placeholders with the provided key-value data.
     */
    public static function post(int $templateId, ?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplatePreviewRequest $payload = null): string
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates\ByTemplateId\Preview::class)->post($templateId, $payload);
    }

}
