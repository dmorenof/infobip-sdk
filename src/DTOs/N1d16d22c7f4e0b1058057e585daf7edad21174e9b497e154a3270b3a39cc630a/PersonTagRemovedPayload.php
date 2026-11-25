<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * PersonTagRemovedPayload
 *
 * Contains the event-specific data.
 */
final class PersonTagRemovedPayload extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo $invoker;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo $person;
    /**
     * The tag that was removed from the person. Learn more about [tags](https://www.infobip.com/docs/people/get-started#attributes-tags-and-events-person-profile).
     * Example: "VIP"
     */
    public string $removedTag;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoker' => $value instanceof \stdClass ? $this->invoker = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo($value) : parent::assignMember($name, $value),
            'person' => $value instanceof \stdClass ? $this->person = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo($value) : parent::assignMember($name, $value),
            'removedTag' => is_string($value) ? $this->removedTag = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
