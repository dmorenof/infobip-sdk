<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1bf84e5ebfeebf0839825dcb3ba7bdfe29e9008eef02919c0c668629628db19e;

/**
 * OmniLogsResponse
 */
final class OmniLogsResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'results',
];

    /**
     * Collection of logs.
     */
    public \InfobipSDK\Collections\N1bf84e5ebfeebf0839825dcb3ba7bdfe29e9008eef02919c0c668629628db19e\OmniLogsResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N1bf84e5ebfeebf0839825dcb3ba7bdfe29e9008eef02919c0c668629628db19e\OmniLogsResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\OmniLog::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
