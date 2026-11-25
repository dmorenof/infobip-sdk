<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * DefaultEventRequestOptions
 *
 * Options applicable to all events in the request.
 */
final class DefaultEventRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\RequestSchedulingSettings $schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
