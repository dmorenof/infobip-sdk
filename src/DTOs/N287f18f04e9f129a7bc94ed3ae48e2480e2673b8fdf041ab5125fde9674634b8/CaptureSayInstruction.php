<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CaptureSayInstruction
 *
 * Text-to-speech content to say before capturing DTMF input.
 */
final class CaptureSayInstruction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'text',
];

    protected const array VALIDATION = [
    'speechRate' => [
        'minimum' => 0.5,
        'maximum' => 2,
    ],
    'text' => [
        'minLength' => 1,
    ],
];

    /**
     * Text language. Must be defined for correct pronunciation. More info about available languages and voices can be found [here](https://www.infobip.com/docs/voice-and-video/reference#text-to-speech-languages). Use value from Abbreviation column in the table.
     * Example: "en"
     */
    public string $language;
    /**
     * Speech rate (0.5 to 2.0).
     * Format: double
     */
    public float $speechRate {
        set {
            $this->assigning('speechRate', $value);
            $this->speechRate = $value;
        }
    }
    /**
     * Text to be spoken.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    public \InfobipSDK\DTOs\N49f1996e051117ce119ddfc3e07857856b24a0d3f7351242fd9c4615508a2845\VoicePreferences $voicePreferences;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'voicePreferences' => $value instanceof \stdClass ? $this->voicePreferences = new \InfobipSDK\DTOs\N49f1996e051117ce119ddfc3e07857856b24a0d3f7351242fd9c4615508a2845\VoicePreferences($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
