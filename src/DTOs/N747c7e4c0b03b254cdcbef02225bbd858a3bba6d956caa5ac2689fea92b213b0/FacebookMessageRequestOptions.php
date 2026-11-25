<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * FacebookMessageRequestOptions
 *
 * Options applicable to all messages in the request.
 */
final class FacebookMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\RequestSchedulingSettings $schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
