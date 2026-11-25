<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2;

/**
 * MatchResponse
 */
final class MatchResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'matches',
    ];

    /**
     * List of matches.
     */
    public \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MatchResponse\MatchesCollection $matches;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'matches' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->matches = new \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MatchResponse\MatchesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MatchAmgModel::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
