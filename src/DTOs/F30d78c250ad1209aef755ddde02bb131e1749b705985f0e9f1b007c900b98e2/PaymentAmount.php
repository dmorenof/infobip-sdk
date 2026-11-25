<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

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
            'minimum' => 0,
            'exclusiveMinimum' => 0,
            'format' => 'int32',
        ],
        'value' => [
            'minimum' => 0,
            'exclusiveMinimum' => 0,
            'format' => 'int32',
        ],
    ];

    /**
     * Offset of the payment amount (100 for INR and BRL).
     * Format: int32
     */
    public int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    /**
     * Value of the payment amount multiplied by the offset.
     * Format: int32
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
