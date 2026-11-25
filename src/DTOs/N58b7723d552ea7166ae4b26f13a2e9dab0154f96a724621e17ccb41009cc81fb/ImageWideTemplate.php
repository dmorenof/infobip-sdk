<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * ImageWideTemplate
 */
final class ImageWideTemplate extends \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\BrandMessagesTemplateContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'buttons' => [
        'minItems' => 1,
        'maxItems' => 2,
    ],
    'text' => [
        'minLength' => 1,
        'maxLength' => 76,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     *  A maximum of 2.
     *  `BUSINESS_FORM` button must be registered before using.
     *  In case of multiple buttons, if `ADD_CHANNEL` is used together with `BUSINESS_FORM`, the `ADD_CHANNEL` button must be the last button used. In all other cases, the `BUSINESS_FORM` button must be used as the last button.
     *
     */
    public \InfobipSDK\Collections\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\ImageWideTemplate\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    public \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\WideAndVideoTemplateCoupon $coupon;
    public \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\Image $image;
    /**
     * Template text.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coupon' => $value instanceof \stdClass ? $this->coupon = new \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\WideAndVideoTemplateCoupon($value) : parent::assignMember($name, $value),
            'image' => $value instanceof \stdClass ? $this->image = new \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\Image($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
