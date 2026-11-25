<?php

declare(strict_types=1);

namespace InfobipSDK\NumberReputation\Resource1;

final class Reputation extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-reputation/1/reputation [operationId: check-reputation] */
    /**
     * Check reputation for phone numbers
     *
     * Query real-time reputation scores for registered phone numbers. This is a billable operation — each phone number in the request counts as one billable unit.
     */
    public static function post(\InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCheckReputationRequest $payload): \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\HiyaReputationListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Reputation::class)->post($payload);
    }
}
