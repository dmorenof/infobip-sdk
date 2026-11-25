<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Conferences\ByConferenceId;

final class Hangup extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/conferences/{conferenceId}/hangup [operationId: hangup-conference] */
    /**
     * Hangup conference
     *
     * Hang up a conference. This action also hangs up all calls in the conference.
     */
    public static function post(string $conferenceId): \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Conferences\ByConferenceId\Hangup::class)->post($conferenceId);
    }
}
