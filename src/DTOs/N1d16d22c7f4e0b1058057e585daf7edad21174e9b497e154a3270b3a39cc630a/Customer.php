<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * Customer
 *
 * Conversation customer data.
 */
final class Customer extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Customer ID. UUID v4.
     * Example: "35b5e5b7-ac4a-40dc-872f-2a1403bcd769"
     */
    public string $id;
    /**
     * Customer name.
     * Example: "Customer Name"
     */
    public string $name;
    /**
     * Associated [People](https://www.infobip.com/docs/people) Person ID.
     * Example: "2500"
     */
    public string $personId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'personId' => is_string($value) ? $this->personId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
