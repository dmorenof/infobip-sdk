<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Signals\Resource1;

final class TrustedMsisdns extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/signals/1/trusted-msisdns',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\\TrustedMsisdnRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Remove phone numbers from a list
     *
     * Remove phone numbers from a trusted MSISDN list.
     *
     *
     * **Intended for non-CPaaSX accounts.** CPaaSX accounts should use the CPaaSX Signals trusted MSISDNs API.
     *
     */
    public function delete(\InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\TrustedMsisdnRequest $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::DELETE), $payload);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/signals/1/trusted-msisdns',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\\TrustedMsisdnRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add phone numbers to a list
     *
     * Add phone numbers to a trusted MSISDN list so that Signals never blocks messages sent to these numbers.
     *
     *
     * **Intended for non-CPaaSX accounts.** CPaaSX accounts should use the CPaaSX Signals trusted MSISDNs API.
     *
     */
    public function post(\InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\TrustedMsisdnRequest $payload): mixed
    {
        /** @var mixed $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
