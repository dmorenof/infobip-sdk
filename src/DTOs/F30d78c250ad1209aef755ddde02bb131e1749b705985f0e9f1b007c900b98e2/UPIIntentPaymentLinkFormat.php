<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * UPIIntentPaymentLinkFormat
 */
final class UPIIntentPaymentLinkFormat extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UPIIntentPaymentFormat
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'paymentLink' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Payment link.
     */
    public string $paymentLink {
        set {
            $this->assigning('paymentLink', $value);
            $this->paymentLink = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paymentLink' => is_string($value) ? $this->paymentLink = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
