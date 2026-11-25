<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7;

/**
 * TrustedMsisdnCheckResponse
 *
 * Trusted MSISDN check response object.
 */
final class TrustedMsisdnCheckResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Whether the provided phone number exists in the trusted MSISDN list.
     */
    public bool $exists;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'exists' => is_bool($value) ? $this->exists = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
