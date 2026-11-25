<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\CallLink\Resource1;

final class Links extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/call-link/1/links',
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
            400 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\\CallLinkPage',
    ];

    /**
     * Get call links
     *
     * Use this method to retrieve all call links.
     */
    public function get(?\InfobipSDK\GetParams\CallLink\Resource1\Links $params = null): \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\CallLinkPage
    {
        /** @var \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\CallLinkPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/call-link/1/links',
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
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\\CallLinkResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\\CallLinkRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create call link
     *
     * Create a link to send to someone who will then initiate a call.
     */
    public function post(\InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLinkRequest $payload): \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLinkResponse
    {
        /** @var \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLinkResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/call-link/1/links/{id}',
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
            404 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\\CallLink',
    ];

    /**
     * Delete call link
     *
     * Use this method to delete a call link by its ID.
     */
    public function deleteById(string $id): \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLink
    {
        /** @var \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLink $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/call-link/1/links/{id}',
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
            400 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\\CallLink',
    ];

    /**
     * Get call link
     *
     * Use this method to get a call link by its ID.
     */
    public function getById(string $id): \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLink
    {
        /** @var \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLink $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }

}
