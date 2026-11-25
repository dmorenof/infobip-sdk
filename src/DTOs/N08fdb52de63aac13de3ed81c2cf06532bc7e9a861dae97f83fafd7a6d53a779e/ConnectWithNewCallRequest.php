<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e;

/**
 * ConnectWithNewCallRequest
 */
final class ConnectWithNewCallRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callRequest',
];

    public \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\ActionCallRequest $callRequest;
    public \InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\ActionConferenceRequest $conferenceRequest;
    /**
     * Indicates whether to connect calls on early media. Otherwise, the calls are connected after being established. Cannot be `true` when `ringbackGeneration` is enabled.
     */
    public bool $connectOnEarlyMedia;
    public \InfobipSDK\DTOs\N2dac378b25c8dcf450b0618ee8c5fb6fb461154cc6b53aedfd327a01e576875e\RingbackGeneration $ringbackGeneration;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callRequest' => $value instanceof \stdClass ? $this->callRequest = new \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\ActionCallRequest($value) : parent::assignMember($name, $value),
            'conferenceRequest' => $value instanceof \stdClass ? $this->conferenceRequest = new \InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\ActionConferenceRequest($value) : parent::assignMember($name, $value),
            'connectOnEarlyMedia' => is_bool($value) ? $this->connectOnEarlyMedia = $value : parent::assignMember($name, $value),
            'ringbackGeneration' => $value instanceof \stdClass ? $this->ringbackGeneration = new \InfobipSDK\DTOs\N2dac378b25c8dcf450b0618ee8c5fb6fb461154cc6b53aedfd327a01e576875e\RingbackGeneration($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
