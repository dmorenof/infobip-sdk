<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * IamPhoneContactV2
 *
 * A list of person's phone numbers. Max 100 numbers per person.
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
