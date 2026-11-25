<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * PersonBasicInfo
 *
 * Basic information about the person associated with this event.
 */
final class PersonBasicInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Email addresses of the person.
     * Example: ["john.doe&#64;example.com","johndoe1&#64;domain.com"]
     */
    public \InfobipSDK\Collections\StringCollection $email;
    /**
     * External system identifier for the person.
     * Example: "personExternalId"
     */
    public string $externalId;
    /**
     * First name of the person.
     * Example: "John"
     */
    public string $firstName;
    /**
     * Unique person ID.
     * Example: "personId"
     */
    public string $id;
    /**
     * Last name of the person.
     * Example: "Doe"
     */
    public string $lastName;
    /**
     * Phone numbers of the person.
     * Example: ["385123456789","385987654321"]
     */
    public \InfobipSDK\Collections\StringCollection $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->email = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'phone' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->phone = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
