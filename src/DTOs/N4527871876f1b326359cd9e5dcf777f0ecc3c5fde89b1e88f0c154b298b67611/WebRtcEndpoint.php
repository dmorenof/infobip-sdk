<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * WebRtcEndpoint
 */
final class WebRtcEndpoint extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    /**
     * A human-readable name for a given identity.
     */
    public string $displayName;
    /**
     * The identity used to present a user on the Infobip WebRTC platform. Must be unique.
     */
    public string $identity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'identity' => is_string($value) ? $this->identity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
