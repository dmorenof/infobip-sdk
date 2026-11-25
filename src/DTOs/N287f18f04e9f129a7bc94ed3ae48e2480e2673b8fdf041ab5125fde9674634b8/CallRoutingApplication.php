<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CallRoutingApplication
 *
 * Application data for the recording.
 */
final class CallRoutingApplication extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'correlationId',
    ];

    /**
     * Unique identifier for a call routing recording call.
     */
    public string $correlationId;
    /**
     * End time of the call.
     * Format: date-time
     */
    public string $endTime;
    /**
     * Route identifier.
     */
    public string $routeId;
    /**
     * Route name.
     */
    public string $routeName;
    /**
     * Start time of the call.
     * Format: date-time
     */
    public string $startTime;
    /**
     * Application type.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallRoutingApplication\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'correlationId' => is_string($value) ? $this->correlationId = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'routeId' => is_string($value) ? $this->routeId = $value : parent::assignMember($name, $value),
            'routeName' => is_string($value) ? $this->routeName = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallRoutingApplication\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
