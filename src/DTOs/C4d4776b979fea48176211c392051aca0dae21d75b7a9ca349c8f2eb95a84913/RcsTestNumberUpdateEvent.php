<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTestNumberUpdateEvent
 *
 * Collection of RCS test number update events.
 */
final class RcsTestNumberUpdateEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'event',
    'senderName',
    'senderStatus',
    'testNumber',
    'testNumberStatus',
    'updatedAt',
];

    /**
     * Timestamp when request has been completed. It will be null if request is still in progress.
     * Format: date-time
     */
    public string $completedAt;
    /**
     * Event type identifier for webhook notifications. Indicates the type of status change that occurred.
     */
    public string $event;
    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\PlatformParameters $platform;
    /**
     * Unique identifier of a sender for which test number is associated.
     */
    public string $senderName;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatus $senderStatus;
    /**
     * Full number in E.164 format, e.g. +1234567890. Leading '+' is optional.
     */
    public string $testNumber;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestDeviceStatus $testNumberStatus;
    /**
     * Timestamp when test number has been updated last time.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'completedAt' => is_string($value) ? $this->completedAt = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\PlatformParameters($value) : parent::assignMember($name, $value),
            'senderName' => is_string($value) ? $this->senderName = $value : parent::assignMember($name, $value),
            'senderStatus' => is_string($value) ? $this->senderStatus = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatus::from($value) : parent::assignMember($name, $value),
            'testNumber' => is_string($value) ? $this->testNumber = $value : parent::assignMember($name, $value),
            'testNumberStatus' => is_string($value) ? $this->testNumberStatus = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestDeviceStatus::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
