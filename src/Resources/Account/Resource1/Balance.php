<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Account\Resource1;

final class Balance extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/account/1/balance',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\\AccountBalance',
    ];

    /**
     * Get current account balance
     *
     * Returns the current account balance displayed in the currency configured for the account.
     */
    public function get(): \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\AccountBalance
    {
        /** @var \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\AccountBalance $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
