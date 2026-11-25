<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CallRoutingSipEndpoint
 */
final class CallRoutingSipEndpoint extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Endpoint
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'sipTrunkId' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Custom headers. Only headers starting with `X-` prefix will be propagated. Supports using variables `${from}` and `${to}`.
     */
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallRoutingSipEndpoint\CustomHeadersMap $customHeaders;
    /**
     * Caller ID that will be used. Defaults to `from` value used in inbound call.
     */
    public string $from;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RingbackGeneration $ringbackGeneration;
    /**
     * Unique identifier of a SIP trunk.
     */
    public string $sipTrunkId {
        set {
            $this->assigning('sipTrunkId', $value);
            $this->sipTrunkId = $value;
        }
    }
    /**
     * Username sent to a selected SIP trunk. When not defined, Infobip DID number is used instead.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'ringbackGeneration' => $value instanceof \stdClass ? $this->ringbackGeneration = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RingbackGeneration($value) : parent::assignMember($name, $value),
            'sipTrunkId' => is_string($value) ? $this->sipTrunkId = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
