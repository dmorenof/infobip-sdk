<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1;

final class Templates extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/whatsapp/1/templates',
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
        'responseType' => '\\InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TemplatesApiResponsePaginated',
        'querySerialization' => [
            'category' => 'multi',
            'language' => 'multi',
            'sender' => 'multi',
            'status' => 'multi',
        ],
    ];

    /**
     * Get account WhatsApp templates
     *
     * Retrieve all templates associated with your account based on the provided filter criteria.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function get(?\InfobipSDK\GetParams\Whatsapp\Resource1\Templates $params = null): \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\TemplatesApiResponsePaginated
    {
        /** @var \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\TemplatesApiResponsePaginated $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
