<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02;

/**
 * ConferenceBroadcastWebrtcTextRequest
 */
final class ConferenceBroadcastWebrtcTextRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Text to broadcast.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
