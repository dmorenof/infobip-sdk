<?php

declare(strict_types=1);

namespace InfobipSDK\Subscriptions\Resource1;

final class Security extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /subscriptions/1/security [operationId: get-security-settings] */
    /**
     * Get security settings
     *
     * Returns a list of security settings for your account with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Subscriptions\Resource1\Security $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Security::class)->get($params);
    }

    /** POST /subscriptions/1/security [operationId: create-security-settings] */
    /**
     * Create security settings
     *
     * This method will create new security settings.
     */
    public static function post(\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Security::class)->post($payload);
    }

    /** DELETE /subscriptions/1/security/{authId} [operationId: delete-security-settings] */
    /**
     * Delete security settings
     *
     * This method will delete the security settings item by ID.
     */
    public static function deleteByAuthId(string $authId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Security::class)->deleteByAuthId($authId);
    }

    /** GET /subscriptions/1/security/{authId} [operationId: get-security-setting] */
    /**
     * Get single security settings
     *
     * Returns specific security settings item by ID.
     */
    public static function getByAuthId(string $authId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Security::class)->getByAuthId($authId);
    }

    /** PUT /subscriptions/1/security/{authId} [operationId: update-security-settings] */
    /**
     * Update security settings
     *
     * This method allows you to update the security settings.
     */
    public static function putByAuthId(string $authId, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\NoIdSecurityRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Security::class)->putByAuthId($authId, $payload);
    }

}
