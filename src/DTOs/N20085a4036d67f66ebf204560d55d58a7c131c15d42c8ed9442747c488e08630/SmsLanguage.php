<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * SmsLanguage
 *
 * Sets the language parameters for the message being sent.
 */
final class SmsLanguage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LanguageCode $languageCode;
    /**
     * Uses a locking shift table which allows you to represent characters beyond the standard GSM default alphabet. This flexibility enables better language support.
     */
    public bool $lockingShift;
    /**
     * Uses a single shift table which enhances only the extension table of the GSM default alphabet. Allows you to selectively improve character support without altering the entire message.
     */
    public bool $singleShift;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'languageCode' => is_string($value) ? $this->languageCode = \InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LanguageCode::from($value) : parent::assignMember($name, $value),
            'lockingShift' => is_bool($value) ? $this->lockingShift = $value : parent::assignMember($name, $value),
            'singleShift' => is_bool($value) ? $this->singleShift = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
