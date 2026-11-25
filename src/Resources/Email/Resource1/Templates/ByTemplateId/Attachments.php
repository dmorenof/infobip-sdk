<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\Templates\ByTemplateId;

final class Attachments extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/email/1/templates/{templateId}/attachments',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Collections\\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\\EmailTemplate\\AttachmentsCollection',
    ];

    /**
     * Get email template attachments
     *
     * Retrieves a list of attachments associated with a specific email template.
     */
    public function get(int $templateId): \InfobipSDK\Collections\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate\AttachmentsCollection
    {
        /** @var \InfobipSDK\Collections\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate\AttachmentsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['templateId' => $templateId]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/email/1/templates/{templateId}/attachments',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\\Attachment',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'contentType' => [
                'contentType' => 'text/plain',
            ],
            'data' => [
                'contentType' => 'text/plain',
            ],
            'fileName' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Upload email template attachment
     *
     * Uploads an attachment to a specific email template.
     */
    public function post(int $templateId, ?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\Base64EncodedFile $payload = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\Attachment
    {
        /** @var \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\Attachment $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['templateId' => $templateId], body: $payload);
        return $result;
    }

    private const array DELETE_BY_ATTACHMENT_ID = [
        'method' => 'DELETE',
        'path' => '/email/1/templates/{templateId}/attachments/{attachmentId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete email template attachment
     *
     * Removes a specific attachment from an email template.
     */
    public function deleteByAttachmentId(\InfobipSDK\PathParams\Email\Resource1\Templates\ByTemplateId\Attachments\ByAttachmentId $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ATTACHMENT_ID), path: $identifier);
        return;
    }
}
