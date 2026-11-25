<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageDescriptiveTaxAmount
 *
 * (WhatsApp specific, required) Tax amount of the order.
 */
final class MessagesApiMessageDescriptiveTaxAmount extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'value' => [
            'minimum' => 0,
        ],
    ];

    /**
     * Additional description of the amount. Optional for WhatsApp.
     */
    public string $description;
    /**
     * Value of the amount (up to 2 decimal places). For WhatsApp it has to be multiplied by offset (100 for `INR` and `BRL`)
     */
    public float $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'value' => is_float($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
