<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Webrtc\Resource1\Recordings\ById;

final class Download extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/webrtc/1/recordings/{id}/download',
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
            206,
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
        'responseType' => '\\Psr\\Http\\Message\\ResponseInterface',
        'responseMediaType' => 'application/octet-stream',
        'responseEncoding' => 'binary',
    ];

    /**
     * Download WebRTC recording file
     *
     * This method allows downloading a WebRTC recording file based on its ID.
     */
    public function get(string $id, ?\InfobipSDK\GetParams\Webrtc\Resource1\Recordings\ById\Download $params = null): \Psr\Http\Message\ResponseInterface
    {
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
