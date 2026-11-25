<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * ScoreStatsResponse
 */
final class ScoreStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'attempts',
        'attemptsRemaining',
    ];

    /**
     * Total number of attempts made by the participant in the campaign.
     */
    public int $attempts;
    /**
     * Number of attempts remaining for the participant today.
     */
    public int $attemptsRemaining;
    /**
     * The highest score achieved by the participant in the campaign.
     */
    public int $bestScore;
    /**
     * The next highest score the participant needs to beat to improve their ranking.
     */
    public int $nextScoreToBeat;
    /**
     * Total number of participants in the campaign.
     */
    public int $numberOfParticipants;
    /**
     * Position of the participant on the leaderboard, taking into account tie-breaking.
     */
    public int $position;
    /**
     * Position of the participant on the leaderboard, not taking into account tie-breaking.
     */
    public int $rank;
    /**
     * Number of other participants tied with the same score.
     */
    public int $tiedWith;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attempts' => is_int($value) ? $this->attempts = $value : parent::assignMember($name, $value),
            'attemptsRemaining' => is_int($value) ? $this->attemptsRemaining = $value : parent::assignMember($name, $value),
            'bestScore' => is_int($value) ? $this->bestScore = $value : parent::assignMember($name, $value),
            'nextScoreToBeat' => is_int($value) ? $this->nextScoreToBeat = $value : parent::assignMember($name, $value),
            'numberOfParticipants' => is_int($value) ? $this->numberOfParticipants = $value : parent::assignMember($name, $value),
            'position' => is_int($value) ? $this->position = $value : parent::assignMember($name, $value),
            'rank' => is_int($value) ? $this->rank = $value : parent::assignMember($name, $value),
            'tiedWith' => is_int($value) ? $this->tiedWith = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
