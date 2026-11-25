<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SipCriteria
 */
final class SipCriteria extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Criteria
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * SIP headers. To meet the criteria, all of the provided headers must match.
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SipCriteria\HeadersCollection $headers;
    /**
     * ID of the SIP trunk. Example: `60d345fd3a799ec`
     */
    public string $sipTrunkId;
    /**
     * SIP trunk username or regular expression pattern representing username. Examples: `41793026727`, `41793(.+)`.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'headers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->headers = new \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SipCriteria\HeadersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SipHeader::class)) : parent::assignMember($name, $value),
            'sipTrunkId' => is_string($value) ? $this->sipTrunkId = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
