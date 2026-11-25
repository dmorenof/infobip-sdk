<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Calls\ByIdentifier;

final class Permissions extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/whatsapp/1/senders/{sender}/calls/{identifier}/permissions',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\\WhatsAppCallingPermissionResponse',
        'validation' => [
            'identifier' => [
                'pattern' => '^([0-9]{1,15}|[A-Z]{2}\\..*)$',
            ],
            'sender' => [
                'minLength' => 1,
                'maxLength' => 15,
                'pattern' => '[0-9]+',
            ],
        ],
    ];

    /**
     * Get calling permission
     *
     * Get calling permission info of WhatsApp sender for specified end user identifier, including status, allowed actions, and limitations.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function get(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Calls\ByIdentifier\Permissions $identifier): \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppCallingPermissionResponse
    {
        /** @var \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppCallingPermissionResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }
}
