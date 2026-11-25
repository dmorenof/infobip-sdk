<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsSenderUpdateEvent
 *
 * Collection of RCS sender update events
 */
final class RcsSenderUpdateEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event',
        'reason',
        'senderName',
        'senderStatus',
        'updatedAt',
    ];

    /**
     * Event type identifier for webhook notifications. Indicates the type of status change that occurred.
     */
    public string $event;
    /**
     * Google Agent ID associated with this sender. Only included during the first transition to READY_FOR_TESTING status.
     */
    public string $googleAgentId;
    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\PlatformParameters $platform;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatusReason $reason;
    /**
     * Unique identifier of Sender entity for RCS channel within Infobip platform.
     */
    public string $senderName;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatus $senderStatus;
    /**
     * Timestamp when sender has been updated last time. (ISO 8601-style timestamp)
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event' => is_string($value) ? $this->event = $value : parent::assignMember($name, $value),
            'googleAgentId' => is_string($value) ? $this->googleAgentId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\PlatformParameters($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatusReason::from($value) : parent::assignMember($name, $value),
            'senderName' => is_string($value) ? $this->senderName = $value : parent::assignMember($name, $value),
            'senderStatus' => is_string($value) ? $this->senderStatus = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatus::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
