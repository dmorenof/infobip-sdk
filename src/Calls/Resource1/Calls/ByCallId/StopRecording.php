<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class StopRecording extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/stop-recording [operationId: call-stop-recording] */
    /**
     * Stop recording
     *
     * Stop a recording on a call.
     */
    public static function post(string $callId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\StopRecording::class)->post($callId);
    }

}
