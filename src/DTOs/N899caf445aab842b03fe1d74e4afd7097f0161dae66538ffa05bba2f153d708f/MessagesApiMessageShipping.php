<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageShipping
 *
 * An array of shipping information. For WhatsApp only one item allowed, for Apple many allowed.
 */
final class MessagesApiMessageShipping extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
    ];

    protected const array VALIDATION = [
        'amount' => [
            'minimum' => 0,
        ],
    ];

    /**
     * Amount of shipping cost (up to 2 decimal places). For WhatsApp it has to be multiplied by offset (100 for `INR` and `BRL`)
     */
    public float $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    /**
     * (Apple specific and required) Additional description of shipping cost. Optional for WhatsApp.
     */
    public string $description;
    /**
     * (Apple specific and required) Client-defined value used to identify this shipping method.
     */
    public string $identifier;
    /**
     * (Apple specific and required) Short description of the shipping method.
     */
    public string $label;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_float($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
