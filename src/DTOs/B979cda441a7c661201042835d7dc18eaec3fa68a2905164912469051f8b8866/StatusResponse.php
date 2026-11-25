<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * StatusResponse
 */
final class StatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\Status $Status;
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Status' => is_string($value) ? $this->Status = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\Status::from($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
