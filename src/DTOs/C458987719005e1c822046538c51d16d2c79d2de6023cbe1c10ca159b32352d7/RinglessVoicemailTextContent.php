<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * RinglessVoicemailTextContent
 *
 * Text-to-speech voicemail content.
 */
final class RinglessVoicemailTextContent extends \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'speechRate' => [
        'minimum' => 0.5,
        'maximum' => 2,
    ],
    'text' => [
        'minLength' => 1,
        'maxLength' => 1400,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Language code for text-to-speech. If voice is not set, then the default voice for the language is used. See available languages: https://www.infobip.com/docs/voice-and-video/reference#available-voices-by-language
     * Example: "en"
     */
    public string $language;
    /**
     * Speech rate multiplier for text-to-speech.
     * Example: 1
     * Format: double
     */
    public float $speechRate {
        set {
            $this->assigning('speechRate', $value);
            $this->speechRate = $value;
        }
    }
    /**
     * Text to convert to speech.
     * Example: "Hello, this is a reminder about your appointment tomorrow."
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    public \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailVoice $voice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'voice' => $value instanceof \stdClass ? $this->voice = new \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailVoice($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
