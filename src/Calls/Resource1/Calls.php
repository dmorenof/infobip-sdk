<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class Calls extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/calls [operationId: get-calls] */
    /**
     * Get calls
     *
     * Get calls with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Calls $params = null): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls::class)->get($params);
    }

    /** POST /calls/1/calls [operationId: create-call] */
    /**
     * Create call
     *
     * Create an outbound call to a given endpoint.
     */
    public static function post(\InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\CallRequest $payload): \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls::class)->post($payload);
    }

    /** GET /calls/1/calls/{callId} [operationId: get-call] */
    /**
     * Get call
     *
     * Get a single call.
     */
    public static function getByCallId(string $callId): \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls::class)->getByCallId($callId);
    }
}
