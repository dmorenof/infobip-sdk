<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * BulkPhoneEndpoint
 */
final class BulkPhoneEndpoint extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkEndpoint
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Phone number in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
