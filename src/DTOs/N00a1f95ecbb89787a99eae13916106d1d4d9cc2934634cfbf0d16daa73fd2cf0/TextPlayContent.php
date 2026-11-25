<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N00a1f95ecbb89787a99eae13916106d1d4d9cc2934634cfbf0d16daa73fd2cf0;

/**
 * TextPlayContent
 */
final class TextPlayContent extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicPlayContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Text language. Must be defined for correct pronunciation. More info about available languages and voices can be found [here](https://www.infobip.com/docs/voice-and-video/getting-started#text-to-speech-add-ons-and-options).
     */
    public \InfobipSDK\Enums\N00a1f95ecbb89787a99eae13916106d1d4d9cc2934634cfbf0d16daa73fd2cf0\TextPlayContent\LanguageEnum $language;
    public \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\PublicVoicePreferences $preferences;
    /**
     * Speech rate. Must be within `[0.5 - 2.0]` range, default value is `1`.
     * Format: double
     */
    public float $speechRate;
    /**
     * Text to read. Use the Speech Synthesis Markup Language (SSML) in a request to fine-tune your output.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\N00a1f95ecbb89787a99eae13916106d1d4d9cc2934634cfbf0d16daa73fd2cf0\TextPlayContent\LanguageEnum::from($value) : parent::assignMember($name, $value),
            'preferences' => $value instanceof \stdClass ? $this->preferences = new \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\PublicVoicePreferences($value) : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
