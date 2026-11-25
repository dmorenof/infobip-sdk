<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2;

/**
 * PaymentTransaction
 *
 * Transactions of the payment.
 */
final class PaymentTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdTimestamp',
    'id',
    'status',
    'type',
    'updatedTimestamp',
];

    /**
     * Creation time of the transaction.
     * Format: date-time
     */
    public string $createdTimestamp;
    /**
     * Unique identifier of the transaction.
     * Example: "27194245144"
     */
    public string $id;
    public \InfobipSDK\Enums\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2\PaymentTransactionStatus $status;
    public \InfobipSDK\Enums\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2\PaymentTransactionType $type;
    /**
     * Update time of the transaction.
     * Format: date-time
     */
    public string $updatedTimestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdTimestamp' => is_string($value) ? $this->createdTimestamp = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2\PaymentTransactionStatus::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2\PaymentTransactionType::from($value) : parent::assignMember($name, $value),
            'updatedTimestamp' => is_string($value) ? $this->updatedTimestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
