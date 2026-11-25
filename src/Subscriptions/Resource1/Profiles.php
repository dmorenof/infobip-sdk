<?php

declare(strict_types=1);

namespace InfobipSDK\Subscriptions\Resource1;

final class Profiles extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /subscriptions/1/profiles [operationId: get-profiles] */
    /**
     * Get notification profiles
     *
     * Returns a list of all notification profiles for your account with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Subscriptions\Resource1\Profiles $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfilePage
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Profiles::class)->get($params);
    }

    /** POST /subscriptions/1/profiles [operationId: create-profile] */
    /**
     * Create notification profile
     *
     * This method will create a new notification profile. You can provide an ID of existing security settings if you wish to reuse them or submit full definition, if you want to create a new one.
     */
    public static function post(\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Profiles::class)->post($payload);
    }

    /** DELETE /subscriptions/1/profiles/{profileId} [operationId: delete-profile] */
    /**
     * Delete notification profile
     *
     * This method will delete a notification profile specified by ID.
     */
    public static function deleteByProfileId(string $profileId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Profiles::class)->deleteByProfileId($profileId);
    }

    /** GET /subscriptions/1/profiles/{profileId} [operationId: get-profile] */
    /**
     * Get single notification profile
     *
     * Returns a specific notification profile by ID.
     */
    public static function getByProfileId(string $profileId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Profiles::class)->getByProfileId($profileId);
    }

    /** PUT /subscriptions/1/profiles/{profileId} [operationId: update-profile] */
    /**
     * Update notification profile
     *
     * This method allows you to update a notification profile. You can change its properties and provide an ID of security settings if you wish to change them.
     */
    public static function putByProfileId(string $profileId, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\NoIdProfileRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Profiles::class)->putByProfileId($profileId, $payload);
    }
}
