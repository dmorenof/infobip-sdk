<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * UpCouponTitleContent
 */
final class UpCouponTitleContent extends \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\CouponTitleContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'couponTitle' => [
            'minLength' => 1,
            'maxLength' => 7,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Title parameter of the selected coupon.
     */
    public string $couponTitle {
        set {
            $this->assigning('couponTitle', $value);
            $this->couponTitle = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'couponTitle' => is_string($value) ? $this->couponTitle = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
