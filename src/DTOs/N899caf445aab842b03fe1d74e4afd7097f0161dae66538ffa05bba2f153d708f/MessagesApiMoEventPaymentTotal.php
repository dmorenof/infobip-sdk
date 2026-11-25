<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMoEventPaymentTotal
 *
 * Total amount of the payment.
 */
final class MessagesApiMoEventPaymentTotal extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMoEventPaymentCurrency $currency;
    /**
     * (Apple specific) A short localized description.
     */
    public string $description;
    /**
     * Value of the payment amount. In case of Apple it represents a value of all items. In case of WhatsApp it represents a value multiplied by the offset.
     */
    public float $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMoEventPaymentCurrency::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'value' => is_float($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
