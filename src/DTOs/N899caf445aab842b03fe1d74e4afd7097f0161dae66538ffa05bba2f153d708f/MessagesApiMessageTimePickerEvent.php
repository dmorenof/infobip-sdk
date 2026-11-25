<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageTimePickerEvent
 *
 * Event with possible occurrences and location.
 */
final class MessagesApiMessageTimePickerEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'timeslots',
        'title',
    ];

    protected const array VALIDATION = [
        'imageUrl' => [
            'pattern' => '',
        ],
        'timeslots' => [
            'minItems' => 1,
        ],
        'title' => [
            'minLength' => 1,
        ],
    ];

    /**
     * URL of the event's image.
     */
    public string $imageUrl {
        set {
            $this->assigning('imageUrl', $value);
            $this->imageUrl = $value;
        }
    }
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageTimePickerLocation $location;
    /**
     * Possible timeslots for event.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageTimePickerEvent\TimeslotsCollection $timeslots {
        set {
            $this->assigning('timeslots', $value);
            $this->timeslots = $value;
        }
    }
    /**
     * Title of event.
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
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'location' => $value instanceof \stdClass ? $this->location = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageTimePickerLocation($value) : parent::assignMember($name, $value),
            'timeslots' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->timeslots = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageTimePickerEvent\TimeslotsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageTimePickerTimeslot::class)) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
