<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * SeenReport
 */
final class SeenReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'applicationId',
        'contact',
        'entityId',
        'from',
        'messageId',
        'seenAt',
        'sentAt',
        'to',
    ];

    /**
     * Application id that the message is linked to.
     */
    public string $applicationId;
    /**
     * End user contact.
     */
    public \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\DlrContact $contact;
    /**
     * Entity id that the message is linked to.
     */
    public string $entityId;
    /**
     * Number which sent the message.
     */
    public string $from;
    /**
     * The ID of the sent message.
     */
    public string $messageId;
    /**
     * Tells when the message was seen.
     * Format: date-time
     */
    public string $seenAt;
    /**
     * Tells when the message was sent.
     * Format: date-time
     */
    public string $sentAt;
    /**
     * Registered WhatsApp business number.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'contact' => $value instanceof \stdClass ? $this->contact = new \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\DlrContact($value) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'seenAt' => is_string($value) ? $this->seenAt = $value : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
