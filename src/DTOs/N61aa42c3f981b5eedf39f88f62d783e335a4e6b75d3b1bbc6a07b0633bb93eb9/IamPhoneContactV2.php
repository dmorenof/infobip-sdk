<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9;

/**
 * IamPhoneContactV2
 */
final class IamPhoneContactV2 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Person's phone number. Must be in [international format](https://en.wikipedia.org/wiki/E.164) and cannot exceed 50 characters. One person can have up to 100 phone numbers.
     */
    public string $number;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
