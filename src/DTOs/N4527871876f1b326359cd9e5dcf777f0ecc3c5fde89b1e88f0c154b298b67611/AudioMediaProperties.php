<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * AudioMediaProperties
 *
 * Audio media properties.
 */
final class AudioMediaProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether the end user can hear.
     */
    public bool $deaf;
    /**
     * Indicates whether the end user can speak.
     */
    public bool $muted;
    /**
     * Indicates whether the end user muted himself.
     */
    public bool $userMuted;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deaf' => is_bool($value) ? $this->deaf = $value : parent::assignMember($name, $value),
            'muted' => is_bool($value) ? $this->muted = $value : parent::assignMember($name, $value),
            'userMuted' => is_bool($value) ? $this->userMuted = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
