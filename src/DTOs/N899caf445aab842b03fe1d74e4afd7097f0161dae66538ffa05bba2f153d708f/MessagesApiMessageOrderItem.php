<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageOrderItem
 *
 * An array of items in the order.
 */
final class MessagesApiMessageOrderItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'amount',
    'name',
];

    protected const array VALIDATION = [
    'amount' => [
        'minimum' => 0,
    ],
    'name' => [
        'minLength' => 1,
    ],
    'quantity' => [
        'minimum' => 0,
        'exclusiveMinimum' => 0,
        'format' => 'int32',
    ],
    'saleAmount' => [
        'minimum' => 0,
    ],
];

    /**
     * Price of the item (up to 2 decimal places). For WhatsApp it has to be multiplied by offset (100 for `INR` and `BRL`)
     */
    public float $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageOrderImporter $importer;
    /**
     * Name of the item.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * (WhatsApp specific) Item quantity.
     * Format: int32
     */
    public int $quantity {
        set {
            $this->assigning('quantity', $value);
            $this->quantity = $value;
        }
    }
    /**
     * (WhatsApp specific, and required) Product-unique identifier, as defined in catalog.
     */
    public string $retailerId;
    /**
     * (WhatsApp specific) Item discount (up to 2 decimal places). For WhatsApp it has to be multiplied by offset (100 for `INR` and `BRL`)
     */
    public float $saleAmount {
        set {
            $this->assigning('saleAmount', $value);
            $this->saleAmount = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_float($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'importer' => $value instanceof \stdClass ? $this->importer = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageOrderImporter($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'retailerId' => is_string($value) ? $this->retailerId = $value : parent::assignMember($name, $value),
            'saleAmount' => is_float($value) ? $this->saleAmount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
