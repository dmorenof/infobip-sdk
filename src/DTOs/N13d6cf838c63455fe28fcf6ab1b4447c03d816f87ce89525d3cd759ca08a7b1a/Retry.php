<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Retry
 *
 * Used to define if the delivery of the Voice messages should be retried in case the first try doesn't succeed. Additional retries will be made according to the schedule defined by _minPeriod_ and _maxPeriod_ parameters and platform's internal retry logic. If the _minPeriod_ differs _maxPeriod_, delivery will be retried in the following manner: after 1 min, 2 min, 5 min, 10 min, 20 min, 30 min, 1 hour, 2 hours, 4 hours, 8 hours, 16 hours, 24 hours or until maxPeriod is reached.  If the retry attempt for the _maxPeriod_ is reached, the _maxPeriod_ will be used for all subsequent retries. If the _minPeriod_ and the _maxPeriod_ are defined as equal values, the period of time between retries will be equal to this value. Message delivery will be retried until the successful delivery or message validity or _maxCount_ value is reached.
 */
final class Retry extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'maxCount',
    'maxPeriod',
    'minPeriod',
];

    protected const array VALIDATION = [
    'maxCount' => [
        'format' => 'int32',
    ],
    'maxPeriod' => [
        'format' => 'int32',
    ],
    'minPeriod' => [
        'format' => 'int32',
    ],
];

    /**
     * Specify the maximum number of retry attempts. Maximum value of the maxCount is `4`. If the value is higher than `4`, it will be set to `4`.
     * Format: int32
     */
    public int $maxCount {
        set {
            $this->assigning('maxCount', $value);
            $this->maxCount = $value;
        }
    }
    /**
     * Defines the maximum waiting time (in minutes) after the previous failed attempt to try to deliver the message again. Supported values are 1 min, 2 min, 5 min, 10 min, 20 min, 30 min, 1 hour, 2 hours, 4 hours, 8 hours, 16 hours, 24 hours. If entered a value that isn't from the previous list but that's smaller than 24 hours, it is used the next bigger value from the list. If entered value that is bigger than 24 hours than it is used 24 hours.
     * Format: int32
     */
    public int $maxPeriod {
        set {
            $this->assigning('maxPeriod', $value);
            $this->maxPeriod = $value;
        }
    }
    /**
     * Defines the minimal waiting time (in minutes) after the previous failed attempt to try to deliver the message again. Supported values are 1 min, 2 min, 5 min, 10 min, 20 min, 30 min, 1 hour, 2 hours, 4 hours, 8 hours, 16 hours, 24 hours. If entered a value that isn't from the previous list but that's smaller than 24 hours, it is used the next bigger value from the list. If entered value that is bigger than 24 hours than it is used 24 hours.
     * Format: int32
     */
    public int $minPeriod {
        set {
            $this->assigning('minPeriod', $value);
            $this->minPeriod = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxCount' => is_int($value) ? $this->maxCount = $value : parent::assignMember($name, $value),
            'maxPeriod' => is_int($value) ? $this->maxPeriod = $value : parent::assignMember($name, $value),
            'minPeriod' => is_int($value) ? $this->minPeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
