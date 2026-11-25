<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender;

final class Templates extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/whatsapp/1/senders/{sender}/templates',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\\V1TemplatesApiResponse',
    ];

    /**
     * Get WhatsApp Templates
     *
     * Get all the templates and their statuses for a given sender. This version is deprecated as of June 29th 2022, meaning no fixes/updates will be provided and no new parameters will be added. This API will be deleted at the end of the year. Please use the [latest version](#channels/whatsapp/get-whatsapp-templates).
     * Documentation: https://www.infobip.com/docs/whatsapp
     *
     * @deprecated
     */
    public function get(string $sender): \InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplatesApiResponse
    {
        /** @var \InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplatesApiResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['sender' => $sender]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/whatsapp/1/senders/{sender}/templates',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\\V1TemplateApiResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N8cb345d2b2e2a0cd5a7383bf2012768938eaa465c6e4f6554958ac7f4a58aa3f\\V1TemplatePublicApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create WhatsApp Template
     *
     * Create a WhatsApp template. Created template will be submitted for WhatsApp's review and approval. Once approved, template can be sent to end-users. Refer to [template guidelines](https://www.infobip.com/docs/whatsapp/message-types#guidelines-amp-best-practices) for additional info. This version is deprecated as of June 29th 2022, meaning no fixes/updates will be provided and no new parameters will be added. This API will be deleted at the end of the year. Please use the [latest version](#channels/whatsapp/create-whatsapp-template).
     * Documentation: https://www.infobip.com/docs/whatsapp
     *
     * @deprecated
     */
    public function post(string $sender, \InfobipSDK\DTOs\N8cb345d2b2e2a0cd5a7383bf2012768938eaa465c6e4f6554958ac7f4a58aa3f\V1TemplatePublicApiRequest $payload): \InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplateApiResponse
    {
        /** @var \InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplateApiResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['sender' => $sender]);
        return $result;
    }

}
