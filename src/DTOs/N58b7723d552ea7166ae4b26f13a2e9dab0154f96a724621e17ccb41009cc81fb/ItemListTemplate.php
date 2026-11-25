<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * ItemListTemplate
 */
final class ItemListTemplate extends \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\BrandMessagesTemplateContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'buttons' => [
            'minItems' => 1,
            'maxItems' => 2,
        ],
        'header' => [
            'minLength' => 1,
            'maxLength' => 20,
        ],
        'wideList' => [
            'minItems' => 2,
            'maxItems' => 4,
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
    /**
     * Header text. Line breaks not allowed.
     */
    public string $header {
        set {
            $this->assigning('header', $value);
            $this->header = $value;
        }
    }
    public \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\MainItemListElement $wide;
    /**
     * 2nd–5th images in the wide image list. Aspect ratio must be 1:1.
     */
    public \InfobipSDK\Collections\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\ItemListTemplate\WideListCollection $wideList {
        set {
            $this->assigning('wideList', $value);
            $this->wideList = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coupon' => $value instanceof \stdClass ? $this->coupon = new \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\WideAndVideoTemplateCoupon($value) : parent::assignMember($name, $value),
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'wide' => $value instanceof \stdClass ? $this->wide = new \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\MainItemListElement($value) : parent::assignMember($name, $value),
            'wideList' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->wideList = new \InfobipSDK\Collections\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\ItemListTemplate\WideListCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\SubItemListElement::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
