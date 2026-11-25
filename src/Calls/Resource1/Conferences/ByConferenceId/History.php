<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Conferences\ByConferenceId;

final class History extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/conferences/{conferenceId}/history [operationId: get-conference-history] */
    /**
     * Get conference history
     *
     * Get a single conference history. Conference history retention period is 5 days.
     */
    public static function get(string $conferenceId): \InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\ConferenceLogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\History::class)->get($conferenceId);
    }
}
