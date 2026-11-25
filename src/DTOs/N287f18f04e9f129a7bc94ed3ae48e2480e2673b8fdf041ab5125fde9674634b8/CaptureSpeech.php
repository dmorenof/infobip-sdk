<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CaptureSpeech
 *
 * CaptureSpeech action captures speech from the caller.
 */
final class CaptureSpeech extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'callback',
    'language',
];

    protected const array VALIDATION = [
    'keyPhrases' => [
        'uniqueItems' => true,
    ],
    'language' => [
        'minLength' => 1,
    ],
    'maxSilence' => [
        'minimum' => 1,
        'maximum' => 5,
        'format' => 'int32',
    ],
    'timeout' => [
        'minimum' => 1,
        'maximum' => 30,
        'format' => 'int32',
    ],
];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureSpeech\ActionEnum $action;
    /**
     * Toggles enhanced text formatting features like punctuation, proper casing, numeral normalization, and disfluency filtering.
     */
    public bool $advancedFormatting;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl $callback;
    /**
     * Array of custom words (typically, industry-specific terms) used for improved speech capture.
     */
    public \InfobipSDK\Collections\StringCollection $customDictionary;
    /**
     * Array of key-phrases used for matching capturing speech.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $keyPhrases {
        set {
            $this->assigning('keyPhrases', $value);
            $this->keyPhrases = $value;
        }
    }
    /**
     * Speech language. Must be defined for correct pronunciation. More info about available languages can be found [here](https://www.infobip.com/docs/voice-and-video/reference#speech-recognition-languages). Use language code column in the table.
     * Example: "en-US"
     */
    public string $language {
        set {
            $this->assigning('language', $value);
            $this->language = $value;
        }
    }
    /**
     * The silence duration before terminating the speech capture after speech has been detected.
     * Format: int32
     */
    public int $maxSilence {
        set {
            $this->assigning('maxSilence', $value);
            $this->maxSilence = $value;
        }
    }
    /**
     * Indicates whether speech capture should terminate immediately upon detecting a key phrase. When false, capture proceeds until completion and retains only the first matched key phrase, if any.
     */
    public bool $terminateOnKeyPhrase;
    /**
     * The maximum duration of speech capture.
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureSpeech\ActionEnum::from($value) : parent::assignMember($name, $value),
            'advancedFormatting' => is_bool($value) ? $this->advancedFormatting = $value : parent::assignMember($name, $value),
            'callback' => $value instanceof \stdClass ? $this->callback = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl($value) : parent::assignMember($name, $value),
            'customDictionary' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->customDictionary = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'keyPhrases' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->keyPhrases = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'maxSilence' => is_int($value) ? $this->maxSilence = $value : parent::assignMember($name, $value),
            'terminateOnKeyPhrase' => is_bool($value) ? $this->terminateOnKeyPhrase = $value : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
