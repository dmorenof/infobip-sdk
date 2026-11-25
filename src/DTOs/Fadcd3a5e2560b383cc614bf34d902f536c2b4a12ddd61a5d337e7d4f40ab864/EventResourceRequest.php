<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864;

/**
 * EventResourceRequest
 */
final class EventResourceRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier of the event. If provided, it helps prevent duplicate events in case of retries—for example, if the first API call fails and the same event is sent again. Passing the same `eventId` ensures the event is only recorded once in the person profile.<br>The value must be `1–36` characters long and can include letters `(A–Z, a–z)`, digits `(0–9)`, underscores `(_)`, and hyphens `(-)` only.
     */
    public ?string $eventId;
    /**
     * Identifier that correlates the event with a specific interaction (for example, a journey or a conversation). When provided, it is stored in the event metadata and can be used to match the event to the interaction it belongs to.
     */
    public ?string $interactionId;
    /**
     * Object containing event properties. Must match the corresponding event definition. See People Events [documentation](https://www.infobip.com/docs/people/events#properties-custom-events) for supported data types.
     */
    public ?\InfobipSDK\DTOs\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864\EventResourceRequest\PropertiesDTO $properties;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eventId' => $value === null || is_string($value) ? $this->eventId = $value : parent::assignMember($name, $value),
            'interactionId' => $value === null || is_string($value) ? $this->interactionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
