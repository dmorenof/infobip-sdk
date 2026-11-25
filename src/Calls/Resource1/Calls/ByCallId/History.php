<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class History extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/calls/{callId}/history [operationId: get-call-history] */
    /**
     * Get call history
     *
     * Get a single call history. Call history retention period is 5 days.
     */
    public static function get(string $callId): \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\CallLog
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\History::class)->get($callId);
    }

}
