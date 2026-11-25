<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1;

final class MediaStreamConfigs extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/calls/1/media-stream-configs',
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
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\\MediaStreamConfigPage',
    ];

    /**
     * Get media-stream configs
     *
     * Get media-stream configs.
     */
    public function get(?\InfobipSDK\GetParams\Calls\Resource1\MediaStreamConfigs $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\MediaStreamConfigPage
    {
        /** @var \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\MediaStreamConfigPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/calls/1/media-stream-configs',
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
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\\MediaStreamConfigResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N58f57942de1c194257c321b1824e5d3941d9e9f538a9f08ddcb73e6025439f43\\MediaStreamConfigRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create a media-stream configuration
     *
     * Create a media-stream configuration. For more details, see [documentation](https://www.infobip.com/docs/voice-and-video/calls#media-streaming-understanding-calls-api).
     */
    public function post(\InfobipSDK\DTOs\N58f57942de1c194257c321b1824e5d3941d9e9f538a9f08ddcb73e6025439f43\MediaStreamConfigRequest $payload): \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
    {
        /** @var \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_MEDIA_STREAM_CONFIG_ID = [
        'method' => 'DELETE',
        'path' => '/calls/1/media-stream-configs/{mediaStreamConfigId}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\\MediaStreamConfigResponse',
    ];

    /**
     * Delete a media-stream configuration
     *
     * Delete a media-stream configuration.
     */
    public function deleteByMediaStreamConfigId(string $mediaStreamConfigId): \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
    {
        /** @var \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_MEDIA_STREAM_CONFIG_ID), path: ['mediaStreamConfigId' => $mediaStreamConfigId]);
        return $result;
    }

    private const array GET_BY_MEDIA_STREAM_CONFIG_ID = [
        'method' => 'GET',
        'path' => '/calls/1/media-stream-configs/{mediaStreamConfigId}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\\MediaStreamConfigResponse',
    ];

    /**
     * Get media-stream configuration
     *
     * Get a single media-stream configuration.
     */
    public function getByMediaStreamConfigId(string $mediaStreamConfigId): \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
    {
        /** @var \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MEDIA_STREAM_CONFIG_ID), path: ['mediaStreamConfigId' => $mediaStreamConfigId]);
        return $result;
    }

    private const array PUT_BY_MEDIA_STREAM_CONFIG_ID = [
        'method' => 'PUT',
        'path' => '/calls/1/media-stream-configs/{mediaStreamConfigId}',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\\MediaStreamConfigResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N58f57942de1c194257c321b1824e5d3941d9e9f538a9f08ddcb73e6025439f43\\MediaStreamConfigRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update a media-stream configuration
     *
     * Update a media-stream configuration.
     */
    public function putByMediaStreamConfigId(string $mediaStreamConfigId, \InfobipSDK\DTOs\N58f57942de1c194257c321b1824e5d3941d9e9f538a9f08ddcb73e6025439f43\MediaStreamConfigRequest $payload): \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
    {
        /** @var \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_MEDIA_STREAM_CONFIG_ID), $payload, path: ['mediaStreamConfigId' => $mediaStreamConfigId]);
        return $result;
    }
}
