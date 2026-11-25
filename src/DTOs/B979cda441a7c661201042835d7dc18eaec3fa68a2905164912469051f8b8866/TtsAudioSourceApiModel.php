<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * TtsAudioSourceApiModel
 *
 * Text-to-speech audio source information.
 */
final class TtsAudioSourceApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'language',
        'speechRate',
        'text',
        'voice',
    ];

    protected const array VALIDATION = [
        'language' => [
            'minLength' => 1,
            'maxLength' => 36,
        ],
        'speechRate' => [
            'minimum' => 0.5,
            'maximum' => 2,
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 1400,
        ],
    ];

    /**
     * This option controls whether automatic language detection will be performed on provided text.
     */
    public bool $isLanguageSelectedManually;
    /**
     * If the message is in text format, the language in which the message is written must be defined for correct pronunciation. In the Languages section, you can find the list of languages that we support: <a href="https://www.infobip.com/docs/voice-and-video/outbound-calls#text-to-speech-voice-over-broadcast" target="_blank">Voice Text-To-Speech Languages.</a>
     */
    public string $language {
        set {
            $this->assigning('language', $value);
            $this->language = $value;
        }
    }
    /**
     * Text-to-speech speech rate.
     * Format: double
     */
    public float $speechRate {
        set {
            $this->assigning('speechRate', $value);
            $this->speechRate = $value;
        }
    }
    /**
     * Text to convert using text-to-speech. This field supports usage of placeholders. Use the following endpoint to find which placeholders are supported: <a href="https://www.infobip.com/docs/api/customer-engagement/conversations/get-conversations-tts-supported-placeholders" target="_blank">Get supported TTS placeholders for purpose</a>. Placeholders are used to dynamically insert values into the text. For example, you can use placeholders to insert the customer's position in queue as part of announcement message in waiting strategy.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\VoiceApiModel $voice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'isLanguageSelectedManually' => is_bool($value) ? $this->isLanguageSelectedManually = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'voice' => $value instanceof \stdClass ? $this->voice = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\VoiceApiModel($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
