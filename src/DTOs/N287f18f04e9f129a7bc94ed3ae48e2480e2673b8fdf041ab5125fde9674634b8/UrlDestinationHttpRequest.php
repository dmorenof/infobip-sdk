<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * UrlDestinationHttpRequest
 */
final class UrlDestinationHttpRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identifier of the application that originated the call.
     */
    public string $applicationId;
    /**
     * Identifier of the call that is being processed.
     * Example: "d8d84155-3831-43fb-91c9-bb897149a79d"
     */
    public string $callId;
    /**
     * Phone number from which the call originated from.
     * Example: "44790123456"
     */
    public string $from;
    /**
     * Identifier of the route that is used to process the call.
     * Example: "f8fc8aca-786d-4943-9af2-e7ec01b5e80d"
     */
    public string $routeId;
    /**
     * Timestamp representing start time of the call.
     * Example: "2024-01-01T10:00:00Z"
     * Format: date-time
     */
    public string $startTime;
    /**
     * Destination phone number of the call.
     * Example: "44790123456"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'routeId' => is_string($value) ? $this->routeId = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
