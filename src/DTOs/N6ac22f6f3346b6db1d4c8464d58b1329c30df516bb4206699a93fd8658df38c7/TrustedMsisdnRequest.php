<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7;

/**
 * TrustedMsisdnRequest
 *
 * Trusted MSISDN request object.
 */
final class TrustedMsisdnRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'phoneNumbers',
    ];

    /**
     * Phone numbers (in MSISDN or international format) to add to or remove from the trusted MSISDN list.
     */
    public \InfobipSDK\Collections\StringCollection $phoneNumbers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phoneNumbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->phoneNumbers = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
