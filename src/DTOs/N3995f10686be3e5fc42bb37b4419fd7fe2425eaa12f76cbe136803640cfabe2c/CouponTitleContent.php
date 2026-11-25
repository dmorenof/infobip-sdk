<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

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
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.FreeCouponTitleContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\FreeCouponTitleContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.PercentageDiscountCouponTitleContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\PercentageDiscountCouponTitleContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.PriceDiscountCouponTitleContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\PriceDiscountCouponTitleContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.ShippingDiscountCouponTitleContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\ShippingDiscountCouponTitleContent',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.UpCouponTitleContent' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\UpCouponTitleContent',
        'FREE_COUPON' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\FreeCouponTitleContent',
        'PERCENTAGE_DISCOUNT_COUPON' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\PercentageDiscountCouponTitleContent',
        'PRICE_DISCOUNT_COUPON' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\PriceDiscountCouponTitleContent',
        'SHIPPING_DISCOUNT_COUPON' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\ShippingDiscountCouponTitleContent',
        'UP_COUPON' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\UpCouponTitleContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CouponTitleContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CouponTitleContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
