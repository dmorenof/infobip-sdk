<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Account\Resource1;

final class FreeMessages extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/account/1/free-messages',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\\FreeMessagesResponse',
    ];

    /**
     * Get remaining free messages
     *
     * Returns the remaining number of free messages available for the account.
     */
    public function get(): \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\FreeMessagesResponse
    {
        /** @var \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\FreeMessagesResponse $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
