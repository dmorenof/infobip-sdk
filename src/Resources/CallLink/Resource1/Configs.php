<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\CallLink\Resource1;

final class Configs extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/call-link/1/configs',
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
        'responseType' => '\\InfobipSDK\\DTOs\\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\\CallLinkConfigPage',
    ];

    /**
     * Get configurations
     *
     * Use this method to retrieve all call link configurations.
     */
    public function get(?\InfobipSDK\GetParams\CallLink\Resource1\Configs $params = null): \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\CallLinkConfigPage
    {
        /** @var \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\CallLinkConfigPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/call-link/1/configs',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\\CallLinkConfig',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\\CallLinkConfigRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create configuration
     *
     * Use this method to add a new call link configuration.
     */
    public function post(\InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfigRequest $payload): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        /** @var \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/call-link/1/configs/{id}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\\CallLinkConfig',
    ];

    /**
     * Delete configuration
     *
     * Use this method to delete a call link configuration by its ID.
     */
    public function deleteById(string $id): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        /** @var \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/call-link/1/configs/{id}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\\CallLinkConfig',
    ];

    /**
     * Get configuration
     *
     * Use this method to retrieve a call link configuration by its ID.
     */
    public function getById(string $id): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        /** @var \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/call-link/1/configs/{id}',
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
            404 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\\CallLinkConfig',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\\CallLinkConfigRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Partial configuration update
     *
     * Use this method to update a call link configuration.
     * New values for configuration attributes replace the existing ones. If no value is passed in the request, the attribute keeps its value.
     */
    public function patchById(string $id, \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfigRequest $payload): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        /** @var \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_ID), $payload, path: ['id' => $id]);
        return $result;
    }

    private const array PUT_BY_ID = [
        'method' => 'PUT',
        'path' => '/call-link/1/configs/{id}',
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
            404 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\\CallLinkConfig',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\\CallLinkConfigRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update a configuration
     *
     * Use this method to overwrite a call link configuration.
     * New values for configuration attributes replace the existing ones. If no value is passed,
     * the attribute is set to empty or to default, if available.
     */
    public function putById(string $id, \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfigRequest $payload): \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig
    {
        /** @var \InfobipSDK\DTOs\B2a108c706e7d46b95495b161a8c99f5751c046c5e419f6f0780788488a1af14\CallLinkConfig $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_ID), $payload, path: ['id' => $id]);
        return $result;
    }
}
