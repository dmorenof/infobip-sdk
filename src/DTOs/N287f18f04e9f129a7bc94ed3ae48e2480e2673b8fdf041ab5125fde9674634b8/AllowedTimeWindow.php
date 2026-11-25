<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * AllowedTimeWindow
 *
 * Sets specific delivery windows outside of which calls won't be forwarded to the destination. If defined, call forwarding is allowed only if any time window in array is satisfied.
 */
final class AllowedTimeWindow extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Days for which to apply the `from` and `to` properties. If not set, defaults to all days.
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AllowedTimeWindow\DaysCollection $days;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AllowedTimeFrom $from;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AllowedTimeTo $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => $value instanceof \stdClass ? $this->from = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AllowedTimeFrom($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AllowedTimeTo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
