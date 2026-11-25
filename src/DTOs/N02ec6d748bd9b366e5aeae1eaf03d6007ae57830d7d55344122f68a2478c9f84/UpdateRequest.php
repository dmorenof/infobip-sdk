<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N02ec6d748bd9b366e5aeae1eaf03d6007ae57830d7d55344122f68a2478c9f84;

/**
 * UpdateRequest
 */
final class UpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether to blind or unblind the end user. This action prevents the user from seeing any remote video in the call. Only applicable for WebRTC endpoints.
     */
    public bool $blind;
    /**
     * Indicates whether to deaf or undeaf the end user. This action prevents the user from hearing the call.
     */
    public bool $deaf;
    /**
     * Indicates whether to mute or unmute the end user. This action prevents the user from talking.
     */
    public bool $muted;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blind' => is_bool($value) ? $this->blind = $value : parent::assignMember($name, $value),
            'deaf' => is_bool($value) ? $this->deaf = $value : parent::assignMember($name, $value),
            'muted' => is_bool($value) ? $this->muted = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
