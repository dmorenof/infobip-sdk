<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * CampaignCreatePayload
 */
final class CampaignCreatePayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'activeFrom',
        'activeUntil',
        'name',
    ];

    /**
     * Date and time when the campaign becomes active, in ISO 8601 format (e.g., 2023-10-01T00:00:00Z).
     * Format: date-time
     */
    public string $activeFrom;
    /**
     * Date and time when the campaign ends, in ISO 8601 format (e.g., 2023-10-31T23:59:59Z).
     * Format: date-time
     */
    public string $activeUntil;
    /**
     * Image used for shape matching.
     */
    public string $imageUrl;
    /**
     * Specification of language-specific key phrases that users should pronounce during the campaign. This is a dictionary mapping language codes (ISO 639-1 with optional country code, e.g., 'en-US', 'es-ES') to the exact phrases users must say. Find the list of languages supported by Azure <a href="https://learn.microsoft.com/en-us/azure/ai-services/speech-service/language-support?tabs=stt">here</a> and the list of languages supported by Google <a href="https://cloud.google.com/speech-to-text/docs/speech-to-text-supported-languages">here</a>. The speech-to-text engine will compare user audio against these phrases for scoring. If left unspecified, the campaign will rely solely on image and/or audio matching. Phrases should be clear, pronounceable words or short sentences in the target language.
     */
    public \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignCreatePayload\KeywordSpecMap $keywordSpec;
    /**
     * Name of the campaign. Must be unique per account.
     */
    public string $name;
    /**
     * Campaign settings. You can regulate the number of attempts per user daily, as well as the total number of attempts in the campaign daily.
     */
    public \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignSettings $settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activeFrom' => is_string($value) ? $this->activeFrom = $value : parent::assignMember($name, $value),
            'activeUntil' => is_string($value) ? $this->activeUntil = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'settings' => $value instanceof \stdClass ? $this->settings = new \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
