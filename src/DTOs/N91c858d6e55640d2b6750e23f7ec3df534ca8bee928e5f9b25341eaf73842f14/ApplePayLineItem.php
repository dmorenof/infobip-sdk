<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * ApplePayLineItem
 *
 * Line item that represents the total for the payment.
 */
final class ApplePayLineItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'label',
    ];

    protected const array VALIDATION = [
        'amount' => [
            'minLength' => 1,
            'pattern' => '^-?[0-9]+(\\.[0-9][0-9])?$',
        ],
        'label' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
        'type' => [
            'pattern' => '^(final|pending)$',
        ],
    ];

    /**
     * The monetary amount of the line item. Must be a number with optional decimal part (exactly 2 digits after decimal point). Examples: '100', '99.99', '-10.50'
     */
    public string $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    /**
     * Short, localized description of the line item.
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * Value that indicates whether the line item is final or pending.
     */
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ApplePayLineItem\TypeEnum $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_string($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ApplePayLineItem\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
