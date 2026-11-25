<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * LanguageConfiguration
 *
 * Sets up additional configuration that changes the original message content you can preview with this call.
 */
final class LanguageConfiguration extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Language $language;
    /**
     * Conversion of a message text from one script to another. Possible values: `TURKISH`, `GREEK`, `CYRILLIC`, `SERBIAN_CYRILLIC`, `BULGARIAN_CYRILLIC`, `CENTRAL_EUROPEAN`, `BALTIC`, `NON_UNICODE` and `ALL`.
     */
    public string $transliteration;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => $value instanceof \stdClass ? $this->language = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Language($value) : parent::assignMember($name, $value),
            'transliteration' => is_string($value) ? $this->transliteration = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
