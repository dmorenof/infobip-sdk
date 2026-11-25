<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Account\Resource1;

final class TotalBalance extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/account/1/total-balance',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\\BalanceInfoResponse',
    ];

    /**
     * Get account balance with free messages
     *
     * Returns the current account balance, monthly balance, monthly and total credit limit, currency details, and the remaining count of free messages per service type.
     */
    public function get(): \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\BalanceInfoResponse
    {
        /** @var \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\BalanceInfoResponse $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
