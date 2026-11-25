<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Webrtc\Resource1;

final class WebrtcPushConfig extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/webrtc/1/webrtc-push-config',
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
            400 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\\PushConfigurationPageResponse',
    ];

    /**
     * Get WebRTC push configurations
     *
     * Get a page of WebRTC push configurations matching the query criteria.
     */
    public function get(\InfobipSDK\GetParams\Webrtc\Resource1\WebrtcPushConfig $params): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationPageResponse
    {
        /** @var \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationPageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/webrtc/1/webrtc-push-config',
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
            400 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\\PushConfigurationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\\PushConfigurationRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create WebRTC push configuration
     *
     * Create and configure a new WebRTC push configuration.
     */
    public function post(\InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationRequest $payload): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse
    {
        /** @var \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/webrtc/1/webrtc-push-config/{id}',
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
            200,
            204,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
     * Delete WebRTC push configuration
     *
     * Delete WebRTC push configuration for the given id.
     */
    public function deleteById(string $id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/webrtc/1/webrtc-push-config/{id}',
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
            400 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\\PushConfigurationResponse',
    ];

    /**
     * Get WebRTC push configuration
     *
     * Get a single WebRTC push configuration and its details.
     */
    public function getById(string $id): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse
    {
        /** @var \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/webrtc/1/webrtc-push-config/{id}',
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
            400 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\\PushConfigurationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\\PushConfigurationRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Patch WebRTC push configuration
     *
     * Change only specific fields of the WebRTC push configuration. Fields left out of the request will remain unchanged.
     */
    public function patchById(string $id, \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationRequest $payload): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse
    {
        /** @var \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_ID), $payload, path: ['id' => $id]);
        return $result;
    }

    private const array PUT_BY_ID = [
        'method' => 'PUT',
        'path' => '/webrtc/1/webrtc-push-config/{id}',
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
            400 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\\PushConfigurationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\\PushConfigurationRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update WebRTC push configuration
     *
     * Change details of an existing WebRTC push configuration.
     */
    public function putById(string $id, \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationRequest $payload): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse
    {
        /** @var \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_ID), $payload, path: ['id' => $id]);
        return $result;
    }

}
