<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\CallLink\Resource1;

final class Recordings extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/call-link/1/recordings',
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
        'responseType' => '\\InfobipSDK\\DTOs\\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\\RecordingPage',
    ];

    /**
     * Get call link recordings
     *
     * Use this method to filter and retrieve call link recordings.
     */
    public function get(?\InfobipSDK\GetParams\CallLink\Resource1\Recordings $params = null): \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\RecordingPage
    {
        /** @var \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\RecordingPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/call-link/1/recordings/{id}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N73e6f414ccb2e1e41274c061b50cf5765f69b642a3e0cca54b0248eb3baf086d\\RecordingResponse',
    ];

    /**
     * Delete call link recording
     *
     * Use this method to delete a call link recording by its ID.
     */
    public function deleteById(string $id, ?\InfobipSDK\DeleteParams\CallLink\Resource1\Recordings\ById $params = null): \InfobipSDK\DTOs\N73e6f414ccb2e1e41274c061b50cf5765f69b642a3e0cca54b0248eb3baf086d\RecordingResponse
    {
        /** @var \InfobipSDK\DTOs\N73e6f414ccb2e1e41274c061b50cf5765f69b642a3e0cca54b0248eb3baf086d\RecordingResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
