<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40;

/**
 * AddNewCallRequest
 */
final class AddNewCallRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'callRequest',
    ];

    public \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\ActionCallRequest $callRequest;
    /**
     * Indicates whether to connect a new call on early media. Otherwise, the call will be connected after being established. Cannot be `true` when `ringbackGeneration` is enabled.
     */
    public bool $connectOnEarlyMedia;
    public \InfobipSDK\DTOs\N27eaa09c2aeef6932f3271ca5bde4158d33d6ab404b64c38db12c844a2084089\RingbackGeneration $ringbackGeneration;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Role $role;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callRequest' => $value instanceof \stdClass ? $this->callRequest = new \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\ActionCallRequest($value) : parent::assignMember($name, $value),
            'connectOnEarlyMedia' => is_bool($value) ? $this->connectOnEarlyMedia = $value : parent::assignMember($name, $value),
            'ringbackGeneration' => $value instanceof \stdClass ? $this->ringbackGeneration = new \InfobipSDK\DTOs\N27eaa09c2aeef6932f3271ca5bde4158d33d6ab404b64c38db12c844a2084089\RingbackGeneration($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
