<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Say
 *
 * Say action converts text to speech and plays it to the caller.
 */
final class Say extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'text',
];

    protected const array VALIDATION = [
    'loopCount' => [
        'minimum' => 1,
        'format' => 'int32',
    ],
    'speechRate' => [
        'minimum' => 0.5,
        'maximum' => 2,
    ],
    'text' => [
        'minLength' => 1,
    ],
];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Say\ActionEnum $action;
    /**
     * Text language. Must be defined for correct pronunciation. More info about available languages and voices can be found [here](https://www.infobip.com/docs/voice-and-video/reference#text-to-speech-languages). Use value from abbreviation column in the table.
     * Example: "en"
     */
    public string $language;
    /**
     * Number of times to repeat the speech.
     * Format: int32
     */
    public int $loopCount {
        set {
            $this->assigning('loopCount', $value);
            $this->loopCount = $value;
        }
    }
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
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Say\ActionEnum::from($value) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'loopCount' => is_int($value) ? $this->loopCount = $value : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'voicePreferences' => $value instanceof \stdClass ? $this->voicePreferences = new \InfobipSDK\DTOs\N49f1996e051117ce119ddfc3e07857856b24a0d3f7351242fd9c4615508a2845\VoicePreferences($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
