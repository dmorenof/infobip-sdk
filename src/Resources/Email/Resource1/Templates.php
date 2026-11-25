<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1;

final class Templates extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/email/1/templates',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\\EmailTemplateListPage',
    ];

    /**
     * Get email templates
     *
     * Retrieves a list of available email templates.
     */
    public function get(?\InfobipSDK\GetParams\Email\Resource1\Templates $params = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplateListPage
    {
        /** @var \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplateListPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/email/1/templates',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\\EmailTemplate',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'attachments' => [
                'contentType' => 'text/plain',
            ],
            'from' => [
                'contentType' => 'text/plain',
            ],
            'html' => [
                'contentType' => 'text/plain',
            ],
            'landingPage' => [
                'contentType' => 'text/plain',
            ],
            'name' => [
                'contentType' => 'text/plain',
            ],
            'preheader' => [
                'contentType' => 'text/plain',
            ],
            'replyTo' => [
                'contentType' => 'text/plain',
            ],
            'subject' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Create email template
     *
     * Creates a new email template with the provided details.
     */
    public function post(?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\CreateEmailTemplateRequest $payload = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate
    {
        /** @var \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_TEMPLATE_ID = [
        'method' => 'DELETE',
        'path' => '/email/1/templates/{templateId}',
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
     * Delete email template
     *
     * Deletes a specific email template by its ID.
     */
    public function deleteByTemplateId(int $templateId): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_TEMPLATE_ID), path: ['templateId' => $templateId]);
        return;
    }

    private const array GET_BY_TEMPLATE_ID = [
        'method' => 'GET',
        'path' => '/email/1/templates/{templateId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\\EmailTemplate',
    ];

    /**
     * Get email template
     *
     * Retrieves the details of a specific email template by its identifier (ID).
     */
    public function getByTemplateId(int $templateId): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate
    {
        /** @var \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TEMPLATE_ID), path: ['templateId' => $templateId]);
        return $result;
    }

    private const array PATCH_BY_TEMPLATE_ID = [
        'method' => 'PATCH',
        'path' => '/email/1/templates/{templateId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\\EmailTemplate',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'attachments' => [
                'contentType' => 'text/plain',
            ],
            'from' => [
                'contentType' => 'text/plain',
            ],
            'html' => [
                'contentType' => 'text/plain',
            ],
            'landingPage' => [
                'contentType' => 'text/plain',
            ],
            'name' => [
                'contentType' => 'text/plain',
            ],
            'preheader' => [
                'contentType' => 'text/plain',
            ],
            'replyTo' => [
                'contentType' => 'text/plain',
            ],
            'subject' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Patch email template
     *
     * Partially updates an existing email template with the provided changes.
     */
    public function patchByTemplateId(int $templateId, ?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\CreateEmailTemplateRequest $payload = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate
    {
        /** @var \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_TEMPLATE_ID), path: ['templateId' => $templateId], body: $payload);
        return $result;
    }

    private const array PUT_BY_TEMPLATE_ID = [
        'method' => 'PUT',
        'path' => '/email/1/templates/{templateId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\\EmailTemplate',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'attachments' => [
                'contentType' => 'text/plain',
            ],
            'from' => [
                'contentType' => 'text/plain',
            ],
            'html' => [
                'contentType' => 'text/plain',
            ],
            'landingPage' => [
                'contentType' => 'text/plain',
            ],
            'name' => [
                'contentType' => 'text/plain',
            ],
            'preheader' => [
                'contentType' => 'text/plain',
            ],
            'replyTo' => [
                'contentType' => 'text/plain',
            ],
            'subject' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Update email template
     *
     * Updates an existing email template with new data.
     */
    public function putByTemplateId(int $templateId, ?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\CreateEmailTemplateRequest $payload = null): \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate
    {
        /** @var \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_TEMPLATE_ID), path: ['templateId' => $templateId], body: $payload);
        return $result;
    }

}
