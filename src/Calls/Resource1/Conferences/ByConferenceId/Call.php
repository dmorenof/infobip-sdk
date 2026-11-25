<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Conferences\ByConferenceId;

final class Call extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/conferences/{conferenceId}/call [operationId: add-new-conference-call] */
    /**
     * Add new call
     *
     * Create a new outbound call and add it to a conference.
     */
    public static function post(string $conferenceId, \InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\AddNewCallRequest $payload): \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\ConferenceAndCall
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\Call::class)->post($conferenceId, $payload);
    }

    /** DELETE /calls/1/conferences/{conferenceId}/call/{callId} [operationId: remove-conference-call] */
    /**
     * Remove call
     *
     * Remove a call from a conference. The call stays active after this action.
     */
    public static function deleteByCallId(\InfobipSDK\PathParams\Calls\Resource1\Conferences\ByConferenceId\Call\ByCallId $identifier): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\Call::class)->deleteByCallId($identifier);
    }

    /** PATCH /calls/1/conferences/{conferenceId}/call/{callId} [operationId: update-conference-call] */
    /**
     * Update call
     *
     * Update a call in a conference.
     */
    public static function patchByCallId(\InfobipSDK\PathParams\Calls\Resource1\Conferences\ByConferenceId\Call\ByCallId $identifier, \InfobipSDK\DTOs\N02ec6d748bd9b366e5aeae1eaf03d6007ae57830d7d55344122f68a2478c9f84\UpdateCallRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\Call::class)->patchByCallId($identifier, $payload);
    }

    /** PUT /calls/1/conferences/{conferenceId}/call/{callId} [operationId: add-existing-conference-call] */
    /**
     * Add existing call
     *
     * Add an existing call to a conference.
     */
    public static function putByCallId(\InfobipSDK\PathParams\Calls\Resource1\Conferences\ByConferenceId\Call\ByCallId $identifier, ?\InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\AddExistingCallRequest $payload = null): \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\Call::class)->putByCallId($identifier);
        }
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\Call::class)->putByCallId($identifier, $payload);
    }

}
