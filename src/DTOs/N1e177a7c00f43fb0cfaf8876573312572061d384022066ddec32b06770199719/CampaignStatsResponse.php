<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * CampaignStatsResponse
 */
final class CampaignStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Average score across all participants in the campaign.
     */
    public float $averageScore;
    /**
     * Highest score recorded in the campaign.
     */
    public float $highestScore;
    /**
     * Lowest score recorded in the campaign.
     */
    public float $lowestScore;
    /**
     * Total number of attempts made across all participants in the campaign.
     */
    public int $numberOfAttempts;
    /**
     * Total number of unique participants in the campaign.
     */
    public int $numberOfParticipants;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'averageScore' => is_float($value) ? $this->averageScore = $value : parent::assignMember($name, $value),
            'highestScore' => is_float($value) ? $this->highestScore = $value : parent::assignMember($name, $value),
            'lowestScore' => is_float($value) ? $this->lowestScore = $value : parent::assignMember($name, $value),
            'numberOfAttempts' => is_int($value) ? $this->numberOfAttempts = $value : parent::assignMember($name, $value),
            'numberOfParticipants' => is_int($value) ? $this->numberOfParticipants = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
