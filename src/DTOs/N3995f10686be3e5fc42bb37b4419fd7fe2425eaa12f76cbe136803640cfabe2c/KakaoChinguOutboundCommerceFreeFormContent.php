<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * KakaoChinguOutboundCommerceFreeFormContent
 *
 * Commerce free form content with pricing and product information.
 */
final class KakaoChinguOutboundCommerceFreeFormContent extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'additionalContent' => [
        'minLength' => 0,
        'maxLength' => 34,
    ],
    'buttons' => [
        'minItems' => 1,
        'maxItems' => 2,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Additional content or promotional text.
     */
    public string $additionalContent {
        set {
            $this->assigning('additionalContent', $value);
            $this->additionalContent = $value;
        }
    }
    /**
     *  A maximum of 2.
     *  `BUSINESS_FORM` button must be registered before using.
     *  In case of multiple buttons, if `ADD_CHANNEL` is used together with `BUSINESS_FORM`, the `ADD_CHANNEL` button must be the last button used. In all other cases, the `BUSINESS_FORM` button must be used as the last button.
     *
     */
    public \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselCommerceFreeFormElementAttachment\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CommerceFreeForm $commerce;
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\ShortDescriptionCoupon $coupon;
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\Image $image;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalContent' => is_string($value) ? $this->additionalContent = $value : parent::assignMember($name, $value),
            'commerce' => $value instanceof \stdClass ? $this->commerce = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CommerceFreeForm($value) : parent::assignMember($name, $value),
            'coupon' => $value instanceof \stdClass ? $this->coupon = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\ShortDescriptionCoupon($value) : parent::assignMember($name, $value),
            'image' => $value instanceof \stdClass ? $this->image = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\Image($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
