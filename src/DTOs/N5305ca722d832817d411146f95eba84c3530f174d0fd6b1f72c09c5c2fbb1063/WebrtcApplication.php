<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5305ca722d832817d411146f95eba84c3530f174d0fd6b1f72c09c5c2fbb1063;

/**
 * WebrtcApplication
 *
 * Application data for the recording.
 */
final class WebrtcApplication extends \InfobipSDK\DTOs\N5305ca722d832817d411146f95eba84c3530f174d0fd6b1f72c09c5c2fbb1063\Application
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\CallType $callType;
    /**
     * End time of the call.
     * Example: "2024-05-01T14:30:22.458Z"
     * Format: date-time
     */
    public string $endTime;
    /**
     * WebRTC recording identifier.
     */
    public string $id;
    /**
     * Id of the recorded room. Applicable for ROOM_CALL call type. Equivalent to conferenceId.
     */
    public string $roomId;
    /**
     * Name of the recorded room. Applicable for ROOM_CALL call type.
     */
    public string $roomName;
    /**
     * Start time of the call.
     * Example: "2024-05-01T14:25:45.125Z"
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callType' => is_string($value) ? $this->callType = \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\CallType::from($value) : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'roomId' => is_string($value) ? $this->roomId = $value : parent::assignMember($name, $value),
            'roomName' => is_string($value) ? $this->roomName = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
