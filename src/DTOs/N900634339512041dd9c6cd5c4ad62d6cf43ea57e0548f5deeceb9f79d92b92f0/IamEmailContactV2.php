<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * IamEmailContactV2
 *
 * A list of person's email addresses. Max 100 emails per person.
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
