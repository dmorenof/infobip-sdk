<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTestNumberRequestAcceptedResponse
 */
final class RcsTestNumberRequestAcceptedResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'senderName',
    'status',
    'testNumber',
];

    /**
     * Unique identifier of a sender for which test number is associated.
     */
    public string $senderName;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestDeviceStatus $status;
    /**
     * Full number in E.164 format, e.g. +1234567890. Leading '+' is optional.
     */
    public string $testNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'senderName' => is_string($value) ? $this->senderName = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestDeviceStatus::from($value) : parent::assignMember($name, $value),
            'testNumber' => is_string($value) ? $this->testNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
