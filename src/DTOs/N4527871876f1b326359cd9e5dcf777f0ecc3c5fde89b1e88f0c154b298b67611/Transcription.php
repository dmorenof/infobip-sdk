<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * Transcription
 */
final class Transcription extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'language',
];

    protected const array VALIDATION = [
    'provider' => [
        'pattern' => 'GOOGLE|AZURE|DEEPGRAM|SONIOX',
    ],
];

    /**
     * Toggles enhanced text formatting features like punctuation, proper casing, numeral normalization, and disfluency filtering. Defaults to `false`.
     */
    public bool $advancedFormatting;
    /**
     * Array of custom words used for more accurate transcription.
     */
    public \InfobipSDK\Collections\StringCollection $customDictionary;
    public \InfobipSDK\Enums\N61f95109c33ad36c729390593c474a655f9ca0e00403d6dbc107cf0f6c5cf04b\Language $language;
    /**
     * Speech-to-text provider to use. Defaults to `AZURE`.
     */
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Transcription\ProviderEnum $provider {
        set {
            $this->assigning('provider', $value);
            $this->provider = $value;
        }
    }
    /**
     * Flag indicating whether interim transcription results should be sent.
     */
    public bool $sendInterimResults;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'advancedFormatting' => is_bool($value) ? $this->advancedFormatting = $value : parent::assignMember($name, $value),
            'customDictionary' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->customDictionary = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\N61f95109c33ad36c729390593c474a655f9ca0e00403d6dbc107cf0f6c5cf04b\Language::from($value) : parent::assignMember($name, $value),
            'provider' => is_string($value) ? $this->provider = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Transcription\ProviderEnum::from($value) : parent::assignMember($name, $value),
            'sendInterimResults' => is_bool($value) ? $this->sendInterimResults = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
