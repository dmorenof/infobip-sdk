<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * SeenReport
 *
 * Collection of reports, one per every message.
 */
final class SeenReport extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Application id that the message is linked to.
     */
    public string $applicationId;
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
     * Format: date-time
     */
    public string $seenAt;
    /**
     * Tells when the message was sent.
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
