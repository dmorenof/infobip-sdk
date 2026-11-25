<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoAlimButton
 *
 * Buttons to include in the message. Optional value. Max 5 buttons.
 */
class KakaoAlimButton extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'buttonText',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'ADD_CHANNEL' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimAddChannelButton',
    'APP_LINK' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimAppLinkButton',
    'BOT_KEYWORD' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimBotKeywordButton',
    'CHATBOT_SWITCH' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimChatbotSwitchButton',
    'DELIVERY_TRACKING' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimDeliveryTrackingAlimButton',
    'MESSAGE_DELIVERY' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimMessageDeliveryButton',
    'URL' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimUrlButton',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoAlimAddChannelButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimAddChannelButton',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoAlimAppLinkButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimAppLinkButton',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoAlimBotKeywordButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimBotKeywordButton',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoAlimChatbotSwitchButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimChatbotSwitchButton',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoAlimDeliveryTrackingAlimButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimDeliveryTrackingAlimButton',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoAlimMessageDeliveryButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimMessageDeliveryButton',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.KakaoAlimUrlButton' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\KakaoAlimUrlButton',
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
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonText' => is_string($value) ? $this->buttonText = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
