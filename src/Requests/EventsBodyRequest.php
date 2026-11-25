<?php

declare(strict_types=1);

namespace InfobipSDK\Requests;

final class EventsBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'definitionId',
        'identifier',
        'occurredTime',
    ];

    /**
     * Unique identifier of event schema.
     */
    public string $definitionId;
    /**
     * Unique identifier of the event. If provided, it helps prevent duplicate events in case of retries—for example, if the first API call fails and the same event is sent again. Passing the same `eventId` ensures the event is only recorded once in the person profile.<br>The value must be `1–36` characters long and can include letters `(A–Z, a–z)`, digits `(0–9)`, underscores `(_)`, and hyphens `(-)` only.
     */
    public ?string $eventId;
    /**
     * Used to match the event to an existing person profile using the provided identifier.<br> If no matching profile is found, a new profile will be automatically created.<br>**Note**: New profiles can only be created for the following identifier types: `PHONE`, `EMAIL`, or `EXTERNAL_ID`.
     */
    public \InfobipSDK\Requests\SendCustomEventsBodyItem\EventsBodyItemIdentifierRequest $identifier;
    /**
     * Time of event occurrence, as the following format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`. Events occurred more than 30 days ago will be rejected. Future dates are not allowed and will be automatically set to the current UTC time.
     * Example: "2025-03-17T13:00:27.864Z"
     * Format: date-time
     */
    public string $occurredTime;
    /**
     * Object containing event properties. Must match the corresponding event definition. See People Events [documentation](https://www.infobip.com/docs/people/events#properties-custom-events) for supported data types.
     */
    public ?\InfobipSDK\Requests\SendCustomEventsBodyItem\PropertiesMapRequest $properties;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'definitionId' => is_string($value) ? $this->definitionId = $value : parent::assignMember($name, $value),
            'eventId' => $value === null || is_string($value) ? $this->eventId = $value : parent::assignMember($name, $value),
            'occurredTime' => is_string($value) ? $this->occurredTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
