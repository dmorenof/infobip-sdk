<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderDetailsDiscount
 *
 * Discount of the order.
 */
final class InteractiveOrderDetailsDiscount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
    ];

    protected const array VALIDATION = [
        'programName' => [
            'minLength' => 0,
            'maxLength' => 60,
        ],
    ];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsDescriptiveAmount $amount;
    /**
     * Discount program name.
     */
    public string $programName {
        set {
            $this->assigning('programName', $value);
            $this->programName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value instanceof \stdClass ? $this->amount = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsDescriptiveAmount($value) : parent::assignMember($name, $value),
            'programName' => is_string($value) ? $this->programName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
