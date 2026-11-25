<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsSenderRequestAcceptedResponse
 */
final class RcsSenderRequestAcceptedResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'senderName',
        'senderStatus',
    ];

    /**
     * Unique identifier of Sender entity for RCS channel within Infobip platform.
     */
    public string $senderName;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatus $senderStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'senderName' => is_string($value) ? $this->senderName = $value : parent::assignMember($name, $value),
            'senderStatus' => is_string($value) ? $this->senderStatus = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
