<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * PaymentAmount
 *
 * Total amount of the payment.
 */
final class PaymentAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'offset',
    'value',
];

    protected const array VALIDATION = [
    'offset' => [
        'minimum' => 1,
    ],
    'value' => [
        'minimum' => 1,
    ],
];

    /**
     * Offset of the payment amount (100 for INR and BRL).
     */
    public int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    /**
     * Value of the payment amount multiplied by the offset.
     */
    public int $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'offset' => is_int($value) ? $this->offset = $value : parent::assignMember($name, $value),
            'value' => is_int($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
