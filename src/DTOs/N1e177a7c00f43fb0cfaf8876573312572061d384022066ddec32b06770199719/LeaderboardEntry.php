<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * LeaderboardEntry
 */
final class LeaderboardEntry extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'date',
    'score',
    'userId',
];

    /**
     * Date and time when the score was recorded, in ISO 8601 format (e.g., 2023-10-01T00:00:00Z).
     * Format: date-time
     */
    public string $date;
    /**
     * Name of the participant, if available.
     */
    public string $name;
    /**
     * Score of the participant in the leaderboard, ranging from 0 to 1000.
     */
    public int $score;
    /**
     * Unique identifier of the participant, usually in the format of a phone number, e.g., 00387123456.
     */
    public string $userId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'score' => is_int($value) ? $this->score = $value : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
