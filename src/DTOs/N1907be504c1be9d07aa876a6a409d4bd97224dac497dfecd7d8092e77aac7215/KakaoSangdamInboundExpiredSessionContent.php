<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamInboundExpiredSessionContent
 */
final class KakaoSangdamInboundExpiredSessionContent extends \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'sessionId' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Format: date-time
     */
    public string $sentAt;
    public string $sessionId {
        set {
            $this->assigning('sessionId', $value);
            $this->sessionId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'sessionId' => is_string($value) ? $this->sessionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
