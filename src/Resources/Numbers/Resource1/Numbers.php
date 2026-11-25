<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Numbers\Resource1;

final class Numbers extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/numbers/1/numbers',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            404 => [
                'type' => null,
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
        'responseType' => '\\InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NumbersResponse',
    ];

    /**
     * List owned numbers
     *
     * Use this method to get all the owned numbers for this account.
     */
    public function get(?\InfobipSDK\GetParams\Numbers\Resource1\Numbers $params = null): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumbersResponse
    {
        /** @var \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumbersResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/numbers/1/numbers',
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
        'success' => [
            200,
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Fc7dd544c10bf8ba502ba371088d1382022decf6a1acc2d0fa20f0b7f272047d\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Fc7dd544c10bf8ba502ba371088d1382022decf6a1acc2d0fa20f0b7f272047d\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NumberResponse',
                'schemaNullable' => false,
            ],
            201 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\PurchaseNumberRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Purchase number
     *
     * Using the number ID or number, this method enables you to buy a new number. For buying a US number, only the number should be provided. For all other purchases, only the numberKey must be provided.
     * Documentation: https://www.infobip.com/docs/numbers/buy
     */
    public function post(\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PurchaseNumberRequest $payload): ?\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse
    {
        /** @var ?\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_NUMBER_KEY = [
        'method' => 'DELETE',
        'path' => '/numbers/1/numbers/{numberKey}',
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
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
    ];

    /**
     * Cancel number
     *
     * This method will cancel your number. Any number purchased from Infobip Numbers inventory you cancel will become available in the numbers pool for anyone to buy.
     * Documentation: https://www.infobip.com/docs/numbers/getting-started#cancelling-numbers-over-web-interface-numbers-over-web-interface
     */
    public function deleteByNumberKey(string $numberKey): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_NUMBER_KEY), path: ['numberKey' => $numberKey]);
        return;
    }

    private const array GET_BY_NUMBER_KEY = [
        'method' => 'GET',
        'path' => '/numbers/1/numbers/{numberKey}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            404 => [
                'type' => null,
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
        'responseType' => '\\InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NumberResponse',
    ];

    /**
     * Get single owned number
     *
     * Get information about an owned number using the unique ID of the number.
     */
    public function getByNumberKey(string $numberKey): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse
    {
        /** @var \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_NUMBER_KEY), path: ['numberKey' => $numberKey]);
        return $result;
    }

    private const array PUT_BY_NUMBER_KEY = [
        'method' => 'PUT',
        'path' => '/numbers/1/numbers/{numberKey}',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Fc7dd544c10bf8ba502ba371088d1382022decf6a1acc2d0fa20f0b7f272047d\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Fc7dd544c10bf8ba502ba371088d1382022decf6a1acc2d0fa20f0b7f272047d\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NumberResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\UpdateOwnedNumberRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update owned number
     *
     * Use this method to update the application and the entity, if required, that is linked to a number.
     */
    public function putByNumberKey(string $numberKey, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\UpdateOwnedNumberRequest $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse
    {
        /** @var \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_NUMBER_KEY), $payload, path: ['numberKey' => $numberKey]);
        return $result;
    }

}
