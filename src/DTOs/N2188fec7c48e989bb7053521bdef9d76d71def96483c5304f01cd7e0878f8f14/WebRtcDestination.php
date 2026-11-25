<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * WebRtcDestination
 */
final class WebRtcDestination extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Destination
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'identity' => [
            'minLength' => 1,
            'pattern' => '^[\\p{L}\\p{N}\\-_+=/.]{3,64}$',
        ],
    ];

    /**
     * Destination display name, if defined, that the call link UI will use instead of a display name obtained from the Infobip WebRTC platform. If a destination display name is an empty string, the UI will hide it.
     */
    public string $displayName;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\HangupRestriction $hangupRestriction;
    /**
     * The identity to present a user on the Infobip WebRTC platform. It represents a person who will receive a ring once the call is made.
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
            'hangupRestriction' => $value instanceof \stdClass ? $this->hangupRestriction = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\HangupRestriction($value) : parent::assignMember($name, $value),
            'identity' => is_string($value) ? $this->identity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
