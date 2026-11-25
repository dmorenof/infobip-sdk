<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e;

/**
 * SpeechCaptureRequest
 */
final class SpeechCaptureRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'language',
    'timeout',
];

    protected const array VALIDATION = [
    'keyPhrases' => [
        'uniqueItems' => true,
    ],
    'maxSilence' => [
        'minimum' => 1,
        'maximum' => 5,
        'format' => 'int32',
    ],
    'provider' => [
        'pattern' => 'GOOGLE|AZURE',
    ],
    'timeout' => [
        'minimum' => 1,
        'maximum' => 30,
        'format' => 'int32',
    ],
];

    /**
     * Toggles enhanced text formatting features like punctuation, proper casing, numeral normalization, and disfluency filtering. Defaults to `false`.
     */
    public bool $advancedFormatting;
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
    public \InfobipSDK\Enums\N61f95109c33ad36c729390593c474a655f9ca0e00403d6dbc107cf0f6c5cf04b\Language $language;
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
     * Speech-to-text provider to use. Defaults to `GOOGLE`.
     */
    public \InfobipSDK\Enums\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\SpeechCaptureRequest\ProviderEnum $provider {
        set {
            $this->assigning('provider', $value);
            $this->provider = $value;
        }
    }
    /**
     * Indicates whether speech capture should terminate immediately upon detecting a key phrase. Defaults to `true`. When `false`, capture proceeds until completion and retains only the first matched key phrase, if any.
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
            'advancedFormatting' => is_bool($value) ? $this->advancedFormatting = $value : parent::assignMember($name, $value),
            'customDictionary' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->customDictionary = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'keyPhrases' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->keyPhrases = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\N61f95109c33ad36c729390593c474a655f9ca0e00403d6dbc107cf0f6c5cf04b\Language::from($value) : parent::assignMember($name, $value),
            'maxSilence' => is_int($value) ? $this->maxSilence = $value : parent::assignMember($name, $value),
            'provider' => is_string($value) ? $this->provider = \InfobipSDK\Enums\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\SpeechCaptureRequest\ProviderEnum::from($value) : parent::assignMember($name, $value),
            'terminateOnKeyPhrase' => is_bool($value) ? $this->terminateOnKeyPhrase = $value : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
