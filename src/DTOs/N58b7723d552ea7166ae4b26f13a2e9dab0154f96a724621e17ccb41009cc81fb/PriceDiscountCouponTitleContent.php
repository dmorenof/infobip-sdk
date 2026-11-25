<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * PriceDiscountCouponTitleContent
 */
final class PriceDiscountCouponTitleContent extends \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\CouponTitleContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'couponTitle' => [
        'minimum' => 1,
        'maximum' => 99999999,
        'format' => 'int32',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Price value for the price discount coupon.
     * Format: int32
     */
    public int $couponTitle {
        set {
            $this->assigning('couponTitle', $value);
            $this->couponTitle = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'couponTitle' => is_int($value) ? $this->couponTitle = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
