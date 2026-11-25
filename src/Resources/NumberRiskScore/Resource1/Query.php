<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberRiskScore\Resource1;

final class Query extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/number-risk-score/1/query',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\\NrsApiResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\\NrsApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Query phone number attributes
     *
     * Receives a phone number and user consent, and returns various attributes for the given number.
     * An empty object is returned for any attributes that have no information.
     * Only the attributes enabled for the account are returned.
     */
    public function post(\InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\NrsApiRequest $payload): \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\NrsApiResponse
    {
        /** @var \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\NrsApiResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
