<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * ScoreReturn
 */
final class ScoreReturn extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'audioUrl',
        'bestScore',
        'campaignId',
        'finalScore',
        'languageCode',
        'userId',
    ];

    /**
     * Number of attempts made by the participant in the campaign.
     */
    public int $attempts;
    /**
     * URL of the audio file used for sound matching. Must be a valid URL pointing to an audio file.
     */
    public string $audioUrl;
    /**
     * The highest score achieved by the participant in the campaign.
     */
    public int $bestScore;
    /**
     * Unique identifier of the campaign the score belongs to.
     * Format: uuid
     */
    public string $campaignId;
    public \InfobipSDK\Enums\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\Channel $channel;
    /**
     * Date and time when this score was last modified, in UTC.
     * Format: date-time
     */
    public string $dateModified;
    /**
     * Final calculated score for this attempt, ranging from 0 to 1000.
     */
    public int $finalScore;
    /**
     * Score for keyword matching, ranging from 0 to 1, where 1 is a perfect match.
     */
    public float $keywordScore;
    /**
     * Language code of the audio file, e.g., 'en-US' for English. This should match the language of the audio file being submitted.
     */
    public string $languageCode;
    /**
     * Name of the participant e.g. John Smith. Maximum 300 characters long. Cannot be empty or whitespace.
     */
    public string $name;
    /**
     * Score for shape matching, ranging from 0 to 1, where 1 is a perfect match.
     */
    public float $shapeScore;
    /**
     * Text transcription of the submitted audio file.
     */
    public string $transcribedAudio;
    /**
     * User ID, usually in the format of a phone number, e.g., 00387123456.
     */
    public string $userId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attempts' => is_int($value) ? $this->attempts = $value : parent::assignMember($name, $value),
            'audioUrl' => is_string($value) ? $this->audioUrl = $value : parent::assignMember($name, $value),
            'bestScore' => is_int($value) ? $this->bestScore = $value : parent::assignMember($name, $value),
            'campaignId' => is_string($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\Channel::from($value) : parent::assignMember($name, $value),
            'dateModified' => is_string($value) ? $this->dateModified = $value : parent::assignMember($name, $value),
            'finalScore' => is_int($value) ? $this->finalScore = $value : parent::assignMember($name, $value),
            'keywordScore' => is_float($value) ? $this->keywordScore = $value : parent::assignMember($name, $value),
            'languageCode' => is_string($value) ? $this->languageCode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'shapeScore' => is_float($value) ? $this->shapeScore = $value : parent::assignMember($name, $value),
            'transcribedAudio' => is_string($value) ? $this->transcribedAudio = $value : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
