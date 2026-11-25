<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * LeaderboardResponse
 */
final class LeaderboardResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'paging',
        'scores',
    ];

    /**
     * Paging information for the leaderboard response.
     */
    public \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\PagingInfo $paging;
    /**
     * List of scores for the leaderboard.
     */
    public \InfobipSDK\Collections\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\LeaderboardResponse\ScoresCollection $scores;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\PagingInfo($value) : parent::assignMember($name, $value),
            'scores' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->scores = new \InfobipSDK\Collections\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\LeaderboardResponse\ScoresCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\LeaderboardEntry::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
