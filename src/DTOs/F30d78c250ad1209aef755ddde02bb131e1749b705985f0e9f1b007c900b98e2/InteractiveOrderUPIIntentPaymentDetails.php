<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderUPIIntentPaymentDetails
 */
final class InteractiveOrderUPIIntentPaymentDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'id' => [
        'minLength' => 1,
        'pattern' => '[A-Za-z0-9\\-_.]{1,35}',
    ],
];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Beneficiary $beneficiary;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UPIIntentPaymentFormat $format;
    /**
     * Unique identifier of the payment.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'beneficiary' => $value instanceof \stdClass ? $this->beneficiary = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Beneficiary($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
