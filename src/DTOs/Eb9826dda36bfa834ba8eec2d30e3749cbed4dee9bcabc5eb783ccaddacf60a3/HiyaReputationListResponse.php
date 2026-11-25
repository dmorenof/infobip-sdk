<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * HiyaReputationListResponse
 */
final class HiyaReputationListResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of reputation results.
     */
    public \InfobipSDK\Collections\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\HiyaReputationListResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\HiyaReputationListResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputation::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
