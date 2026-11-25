<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageBrazilPixDcPaymentConfiguration
 */
final class MessagesApiMessageBrazilPixDcPaymentConfiguration extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentConfiguration
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 60,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Dynamic Pix code which will be copied by the buyer.
     */
    public string $code;
    /**
     * Unique identifier of the payment. It can only contain English letters, numbers, underscores, dashes, or dots, and should not exceed 35 characters
     */
    public string $id;
    /**
     * Key to identify the pix user’s account.
     */
    public string $key;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageBrazilPixDcPaymentContentKeyType $keyType;
    /**
     * Pix account holder name.
     */
    public string $merchantName;
    /**
     * Name of the WhatsApp payment configuration to be used for this order. Can be omitted for Brazil PIX.
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
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'keyType' => is_string($value) ? $this->keyType = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageBrazilPixDcPaymentContentKeyType::from($value) : parent::assignMember($name, $value),
            'merchantName' => is_string($value) ? $this->merchantName = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
