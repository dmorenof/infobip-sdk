<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3;

/**
 * TokenRequestModel
 */
final class TokenRequestModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identity',
    ];

    protected const array VALIDATION = [
        'identity' => [
            'pattern' => '^[\\p{L}\\p{N}\\-_+=/.]{3,64}$',
        ],
    ];

    /**
     * Optional. A human-readable name for a given identity. Does not have to be unique. If set, it will be presented to all other users communicating with the identified user, along with identity. Must contain at least 5 and at most 50 characters.
     */
    public string $displayName;
    /**
     * The identity used to present user on Infobip WebRTC platform. Must be unique. Must contain at least 3 and at most 64 unicode characters including -, _, ..
     */
    public string $identity {
        set {
            $this->assigning('identity', $value);
            $this->identity = $value;
        }
    }
    /**
     * Optional. This field represents a number of seconds until the token expires. If not set, the token will last 8 hours. The maximum value is 24 hours.
     * Format: int64
     */
    public int $timeToLive;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'identity' => is_string($value) ? $this->identity = $value : parent::assignMember($name, $value),
            'timeToLive' => is_int($value) ? $this->timeToLive = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
