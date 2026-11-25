<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\CallLink\Resource1;

final class Images extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/call-link/1/images',
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
        'responseType' => '\\InfobipSDK\\DTOs\\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\\ImagePage',
    ];

    /**
     * Get images
     *
     * Use this method to retrieve all images.
     */
    public function get(?\InfobipSDK\GetParams\CallLink\Resource1\Images $params = null): \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\ImagePage
    {
        /** @var \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\ImagePage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/call-link/1/images/{id}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\\ImageResponse',
    ];

    /**
     * Delete image
     *
     * Use this method to delete a call link configuration image.
     */
    public function deleteById(string $id): \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse
    {
        /** @var \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/call-link/1/images/{id}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\\ImageResponse',
    ];

    /**
     * Get image
     *
     * Use this method to get an image.
     */
    public function getById(string $id): \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse
    {
        /** @var \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }

}
