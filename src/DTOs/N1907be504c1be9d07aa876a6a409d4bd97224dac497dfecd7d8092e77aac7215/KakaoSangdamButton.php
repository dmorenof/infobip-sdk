<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamButton
 *
 * List of buttons attached to the message.
 */
class KakaoSangdamButton extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamChatbotSwitchButton' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamChatbotSwitchButton',
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamOpenApplicationButton' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOpenApplicationButton',
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamOpenUrlButton' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOpenUrlButton',
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamReplyButton' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamReplyButton',
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamReplyWithTextButton' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamReplyWithTextButton',
        'CHATBOT_SWITCH' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamChatbotSwitchButton',
        'OPEN_APPLICATION' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOpenApplicationButton',
        'OPEN_URL' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOpenUrlButton',
        'REPLY' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamReplyButton',
        'REPLY_WITH_TEXT' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamReplyWithTextButton',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
