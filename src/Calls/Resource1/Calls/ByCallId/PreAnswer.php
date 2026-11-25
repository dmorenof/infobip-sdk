<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class PreAnswer extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/pre-answer [operationId: pre-answer-call] */
    /**
     * Pre-answer
     *
     * Pre-answer a call to handle early media.
     */
    public static function post(string $callId, ?\InfobipSDK\DTOs\N6665694460cb56ab854a173ada36805c85c7ec55584901d2f06225baf9b586cb\PublicPreAnswerRequest $payload = null): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\PreAnswer::class)->post($callId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\PreAnswer::class)->post($callId, $payload);
    }
}
