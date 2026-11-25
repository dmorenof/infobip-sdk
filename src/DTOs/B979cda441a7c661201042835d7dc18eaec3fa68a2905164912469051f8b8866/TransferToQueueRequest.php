<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * TransferToQueueRequest
 * Example: {"queueId":"FAC58F4117D439CF6F0A1A1A3AEA6123"}
 */
final class TransferToQueueRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Id of the queue to which a call should be transferred.
     * Example: "FAC58F4117D439CF6F0A1A1A3AEA6123"
     */
    public string $queueId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'queueId' => is_string($value) ? $this->queueId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
