<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class Hangup extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/hangup [operationId: hangup-call] */
    /**
     * Hangup
     *
     * Hang up a call.
     */
    public static function post(string $callId, ?\InfobipSDK\DTOs\N74d8b21d2b740d37eba3fa2f7296b180343b1bcffffec58c82756c7c83775e15\PublicHangupRequest $payload = null): \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\Hangup::class)->post($callId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\Hangup::class)->post($callId, $payload);
    }

}
