<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * KakaoChinguOutboundContent
 *
 * Message content.
 */
class KakaoChinguOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundCarouselCommerceFreeFormContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundCarouselCommerceFreeFormContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundCarouselFreeFormContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundCarouselFreeFormContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundCommerceFreeFormContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundCommerceFreeFormContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundImageFreeFormContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundImageFreeFormContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundImageVariableContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundImageVariableContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundImageWideFreeFormContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundImageWideFreeFormContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundImageWideVariableContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundImageWideVariableContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundItemListFreeFormContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundItemListFreeFormContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundItemListVariableContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundItemListVariableContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundPremiumVideoFreeFormContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundPremiumVideoFreeFormContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundTextFreeFormContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundTextFreeFormContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.KakaoChinguOutboundTextVariableContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundTextVariableContent',
        'CAROUSEL_COMMERCE_FREE_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundCarouselCommerceFreeFormContent',
        'CAROUSEL_FREE_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundCarouselFreeFormContent',
        'COMMERCE_FREE_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundCommerceFreeFormContent',
        'IMAGE_FREE_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundImageFreeFormContent',
        'IMAGE_VARIABLE' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundImageVariableContent',
        'IMAGE_WIDE_FREE_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundImageWideFreeFormContent',
        'IMAGE_WIDE_VARIABLE' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundImageWideVariableContent',
        'ITEM_LIST_FREE_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundItemListFreeFormContent',
        'ITEM_LIST_VARIABLE' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundItemListVariableContent',
        'PREMIUM_VIDEO_FREE_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundPremiumVideoFreeFormContent',
        'TEXT_FREE_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundTextFreeFormContent',
        'TEXT_VARIABLE' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\KakaoChinguOutboundTextVariableContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
