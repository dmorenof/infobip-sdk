<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * CommerceFreeForm
 *
 * Commerce free form content.
 */
final class CommerceFreeForm extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'regularPrice',
    'title',
];

    protected const array VALIDATION = [
    'discountFixed' => [
        'minimum' => 0,
        'maximum' => 999999,
        'format' => 'int32',
    ],
    'discountPrice' => [
        'minimum' => 0,
        'maximum' => 99999999,
        'format' => 'int32',
    ],
    'discountRate' => [
        'minimum' => 0,
        'maximum' => 100,
        'format' => 'int32',
    ],
    'regularPrice' => [
        'minimum' => 0,
        'maximum' => 99999999,
        'format' => 'int32',
    ],
    'title' => [
        'minLength' => 1,
        'maxLength' => 30,
    ],
];

    /**
     * Fixed discount amount.
     * Format: int32
     */
    public int $discountFixed {
        set {
            $this->assigning('discountFixed', $value);
            $this->discountFixed = $value;
        }
    }
    /**
     * Price of the product after discount applied. If provided should be alongside one of `discountFixed` or `discountRate`.
     * Format: int32
     */
    public int $discountPrice {
        set {
            $this->assigning('discountPrice', $value);
            $this->discountPrice = $value;
        }
    }
    /**
     * Discount rate in percentage.
     * Format: int32
     */
    public int $discountRate {
        set {
            $this->assigning('discountRate', $value);
            $this->discountRate = $value;
        }
    }
    /**
     * Regular price of the product.
     * Format: int32
     */
    public int $regularPrice {
        set {
            $this->assigning('regularPrice', $value);
            $this->regularPrice = $value;
        }
    }
    /**
     * Title of the commerce content.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discountFixed' => is_int($value) ? $this->discountFixed = $value : parent::assignMember($name, $value),
            'discountPrice' => is_int($value) ? $this->discountPrice = $value : parent::assignMember($name, $value),
            'discountRate' => is_int($value) ? $this->discountRate = $value : parent::assignMember($name, $value),
            'regularPrice' => is_int($value) ? $this->regularPrice = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
