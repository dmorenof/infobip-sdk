<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamOutboundContent
 *
 * Message content.
 */
class KakaoSangdamOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamOutboundButtonListContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOutboundButtonListContent',
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamOutboundImageContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOutboundImageContent',
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamOutboundTerminateSessionContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOutboundTerminateSessionContent',
        '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamOutboundTextContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOutboundTextContent',
        'BUTTON_LIST' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOutboundButtonListContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOutboundImageContent',
        'TERMINATE_SESSION' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOutboundTerminateSessionContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamOutboundTextContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
