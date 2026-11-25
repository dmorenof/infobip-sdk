<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsSeenReport
 *
 * Collection of reports, one per every message.
 */
final class RcsSeenReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
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
     * Callback data of a campaign that was sent in the message.
     */
    public string $callbackData;
    /**
     * ID of a campaign that was sent in the message.
     */
    public string $campaignReferenceId;
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
     * Example: "2024-06-14T09:12:00Z"
     * Format: date-time
     */
    public string $seenAt;
    /**
     * Tells when the message was sent.
     * Example: "2024-06-14T09:12:00Z"
     * Format: date-time
     */
    public string $sentAt;
    /**
     * Sender provided during the activation process.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
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
