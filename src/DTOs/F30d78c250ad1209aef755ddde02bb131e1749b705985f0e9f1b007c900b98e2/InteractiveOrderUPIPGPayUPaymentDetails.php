<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderUPIPGPayUPaymentDetails
 */
final class InteractiveOrderUPIPGPayUPaymentDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'callbackData' => [
        'minItems' => 0,
        'maxItems' => 4,
    ],
    'id' => [
        'minLength' => 1,
        'pattern' => '[A-Za-z0-9\\-_.]{1,35}',
    ],
];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Beneficiary $beneficiary;
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
            'callbackData' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->callbackData = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePgPayuPaymentConfiguration\CallbackDataCollection($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
