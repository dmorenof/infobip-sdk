<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessagePayment
 *
 * Request payment data.
 */
final class MessagesApiMessagePayment extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'subtotal' => [
        'minimum' => 0,
    ],
];

    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentConfiguration $configuration;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageDescriptiveDiscountAmount $discount;
    /**
     * (WhatsApp specific, required) Sub-total amount of the order (up to 2 decimal places). For WhatsApp it has to be multiplied by offset (100 for `INR` and `BRL`)
     */
    public float $subtotal {
        set {
            $this->assigning('subtotal', $value);
            $this->subtotal = $value;
        }
    }
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageDescriptiveTaxAmount $tax;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDescriptiveTotalAmount $total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discount' => $value instanceof \stdClass ? $this->discount = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageDescriptiveDiscountAmount($value) : parent::assignMember($name, $value),
            'subtotal' => is_float($value) ? $this->subtotal = $value : parent::assignMember($name, $value),
            'tax' => $value instanceof \stdClass ? $this->tax = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageDescriptiveTaxAmount($value) : parent::assignMember($name, $value),
            'total' => $value instanceof \stdClass ? $this->total = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDescriptiveTotalAmount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
