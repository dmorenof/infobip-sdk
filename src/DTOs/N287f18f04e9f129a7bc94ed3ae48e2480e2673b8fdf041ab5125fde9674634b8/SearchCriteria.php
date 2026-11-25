<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SearchCriteria
 *
 * List of criteria that should match route. For a route to match, any criterion should be met.
 */
final class SearchCriteria extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Phone number or regular expression pattern representing the phone number. Applies to all search criteria types except `WEBRTC`. Examples: `41793026727`, `41793(.+)`.
     */
    public string $to;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Criteria $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
