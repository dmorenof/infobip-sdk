<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9;

/**
 * IamEmailContactV2
 */
final class IamEmailContactV2 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Person's email address. Must comply with the [email format](https://tools.ietf.org/html/rfc2822) and cannot exceed 255 characters. One person can have up to 100 email addresses.
     */
    public string $address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
