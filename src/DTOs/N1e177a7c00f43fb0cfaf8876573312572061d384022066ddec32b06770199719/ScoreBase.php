<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * ScoreBase
 */
final class ScoreBase extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'audioUrl',
    'campaignId',
    'languageCode',
    'userId',
];

    /**
     * URL of the audio file used for sound matching. Must be a valid URL pointing to an audio file.
     */
    public string $audioUrl;
    /**
     * Unique identifier of the campaign the score belongs to.
     * Format: uuid
     */
    public string $campaignId;
    public \InfobipSDK\Enums\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\Channel $channel;
    /**
     * Language code of the audio file, e.g., 'en-US' for English. This should match the language of the audio file being submitted.
     */
    public string $languageCode;
    /**
     * Name of the participant e.g. John Smith. Maximum 300 characters long. Cannot be empty or whitespace.
     */
    public string $name;
    /**
     * User ID, usually in the format of a phone number, e.g., 00387123456.
     */
    public string $userId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioUrl' => is_string($value) ? $this->audioUrl = $value : parent::assignMember($name, $value),
            'campaignId' => is_string($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\Channel::from($value) : parent::assignMember($name, $value),
            'languageCode' => is_string($value) ? $this->languageCode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
