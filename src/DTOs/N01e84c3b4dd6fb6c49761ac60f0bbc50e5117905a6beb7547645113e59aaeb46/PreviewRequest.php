<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N01e84c3b4dd6fb6c49761ac60f0bbc50e5117905a6beb7547645113e59aaeb46;

/**
 * PreviewRequest
 */
final class PreviewRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'text',
];

    protected const array VALIDATION = [
    'languageCode' => [
        'pattern' => '^(TR|ES|PT|AUTODETECT)$',
    ],
    'text' => [
        'minLength' => 1,
    ],
    'transliteration' => [
        'pattern' => '^(TURKISH|GREEK|CYRILLIC|SERBIAN_CYRILLIC|BULGARIAN_CYRILLIC|CENTRAL_EUROPEAN|BALTIC|PORTUGUESE|COLOMBIAN|NON_UNICODE|NONE|ALL)$',
    ],
];

    /**
     * [Language code](https://www.infobip.com/docs/sms/language#national-language-identifier) for the correct character set. `AUTODETECT` lets the platform select the character set based on message content only for supported languages.
     */
    public string $languageCode {
        set {
            $this->assigning('languageCode', $value);
            $this->languageCode = $value;
        }
    }
    /**
     * Content of the message being sent.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * The transliteration of your sent message from one script to another. [Transliteration](https://www.infobip.com/docs/sms/language#sms-transliteration) is used to replace characters which are not recognized as part of your defaulted alphabet. `ALL` means that the transliteration process will recognize all supported languages.
     */
    public string $transliteration {
        set {
            $this->assigning('transliteration', $value);
            $this->transliteration = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'languageCode' => is_string($value) ? $this->languageCode = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'transliteration' => is_string($value) ? $this->transliteration = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
