<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId;

final class TrustedNumbers extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/signals/2/configs/blocking/{configId}/trusted-numbers',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\TrustedNumbersResponse',
        'validation' => [
            'configId' => [
                'minLength' => 32,
                'maxLength' => 32,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\DeleteTrustedNumbersRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Remove trusted phone numbers
     *
     * Remove phone numbers from the trusted list of a blocking configuration, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function delete(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteTrustedNumbersRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumbersResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumbersResponse $result */
        $result = $this->executeBody(self::operation(self::DELETE), $payload, path: ['configId' => $configId]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/signals/2/configs/blocking/{configId}/trusted-numbers',
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
        'success' => [
            201,
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\TrustedNumbersResponse',
        'validation' => [
            'configId' => [
                'minLength' => 32,
                'maxLength' => 32,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\AddTrustedNumbersRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add trusted phone numbers
     *
     * Add phone numbers to the trusted list of a blocking configuration, identified by the configId path parameter. Numbers that are already trusted are left unchanged.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function post(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\AddTrustedNumbersRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumbersResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumbersResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['configId' => $configId]);
        return $result;
    }

    private const array GET_BY_PHONE_NUMBER = [
        'method' => 'GET',
        'path' => '/signals/2/configs/blocking/{configId}/trusted-numbers/{phoneNumber}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\TrustedNumberCheckResponse',
        'validation' => [
            'configId' => [
                'minLength' => 32,
                'maxLength' => 32,
            ],
        ],
    ];

    /**
     * Check if a phone number is trusted
     *
     * Check whether a single phone number is on the trusted list of a blocking configuration, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function getByPhoneNumber(\InfobipSDK\PathParams\Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers\ByPhoneNumber $identifier): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumberCheckResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumberCheckResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PHONE_NUMBER), path: $identifier);
        return $result;
    }

}
