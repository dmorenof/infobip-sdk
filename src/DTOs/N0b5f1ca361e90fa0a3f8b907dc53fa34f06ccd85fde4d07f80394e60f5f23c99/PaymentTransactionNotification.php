<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * whatsappPaymentTransactionNotification
 */
final class PaymentTransactionNotification extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'minLength' => 1,
    ],
];

    /**
     * Creation time of the transaction. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $createdTimestamp;
    /**
     * Unique identifier of the transaction.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Status of the transaction.
     */
    public \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\PaymentTransactionNotification\StatusEnum $status;
    /**
     * Type of the transaction.
     */
    public \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\PaymentTransactionNotification\TypeEnum $type;
    /**
     * Update time of the transaction. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $updatedTimestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdTimestamp' => is_string($value) ? $this->createdTimestamp = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\PaymentTransactionNotification\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\PaymentTransactionNotification\TypeEnum::from($value) : parent::assignMember($name, $value),
            'updatedTimestamp' => is_string($value) ? $this->updatedTimestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
