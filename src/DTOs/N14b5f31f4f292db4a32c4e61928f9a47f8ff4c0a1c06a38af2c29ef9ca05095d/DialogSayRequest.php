<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d;

/**
 * DialogSayRequest
 */
final class DialogSayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'language',
    'text',
];

    protected const array VALIDATION = [
    'loopCount' => [
        'format' => 'int32',
    ],
];

    /**
     * Text language. Must be defined for correct pronunciation. For more details on available languages and voices, see our [documentation](https://www.infobip.com/docs/voice-and-video/outbound-calls#text-to-speech-voice-over-broadcast).
     */
    public \InfobipSDK\Enums\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogSayRequest\LanguageEnum $language;
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
    public float $speechRate;
    /**
     * Text to read.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogSayRequest\LanguageEnum::from($value) : parent::assignMember($name, $value),
            'loopCount' => is_int($value) ? $this->loopCount = $value : parent::assignMember($name, $value),
            'preferences' => $value instanceof \stdClass ? $this->preferences = new \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\PublicVoicePreferences($value) : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
