<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Recordings;

final class Conferences extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/recordings/conferences [operationId: get-conferences-recordings] */
    /**
     * Get conferences recordings
     *
     * Get the recordings of conferences with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Recordings\Conferences $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\ConferenceRecordingPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Conferences::class)->get($params);
    }

    /** DELETE /calls/1/recordings/conferences/{conferenceId} [operationId: delete-conference-recordings] */
    /**
     * Delete conference recordings
     *
     * Delete the recordings for a single conference.
     */
    public static function deleteByConferenceId(string $conferenceId, ?\InfobipSDK\DeleteParams\Calls\Resource1\Recordings\Conferences\ByConferenceId $params = null): \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicConferenceRecording
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Conferences::class)->deleteByConferenceId($conferenceId, $params);
    }

    /** GET /calls/1/recordings/conferences/{conferenceId} [operationId: get-conference-recordings] */
    /**
     * Get conference recordings
     *
     * Get the recordings for a single conference.
     */
    public static function getByConferenceId(string $conferenceId, ?\InfobipSDK\GetParams\Calls\Resource1\Recordings\Conferences\ByConferenceId $params = null): \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicConferenceRecording
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Conferences::class)->getByConferenceId($conferenceId, $params);
    }
}
