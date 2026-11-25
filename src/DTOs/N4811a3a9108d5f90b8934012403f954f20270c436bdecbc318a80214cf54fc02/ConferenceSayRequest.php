<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02;

/**
 * ConferenceSayRequest
 */
final class ConferenceSayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'language',
    'text',
];

    protected const array VALIDATION = [
    'loopCount' => [
        'format' => 'int32',
    ],
    'speechRate' => [
        'minimum' => 0.5,
        'maximum' => 2,
    ],
];

    /**
     * Text language. Must be defined for correct pronunciation. More info about available languages and voices can be found [here](https://www.infobip.com/docs/voice-and-video/getting-started#text-to-speech-add-ons-and-options).
     */
    public \InfobipSDK\Enums\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02\ConferenceSayRequest\LanguageEnum $language;
    /**
     * Number of times to read the text.
     * Format: int32
     */
    public int $loopCount {
        set {
            $this->assigning('loopCount', $value);
            $this->loopCount = $value;
        }
    }
    public \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\PublicVoicePreferences $preferences;
    /**
     * Speech rate. Must be within `[0.5 - 2.0]` range, default value is `1`.
     * Format: double
     */
    public float $speechRate {
        set {
            $this->assigning('speechRate', $value);
            $this->speechRate = $value;
        }
    }
    /**
     * Text to read.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02\ConferenceSayRequest\LanguageEnum::from($value) : parent::assignMember($name, $value),
            'loopCount' => is_int($value) ? $this->loopCount = $value : parent::assignMember($name, $value),
            'preferences' => $value instanceof \stdClass ? $this->preferences = new \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\PublicVoicePreferences($value) : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
