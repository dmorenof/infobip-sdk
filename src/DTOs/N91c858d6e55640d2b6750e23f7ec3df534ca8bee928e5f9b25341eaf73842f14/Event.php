<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * Event
 *
 * Object describing time picker's event.
 */
final class Event extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifier',
    'timeslots',
    'title',
];

    protected const array VALIDATION = [
    'identifier' => [
        'minLength' => 1,
    ],
    'timeslots' => [
        'minItems' => 1,
    ],
    'timezoneOffset' => [
        'minimum' => -720,
        'maximum' => 840,
        'format' => 'int32',
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    /**
     * Identifier of the event.
     */
    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    /**
     * Identifier of the event's image.
     */
    public string $imageIdentifier;
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\LocationItem $locationItem;
    /**
     * An array of event's time slots.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Event\TimeslotsCollection $timeslots {
        set {
            $this->assigning('timeslots', $value);
            $this->timeslots = $value;
        }
    }
    /**
     * Time zone offset from GMT in minutes. If not set, times are shown according to the customer’s current time zone.
     * Format: int32
     */
    public int $timezoneOffset {
        set {
            $this->assigning('timezoneOffset', $value);
            $this->timezoneOffset = $value;
        }
    }
    /**
     * Title of the event.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'imageIdentifier' => is_string($value) ? $this->imageIdentifier = $value : parent::assignMember($name, $value),
            'locationItem' => $value instanceof \stdClass ? $this->locationItem = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\LocationItem($value) : parent::assignMember($name, $value),
            'timeslots' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->timeslots = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Event\TimeslotsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\EventTimeslot::class)) : parent::assignMember($name, $value),
            'timezoneOffset' => is_int($value) ? $this->timezoneOffset = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
