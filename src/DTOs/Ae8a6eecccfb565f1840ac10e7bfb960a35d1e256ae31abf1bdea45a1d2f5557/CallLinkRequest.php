<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557;

/**
 * CallLinkRequest
 *
 * Enable calls between users that have an Infobip account and users that don't.
 */
final class CallLinkRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'destination',
];

    protected const array VALIDATION = [
    'identity' => [
        'pattern' => '^[\\p{L}\\p{N}\\-_+=/.]{3,64}$',
    ],
];

    /**
     * Identifier of a call link configuration. You can use your existing configuration. If this parameter is not sent and there are call link configurations available, the default one will be used. If there are no configurations, the one with system default values will be used.
     */
    public string $callLinkConfigId;
    /**
     * Custom attributes sent in a call once it has started.
     */
    public \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLinkRequest\CustomDataMap $customData;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Destination $destination;
    /**
     * Display name of a user that will use a call link to initiate a call. Must not be set if the destination type of a call link is ROOM. For other destination types, if you want to set a display name, also set identity.
     */
    public string $displayName;
    /**
     * Identity of a user that will use a call link. Must not be set if the destination type of a call link is ROOM.
     */
    public string $identity {
        set {
            $this->assigning('identity', $value);
            $this->identity = $value;
        }
    }
    /**
     * Show identity or displayName on before a call.
     */
    public bool $showIdentity;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ValidityWindow $validityWindow;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callLinkConfigId' => is_string($value) ? $this->callLinkConfigId = $value : parent::assignMember($name, $value),
            'destination' => $value instanceof \stdClass ? $this->destination = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Destination($value) : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'identity' => is_string($value) ? $this->identity = $value : parent::assignMember($name, $value),
            'showIdentity' => is_bool($value) ? $this->showIdentity = $value : parent::assignMember($name, $value),
            'validityWindow' => $value instanceof \stdClass ? $this->validityWindow = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ValidityWindow($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
