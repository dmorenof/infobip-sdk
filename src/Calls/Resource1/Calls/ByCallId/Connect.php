<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class Connect extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/connect [operationId: connect-with-new-call] */
    /**
     * Connect with new call
     *
     * Connect an existing call with a new call in a conference.
     */
    public static function post(string $callId, \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\ConnectWithNewCallRequest $payload): \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\ConferenceAndCall
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\Connect::class)->post($callId, $payload);
    }

}
