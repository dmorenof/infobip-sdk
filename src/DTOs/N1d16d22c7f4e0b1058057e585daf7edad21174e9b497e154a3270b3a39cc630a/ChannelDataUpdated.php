<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * ChannelDataUpdated
 *
 * Details about the communication channel associated with this event.
 */
final class ChannelDataUpdated extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Previous value before the update.
     * Example: "old.email&#64;example.com"
     */
    public string $from;
    /**
     * The specific property of the person that was updated.
     * Example: "email"
     */
    public string $property;
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
     * New value after the update.
     * Example: "new.email&#64;example.com"
     */
    public string $to;
    /**
     * Type of the communication channel.
     * Example: "EMAIL"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ChannelDataUpdated\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'property' => is_string($value) ? $this->property = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ChannelDataUpdated\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
