<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/templates [operationId: get-email-templates] */
    /**
     * Get email templates
     *
     * Retrieves a list of available email templates.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource1\Templates $params = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplateListPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates::class)->get($params);
    }

    /** POST /email/1/templates [operationId: create-email-template] */
    /**
     * Create email template
     *
     * Creates a new email template with the provided details.
     */
    public static function post(?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\CreateEmailTemplateRequest $payload = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates::class)->post($payload);
    }

    /** DELETE /email/1/templates/{templateId} [operationId: delete-email-template] */
    /**
     * Delete email template
     *
     * Deletes a specific email template by its ID.
     */
    public static function deleteByTemplateId(int $templateId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates::class)->deleteByTemplateId($templateId);
    }

    /** GET /email/1/templates/{templateId} [operationId: get-email-template] */
    /**
     * Get email template
     *
     * Retrieves the details of a specific email template by its identifier (ID).
     */
    public static function getByTemplateId(int $templateId): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates::class)->getByTemplateId($templateId);
    }

    /** PATCH /email/1/templates/{templateId} [operationId: patch-email-template] */
    /**
     * Patch email template
     *
     * Partially updates an existing email template with the provided changes.
     */
    public static function patchByTemplateId(int $templateId, ?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\CreateEmailTemplateRequest $payload = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates::class)->patchByTemplateId($templateId, $payload);
    }

    /** PUT /email/1/templates/{templateId} [operationId: update-email-template] */
    /**
     * Update email template
     *
     * Updates an existing email template with new data.
     */
    public static function putByTemplateId(int $templateId, ?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\CreateEmailTemplateRequest $payload = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Templates::class)->putByTemplateId($templateId, $payload);
    }
}
