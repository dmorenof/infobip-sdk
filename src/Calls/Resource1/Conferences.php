<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class Conferences extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/conferences [operationId: get-conferences] */
    /**
     * Get conferences
     *
     * Get conferences with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Conferences $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\ConferencePage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences::class)->get($params);
    }

    /** POST /calls/1/conferences [operationId: create-conference] */
    /**
     * Create conference
     *
     * Create a conference.
     */
    public static function post(\InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\ConferenceRequest $payload): \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences::class)->post($payload);
    }

    /** GET /calls/1/conferences/{conferenceId} [operationId: get-conference] */
    /**
     * Get conference
     *
     * Get a single conference.
     */
    public static function getByConferenceId(string $conferenceId): \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences::class)->getByConferenceId($conferenceId);
    }

    /** PATCH /calls/1/conferences/{conferenceId} [operationId: update-conference] */
    /**
     * Update all calls
     *
     * Update all calls in a conference.
     */
    public static function patchByConferenceId(string $conferenceId, \InfobipSDK\DTOs\N02ec6d748bd9b366e5aeae1eaf03d6007ae57830d7d55344122f68a2478c9f84\UpdateRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences::class)->patchByConferenceId($conferenceId, $payload);
    }

}
