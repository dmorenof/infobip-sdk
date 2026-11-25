<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * VoiceData
 *
 * Voice-specific data used if the message is sent through a voice channel.
 */
final class VoiceData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'validityPeriod' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'language',
    'text',
    'validityPeriod',
];

    /**
     * Supported languages for Voice messages. List of supported languages can be found [here](https://www.infobip.com/docs/voice-and-video/getting-started#text-to-speech)
     */
    public string $language;
    /**
     * Text of the message that will be sent.
     */
    public string $text;
    /**
     * The message validity period. Unless specified differently in validityPeriodTimeUnit, it is expressed in minutes. When the period expires, the message will be automatically sent using the next OMNI step. Validity period longer than 48h is not supported (in this case, it will be automatically set to 48h). Additionally, period should be longer than 30 seconds.
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit $validityPeriodTimeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'validityPeriodTimeUnit' => is_string($value) ? $this->validityPeriodTimeUnit = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
