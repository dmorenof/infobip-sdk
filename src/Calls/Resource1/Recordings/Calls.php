<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Recordings;

final class Calls extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/recordings/calls [operationId: get-calls-recordings] */
    /**
     * Get calls recordings
     *
     * Get the recordings of calls with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Recordings\Calls $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\CallRecordingPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Calls::class)->get($params);
    }

    /** DELETE /calls/1/recordings/calls/{callId} [operationId: delete-call-recordings] */
    /**
     * Delete call recordings
     *
     * Delete the recordings for a single call.
     */
    public static function deleteByCallId(string $callId, ?\InfobipSDK\DeleteParams\Calls\Resource1\Recordings\Calls\ByCallId $params = null): \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicCallRecording
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Calls::class)->deleteByCallId($callId, $params);
    }

    /** GET /calls/1/recordings/calls/{callId} [operationId: get-call-recordings] */
    /**
     * Get call recordings
     *
     * Get the recordings for a single call.
     */
    public static function getByCallId(string $callId, ?\InfobipSDK\GetParams\Calls\Resource1\Recordings\Calls\ByCallId $params = null): \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicCallRecording
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Calls::class)->getByCallId($callId, $params);
    }

}
