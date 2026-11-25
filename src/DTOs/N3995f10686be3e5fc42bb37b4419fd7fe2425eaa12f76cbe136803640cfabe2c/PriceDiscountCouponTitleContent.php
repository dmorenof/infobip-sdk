<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * PriceDiscountCouponTitleContent
 */
final class PriceDiscountCouponTitleContent extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CouponTitleContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'couponTitleParameter' => [
        'minimum' => 1,
        'maximum' => 99999999,
        'format' => 'int32',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Title parameter of the selected coupon.
     * Format: int32
     */
    public int $couponTitleParameter {
        set {
            $this->assigning('couponTitleParameter', $value);
            $this->couponTitleParameter = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'couponTitleParameter' => is_int($value) ? $this->couponTitleParameter = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
