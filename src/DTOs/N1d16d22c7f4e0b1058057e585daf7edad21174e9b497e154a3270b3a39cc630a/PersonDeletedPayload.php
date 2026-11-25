<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * PersonDeletedPayload
 *
 * Contains the event-specific data.
 */
final class PersonDeletedPayload extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo $invoker;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo $person;
    /**
     * Type of person associated with this event.
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonDeletedPayload\PersonTypeEnum $personType;
    /**
     * System or source where the action originated.
     * Example: "API"
     */
    public string $source;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoker' => $value instanceof \stdClass ? $this->invoker = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo($value) : parent::assignMember($name, $value),
            'person' => $value instanceof \stdClass ? $this->person = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo($value) : parent::assignMember($name, $value),
            'personType' => is_string($value) ? $this->personType = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonDeletedPayload\PersonTypeEnum::from($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
