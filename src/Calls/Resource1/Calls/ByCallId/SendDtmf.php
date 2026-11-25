<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class SendDtmf extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/send-dtmf [operationId: call-send-dtmf] */
    /**
     * Send DTMF
     *
     * Send a DTMF on a call.
     */
    public static function post(string $callId, \InfobipSDK\DTOs\N94dad8b938c4159f751dc1ff0b70e7beab7409955ce0b31399dbe9488973d3a6\DtmfSendRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\SendDtmf::class)->post($callId, $payload);
    }
}
