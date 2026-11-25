<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * SendingSpeed
 *
 * Sending rate defined in number of messages sent per second, minute, hour or day. You may wish to use this to allow your systems or agents to handle large amounts of incoming traffic. Not setting a send speed limit can overwhelm your resources with incoming traffic. If this parameter is defined, _validityPeriod_ is ignored.
 */
final class SendingSpeed extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'speed' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Defines the number of messages that will be sent per specified time unit.
     * Format: int32
     */
    public int $speed {
        set {
            $this->assigning('speed', $value);
            $this->speed = $value;
        }
    }
    /**
     * Defines time unit used for calculating sending speed.  Possible values: `second`, `minute`, `hour` and `day`.
     */
    public string $timeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'speed' => is_int($value) ? $this->speed = $value : parent::assignMember($name, $value),
            'timeUnit' => is_string($value) ? $this->timeUnit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
