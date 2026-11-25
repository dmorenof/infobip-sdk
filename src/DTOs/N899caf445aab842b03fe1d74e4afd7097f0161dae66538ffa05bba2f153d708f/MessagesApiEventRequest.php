<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiEventRequest
 */
final class MessagesApiEventRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'events',
    ];

    protected const array VALIDATION = [
        'events' => [
            'minItems' => 1,
        ],
    ];

    /**
     * Array of event objects of a single event or multiple events sent
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiEventRequest\EventsCollection $events {
        set {
            $this->assigning('events', $value);
            $this->events = $value;
        }
    }
}
