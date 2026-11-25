<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamInboundAudioContent
 */
final class KakaoSangdamInboundAudioContent extends \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'url' => [
            'minLength' => 1,
            'pattern' => '',
        ],
        'urlsDetails' => [
            'minItems' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Format: date-time
     */
    public string $sentAt;
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }
    public \InfobipSDK\Collections\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamInboundAudioContent\UrlsDetailsCollection $urlsDetails {
        set {
            $this->assigning('urlsDetails', $value);
            $this->urlsDetails = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'urlsDetails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->urlsDetails = new \InfobipSDK\Collections\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamInboundAudioContent\UrlsDetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\UrlDetails::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
