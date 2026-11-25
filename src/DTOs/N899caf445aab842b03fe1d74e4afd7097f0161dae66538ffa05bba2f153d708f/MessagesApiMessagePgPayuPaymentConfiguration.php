<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessagePgPayuPaymentConfiguration
 */
final class MessagesApiMessagePgPayuPaymentConfiguration extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentConfiguration
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'callbackData' => [
        'minItems' => 0,
        'maxItems' => 4,
    ],
    'name' => [
        'minLength' => 1,
        'maxLength' => 60,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentBeneficiary $beneficiary;
    /**
     * List of custom parameters corresponding to the transaction.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePgPayuPaymentConfiguration\CallbackDataCollection $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    /**
     * Unique identifier of the payment. It can only contain English letters, numbers, underscores, dashes, or dots, and should not exceed 35 characters
     */
    public string $id;
    /**
     * Name of the WhatsApp payment configuration to be used for this order.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'beneficiary' => $value instanceof \stdClass ? $this->beneficiary = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentBeneficiary($value) : parent::assignMember($name, $value),
            'callbackData' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->callbackData = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePgPayuPaymentConfiguration\CallbackDataCollection($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
