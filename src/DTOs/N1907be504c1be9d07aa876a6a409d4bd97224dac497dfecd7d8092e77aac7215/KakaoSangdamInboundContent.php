<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamInboundContent
 *
 * Message content.
 */
class KakaoSangdamInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamInboundAudioContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundAudioContent',
    '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamInboundExpiredSessionContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundExpiredSessionContent',
    '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamInboundFileContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundFileContent',
    '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamInboundImageContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundImageContent',
    '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamInboundTextContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundTextContent',
    '1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215.KakaoSangdamInboundVideoContent' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundVideoContent',
    'AUDIO' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundAudioContent',
    'EXPIRED_SESSION' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundExpiredSessionContent',
    'FILE' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundFileContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundImageContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundTextContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\\KakaoSangdamInboundVideoContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
