<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C5d63eb36983d8ea1e54e74166c0e08ea636cff38a55aa9570bd7ba615a520a0;

/**
 * RouteSimulatorRequest
 *
 * Route simulator request object.
 */
final class RouteSimulatorRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'endpoint',
    'to',
];

    protected const array VALIDATION = [
    'to' => [
        'minLength' => 1,
    ],
];

    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SimulatorCallEndpoint $endpoint;
    /**
     * Phone number or regular expression pattern representing the phone number. Applies to all simulator endpoint types except `WEBRTC`. Examples: `41793026727`, `41793(.+)`.
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }
    /**
     * If set to `true`, the simulator will use disabled routes for simulation. If set to `false`, only enabled routes will be used.
     */
    public bool $useDisabledRoutes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'useDisabledRoutes' => is_bool($value) ? $this->useDisabledRoutes = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
