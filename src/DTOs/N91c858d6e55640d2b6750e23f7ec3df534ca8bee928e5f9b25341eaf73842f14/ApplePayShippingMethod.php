<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * ApplePayShippingMethod
 *
 * An array of shipping methods for delivering physical goods.
 */
final class ApplePayShippingMethod extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'amount',
    'detail',
    'identifier',
    'label',
];

    protected const array VALIDATION = [
    'amount' => [
        'minLength' => 1,
        'pattern' => '^[0-9]+(\\.[0-9][0-9])?$',
    ],
    'detail' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'identifier' => [
        'minLength' => 1,
    ],
    'label' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    /**
     * The nonnegative cost associated with this shipping method. Must be a number with optional decimal part (exactly 2 digits after decimal point). Examples: '100', '99.99'
     */
    public string $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    /**
     * Additional description of the shipping method.
     */
    public string $detail {
        set {
            $this->assigning('detail', $value);
            $this->detail = $value;
        }
    }
    /**
     * Client-defined value used to identify this shipping method.
     */
    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    /**
     * Short description of the shipping method.
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_string($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'detail' => is_string($value) ? $this->detail = $value : parent::assignMember($name, $value),
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
