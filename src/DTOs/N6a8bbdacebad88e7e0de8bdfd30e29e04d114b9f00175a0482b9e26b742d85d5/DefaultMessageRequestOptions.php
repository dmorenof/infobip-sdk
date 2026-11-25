<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * DefaultMessageRequestOptions
 *
 * Options applicable to all messages in the request.
 */
final class DefaultMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\RequestSchedulingSettings $schedule;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\UrlOptions $tracking;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            'tracking' => $value instanceof \stdClass ? $this->tracking = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\UrlOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
