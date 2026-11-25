<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * CarouselFreeFormElementAttachment
 *
 * Element attachment content containing image, buttons, and optional coupon.
 */
final class CarouselFreeFormElementAttachment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'buttons',
        'image',
    ];

    protected const array VALIDATION = [
        'buttons' => [
            'minItems' => 1,
            'maxItems' => 2,
        ],
    ];

    /**
     *  A maximum of 2. Only 1 `ADD_CHANNEL` button allowed across the entire carousel.
     *  `BUSINESS_FORM` button must be registered before using.
     *  `ADD_CHANNEL` button can be sent only for M and N targeting.
     *  In case of multiple buttons, if `ADD_CHANNEL` is used together with `BUSINESS_FORM`, the `ADD_CHANNEL` button must be the last button used. In all other cases, the `BUSINESS_FORM` button must be used as the last button.
     *
     */
    public \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselCommerceFreeFormElementAttachment\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\ShortDescriptionCoupon $coupon;
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\Image $image;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coupon' => $value instanceof \stdClass ? $this->coupon = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\ShortDescriptionCoupon($value) : parent::assignMember($name, $value),
            'image' => $value instanceof \stdClass ? $this->image = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\Image($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
