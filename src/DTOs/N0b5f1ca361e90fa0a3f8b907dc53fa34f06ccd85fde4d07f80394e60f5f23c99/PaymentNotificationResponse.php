<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * whatsappPaymentNotificationResponse
 */
final class PaymentNotificationResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'from' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Content of the notification.
     */
    public \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\PaymentNotificationResponse\ContentDTO $content;
    /**
     * Tells when the event occurred. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Registered WhatsApp sender number.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
