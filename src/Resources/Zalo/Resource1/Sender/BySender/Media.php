<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Zalo\Resource1\Sender\BySender;

final class Media extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/zalo/1/sender/{sender}/media',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
            502 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            502 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\MediaUploadResponse',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
        ],
    ];

    /**
     * Upload Zalo media
     *
     * Uploads an image file to Zalo and returns the media ID that can be referenced in template content.
     */
    public function post(string $sender, ?\InfobipSDK\Requests\Zalo\Resource1\Sender\BySender\Media\Post $payload = null): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\MediaUploadResponse
    {
        /** @var \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\MediaUploadResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['sender' => $sender], body: $payload);
        return $result;
    }

    private const array GET_BY_MEDIA_ID = [
        'method' => 'GET',
        'path' => '/zalo/1/sender/{sender}/media/{mediaId}',
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
            302 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            410 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            302 => [
                'type' => null,
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
            410 => [
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
        'responseTypes' => [
            200 => [
                'type' => null,
                'schemaNullable' => false,
                'alternatives' => [
                    [
                        'type' => '\\Psr\\Http\\Message\\ResponseInterface',
                        'schemaNullable' => false,
                        'mediaType' => 'image/jpeg',
                        'encoding' => 'binary',
                    ],
                    [
                        'type' => '\\Psr\\Http\\Message\\ResponseInterface',
                        'schemaNullable' => false,
                        'mediaType' => 'image/png',
                        'encoding' => 'binary',
                    ],
                ],
            ],
        ],
        'responseHeaders' => [
            302 => [
                'Location' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Get Zalo media
     *
     * Downloads a media file previously uploaded to this sender.
     */
    public function getByMediaId(\InfobipSDK\PathParams\Zalo\Resource1\Sender\BySender\Media\ByMediaId $identifier): \Psr\Http\Message\ResponseInterface
    {
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MEDIA_ID), path: $identifier);
        return $result;
    }
}
