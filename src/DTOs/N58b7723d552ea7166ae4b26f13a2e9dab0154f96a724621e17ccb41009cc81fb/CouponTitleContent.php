<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * CouponTitleContent
 *
 * Coupon title.
 */
class CouponTitleContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.FreeCouponTitleContent' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\FreeCouponTitleContent',
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.PercentageDiscountCouponTitleContent' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\PercentageDiscountCouponTitleContent',
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.PriceDiscountCouponTitleContent' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\PriceDiscountCouponTitleContent',
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.ShippingDiscountCouponTitleContent' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\ShippingDiscountCouponTitleContent',
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.UpCouponTitleContent' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\UpCouponTitleContent',
        'FREE_COUPON' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\FreeCouponTitleContent',
        'PERCENTAGE_DISCOUNT_COUPON' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\PercentageDiscountCouponTitleContent',
        'PRICE_DISCOUNT_COUPON' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\PriceDiscountCouponTitleContent',
        'SHIPPING_DISCOUNT_COUPON' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\ShippingDiscountCouponTitleContent',
        'UP_COUPON' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\UpCouponTitleContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\CouponTitleContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\CouponTitleContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
