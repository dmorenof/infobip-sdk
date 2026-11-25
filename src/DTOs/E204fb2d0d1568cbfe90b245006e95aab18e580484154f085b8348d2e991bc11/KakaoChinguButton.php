<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoChinguButton
 *
 * Buttons to include in the message. Optional value. Max 5 buttons.
 */
class KakaoChinguButton extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'buttonText',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'APP_LINK' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoChinguAppLinkButton',
        'BOT_KEYWORD' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoChinguBotKeywordButton',
        'MESSAGE_DELIVERY' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoChinguMessageDeliveryButton',
        'URL' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoChinguUrlButton',
        'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoChinguAppLinkButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoChinguAppLinkButton',
        'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoChinguBotKeywordButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoChinguBotKeywordButton',
        'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoChinguMessageDeliveryButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoChinguMessageDeliveryButton',
        'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoChinguUrlButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoChinguUrlButton',
    ];

    protected const array VALIDATION = [
        'buttonText' => [
            'minLength' => 1,
            'maxLength' => 28,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'buttonText',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Text of the button. Max 28 characters.
     */
    public string $buttonText {
        set {
            $this->assigning('buttonText', $value);
            $this->buttonText = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoChinguButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonText' => is_string($value) ? $this->buttonText = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoChinguButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
