<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderBrazilBoletoPaymentDetails
 */
final class InteractiveOrderBrazilBoletoPaymentDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'code' => [
        'minLength' => 1,
    ],
    'id' => [
        'minLength' => 1,
        'pattern' => '[A-Za-z0-9\\-_.]{1,35}',
    ],
];

    /**
     * Boleto code.
     */
    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
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
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
