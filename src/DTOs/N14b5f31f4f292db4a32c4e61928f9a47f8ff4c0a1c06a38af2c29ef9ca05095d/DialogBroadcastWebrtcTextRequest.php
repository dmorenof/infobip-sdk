<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d;

/**
 * DialogBroadcastWebrtcTextRequest
 */
final class DialogBroadcastWebrtcTextRequest extends \Dmorenof\SdkRuntime\DTO
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
