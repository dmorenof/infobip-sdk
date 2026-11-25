<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Recordings\Conferences\ByConferenceId;

final class Compose extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/recordings/conferences/{conferenceId}/compose [operationId: compose-conference-recording] */
    /**
     * Compose conference recording on calls
     *
     * Compose conference recording on calls. All calls will be merged into a single audio or video file.
     */
    public static function post(string $conferenceId, ?\InfobipSDK\PostParams\Calls\Resource1\Recordings\Conferences\ByConferenceId\Compose $params = null): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Conferences\ByConferenceId\Compose::class)->post($conferenceId, $params);
    }

}
