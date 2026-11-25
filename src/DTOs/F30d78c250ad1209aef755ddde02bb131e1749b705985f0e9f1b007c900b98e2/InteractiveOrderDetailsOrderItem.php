<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderDetailsOrderItem
 *
 * An array of items in the order.
 */
final class InteractiveOrderDetailsOrderItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'name',
        'quantity',
        'retailerId',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 60,
        ],
        'quantity' => [
            'minimum' => 0,
            'exclusiveMinimum' => 0,
            'format' => 'int32',
        ],
        'retailerId' => [
            'minLength' => 1,
        ],
    ];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsAmount $amount;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsImporterAddress $importerAddress;
    /**
     * Importer name. Required when catalogId is not provided. It's supported only for UPI PayU payments.
     */
    public string $importerName;
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
     * Country of origin. Required when catalogId is not provided. It's supported only for UPI PayU payments.
     */
    public string $originCountry;
    /**
     * The number of items.
     * Format: int32
     */
    public int $quantity {
        set {
            $this->assigning('quantity', $value);
            $this->quantity = $value;
        }
    }
    /**
     * Product-unique identifier, as defined in catalog.
     */
    public string $retailerId {
        set {
            $this->assigning('retailerId', $value);
            $this->retailerId = $value;
        }
    }
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsAmount $saleAmount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value instanceof \stdClass ? $this->amount = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsAmount($value) : parent::assignMember($name, $value),
            'importerAddress' => $value instanceof \stdClass ? $this->importerAddress = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsImporterAddress($value) : parent::assignMember($name, $value),
            'importerName' => is_string($value) ? $this->importerName = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'originCountry' => is_string($value) ? $this->originCountry = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'retailerId' => is_string($value) ? $this->retailerId = $value : parent::assignMember($name, $value),
            'saleAmount' => $value instanceof \stdClass ? $this->saleAmount = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsAmount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
