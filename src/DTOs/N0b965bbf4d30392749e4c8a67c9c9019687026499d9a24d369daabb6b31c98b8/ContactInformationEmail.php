<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8;

/**
 * ContactInformationEmail
 */
final class ContactInformationEmail extends \Dmorenof\SdkRuntime\DTO
{
    public string $address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
