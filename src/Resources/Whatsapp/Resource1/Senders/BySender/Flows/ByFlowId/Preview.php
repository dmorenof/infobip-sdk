<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId;

final class Preview extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/whatsapp/1/senders/{sender}/flows/{flowId}/preview',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\\FlowPreview',
        'validation' => [
            'flowId' => [
                'minLength' => 1,
            ],
            'sender' => [
                'minLength' => 1,
            ],
        ],
    ];

    /**
     * Get WhatsApp Flow's preview
     *
     * Get flow's preview URL. Link does not require login and will expire in 30 days.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function get(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Preview $identifier): \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowPreview
    {
        /** @var \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowPreview $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

}
