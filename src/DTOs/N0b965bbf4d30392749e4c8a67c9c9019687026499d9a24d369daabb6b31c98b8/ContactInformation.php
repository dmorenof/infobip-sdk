<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8;

/**
 * ContactInformation
 */
final class ContactInformation extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformation\EmailsCollection $emails;
    public \InfobipSDK\Collections\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformation\PhonesCollection $phones;
    public \InfobipSDK\Collections\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformation\PushCollection $push;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->emails = new \InfobipSDK\Collections\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformation\EmailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformationEmail::class)) : parent::assignMember($name, $value),
            'phones' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->phones = new \InfobipSDK\Collections\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformation\PhonesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformationPhone::class)) : parent::assignMember($name, $value),
            'push' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->push = new \InfobipSDK\Collections\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformation\PushCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
