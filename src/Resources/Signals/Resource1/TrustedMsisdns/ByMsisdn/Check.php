<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Signals\Resource1\TrustedMsisdns\ByMsisdn;

final class Check extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/signals/1/trusted-msisdns/{msisdn}/check',
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
            400 => '\\InfobipSDK\\DTOs\\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\\ErrorResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\\ErrorResponse',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\\TrustedMsisdnCheckResponse',
    ];

    /**
     * Check for phone numbers on a list
     *
     * Check whether a phone number exists on a trusted MSISDN list.
     *
     *
     * **Intended for non-CPaaSX accounts.** CPaaSX accounts should use the CPaaSX Signals trusted MSISDNs API.
     *
     */
    public function get(string $msisdn): \InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\TrustedMsisdnCheckResponse
    {
        /** @var \InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\TrustedMsisdnCheckResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['msisdn' => $msisdn]);
        return $result;
    }
}
