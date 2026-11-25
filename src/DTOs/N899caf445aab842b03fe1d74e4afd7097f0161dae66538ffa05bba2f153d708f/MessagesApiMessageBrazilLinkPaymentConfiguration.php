<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageBrazilLinkPaymentConfiguration
 */
final class MessagesApiMessageBrazilLinkPaymentConfiguration extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentConfiguration
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'paymentLink' => [
            'pattern' => '',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Unique identifier of the payment. It can only contain English letters, numbers, underscores, dashes, or dots, and should not exceed 35 characters
     */
    public string $id;
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
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'paymentLink' => is_string($value) ? $this->paymentLink = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
