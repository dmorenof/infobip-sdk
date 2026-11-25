<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * EventTimeslot
 *
 * An array of event's time slots.
 */
final class EventTimeslot extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'duration',
        'identifier',
        'startTime',
    ];

    protected const array VALIDATION = [
        'duration' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'identifier' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Duration of the time slot in seconds.
     * Format: int32
     */
    public int $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }
    /**
     * Identifier of the time slot.
     */
    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    /**
     * A UTC date string.
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
