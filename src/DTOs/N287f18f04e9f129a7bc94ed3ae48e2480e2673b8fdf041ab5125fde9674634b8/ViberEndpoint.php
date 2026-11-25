<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * ViberEndpoint
 */
final class ViberEndpoint extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'phoneNumber' => [
        'minLength' => 1,
    ],
];

    /**
     * Phone number in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     */
    public string $phoneNumber {
        set {
            $this->assigning('phoneNumber', $value);
            $this->phoneNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
