<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * EventResourceResponse
 */
final class EventResourceResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier of event schema.
     */
    public string $definitionId;
    /**
     * Unique identifier of the event.
     */
    public string $eventId;
    /**
     * Object that contains metadata of event occurrence.
     */
    public ?\InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventResourceResponse\MetadataMap $metadata;
    /**
     * Time of event occurrence, as the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ
     * Example: "2024-05-17T15:47:50.413Z"
     * Format: date-time
     */
    public string $occurredTime;
    /**
     * Object that contains event properties.
     */
    public ?\InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventResourceResponse\PropertiesMap $properties;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'definitionId' => is_string($value) ? $this->definitionId = $value : parent::assignMember($name, $value),
            'eventId' => is_string($value) ? $this->eventId = $value : parent::assignMember($name, $value),
            'occurredTime' => is_string($value) ? $this->occurredTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
