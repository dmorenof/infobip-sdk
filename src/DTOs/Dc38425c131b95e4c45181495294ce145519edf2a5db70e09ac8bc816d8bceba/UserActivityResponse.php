<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba;

/**
 * UserActivityResponse
 *
 * List of results for the requested page.
 */
final class UserActivityResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\ActivityType $activityType;
    /**
     * An identifier that links different occurrences of `activityType` within the same activity session for a user identity on the Infobip WebRTC platform. When two activity events, distinguished by their `activityType`, happen during the same user activity session, they will share the same `sessionId`.
     */
    public string $sessionId;
    /**
     * Timestamp of the activity. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Format: date-time
     */
    public string $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activityType' => is_string($value) ? $this->activityType = \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\ActivityType::from($value) : parent::assignMember($name, $value),
            'sessionId' => is_string($value) ? $this->sessionId = $value : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
