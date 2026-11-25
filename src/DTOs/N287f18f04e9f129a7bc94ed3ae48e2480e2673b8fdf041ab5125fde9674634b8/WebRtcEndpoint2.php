<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * WebRtcEndpoint
 */
final class WebRtcEndpoint2 extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'identity' => [
            'minLength' => 1,
        ],
    ];

    /**
     * A human-readable name for a given identity.
     */
    public string $displayName;
    /**
     * The identity used to present a user on the Infobip WebRTC platform. Must be unique.
     */
    public string $identity {
        set {
            $this->assigning('identity', $value);
            $this->identity = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'identity' => is_string($value) ? $this->identity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
