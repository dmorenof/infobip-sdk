<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource2\Senders\BySender;

final class Templates extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/whatsapp/2/senders/{sender}/templates',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\\TemplatesApiResponse',
    ];

    /**
     * Get WhatsApp Templates
     *
     * Get all the templates and their statuses for a given sender.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function get(string $sender): \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplatesApiResponse
    {
        /** @var \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplatesApiResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['sender' => $sender]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/whatsapp/2/senders/{sender}/templates',
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
            400 => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\\TemplateApiResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\\TemplatePublicApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create WhatsApp Template
     *
     * Create a WhatsApp template. Once created, Infobip submits the template for WhatsApp's review and approval. When approved, a template can be sent to end users. Refer to [template guidelines](https://www.infobip.com/docs/whatsapp/remaining-compliant#message-templates) for additional info.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function post(string $sender, \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplatePublicApiRequest $payload): \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse
    {
        /** @var \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['sender' => $sender]);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/whatsapp/2/senders/{sender}/templates/{id}',
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
            400 => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'minLength' => 1,
                'pattern' => '^[a-z0-9_]{1,512}$',
            ],
        ],
    ];

    /**
     * Delete WhatsApp Template
     *
     * Delete WhatsApp template.
     * * If registered in multiple languages, deleting the message template will also delete all its languages.
     * * The template will be deleted for all senders registered under the same WhatsApp Business Account (WABA).
     * * The system will attempt to deliver sent messages for 30 days, regardless of the template deletion.
     * * Once deleted, the name of the approved template cannot be reused for 30 days.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function deleteById(\InfobipSDK\PathParams\Whatsapp\Resource2\Senders\BySender\Templates\ById $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: $identifier);
        return;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/whatsapp/2/senders/{sender}/templates/{id}',
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
            400 => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\\TemplateApiResponse',
    ];

    /**
     * Get WhatsApp Template
     *
     * Get a single template with its status for a given template ID.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function getById(\InfobipSDK\PathParams\Whatsapp\Resource2\Senders\BySender\Templates\ById $identifier): \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse
    {
        /** @var \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: $identifier);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/whatsapp/2/senders/{sender}/templates/{id}',
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
            400 => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N8ea2c7a3b5efbaf9015a5275da389c3449f0ab4f7dfbf8f3f925836e68df04d6\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\\TemplateApiResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\\TemplateEditPublicApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Edit WhatsApp Template
     *
     * Edit a WhatsApp template. Once edited, Infobip submits the template for WhatsApp's review and approval. When approved, a template can be sent to end users. Refer to [template guidelines](https://www.infobip.com/docs/whatsapp/remaining-compliant#message-templates) for additional info.
     * * Only templates with an approved, rejected, or paused status can be edited.
     * * Use the structure provided in the [Create WhatsApp Template](#channels/whatsapp/whatsapp-service-management/create-whatsapp-template) endpoint.
     * * Category of an approved template cannot be edited.
     * * Approved templates can be edited up to 10 times in a 30-day window, or 1 time in a 24-hour window. Rejected or paused templates can be edited an unlimited number of times.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function patchById(\InfobipSDK\PathParams\Whatsapp\Resource2\Senders\BySender\Templates\ById $identifier, \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateEditPublicApiRequest $payload): \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse
    {
        /** @var \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_ID), $payload, path: $identifier);
        return $result;
    }

}
