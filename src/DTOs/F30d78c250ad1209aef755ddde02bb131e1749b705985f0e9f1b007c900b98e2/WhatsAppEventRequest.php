<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * WhatsAppEventRequest
 */
final class WhatsAppEventRequest extends \Dmorenof\SdkRuntime\DTO
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
     * An array of event objects of the events to be sent.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppEventRequest\EventsCollection $events {
        set {
            $this->assigning('events', $value);
            $this->events = $value;
        }
    }
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\DefaultEventRequestOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'events' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->events = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppEventRequest\EventsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppEvent::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\DefaultEventRequestOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
