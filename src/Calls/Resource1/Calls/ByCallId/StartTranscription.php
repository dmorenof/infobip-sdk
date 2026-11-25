<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class StartTranscription extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/start-transcription [operationId: call-start-transcription] */
    /**
     * Start transcription
     *
     * Start call transcription.
     */
    public static function post(string $callId, \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\PublicStartTranscriptionRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\StartTranscription::class)->post($callId, $payload);
    }

}
