<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8;

/**
 * PushUserIdentity
 *
 * Unique identifiers from this object will be used to find a person to personalize push registration with
 */
final class PushUserIdentity extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * User email
     */
    public string $email;
    /**
     * Id of a user in external system. **Notice**: for `externalId` any string values such as `"null"`, `"Null"` or `"NULL"` are not supported and would be considered as JSON `null`
     */
    public string $externalId;
    /**
     * User phone number according to E.164 general format
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
