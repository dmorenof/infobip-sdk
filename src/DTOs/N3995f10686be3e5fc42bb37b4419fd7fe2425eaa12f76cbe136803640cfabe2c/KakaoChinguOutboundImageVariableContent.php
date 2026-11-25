<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * KakaoChinguOutboundImageVariableContent
 */
final class KakaoChinguOutboundImageVariableContent extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'templateCode' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Buttons placeholder values. Required only if the template contains button placeholders.
     */
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundImageVariableContent\ButtonDataMap $buttonData;
    /**
     * Coupon placeholder values. Required only if the template contains coupon placeholders.
     */
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundImageVariableContent\CouponDataMap $couponData;
    /**
     * Image values to override images from the template. Each entry must contain 'img_url' key with the image URL value.
     */
    public \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundImageVariableContent\ImageDataCollection $imageData;
    /**
     * Message placeholder values. Required only if the template contains message placeholders.
     */
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundImageVariableContent\MessageDataMap $messageData;
    /**
     * Brand message template code.
     */
    public string $templateCode {
        set {
            $this->assigning('templateCode', $value);
            $this->templateCode = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'templateCode' => is_string($value) ? $this->templateCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
