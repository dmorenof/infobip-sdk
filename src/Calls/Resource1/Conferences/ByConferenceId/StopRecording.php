<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Conferences\ByConferenceId;

final class StopRecording extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/conferences/{conferenceId}/stop-recording [operationId: conference-stop-recording] */
    /**
     * Stop recording
     *
     * Stop recording a conference.
     */
    public static function post(string $conferenceId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\StopRecording::class)->post($conferenceId);
    }
}
