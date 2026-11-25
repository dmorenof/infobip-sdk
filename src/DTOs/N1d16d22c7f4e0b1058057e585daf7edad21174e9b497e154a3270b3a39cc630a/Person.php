<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * Person
 *
 * Person the memory belongs to.
 */
final class Person extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destinations',
    ];

    protected const array VALIDATION = [
        'destinations' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * Destinations (phone, email, ...) linked to the person.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * Unique identifier of the person, when known.
     * Example: 8712345
     * Format: int64
     */
    public int $personId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->destinations = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'personId' => is_int($value) ? $this->personId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
