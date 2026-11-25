<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class Play extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/play [operationId: call-play-file] */
    /**
     * Play file
     *
     * Play an audio file on a call.
     */
    public static function post(string $callId, \InfobipSDK\DTOs\N6665694460cb56ab854a173ada36805c85c7ec55584901d2f06225baf9b586cb\PublicPlayRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\Play::class)->post($callId, $payload);
    }

}
