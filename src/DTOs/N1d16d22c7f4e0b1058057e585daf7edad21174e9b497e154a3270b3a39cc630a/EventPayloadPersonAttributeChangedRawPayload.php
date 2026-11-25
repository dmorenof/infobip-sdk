<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * EventPayloadPersonAttributeChangedRawPayload
 *
 * Contains the event-specific data.
 */
final class EventPayloadPersonAttributeChangedRawPayload extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Name of the person's attribute that changed. Learn more about [attributes](https://www.infobip.com/docs/people/manage-data#attributes).
     * Example: "lastName"
     */
    public string $attributeName;
    /**
     * Previous value before the change.
     * Example: "Smith"
     */
    public string $from;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo $invoker;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo $person;
    /**
     * System or source where the action originated.
     * Example: "API"
     */
    public string $source;
    /**
     * Unique identifier of the source system record that caused the action.
     * Example: "sourceId"
     */
    public string $sourceId;
    /**
     * New value after the change.
     * Example: "Johnson"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attributeName' => is_string($value) ? $this->attributeName = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'invoker' => $value instanceof \stdClass ? $this->invoker = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo($value) : parent::assignMember($name, $value),
            'person' => $value instanceof \stdClass ? $this->person = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
