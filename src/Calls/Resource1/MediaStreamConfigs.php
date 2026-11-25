<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class MediaStreamConfigs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/media-stream-configs [operationId: get-media-stream-configs] */
    /**
     * Get media-stream configs
     *
     * Get media-stream configs.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\MediaStreamConfigs $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\MediaStreamConfigPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\MediaStreamConfigs::class)->get($params);
    }

    /** POST /calls/1/media-stream-configs [operationId: create-media-stream-config] */
    /**
     * Create a media-stream configuration
     *
     * Create a media-stream configuration. For more details, see [documentation](https://www.infobip.com/docs/voice-and-video/calls#media-streaming-understanding-calls-api).
     */
    public static function post(\InfobipSDK\DTOs\N58f57942de1c194257c321b1824e5d3941d9e9f538a9f08ddcb73e6025439f43\MediaStreamConfigRequest $payload): \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\MediaStreamConfigs::class)->post($payload);
    }

    /** DELETE /calls/1/media-stream-configs/{mediaStreamConfigId} [operationId: delete-media-stream-config] */
    /**
     * Delete a media-stream configuration
     *
     * Delete a media-stream configuration.
     */
    public static function deleteByMediaStreamConfigId(string $mediaStreamConfigId): \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\MediaStreamConfigs::class)->deleteByMediaStreamConfigId($mediaStreamConfigId);
    }

    /** GET /calls/1/media-stream-configs/{mediaStreamConfigId} [operationId: get-media-stream-config] */
    /**
     * Get media-stream configuration
     *
     * Get a single media-stream configuration.
     */
    public static function getByMediaStreamConfigId(string $mediaStreamConfigId): \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\MediaStreamConfigs::class)->getByMediaStreamConfigId($mediaStreamConfigId);
    }

    /** PUT /calls/1/media-stream-configs/{mediaStreamConfigId} [operationId: update-media-stream-config] */
    /**
     * Update a media-stream configuration
     *
     * Update a media-stream configuration.
     */
    public static function putByMediaStreamConfigId(string $mediaStreamConfigId, \InfobipSDK\DTOs\N58f57942de1c194257c321b1824e5d3941d9e9f538a9f08ddcb73e6025439f43\MediaStreamConfigRequest $payload): \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\MediaStreamConfigs::class)->putByMediaStreamConfigId($mediaStreamConfigId, $payload);
    }
}
