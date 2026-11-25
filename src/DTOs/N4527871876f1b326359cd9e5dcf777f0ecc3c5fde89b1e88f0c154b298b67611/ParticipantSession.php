<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ParticipantSession
 *
 * List of participant sessions.
 */
final class ParticipantSession extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'callId' => [
            'maxLength' => 128,
        ],
    ];

    /**
     * Unique call ID.
     */
    public string $callId {
        set {
            $this->assigning('callId', $value);
            $this->callId = $value;
        }
    }
    /**
     * Date and time for when the participant joined the conference.
     * Format: date-time
     */
    public string $joinTime;
    /**
     * Date and time for when the participant left the conference.
     * Format: date-time
     */
    public string $leaveTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'joinTime' => is_string($value) ? $this->joinTime = $value : parent::assignMember($name, $value),
            'leaveTime' => is_string($value) ? $this->leaveTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
