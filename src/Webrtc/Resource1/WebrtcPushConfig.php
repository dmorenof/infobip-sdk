<?php

declare(strict_types=1);

namespace InfobipSDK\Webrtc\Resource1;

final class WebrtcPushConfig extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /webrtc/1/webrtc-push-config [operationId: get-push-configurations] */
    /**
     * Get WebRTC push configurations
     *
     * Get a page of WebRTC push configurations matching the query criteria.
     */
    public static function get(\InfobipSDK\GetParams\Webrtc\Resource1\WebrtcPushConfig $params): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\WebrtcPushConfig::class)->get($params);
    }

    /** POST /webrtc/1/webrtc-push-config [operationId: save-push-configuration] */
    /**
     * Create WebRTC push configuration
     *
     * Create and configure a new WebRTC push configuration.
     */
    public static function post(\InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationRequest $payload): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\WebrtcPushConfig::class)->post($payload);
    }

    /** DELETE /webrtc/1/webrtc-push-config/{id} [operationId: delete-push-configuration] */
    /**
     * Delete WebRTC push configuration
     *
     * Delete WebRTC push configuration for the given id.
     */
    public static function deleteById(string $id): void
    {
        self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\WebrtcPushConfig::class)->deleteById($id);
    }

    /** GET /webrtc/1/webrtc-push-config/{id} [operationId: get-push-configuration] */
    /**
     * Get WebRTC push configuration
     *
     * Get a single WebRTC push configuration and its details.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\WebrtcPushConfig::class)->getById($id);
    }

    /** PATCH /webrtc/1/webrtc-push-config/{id} [operationId: patch-push-configuration] */
    /**
     * Patch WebRTC push configuration
     *
     * Change only specific fields of the WebRTC push configuration. Fields left out of the request will remain unchanged.
     */
    public static function patchById(string $id, \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationRequest $payload): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\WebrtcPushConfig::class)->patchById($id, $payload);
    }

    /** PUT /webrtc/1/webrtc-push-config/{id} [operationId: update-push-configuration] */
    /**
     * Update WebRTC push configuration
     *
     * Change details of an existing WebRTC push configuration.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationRequest $payload): \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\WebrtcPushConfig::class)->putById($id, $payload);
    }
}
