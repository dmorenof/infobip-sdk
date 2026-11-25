<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * KakaoChinguOutboundPremiumVideoFreeFormContent
 *
 * Premium video free form content.
 */
final class KakaoChinguOutboundPremiumVideoFreeFormContent extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'content' => [
        'minLength' => 0,
        'maxLength' => 76,
    ],
    'header' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\RichContentFreeFormButton $button;
    /**
     * Text content of the message.
     */
    public string $content {
        set {
            $this->assigning('content', $value);
            $this->content = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\LongDescriptionCoupon $coupon;
    /**
     * Header of the message.
     */
    public string $header {
        set {
            $this->assigning('header', $value);
            $this->header = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\FreeFormVideo $video;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'coupon' => $value instanceof \stdClass ? $this->coupon = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\LongDescriptionCoupon($value) : parent::assignMember($name, $value),
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'video' => $value instanceof \stdClass ? $this->video = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\FreeFormVideo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
