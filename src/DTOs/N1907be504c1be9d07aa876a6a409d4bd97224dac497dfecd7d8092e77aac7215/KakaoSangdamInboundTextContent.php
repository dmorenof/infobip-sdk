<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamInboundTextContent
 */
final class KakaoSangdamInboundTextContent extends \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'attachmentUrl' => [
        'pattern' => '',
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 4000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $attachmentUrl {
        set {
            $this->assigning('attachmentUrl', $value);
            $this->attachmentUrl = $value;
        }
    }
    public string $extra;
    /**
     * Format: date-time
     */
    public string $sentAt;
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachmentUrl' => is_string($value) ? $this->attachmentUrl = $value : parent::assignMember($name, $value),
            'extra' => is_string($value) ? $this->extra = $value : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
