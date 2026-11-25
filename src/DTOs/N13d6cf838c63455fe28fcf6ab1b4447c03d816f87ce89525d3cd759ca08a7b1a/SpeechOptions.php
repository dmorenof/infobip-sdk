<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * SpeechOptions
 */
final class SpeechOptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'language',
];

    protected const array VALIDATION = [
    'maxSilence' => [
        'minimum' => 1,
        'maximum' => 5,
        'format' => 'int32',
    ],
];

    /**
     * Array of keyphrases used for matching capturing speech. If full captured text contains one of the specified phrases, that phrase will be set in variable specified in capture parameter. If keyphrases are not set or no matching is done, variable will be set to empty string. Every keyphrase can contain up to 5 words and number of keyphrases is not limited.
     */
    public \InfobipSDK\Collections\StringCollection $keyPhrases;
    /**
     * Language used in speech that needs to be captured. For full list of supported languages see [Supported languages](https://www.infobip.com/docs/voice-and-video/interactive-voice-response-ivr/supported-speech-languages).
     */
    public string $language;
    /**
     * If used, this parameter defines the number of seconds of silence that will stop capturing. For example value of 3 defines that capturing stops as soon as 3 seconds of silence is detected or when timeout expires, whichever happens first. Minimum value is 1 and maximum value is 5. The value must be lower than the timeout value.
     * Format: int32
     */
    public int $maxSilence {
        set {
            $this->assigning('maxSilence', $value);
            $this->maxSilence = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'keyPhrases' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->keyPhrases = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'maxSilence' => is_int($value) ? $this->maxSilence = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
