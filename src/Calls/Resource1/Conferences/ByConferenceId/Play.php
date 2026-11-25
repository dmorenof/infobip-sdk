<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Conferences\ByConferenceId;

final class Play extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/conferences/{conferenceId}/play [operationId: conference-play-file] */
    /**
     * Play file
     *
     * Play an audio file on a conference.
     */
    public static function post(string $conferenceId, \InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02\ConferencePlayRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\Play::class)->post($conferenceId, $payload);
    }
}
