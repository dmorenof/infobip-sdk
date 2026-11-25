<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Voice\RinglessVoicemail\Resource1;

final class Audio extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/voice/ringless-voicemail/1/audio',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\\AudioListResponse',
    ];

    /**
     * List uploaded audio files
     *
     * List audio files previously uploaded for use in ringless voicemail messages.
     *
     * Results are ordered newest first. Use this endpoint to get more information about your uploaded audio files.
     */
    public function get(?\InfobipSDK\GetParams\Voice\RinglessVoicemail\Resource1\Audio $params = null): \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioListResponse
    {
        /** @var \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioListResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/voice/ringless-voicemail/1/audio',
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
        'responseType' => '\\InfobipSDK\\DTOs\\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\\AudioUploadResponse',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
        ],
    ];

    /**
     * Upload audio file
     *
     * Upload an audio file for use in ringless voicemail messages.
     *
     * Supported formats: MP3, WAV, M4A. Maximum file size: 5 MB. Minimum audio duration: 5 seconds — files shorter than 5 seconds will be rejected by the carrier after delivery attempt.
     *
     * The returned audioId can be used when sending a ringless voicemail with content type AUDIO_ID. Audio files are retained indefinitely until explicitly deleted.
     */
    public function post(\InfobipSDK\Requests\Voice\RinglessVoicemail\Resource1\Audio\Post $payload): \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioUploadResponse
    {
        /** @var \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioUploadResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_AUDIO_ID = [
        'method' => 'DELETE',
        'path' => '/voice/ringless-voicemail/1/audio/{audioId}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
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
    ];

    /**
     * Delete audio file
     *
     * Delete a previously uploaded audio file.
     *
     * After deletion, the audioId can no longer be used for sending messages. Any pending messages that reference this audioId will fail.
     */
    public function deleteByAudioId(string $audioId): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_AUDIO_ID), path: ['audioId' => $audioId]);
        return;
    }

}
