<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * WebRtcEndpoint
 */
final class WebRtcEndpoint extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Endpoint
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'identity' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Display name of the call link participant.
     */
    public string $displayName;
    /**
     * Identity of the call link participant.
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
