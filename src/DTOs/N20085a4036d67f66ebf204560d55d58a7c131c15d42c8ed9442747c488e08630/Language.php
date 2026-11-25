<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * Language
 */
final class Language extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * [Language code](https://www.infobip.com/docs/sms/language#national-language-identifier) for the correct character set. `AUTODETECT` lets the platform select the character set based on message content only for supported languages.
     */
    public string $languageCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'languageCode' => is_string($value) ? $this->languageCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
